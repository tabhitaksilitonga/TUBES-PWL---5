<x-app-layout>

<div
    x-data="dashboardData()"
    x-init="init()"
    class="min-h-screen bg-[#f8f7f4]"
>

    <div class="max-w-[1600px] mx-auto px-6 md:px-16 lg:px-24 py-10">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($shots as $shot)

            <div 
                class="relative group cursor-pointer"
            >

                <div class="bg-white rounded-[26px] p-3 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div
                        class="overflow-hidden rounded-[22px] bg-gray-100 relative"
                        @click="openShotModal({{ $shot->id }})"
                    >

                        <img
                            src="{{ $shot->image_url }}"
                            alt="{{ $shot->title }}"
                            onerror="this.src='https://placehold.co/600x400/eeeeee/999999?text=No+Image'"
                            class="w-full h-[260px] object-cover transition duration-500 group-hover:scale-[1.03]"
                        >

                    </div>

                    <div class="flex items-center justify-between mt-4 px-1">

                        <div class="flex items-center gap-3 min-w-0">

                            <img
                                src="{{ $shot->user->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($shot->user->username ?? 'U') }}"
                                alt="{{ $shot->user->username ?? 'User' }}"
                                class="w-8 h-8 rounded-full object-cover shrink-0 border border-gray-100"
                            >

                            <div class="min-w-0">

                                <h3 class="text-[14px] font-semibold text-[#0d0c22] truncate">
                                    {{ $shot->user->username ?? 'Unknown' }}
                                </h3>

                            </div>

                        </div>

 <button
    @click.stop="likeShot({{ $shot->id }})"
    class="flex items-center gap-1.5 px-3 py-1.5 rounded-full hover:bg-gray-100 transition-colors"
>

    <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        stroke="currentColor"
        class="w-5 h-5 transition-all duration-200"
        :fill="likedShots[{{ $shot->id }}]
            ? 'currentColor'
            : 'none'"
        :class="likedShots[{{ $shot->id }}]
            ? 'text-[#ea4c89] scale-110'
            : 'text-gray-500'"
    >

        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
        />

    </svg>

    <span
        id="like-count-{{ $shot->id }}"
        class="text-[#3d3d4e] text-[13px] font-medium"
    >
        {{ $shot->likes_count ?? 0 }}
    </span>

</button>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

    <div
        x-show="showModal"
        class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm"
        @click.self="closeModal()"
        style="display:none;"
    >

        <div
            class="w-full max-w-5xl max-h-[90vh] overflow-y-auto"
        >

            <div x-html="modalContent"></div>

        </div>

    </div>

</div>

<script>

function dashboardData() {

    return {

        showModal: false,

        modalContent: '',

        likedShots: {},

        init() {

            @auth

            this.likedShots = {

                @foreach($shots as $shot)

                {{ $shot->id }}:
                {{ $shot->isLikedBy(auth()->user()) ? 'true' : 'false' }},

                @endforeach

            };

            @endauth
        },

        async likeShot(shotId) {

    try {

        const response = await fetch(
            `/shots/${shotId}/like`,
            {
                method: 'POST',

                headers: {

                    'X-CSRF-TOKEN':
                        document.querySelector(
                            'meta[name="csrf-token"]'
                        )?.content,

                    'Accept':
                        'application/json'
                }
            }
        );

        const data =
            await response.json();

        this.likedShots = {

            ...this.likedShots,

            [shotId]: data.liked
        };

        document.querySelectorAll(
            `#like-count-${shotId}`
        ).forEach(el => {

            el.innerText =
                data.likes_count;
        });

    } catch (e) {

        console.error(e);
    }
}
    }
}

</script>

</x-app-layout>