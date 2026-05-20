<div class="bg-white rounded-[32px] shadow-2xl overflow-hidden max-h-[90vh] overflow-y-auto">

    <div class="flex items-center justify-between px-8 py-6 border-b border-gray-100 sticky top-0 bg-white z-10">

        <div class="flex items-center gap-4">

            <div class="relative">
                <img
                    src="{{ $shot->user->avatar_url ?? 'https://ui-avatars.com/api/?name=User' }}"
                    alt="{{ $shot->user->username ?? 'User' }}"
                    class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm"
                >
            </div>

            <div>
                <h3 class="font-bold text-gray-900 text-base leading-tight">
                    {{ $shot->user->username ?? 'Unknown User' }}
                </h3>
            </div>

            @auth
                @if(auth()->id() !== $shot->user_id)

                <button
                    onclick="followUser({{ $shot->user_id }}, this)"
                    class="ml-3 text-gray-500 hover:text-gray-900 font-medium text-sm transition"
                >
                    {{ $shot->isFollowedBy(auth()->user()) ? 'Following' : 'Follow' }}
                </button>

                @endif
            @endauth

        </div>

        <div class="flex items-center gap-3">

            <button
                data-shot-id="{{ $shot->id }}"
                onclick="likeShotModal({{ $shot->id }}, this)"
                class="group w-11 h-11 rounded-full border border-gray-200 hover:border-pink-300 hover:bg-pink-50 flex items-center justify-center transition-all"
            >

                <svg
                    class="w-5 h-5 transition {{ auth()->check() && $shot->isLikedBy(auth()->user()) ? 'text-pink-500' : 'text-gray-500' }}"
                    fill="{{ auth()->check() && $shot->isLikedBy(auth()->user()) ? 'currentColor' : 'none' }}"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                    >
                    </path>
                </svg>

            </button>

            <button
                onclick="saveShotModal({{ $shot->id }}, this)"
                class="group w-11 h-11 rounded-full border border-gray-200 hover:border-gray-400 hover:bg-gray-50 flex items-center justify-center transition-all"
            >

                <svg
                    class="w-5 h-5 text-gray-600 group-hover:text-gray-900 transition"
                    fill="{{ $shot->isSavedBy(auth()->user()) ? 'currentColor' : 'none' }}"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"
                    >
                    </path>
                </svg>

            </button>

            <button
                @click="closeModal()"
                class="ml-2 w-10 h-10 rounded-full hover:bg-gray-100 flex items-center justify-center transition"
            >

                <svg
                    class="w-5 h-5 text-gray-500"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    >
                    </path>
                </svg>

            </button>

        </div>

    </div>

    <div class="p-8">

        <h2 class="text-4xl font-bold text-gray-900 mb-6">
            {{ $shot->title }}
        </h2>

        <div class="relative bg-[#c8d8b8] rounded-[24px] overflow-hidden mb-8">

            <img
                src="{{ $shot->image_url }}"
                alt="{{ $shot->title }}"
                class="w-full h-auto object-cover"
            >

        </div>

        @if($shot->description)

        <p class="text-gray-600 text-lg mb-8 max-w-3xl whitespace-pre-line">
            {{ $shot->description }}
        </p>

        @endif

        @if($shot->categories && $shot->categories->count())

        <div class="flex flex-wrap gap-2 mb-8">

            @foreach($shot->categories as $category)

            <span class="px-4 py-1.5 bg-gray-100 rounded-full text-sm text-gray-600 font-medium">
                {{ $category->name }}
            </span>

            @endforeach

        </div>

        @endif

        <div class="flex items-center justify-between pt-6 border-t border-gray-100">

            <div class="flex items-center gap-6">

                <div class="flex items-center gap-2 text-gray-500">

                    <svg
                        class="w-5 h-5 {{ auth()->check() && $shot->isLikedBy(auth()->user()) ? 'text-pink-500' : 'text-gray-500' }}"
                        fill="{{ auth()->check() && $shot->isLikedBy(auth()->user()) ? 'currentColor' : 'none' }}"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                        >
                        </path>
                    </svg>

                    <span
                        id="like-count-{{ $shot->id }}"
                        class="font-medium"
                    >
                        {{ $shot->likes_count ?? 0 }}
                    </span>

                </div>

            </div>

        </div>

    </div>

</div>