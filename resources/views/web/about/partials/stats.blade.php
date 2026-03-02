{{-- Chiffres d'expérience --}}
<section class="section" data-animate>
    <div class="container">
        <div class="about-stats">
            @php
                $stats = [
                    ['number' => '20+', 'label' => 'années d\'expérience'],
                    ['number' => '500+', 'label' => 'chantiers réalisés'],
                    ['number' => '100%', 'label' => 'clients particuliers'],
                    ['number' => '8', 'label' => 'communes desservies'],
                ];
            @endphp

            @foreach($stats as $stat)
                <div>
                    <p class="about-stats__number">{{ $stat['number'] }}</p>
                    <p class="about-stats__label">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
