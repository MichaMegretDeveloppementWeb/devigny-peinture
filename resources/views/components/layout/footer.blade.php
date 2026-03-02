<footer class="footer">
    <div class="footer__inner container">
        <div class="footer__grid">
            {{-- Colonne gauche : logo + description --}}
            <div class="footer__brand">
                <a href="{{ route('home') }}" class="footer__logo" aria-label="Devigny Peinture - Retour a l'accueil">
                    <svg class="footer__logo-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                    <span class="footer__logo-text">Devigny Peinture</span>
                </a>
                <p class="footer__description">
                    Artisan peintre professionnel avec plus de 20 ans d'expérience au service des particuliers dans le Chablais, Haute-Savoie.
                </p>
            </div>

            {{-- Colonne : Services --}}
            <div class="footer__column">
                <h3 class="footer__column-title">Services</h3>
                <ul class="footer__links">
                    <li><a href="{{ route('service.detail', 'peinture-interieure') }}">Peinture intérieure</a></li>
                    <li><a href="{{ route('service.detail', 'peinture-exterieure') }}">Peinture extérieure</a></li>
                    <li><a href="{{ route('service.detail', 'ravalement-facade') }}">Ravalement de façade</a></li>
                    <li><a href="{{ route('service.detail', 'peinture-decorative') }}">Peinture décorative</a></li>
                    <li><a href="{{ route('service.detail', 'revetements-muraux') }}">Revêtements muraux</a></li>
                    <li><a href="{{ route('service.detail', 'boiseries-laquage') }}">Boiseries et laquage</a></li>
                </ul>
            </div>

            {{-- Colonne : Liens --}}
            <div class="footer__column">
                <h3 class="footer__column-title">Liens</h3>
                <ul class="footer__links">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('about') }}">À propos</a></li>
                    <li><a href="{{ route('services') }}">Mes services</a></li>
                    <li><a href="{{ route('realisations') }}">Réalisations</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            {{-- Colonne : Zone d'intervention --}}
            <div class="footer__column">
                <h3 class="footer__column-title">Zone d'intervention</h3>
                <ul class="footer__links">
                    <li>Évian-les-Bains</li>
                    <li>Thonon-les-Bains</li>
                    <li>Neuvecelle</li>
                    <li>Lugrin</li>
                    <li>Maxilly</li>
                    <li>Amphion</li>
                    <li>Publier</li>
                    <li>Saint-Paul-en-Chablais</li>
                </ul>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="footer__bottom">
            <p class="footer__copyright">&copy; {{ date('Y') }} Devigny Peinture. Tous droits réservés.</p>
        </div>
    </div>
</footer>
