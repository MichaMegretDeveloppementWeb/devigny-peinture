/**
 * Animations au scroll — IntersectionObserver
 *
 * - Éléments déjà visibles au chargement → apparition immédiate
 * - Éléments hors viewport → fade-in + translateY au scroll
 * - Déclenchement dès qu'un pixel entre dans le viewport (threshold: 0)
 */
(function () {
    var SELECTOR = '[data-animate]';

    function init() {
        var elements = document.querySelectorAll(SELECTOR);
        if (!elements.length) return;

        /* Éléments déjà dans le viewport au chargement :
           on les rend visibles immédiatement (pas d'animation) */
        elements.forEach(function (el) {
            var rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                el.style.transition = 'none';
                el.classList.add('is-visible');
                /* Force reflow puis restaure les transitions */
                el.offsetHeight;
                el.style.transition = '';
            }
        });

        /* Observer pour les éléments restants */
        var observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0,
                rootMargin: '0px 0px -60px 0px',
            }
        );

        elements.forEach(function (el) {
            if (!el.classList.contains('is-visible')) {
                observer.observe(el);
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
