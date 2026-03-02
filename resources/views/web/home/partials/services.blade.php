<section class="section" data-animate>
    <div class="container">
        <x-ui.section-header
            label="Mes prestations"
            title="Un savoir-faire complet."
            subtitle="Chaque étape est réalisée avec précision."
        />

        <div class="home-services-grid">
            @php $services = config('services-content'); @endphp

            @foreach($services as $slug => $service)
                <x-ui.service-card
                    :badge="$service['badge']"
                    :title="$service['title']"
                    :link="route('service.detail', $slug)"
                    :image="$service['card_image']"
                    :color="$service['color']"
                />
            @endforeach
        </div>

        <div class="home-services__cta">
            <a href="{{ route('services') }}" class="btn btn--dark">
                Voir toutes mes prestations
            </a>
        </div>
    </div>
</section>
