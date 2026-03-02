{{-- CTA spécifique au service --}}
<section class="section" data-animate>
    <div class="container service-detail-cta">
        <a href="{{ route('contact') }}" class="btn btn--dark">
            {{ $service['cta_button'] }}
        </a>
        <p class="service-detail-cta__mention">Devis gratuit et sans engagement</p>
    </div>
</section>
