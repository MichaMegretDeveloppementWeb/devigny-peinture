{{-- Autres prestations (design system §6.4 - 2 cartes services) --}}
<section class="section" data-animate>
    <div class="container">
        <x-ui.section-header
            label="Découvrez aussi"
            title="Mes autres prestations."
        />

        <div class="service-detail-related">
            @foreach($otherServices as $otherSlug => $other)
                <x-ui.service-card
                    :badge="$other['badge']"
                    :title="$other['title']"
                    :link="route('service.detail', $otherSlug)"
                    :image="$other['card_image']"
                    :color="$other['color']"
                />
            @endforeach
        </div>
    </div>
</section>
