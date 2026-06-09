<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $query = Job::with('poster:id,username,email');

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('company_name', 'like', '%' . $request->search . '%')
                    ->orWhere('location', 'like', '%' . $request->search . '%')
                    ->orWhere('job_type', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%')
                    ->orWhere('description_html', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('job_type')) {
            $query->whereIn('job_type', $request->job_type);
        }

        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        if ($request->filled('specialties')) {
            $query->where(function ($q) use ($request) {
                foreach ($request->specialties as $specialty) {
                    $q->orWhere('title', 'like', '%' . $specialty . '%')
                        ->orWhere('description', 'like', '%' . $specialty . '%')
                        ->orWhere('description_html', 'like', '%' . $specialty . '%');
                }
            });
        }

        $jobs = $query->latest()->paginate(12);

        return view('jobs.index', compact('jobs'));
    }

    public function show(Job $job)
    {
        $job->load('poster:id,username,email,avatar_url');

        $hasApplied = false;

        if (Auth::check()) {
            $hasApplied = $job->applications()
                ->where('applicant_id', Auth::id())
                ->exists();
        }

        return view('jobs.show', compact('job', 'hasApplied'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'job_type' => 'required|in:full-time,part-time,freelance,contract',
            'description' => 'required|string',
            'apply_url' => 'nullable|url',
            'website' => 'nullable|url',
            'company_logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'specialties' => 'nullable|array',
            'specialties.*' => 'string|max:255',
        ]);

        $logoPath = null;

        if ($request->hasFile('company_logo')) {
            $logoPath = $request->file('company_logo')->store('company_logos', 'public');
        }

        $specialtiesText = '';

        if ($request->filled('specialties')) {
            $specialtiesText = "\n\nSpecialties: " . implode(', ', $request->specialties);
        }

        $finalDescription = $validated['description'] . $specialtiesText;

        $job = Job::create([
            'poster_id' => Auth::id(),
            'title' => $validated['title'],
            'company_name' => $validated['company_name'],
            'location' => $validated['location'] ?? null,
            'job_type' => $validated['job_type'],
            'description' => $finalDescription,
            'description_html' => nl2br(e($finalDescription)),
            'apply_url' => $validated['apply_url'] ?? null,
            'website' => $validated['website'] ?? null,
            'company_logo' => $logoPath,
        ]);

        return redirect()->route('jobs.show', $job)
            ->with('success', 'Job posted successfully!');
    }

    public function edit(Job $job)
    {
        if (Auth::id() !== $job->poster_id && Auth::user()->role !== 'admin') {
            abort(403);
        }

        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        if (Auth::id() !== $job->poster_id && Auth::user()->role !== 'admin') {
            abort(403);
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'job_type' => 'required|in:full-time,part-time,freelance,contract',
            'description' => 'required|string',
            'apply_url' => 'nullable|url',
            'website' => 'nullable|url',
            'company_logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'specialties' => 'nullable|array',
            'specialties.*' => 'string|max:255',
        ]);

        $specialtiesText = '';

        if ($request->filled('specialties')) {
            $specialtiesText = "\n\nSpecialties: " . implode(', ', $request->specialties);
        }

        $finalDescription = $validated['description'] . $specialtiesText;

        $updateData = [
            'title' => $validated['title'],
            'company_name' => $validated['company_name'],
            'location' => $validated['location'] ?? null,
            'job_type' => $validated['job_type'],
            'description' => $finalDescription,
            'description_html' => nl2br(e($finalDescription)),
            'apply_url' => $validated['apply_url'] ?? null,
            'website' => $validated['website'] ?? null,
        ];

        if ($request->hasFile('company_logo')) {
            $updateData['company_logo'] = $request->file('company_logo')->store('company_logos', 'public');
        }

        $job->update($updateData);

        return redirect()->route('jobs.show', $job)
            ->with('success', 'Job updated successfully!');
    }

    public function destroy(Job $job)
    {
        if (Auth::id() !== $job->poster_id && Auth::user()->role !== 'admin') {
            abort(403);
        }

        $job->delete();

        return redirect()->route('jobs.index')
            ->with('success', 'Job deleted successfully!');
    }
}