@extends('layouts.web')

@section('meta_title', 'Mes réalisations — Travaux de peinture dans le Chablais | Devigny Peinture')
@section('meta_description', 'Découvrez mes réalisations de peinture intérieure, extérieure, ravalement et décoration dans le Chablais. Des travaux de qualité professionnelle pour les particuliers.')

@section('assets')
    @vite(['resources/css/web/realisations/index.css', 'resources/js/web/realisations/index.js'])
@endsection

@section('schema')
    <script type="application/ld+json">
    @php
    echo json_encode([
        "@context" => "https://schema.org",
        "@graph" => [
            [
                "@type" => "CollectionPage",
                "@id" => url('/realisations') . '#webpage',
                "url" => url('/realisations'),
                "name" => "Mes réalisations — Travaux de peinture dans le Chablais | Devigny Peinture",
                "description" => "Découvrez mes réalisations de peinture intérieure, extérieure, ravalement et décoration dans le Chablais. Des travaux de qualité professionnelle pour les particuliers.",
                "isPartOf" => ["@id" => url('/') . '#website'],
                "about" => ["@id" => url('/') . '#business'],
                "inLanguage" => "fr-FR",
                "mainEntity" => [
                    "@type" => "ItemList",
                    "itemListElement" => [
                        [
                            "@type" => "ListItem",
                            "position" => 1,
                            "name" => "Salon contemporain — Peinture intérieure à Évian-les-Bains",
                        ],
                        [
                            "@type" => "ListItem",
                            "position" => 2,
                            "name" => "Ravalement complet à Thonon-les-Bains",
                        ],
                        [
                            "@type" => "ListItem",
                            "position" => 3,
                            "name" => "Chambre panoramique — Revêtement mural à Neuvecelle",
                        ],
                        [
                            "@type" => "ListItem",
                            "position" => 4,
                            "name" => "Enduit béton ciré — Peinture décorative à Publier",
                        ],
                        [
                            "@type" => "ListItem",
                            "position" => 5,
                            "name" => "Laquage et hall d'entrée à Lugrin",
                        ],
                        [
                            "@type" => "ListItem",
                            "position" => 6,
                            "name" => "Rénovation extérieure complète à Maxilly",
                        ],
                    ],
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
                        "name" => "Réalisations",
                        "item" => url('/realisations'),
                    ],
                ],
            ],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    @endphp
    </script>
@endsection

@section('content')
    @include('web.realisations.partials.hero')
    @include('web.realisations.partials.grid')
    @include('web.realisations.partials.cta')
@endsection
