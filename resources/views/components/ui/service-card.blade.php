@props([
    'badge' => null,
    'title',
    'link' => '#',
    'image' => null,
    'color' => '#D4CCC0',
])

<a href="{{ $link }}" class="card-image">
    <div class="card-image__thumbnail">

        <img src="{{ asset($image) }}" alt="{{ $title }}" width="1000" height="550" loading="lazy" class="card-image__img">

        {{-- Top : badge --}}
        @if($badge)
            <div class="card-image__top">
                <x-ui.badge :text="$badge" variant="overlay" />
            </div>
        @endif

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
