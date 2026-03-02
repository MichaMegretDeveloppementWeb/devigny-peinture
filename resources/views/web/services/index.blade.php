@extends('layouts.web')

@section('meta_title', 'Mes services de peinture — Devigny Peinture, Chablais (74)')
@section('meta_description', 'Peinture intérieure, extérieure, ravalement de façade, peinture décorative, revêtements muraux et laquage. Découvrez toutes mes prestations dans le Chablais.')

@section('assets')
    @vite(['resources/css/web/services/index.css', 'resources/js/web/services/index.js'])
@endsection

@section('schema')
    <script type="application/ld+json">
    @php
    $services = config('services-content');
    $serviceItems = [];
    $position = 1;
    foreach ($services as $slug => $svc) {
        $serviceItems[] = [
            "@type" => "ListItem",
            "position" => $position++,
            "item" => [
                "@type" => "Service",
                "name" => $svc['title'],
                "description" => $svc['subtitle'],
                "url" => url('/services/' . $slug),
                "provider" => ["@id" => url('/') . '#business'],
                "areaServed" => [
                    "@type" => "AdministrativeArea",
                    "name" => "Chablais, Haute-Savoie",
                ],
            ],
        ];
    }

    echo json_encode([
        "@context" => "https://schema.org",
        "@graph" => [
            [
                "@type" => "CollectionPage",
                "@id" => url('/services') . '#webpage',
                "url" => url('/services'),
                "name" => "Mes services de peinture — Devigny Peinture, Chablais (74)",
                "description" => "Peinture intérieure, extérieure, ravalement de façade, peinture décorative, revêtements muraux et laquage. Découvrez toutes mes prestations dans le Chablais.",
                "isPartOf" => ["@id" => url('/') . '#website'],
                "about" => ["@id" => url('/') . '#business'],
                "inLanguage" => "fr-FR",
                "mainEntity" => [
                    "@type" => "ItemList",
                    "itemListElement" => $serviceItems,
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
                        "name" => "Services",
                        "item" => url('/services'),
                    ],
                ],
            ],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    @endphp
    </script>
@endsection

@section('content')
    @include('web.services.partials.hero')
    @include('web.services.partials.grid')
    @include('web.services.partials.process')
    @include('web.services.partials.cta')
@endsection
