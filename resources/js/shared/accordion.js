/**
 * Accordéon — Toggle open/close avec aria-expanded
 * Design system §6.7
 */
(function () {
    document.addEventListener('click', function (e) {
        const trigger = e.target.closest('.accordion-item__trigger');
        if (!trigger) return;

        const item = trigger.closest('.accordion-item');
        const content = item.querySelector('.accordion-item__content');
        const icon = trigger.querySelector('.accordion-item__icon');
        const isOpen = trigger.getAttribute('aria-expanded') === 'true';

        /* Fermer */
        if (isOpen) {
            trigger.setAttribute('aria-expanded', 'false');
            content.classList.remove('is-open');
            content.setAttribute('aria-hidden', 'true');
            if (icon) icon.style.transform = '';
        } else {
            /* Ouvrir */
            trigger.setAttribute('aria-expanded', 'true');
            content.classList.add('is-open');
            content.setAttribute('aria-hidden', 'false');
            if (icon) icon.style.transform = 'rotate(45deg)';
        }
    });
})();
