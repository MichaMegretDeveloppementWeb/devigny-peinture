{{--
    Testimonial Card — Design system §6.4

    @props:
    - $stars    : nombre d'étoiles (1-5)
    - $quote    : citation du client
    - $name     : nom du client
    - $location : lieu
--}}

@props([
    'stars' => 5,
    'quote',
    'name',
    'location' => null,
])

<div class="testimonial-card">
    <div class="testimonial-card__stars">
        @for($i = 0; $i < $stars; $i++)
            <svg width="16" height="16" viewBox="0 0 24 24" fill="var(--color-accent-rating)" stroke="none" aria-hidden="true">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
            </svg>
        @endfor
    </div>

    <blockquote class="testimonial-card__quote">
        {{ $quote }}
    </blockquote>

    <div>
        <p class="testimonial-card__name">{{ $name }}</p>
        @if($location)
            <p class="testimonial-card__location">{{ $location }}</p>
        @endif
    </div>
</div>
