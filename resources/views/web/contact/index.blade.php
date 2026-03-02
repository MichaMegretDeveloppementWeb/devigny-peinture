@extends('layouts.web')

@section('meta_title', 'Contactez Devigny Peinture — Devis gratuit peinture Évian, Thonon, Chablais')
@section('meta_description', 'Demandez un devis gratuit pour vos travaux de peinture dans le Chablais. Réponse sous 48h. Peintre professionnel à Évian, Thonon et communes environnantes.')

@section('assets')
    @vite(['resources/css/web/contact/index.css', 'resources/js/web/contact/index.js'])
@endsection

@section('schema')
    <script type="application/ld+json">
    @php
    echo json_encode([
        "@context" => "https://schema.org",
        "@graph" => [
            [
                "@type" => "ContactPage",
                "@id" => url('/contact') . '#webpage',
                "url" => url('/contact'),
                "name" => "Contactez Devigny Peinture — Devis gratuit peinture Évian, Thonon, Chablais",
                "description" => "Demandez un devis gratuit pour vos travaux de peinture dans le Chablais. Réponse sous 48h. Peintre professionnel à Évian, Thonon et communes environnantes.",
                "isPartOf" => ["@id" => url('/') . '#website'],
                "about" => ["@id" => url('/') . '#business'],
                "inLanguage" => "fr-FR",
            ],
            [
                "@type" => "HomeAndConstructionBusiness",
                "@id" => url('/') . '#business',
                "name" => "Devigny Peinture",
                "description" => "Artisan peintre professionnel avec plus de 20 ans d'expérience dans le Chablais, Haute-Savoie.",
                "url" => url('/'),
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
                "address" => [
                    "@type" => "PostalAddress",
                    "addressLocality" => "Chablais",
                    "addressRegion" => "Haute-Savoie",
                    "postalCode" => "74500",
                    "addressCountry" => "FR",
                ],
            ],
            [
                "@type" => "FAQPage",
                "mainEntity" => [
                    [
                        "@type" => "Question",
                        "name" => "Quelles zones géographiques couvrez-vous ?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text" => "J'interviens dans tout le Chablais : Évian-les-Bains, Thonon-les-Bains, Neuvecelle, Lugrin, Maxilly, Amphion, Publier, Saint-Paul-en-Chablais et les communes environnantes.",
                        ],
                    ],
                    [
                        "@type" => "Question",
                        "name" => "Comment se déroule un chantier de peinture ?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text" => "Chaque projet commence par une visite sur place pour évaluer les travaux. J'établis ensuite un devis détaillé. Une fois validé, je prépare minutieusement les surfaces (enduit, ponçage, sous-couche) avant d'appliquer les finitions. Un contrôle qualité final est réalisé avec vous.",
                        ],
                    ],
                    [
                        "@type" => "Question",
                        "name" => "Quelle est la durée moyenne des travaux ?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text" => "Cela dépend de l'ampleur du chantier. Une pièce standard (murs + plafond) prend généralement 2 à 3 jours. Un ravalement de façade peut prendre 1 à 3 semaines. Je vous communique un planning précis au moment du devis.",
                        ],
                    ],
                    [
                        "@type" => "Question",
                        "name" => "Proposez-vous un service de conseil en couleurs ?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text" => "Oui, fort de plus de 20 ans d'expérience, je vous guide dans le choix des teintes, des finitions (mat, satin, brillant) et des associations de couleurs adaptées à chaque pièce et à votre style de vie.",
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
                        "name" => "Contact",
                        "item" => url('/contact'),
                    ],
                ],
            ],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    @endphp
    </script>
@endsection

@section('content')
    @include('web.contact.partials.hero')
    @include('web.contact.partials.form')
    @include('web.contact.partials.info')
    @include('web.contact.partials.faq')
@endsection
