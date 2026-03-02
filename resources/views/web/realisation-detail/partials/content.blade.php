<div class="realisation-detail-wrapper" data-animate>
    {{-- Nav row: back link + badge --}}
    <div class="realisation-detail-nav">
        <a href="{{ route('realisations') }}" class="realisation-detail-nav__back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            Retour aux réalisations
        </a>
        @if($realisation['badge'])
            <span class="badge badge--label">{{ $realisation['badge'] }}</span>
        @endif
    </div>

    {{-- Title + location --}}
    <div class="realisation-detail-header">
        <h1 class="realisation-detail-header__title">{{ $realisation['title'] }}</h1>
        @if($realisation['location'])
            <div class="realisation-detail-header__location">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                {{ $realisation['location'] }}
            </div>
        @endif
    </div>

    {{-- Featured image --}}
    <div class="realisation-detail-featured">
        <img src="{{ asset($realisation['featured_image']) }}" alt="{{ $realisation['title'] }} — {{ $realisation['location'] }}" width="800" height="550" loading="eager" class="realisation-detail-featured__img">
    </div>

    {{-- Rich text description --}}
    <div class="realisation-detail-text">
        @foreach($realisation['description'] as $paragraph)
            <p class="realisation-detail-text__paragraph">{{ $paragraph }}</p>
        @endforeach
    </div>

    {{-- CTA button --}}
    <div class="realisation-detail-action">
        <a href="{{ route('contact') }}" class="btn btn--dark">
            {{ $realisation['cta_button'] }}
        </a>
    </div>
</div>
