{{--
    FAQ — Layout asymétrique (design system §6.7)

    @props:
    - $label       : texte du badge
    - $title       : titre
    - $description : description
    - $items       : tableau ['question' => '...', 'answer' => '...']
    - $showButton  : afficher le bouton "Nous contacter"
--}}

@props([
    'label' => 'Questions fréquentes',
    'title' => 'Tout ce que vous devez savoir.',
    'description' => 'Vous avez des questions sur mes prestations ou ma façon de travailler ? Retrouvez ici les réponses les plus courantes.',
    'items' => [],
    'showButton' => true,
])

<section class="section">
    <div class="container">
        <div class="faq">
            <div class="faq__left">
                <span class="badge badge--label">
                    {{ $label }}
                </span>

                <h2 class="faq__title">
                    {{ $title }}
                </h2>

                <p class="faq__description">
                    {{ $description }}
                </p>

                @if($showButton)
                    <a href="{{ route('contact') }}" class="btn btn--dark">
                        Me contacter
                    </a>
                @endif
            </div>

            <div class="faq__right">
                @foreach($items as $item)
                    <x-ui.accordion-item
                        :question="$item['question']"
                        :answer="$item['answer']"
                    />
                @endforeach
            </div>
        </div>
    </div>
</section>
