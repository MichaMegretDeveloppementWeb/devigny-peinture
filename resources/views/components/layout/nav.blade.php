<nav class="floating-nav" aria-label="Navigation principale">
    <ul class="floating-nav__list">
        <li>
            <a href="{{ route('home') }}"
               class="floating-nav__link {{ request()->routeIs('home') ? 'floating-nav__link--active' : '' }}"
               {{ request()->routeIs('home') ? 'aria-current=page' : '' }}>
                Accueil
            </a>
        </li>
        <li>
            <a href="{{ route('services') }}"
               class="floating-nav__link {{ request()->routeIs('services') || request()->routeIs('service.detail') ? 'floating-nav__link--active' : '' }}"
               {{ request()->routeIs('services') || request()->routeIs('service.detail') ? 'aria-current=page' : '' }}>
                Services
            </a>
        </li>
        <li>
            <a href="{{ route('realisations') }}"
               class="floating-nav__link {{ request()->routeIs('realisations') ? 'floating-nav__link--active' : '' }}"
               {{ request()->routeIs('realisations') ? 'aria-current=page' : '' }}>
                Réalisations
            </a>
        </li>
        <li>
            <a href="{{ route('contact') }}"
               class="floating-nav__link {{ request()->routeIs('contact') ? 'floating-nav__link--active' : '' }}"
               {{ request()->routeIs('contact') ? 'aria-current=page' : '' }}>
                Contact
            </a>
        </li>
    </ul>
</nav>
