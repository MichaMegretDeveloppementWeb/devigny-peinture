{{--
    Section Header — Pattern récurrent (design system §6.6)

    @props:
    - $label     : texte du badge
    - $title     : titre principal
    - $subtitle  : sous-titre optionnel
    - $dark      : booléen, true pour texte blanc sur fond sombre
    - $align     : 'center' ou 'left'
--}}

@props([
    'label' => null,
    'title',
    'subtitle' => null,
    'dark' => false,
    'align' => 'center',
])

<div class="section-header {{ $align === 'center' ? 'section-header--center' : 'section-header--left' }}">
    @if($label)
        <span class="badge {{ $dark ? 'badge--label-dark' : 'badge--label' }}">
            {{ $label }}
        </span>
    @endif

    <h2 class="section-header__title {{ $dark ? 'section-header__title--dark' : '' }}">
        {{ $title }}
    </h2>

    @if($subtitle)
        <p class="section-header__subtitle {{ $dark ? 'section-header__subtitle--dark' : '' }}">
            {{ $subtitle }}
        </p>
    @endif
</div>
