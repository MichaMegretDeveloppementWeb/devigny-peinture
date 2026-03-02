@extends('layouts.web')

@section('meta_title', $realisation['meta_title'])
@section('meta_description', $realisation['meta_description'])

@section('assets')
    @vite(['resources/css/web/realisation-detail/index.css', 'resources/js/web/realisation-detail/index.js'])
@endsection

@section('schema')
    <script type="application/ld+json">
    @php
    echo json_encode([
        "@context" => "https://schema.org",
        "@graph" => [
            [
                "@type" => "CreativeWork",
                "@id" => url('/realisations/' . $slug) . '#realisation',
                "name" => $realisation['title'] . ' — ' . $realisation['location'],
                "description" => $realisation['description'][0] ?? '',
                "url" => url('/realisations/' . $slug),
                "author" => [
                    "@type" => "HomeAndConstructionBusiness",
                    "@id" => url('/') . '#business',
                    "name" => "Devigny Peinture",
                ],
                "locationCreated" => [
                    "@type" => "Place",
                    "name" => $realisation['location'],
                ],
            ],
            [
                "@type" => "WebPage",
                "@id" => url('/realisations/' . $slug) . '#webpage',
                "url" => url('/realisations/' . $slug),
                "name" => $realisation['meta_title'],
                "description" => $realisation['meta_description'],
                "isPartOf" => ["@id" => url('/') . '#website'],
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
                        "name" => "Réalisations",
                        "item" => url('/realisations'),
                    ],
                    [
                        "@type" => "ListItem",
                        "position" => 3,
                        "name" => $realisation['title'],
                        "item" => url('/realisations/' . $slug),
                    ],
                ],
            ],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    @endphp
    </script>
@endsection

@section('content')
    @include('web.realisation-detail.partials.content')
    @include('web.realisation-detail.partials.other-realisations')
@endsection
