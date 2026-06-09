<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShotController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\PostController;
use App\Models\Job;
use App\Http\Controllers\ProjectInquiryController;

Route::get('/', [ShotController::class, 'home'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-proses', [AuthController::class, 'loginProses'])->name('login.proses');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/discover', function () {
    return view('categories.discover');
});
Route::get('/animation', function () {
    return view('categories.animation');
});
Route::get('/branding', function () {
    return view('categories.branding');
});
Route::get('/illustration', function () {
    return view('categories.illustration');
});
Route::get('/mobile', function () {
    return view('categories.mobile');
});
Route::get('/print', function () {
    return view('categories.print');
});
Route::get('/product-design', function () {
    return view('categories.product-design');
});
Route::get('/typography', function () {
    return view('categories.typography');
});
Route::get('/web-design', function () {
    return view('categories.web-design');
});

Route::get('/category/{name}', [ShotController::class, 'category'])->name('category');
Route::get('/search', [ShotController::class, 'search'])->name('search');

Route::get('/shots/{id}', [ShotController::class, 'show'])->name('shots.detail');
Route::get('/shots/{id}/modal', [ShotController::class, 'modal'])->name('shots.modal');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

Route::get('/jobs/create', [JobController::class, 'create'])
    ->middleware('auth')
    ->name('jobs.create');

Route::post('/jobs', [JobController::class, 'store'])
    ->middleware('auth')
    ->name('jobs.store');

    
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

Route::get('/talent', [UserController::class, 'talent'])
    ->name('talent.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/collections/{collection}', function (\App\Models\Collection $collection) {

    $collection->load([
        'shots.user',
        'shots.categories'
    ]);

    return view('collections.show', compact('collection'));

})->middleware('auth')->name('collections.show');

Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id); 
    return view('jobs.show', compact('job'));
})->name('jobs.show');
    
    Route::post('/shots/{id}/save', [ShotController::class, 'save'])
    ->middleware('auth')
    ->name('shots.save');
    Route::post('/users/{id}/follow', [UserController::class, 'follow'])
    ->middleware('auth');
    Route::post('/shots/{id}/like', [ShotController::class, 'like'])
    ->middleware('auth');

    Route::post('/shots/{id}/comments', [ShotController::class, 'comment'])
    ->middleware('auth')
    ->name('shots.comment');
    
    Route::get('/profile/{username}/{tab?}', function ($username, $tab = 'work') {

    $user = \App\Models\User::where(
        'username',
        $username
    )->firstOrFail();

    $collections = collect();
    $members = collect();

    if ($tab === 'liked') {

    $likedIds = $user->likedShots()
        ->pluck('shots.id');

    $bestShotIds = \App\Models\Shot::withCount('likes')
        ->whereIn('id', $likedIds)
        ->orderByDesc('likes_count')
        ->get()
        ->groupBy('user_id')
        ->map(function ($shots) {
            return $shots->first()->id;
        });

    $shots = \App\Models\Shot::with([
            'user',
            'categories'
        ])
        ->withCount('likes')
        ->whereIn('id', $bestShotIds)
        ->inRandomOrder()
        ->get();

} elseif ($tab === 'following') {

    $shots = collect();

    $members = $user->following()
        ->withCount(['followers', 'following', 'shots'])
        ->get();

} elseif ($tab === 'followers') {

    $shots = collect();

    $members = $user->followers()
        ->withCount(['followers', 'following', 'shots'])
        ->get();

} else {

    $shots = \App\Models\Shot::where(
            'user_id',
            $user->id
        )
        ->with(['user', 'categories'])
        ->withCount('likes')
        ->latest()
        ->get();
}

    if ($tab === 'collections') {

        $collections = \App\Models\Collection::where(
                'user_id',
                $user->id
            )
            ->with('shots')
            ->get();
    }

    return view(
    'profile',
    compact(
        'user',
        'shots',
        'collections',
        'members',
        'tab'
    )
);

})->name('user.profile');

    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
    
});

Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('admin/users', AdminUserController::class)->names('admin.users');
    Route::get('/admin/reports', [ReportController::class, 'index'])->name('admin.reports.index');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::with('poster')  
              ->findOrFail($id);
    
    return view('jobs.show', compact('job'));
})->name('jobs.show');

Route::get('/dashboard/{filter?}', function ($filter = 'popular') {

    $categories = \App\Models\Category::orderBy('id')->get();

    if ($filter === 'following') {

        $followingIds = auth()->user()
            ->following()
            ->pluck('users.id');

        $shots = \App\Models\Shot::with(['user', 'categories'])
            ->withCount('likes')
            ->whereIn('user_id', $followingIds)
            ->latest()
            ->get();

        $filterLabel = 'Following';

    } elseif ($filter === 'new') {

        $shots = \App\Models\Shot::with(['user', 'categories'])
            ->withCount('likes')
            ->latest()
            ->get();

        $filterLabel = 'New & Noteworthy';

    } else {

        $shots = \App\Models\Shot::with(['user', 'categories'])
            ->withCount('likes')
            ->orderByDesc('likes_count')
            ->get();

        $filter = 'popular';
        $filterLabel = 'Popular';
    }

    return view('dashboard', compact(
        'shots',
        'categories',
        'filter',
        'filterLabel'
    ));

})->middleware(['auth'])->name('dashboard');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');
    Route::post('/shots', [PostController::class, 'store'])
    ->name('shots.store');
   
    Route::delete(
    '/shots/{id}',
    [ShotController::class, 'destroy']
    
)->name('shots.destroy');

Route::post('/shots/{shot}/inquiry', [ProjectInquiryController::class, 'store'])->name('project.inquiry.store');

Route::get('/my-inquiries', [App\Http\Controllers\ProjectInquiryController::class, 'index'])->name('my.inquiries');

require __DIR__.'/auth.php';