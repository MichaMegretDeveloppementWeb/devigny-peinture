{{--
    CTA Devis — Section sombre réutilisable (design system §6.8)

    @props:
    - $label    : texte du badge
    - $title    : titre principal
    - $subtitle : sous-titre
    - $button   : texte du bouton
    - $mention  : mention sous le bouton
    - $image    : chemin image de fond ou null
--}}

@props([
    'label' => 'Votre projet commence ici',
    'title' => 'Un projet de peinture ? Parlons-en.',
    'subtitle' => 'Décrivez-moi votre projet et recevez un devis personnalisé sous 48h.',
    'button' => 'Demander un devis gratuit',
    'mention' => 'Devis gratuit et sans engagement',
    'image' => null,
])

<section class="section cta-devis">
    <div class="cta-devis__wrapper">
        @if($image)
            <img src="{{ asset($image) }}" alt="Paysage du Chablais avec vue sur le lac Léman" width="1320" height="560" loading="lazy" class="cta-devis__bg">
            <div class="cta-devis__overlay"></div>
        @endif

        <div class="cta-devis__inner {{ $image ? 'cta-devis__inner--image' : 'cta-devis__inner--solid' }}">
            <div class="cta-devis__content">
                <span class="badge badge--label-dark">
                    {{ $label }}
                </span>

                <h2 class="cta-devis__title">
                    {{ $title }}
                </h2>

                <p class="cta-devis__subtitle">
                    {{ $subtitle }}
                </p>

                <a href="{{ route('contact') }}" class="btn btn--light">
                    {{ $button }}
                </a>

                @if($mention)
                    <p class="cta-devis__mention">{{ $mention }}</p>
                @endif
            </div>
        </div>
    </div>
</section>
