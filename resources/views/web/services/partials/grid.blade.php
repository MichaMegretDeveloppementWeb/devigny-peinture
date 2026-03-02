<section class="section" data-animate>
    <div class="container">
        <div class="services-grid">
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
    </div>
</section>
