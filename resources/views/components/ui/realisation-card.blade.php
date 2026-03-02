{{--
    Réalisation Card — Variante de carte image pour les réalisations

    @props:
    - $badge    : texte du badge (ex: "Intérieur")
    - $title    : titre de la réalisation
    - $location : lieu (ex: "Évian-les-Bains")
    - $image    : chemin image ou null
    - $color    : couleur de fond placeholder (défaut: '#D4CCC0')
    - $link     : URL de la page réalisation
--}}

@props([
    'badge' => null,
    'title',
    'location' => null,
    'image' => null,
    'color' => '#D4CCC0',
    'link' => '#',
])

<a href="{{ $link }}" class="card-image">
    <div class="card-image__thumbnail">
        @if($image)
            <img src="{{ asset($image) }}" alt="{{ $title }}" width="640" height="420" loading="lazy" class="card-image__img">
        @else
            <div class="card-image__img placeholder" style="background-color: {{ $color }};"></div>
        @endif

        {{-- Top : badge + location --}}
        <div class="card-image__top">
            @if($badge)
                <x-ui.badge :text="$badge" variant="overlay" />
            @endif
            @if($location)
                <x-ui.badge :text="$location" variant="location" />
            @endif
        </div>

        {{-- Popup arrow icon (centered on thumbnail, appears on hover) --}}
        <div class="card-image__popup">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7 7 17 7 17 17"></polyline>
            </svg>
        </div>

        {{-- Bottom : titre --}}
        <div class="card-image__bottom">
            <h3 class="card-image__title">{{ $title }}</h3>
        </div>
    </div>
</a>
