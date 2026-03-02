<section class="section" data-animate>
    <div class="container">
        <x-ui.section-header
            label="Ma méthode"
            title="Comment se déroule votre projet."
        />

        <div class="services-process">
            @php
                $steps = [
                    ['num' => '01', 'title' => 'Visite & Diagnostic', 'desc' => 'Évaluation sur place de votre projet', 'detail' => 'J\'inspecte chaque surface pour établir un diagnostic précis.'],
                    ['num' => '02', 'title' => 'Devis détaillé', 'desc' => 'Proposition chiffrée et transparente', 'detail' => 'Chaque poste est détaillé : surfaces, préparation, finitions, matériaux.'],
                    ['num' => '03', 'title' => 'Réalisation', 'desc' => 'Travaux exécutés avec précision', 'detail' => 'Préparation minutieuse des supports puis application soignée.'],
                    ['num' => '04', 'title' => 'Réception', 'desc' => 'Contrôle qualité avec vous', 'detail' => 'Vérification conjointe du résultat et retouches si nécessaire.'],
                ];
            @endphp

            @foreach($steps as $step)
                <div class="services-process__step">
                    <div class="services-process__number">{{ $step['num'] }}</div>
                    <h3 class="services-process__title">{{ $step['title'] }}</h3>
                    <p class="services-process__desc">{{ $step['desc'] }}</p>
                    <p class="services-process__detail">{{ $step['detail'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
