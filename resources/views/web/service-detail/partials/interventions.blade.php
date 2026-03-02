{{-- Mes interventions --}}
<section class="section" data-animate>
    <div class="service-detail-interventions-section">
        <h2 class="service-detail-interventions__title">
            Mes interventions
        </h2>

        <p class="service-detail-interventions__intro">
            J'interviens sur tous les types de surfaces et de pièces :
        </p>

        <ul class="service-detail-interventions">
            @foreach($service['interventions'] as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</section>
