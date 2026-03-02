{{--
    Témoignages — Section avec grille 3 colonnes (design system §6.4)

    @props:
    - $label    : texte du badge
    - $title    : titre principal
    - $subtitle : sous-titre
    - $items    : tableau de témoignages
    - $footer   : texte sous les témoignages
--}}

@props([
    'label' => 'Avis clients',
    'title' => 'La satisfaction de mes clients, ma meilleure vitrine.',
    'subtitle' => 'Découvrez les retours de ceux qui m\'ont fait confiance pour leurs travaux de peinture.',
    'items' => [],
    'footer' => null,
])

<section class="section">
    <div class="container">
        <x-ui.section-header
            :label="$label"
            :title="$title"
            :subtitle="$subtitle"
        />

        <div class="testimonials-grid">
            @foreach($items as $item)
                <x-ui.testimonial-card
                    :stars="$item['stars'] ?? 5"
                    :quote="$item['quote']"
                    :name="$item['name']"
                    :location="$item['location'] ?? null"
                />
            @endforeach
        </div>

        @if($footer)
            <p class="testimonials-footer">{{ $footer }}</p>
        @endif
    </div>
</section>
