
<section class="section home-hero-section" data-animate>
<div class="home-hero">

    <img class="home-hero__bg" src="{{ asset('images/home/hero.webp') }}" alt="Salon contemporain aux murs peints avec finition impeccable - Devigny Peinture, artisan peintre à Évian-les-Bains" width="1304" height="800" loading="eager">

    {{-- Gradient pour lisibilité --}}
    <div class="home-hero__gradient"></div>

    <div class="home-hero__content">
        {{-- Texte gauche --}}
        <div class="home-hero__text">
            <span class="badge badge--label-dark">
                Artisan peintre depuis plus de 20 ans
            </span>

            <h1 class="home-hero__heading">
                L'excellence au service de vos murs
            </h1>

            <p class="home-hero__description">
                Des finitions impeccables et un savoir-faire artisanal pour sublimer chaque espace de votre intérieur et de votre extérieur.
            </p>

            <a href="{{ route('services') }}" class="btn btn--light">
                Découvrir mes services
            </a>
        </div>

        {{-- Carte flottante droite --}}
        <div class="home-hero__card">
            <div class="hero-card">
                <div class="hero-card__image">
                    <img src="{{ asset('images/home/hero-card.webp') }}" alt="Salon haut de gamme aux finitions impeccables" width="450" height="290" loading="eager" class="hero-card__img">
                </div>
                <div class="hero-card__info">
                    <span class="hero-card__label">Peinture intérieure</span>
                    <span class="hero-card__location">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Évian-les-Bains
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
