@extends('layouts.web')

@section('meta_title', $service['meta_title'])
@section('meta_description', $service['meta_description'])

@section('assets')
    @vite(['resources/css/web/service-detail/index.css', 'resources/js/web/service-detail/index.js'])
@endsection

@section('schema')
    <script type="application/ld+json">
    @php
    echo json_encode([
        "@context" => "https://schema.org",
        "@graph" => [
            [
                "@type" => "Service",
                "@id" => url('/services/' . $slug) . '#service',
                "name" => $service['title'],
                "description" => $service['description'][0] ?? $service['subtitle'],
                "url" => url('/services/' . $slug),
                "provider" => [
                    "@type" => "HomeAndConstructionBusiness",
                    "@id" => url('/') . '#business',
                    "name" => "Devigny Peinture",
                ],
                "serviceType" => $service['title'],
                "areaServed" => [
                    ["@type" => "City", "name" => "Évian-les-Bains"],
                    ["@type" => "City", "name" => "Thonon-les-Bains"],
                    ["@type" => "City", "name" => "Neuvecelle"],
                    ["@type" => "City", "name" => "Lugrin"],
                    ["@type" => "City", "name" => "Maxilly"],
                    ["@type" => "City", "name" => "Amphion"],
                    ["@type" => "City", "name" => "Publier"],
                    ["@type" => "City", "name" => "Saint-Paul-en-Chablais"],
                ],
                "hasOfferCatalog" => [
                    "@type" => "OfferCatalog",
                    "name" => $service['title'] . " — Interventions",
                    "itemListElement" => array_map(function ($intervention) {
                        return [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => $intervention,
                            ],
                        ];
                    }, $service['interventions']),
                ],
                "termsOfService" => "Devis gratuit et sans engagement",
            ],
            [
                "@type" => "WebPage",
                "@id" => url('/services/' . $slug) . '#webpage',
                "url" => url('/services/' . $slug),
                "name" => $service['meta_title'],
                "description" => $service['meta_description'],
                "isPartOf" => ["@id" => url('/') . '#website'],
                "about" => ["@id" => url('/services/' . $slug) . '#service'],
                "inLanguage" => "fr-FR",
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
                    [
                        "@type" => "ListItem",
                        "position" => 3,
                        "name" => $service['title'],
                        "item" => url('/services/' . $slug),
                    ],
                ],
            ],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    @endphp
    </script>
@endsection

@section('content')
    @include('web.service-detail.partials.hero')
    @include('web.service-detail.partials.content')
    @include('web.service-detail.partials.other-services')
@endsection
