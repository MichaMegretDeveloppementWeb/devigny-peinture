{{-- Autres réalisations (2 cartes) --}}
<section class="section" data-animate>
    <div class="container">
        <x-ui.section-header
            label="Découvrez aussi"
            title="Mes autres réalisations."
        />

        <div class="realisation-detail-related">
            @foreach($otherRealisations as $otherSlug => $other)
                <x-ui.realisation-card
                    :badge="$other['badge']"
                    :title="$other['title']"
                    :location="$other['location']"
                    :image="$other['card_image']"
                    :color="$other['color']"
                    :link="route('realisation.detail', $otherSlug)"
                />
            @endforeach
        </div>
    </div>
</section>
