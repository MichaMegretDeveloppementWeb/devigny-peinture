@extends('layouts.web')

@section('meta_title', 'À propos — Sébastien Devigny, artisan peintre dans le Chablais depuis 20 ans')
@section('meta_description', 'Découvrez le parcours de Sébastien Devigny, peintre professionnel passionné avec plus de 20 ans d\'expérience au service des particuliers dans le Chablais.')

@section('assets')
    @vite(['resources/css/web/about/index.css', 'resources/js/web/about/index.js'])
@endsection

@section('schema')
    <script type="application/ld+json">
    @php
    echo json_encode([
        "@context" => "https://schema.org",
        "@graph" => [
            [
                "@type" => "AboutPage",
                "@id" => url('/a-propos') . '#webpage',
                "url" => url('/a-propos'),
                "name" => "À propos — Sébastien Devigny, artisan peintre dans le Chablais depuis 20 ans",
                "description" => "Découvrez le parcours de Sébastien Devigny, peintre professionnel passionné avec plus de 20 ans d'expérience au service des particuliers dans le Chablais.",
                "isPartOf" => ["@id" => url('/') . '#website'],
                "about" => ["@id" => url('/') . '#business'],
                "inLanguage" => "fr-FR",
            ],
            [
                "@type" => "Person",
                "@id" => url('/a-propos') . '#artisan',
                "name" => "Sébastien Devigny",
                "jobTitle" => "Artisan peintre en bâtiment",
                "description" => "Artisan peintre professionnel avec plus de 20 ans d'expérience, spécialisé dans la peinture intérieure, extérieure et décorative pour les particuliers dans le Chablais.",
                "worksFor" => ["@id" => url('/') . '#business'],
                "knowsAbout" => [
                    "Peinture intérieure",
                    "Peinture extérieure",
                    "Ravalement de façade",
                    "Peinture décorative",
                    "Enduits décoratifs",
                    "Revêtements muraux",
                    "Laquage de boiseries",
                ],
                "address" => [
                    "@type" => "PostalAddress",
                    "addressLocality" => "Chablais",
                    "addressRegion" => "Haute-Savoie",
                    "addressCountry" => "FR",
                ],
            ],
            [
                "@type" => "BreadcrumbList",
                "itemListElement" => [
                    [
                        "@type" => "ListItem",
                        "position" => 1,
                        "name" => "Accueil",
                        "item" => url('/'),
                    ],
                    [
                        "@type" => "ListItem",
                        "position" => 2,
                        "name" => "À propos",
                        "item" => url('/a-propos'),
                    ],
                ],
            ],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    @endphp
    </script>
@endsection

@section('content')
    @include('web.about.partials.hero')
    @include('web.about.partials.portrait')
    @include('web.about.partials.values')
    @include('web.about.partials.stats')
    @include('web.about.partials.cta')
@endsection
