<header class="header">
    <div class="header__inner">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="header__logo" aria-label="Devigny Peinture - Retour a l'accueil">
            <svg class="header__logo-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
            <span class="header__logo-text">Devigny Peinture</span>
        </a>

        {{-- Bouton CTA --}}
        <a href="{{ route('contact') }}" class="header__cta">
            Demander un devis
        </a>
    </div>
</header>
