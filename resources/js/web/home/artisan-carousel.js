/**
 * Artisan Carousel — Auto-slide crossfade avec dots navigation
 */
(function () {
    const carousel = document.querySelector('.home-artisan__carousel');
    if (!carousel) return;

    const slides = carousel.querySelectorAll('.home-artisan__slide');
    const dots = carousel.querySelectorAll('.home-artisan__dot');
    if (slides.length < 2) return;

    let current = 0;
    let timer;
    const INTERVAL = 4000;

    function goTo(index) {
        slides[current].classList.remove('home-artisan__slide--active');
        dots[current].classList.remove('home-artisan__dot--active');
        current = index;
        slides[current].classList.add('home-artisan__slide--active');
        dots[current].classList.add('home-artisan__dot--active');
    }

    function next() {
        goTo((current + 1) % slides.length);
    }

    function startAutoPlay() {
        timer = setInterval(next, INTERVAL);
    }

    // Clic sur un dot
    dots.forEach(function (dot, index) {
        dot.addEventListener('click', function () {
            clearInterval(timer);
            goTo(index);
            startAutoPlay();
        });
    });

    startAutoPlay();
})();
