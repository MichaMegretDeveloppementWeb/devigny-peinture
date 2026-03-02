
<section class="section" data-animate>
    <div class="container">
        <div class="home-artisan">
            {{-- Carrousel gauche (3 images auto-slide) --}}
            <div class="home-artisan__carousel">
                <div class="home-artisan__carousel-track">
                    @php
                        $carouselImages = [
                            ['src' => 'images/home/artisan-carousel-1.webp', 'alt' => 'Salon luxueux aux murs peints avec une finition impeccable', 'color' => '#D4CCC0'],
                            ['src' => 'images/home/artisan-carousel-2.webp', 'alt' => 'Mur en enduit décoratif texturé dans un intérieur design', 'color' => '#E0D8CC'],
                            ['src' => 'images/home/artisan-carousel-3.webp', 'alt' => 'Façade de maison rénovée avec des finitions haut de gamme', 'color' => '#C8C0B4'],
                        ];
                    @endphp

                    @foreach($carouselImages as $index => $slide)
                        <div class="home-artisan__slide {{ $index === 0 ? 'home-artisan__slide--active' : '' }}">
                            <img src="{{ asset($slide['src']) }}" alt="{{ $slide['alt'] }}" width="640" height="530" loading="lazy" class="home-artisan__slide-img">
                        </div>
                    @endforeach
                </div>

                {{-- Dots navigation --}}
                <div class="home-artisan__dots">
                    @foreach($carouselImages as $index => $slide)
                        <button class="home-artisan__dot {{ $index === 0 ? 'home-artisan__dot--active' : '' }}" aria-label="Image {{ $index + 1 }}"></button>
                    @endforeach
                </div>
            </div>

            {{-- Contenu droite --}}
            <div class="home-artisan__content">
                <span class="badge badge--label">
                    L'artisan
                </span>

                <h2 class="home-artisan__heading">
                    Plus de 20 ans de passion pour l'excellence
                </h2>

                <p class="home-artisan__description">
                    J'exerce le métier de peintre en bâtiment depuis plus de deux décennies. Chaque chantier est pour moi l'occasion de démontrer un savoir-faire forgé par l'expérience, où la rigueur des préparations et la précision des finitions font toute la différence.
                </p>

                {{-- Accordéon --}}
                <div class="home-artisan__accordion">
                    <x-ui.accordion-item
                        question="Un œil pour le détail"
                        answer="Chaque surface est inspectée, chaque imperfection corrigée avant la moindre couche de peinture. Cette exigence garantit un résultat durable et impeccable."
                    />
                    <x-ui.accordion-item
                        question="Des matériaux sélectionnés"
                        answer="Seules des peintures et fournitures de qualité professionnelle sont utilisées, choisies pour leur rendu, leur tenue dans le temps et leur respect de l'environnement."
                    />
                </div>

                <a href="{{ route('about') }}" class="home-artisan__link">
                    En savoir plus sur mon parcours
                    <svg class="home-artisan__link-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
