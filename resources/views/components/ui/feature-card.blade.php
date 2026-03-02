{{--
    Feature Card — Design system §6.4

    @props:
    - $title : titre
    - $text  : description
--}}

@props([
    'title',
    'text',
])

<div class="feature-card">
    @if($slot->isNotEmpty())
        <div class="feature-card__icon">
            {{ $slot }}
        </div>
    @endif

    <h3 class="feature-card__title">
        {{ $title }}
    </h3>

    <p class="feature-card__text">
        {{ $text }}
    </p>
</div>
