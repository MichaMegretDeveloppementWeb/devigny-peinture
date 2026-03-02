<div class="service-detail-wrapper" data-animate>
    {{-- Nav row: back link --}}
    <div class="service-detail-nav">
        <a href="{{ route('services') }}" class="service-detail-nav__back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            Retour aux services
        </a>
    </div>

    {{-- Title section --}}
    <div class="service-detail-header">
        <div class="service-detail-header__text">
            <h1 class="service-detail-header__title">{{ $service['title'] }}</h1>
            <p class="service-detail-header__subtitle">{{ $service['subtitle'] }}</p>
        </div>
        <div class="service-detail-header__tags">
            @foreach($service['tags'] as $tag)
                <span class="badge badge--label">{{ $tag }}</span>
            @endforeach
        </div>
    </div>

    @if(!empty($service['gallery']))
        <div class="service-detail-gallery">
            @foreach($service['gallery'] as $galleryItem)
                <div class="service-detail-gallery__item">
                    <img src="{{ asset($galleryItem['image']) }}" alt="{{ $galleryItem['alt'] }}" width="800" height="500" loading="lazy" class="service-detail-gallery__img">
                </div>
            @endforeach
        </div>
    @endif

    {{-- Rich text description --}}
    <div class="service-detail-text">
        @foreach($service['description'] as $paragraph)
            <p class="service-detail-text__paragraph">{{ $paragraph }}</p>
        @endforeach
    </div>

    {{-- Interventions list --}}
    <div class="service-detail-interventions-block">
        <h2 class="service-detail-interventions-block__title">Mes interventions</h2>
        <p class="service-detail-interventions-block__intro">
            J'interviens sur tous les types de surfaces et de pièces :
        </p>
        <ul class="service-detail-interventions-block__list">
            @foreach($service['interventions'] as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>

    {{-- CTA button --}}
    <div class="service-detail-action">
        <a href="{{ route('contact') }}" class="btn btn--dark">
            {{ $service['cta_button'] }}
        </a>
    </div>
</div>
