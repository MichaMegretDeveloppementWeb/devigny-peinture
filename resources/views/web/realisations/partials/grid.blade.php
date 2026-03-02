<section class="section" data-animate>
    <div class="container">
        <div class="realisations-grid">
            @php
                $realisations = config('realisations-content');
            @endphp

            @foreach($realisations as $slug => $realisation)
                <x-ui.realisation-card
                    :badge="$realisation['badge']"
                    :title="$realisation['title']"
                    :location="$realisation['location']"
                    :image="$realisation['card_image']"
                    :color="$realisation['color']"
                    :link="route('realisation.detail', $slug)"
                />
            @endforeach
        </div>
    </div>
</section>
