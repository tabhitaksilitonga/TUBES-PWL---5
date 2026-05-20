async function toggleLike(e, btn){

    e.preventDefault();

    const shotId = btn.dataset.shotId;

    try{

        const res = await fetch(
            `/shots/${shotId}/like`,
            {
                method:'POST',
                headers:{
                    'X-CSRF-TOKEN':
                        getCsrfToken(),

                    'Accept':'application/json'
                }
            }
        );

        const data = await res.json();

        const allButtons = document.querySelectorAll(
            `[data-shot-id="${shotId}"]`
        );

        allButtons.forEach(button => {

            const svg = button.querySelector('svg');

            if(!svg) return;

            if(data.liked){

                svg.setAttribute(
                    'fill',
                    'currentColor'
                );

                svg.classList.remove(
                    'text-gray-500'
                );

                svg.classList.add(
                    'text-pink-500'
                );

            } else {

                svg.setAttribute(
                    'fill',
                    'none'
                );

                svg.classList.remove(
                    'text-pink-500'
                );

                svg.classList.add(
                    'text-gray-500'
                );
            }
        });

        document.querySelectorAll(
            `#like-count-${shotId}`
        ).forEach(el => {

            el.textContent =
                data.likes_count;
        });

    }catch(err){

        console.error(err);
    }
}