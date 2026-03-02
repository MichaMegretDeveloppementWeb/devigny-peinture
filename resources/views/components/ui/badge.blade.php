{{--
    Badge / Pill — Design system §6.12

    @props:
    - $text      : texte du badge
    - $variant   : 'label' (bordure subtile), 'overlay' (semi-transparent sur image), 'location' (transparent + icône)
--}}

@props([
    'text',
    'variant' => 'label',
])

@if($variant === 'overlay')
    <span class="badge badge--overlay">
        {{ $text }}
    </span>
@elseif($variant === 'location')
    <span class="badge badge--location">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
        </svg>
        {{ $text }}
    </span>
@else
    <span class="badge badge--label">
        {{ $text }}
    </span>
@endif
