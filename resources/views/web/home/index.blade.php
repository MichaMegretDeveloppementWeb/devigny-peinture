@extends('layouts.web')

@section('meta_title', 'Devigny Peinture — Peintre professionnel à Évian, Thonon et dans le Chablais')
@section('meta_description', 'Artisan peintre avec plus de 20 ans d\'expérience. Travaux de peinture intérieure, extérieure et décorative d\'exception dans le Chablais, Haute-Savoie.')

@section('assets')
    @vite(['resources/css/web/home/index.css', 'resources/js/web/home/index.js'])
@endsection

@section('schema')
    <script type="application/ld+json">
    @php
    echo json_encode([
        "@context" => "https://schema.org",
        "@graph" => [
            [
                "@type" => "HomeAndConstructionBusiness",
                "@id" => url('/') . '#business',
                "name" => "Devigny Peinture",
                "description" => "Artisan peintre professionnel avec plus de 20 ans d'expérience. Travaux de peinture intérieure, extérieure et décorative d'exception dans le Chablais, Haute-Savoie.",
                "url" => url('/'),
                "knowsLanguage" => "fr-FR",
                "foundingDate" => "2004",
                "numberOfEmployees" => [
                    "@type" => "QuantitativeValue",
                    "value" => 1,
                ],
                "priceRange" => "€€",
                "currenciesAccepted" => "EUR",
                "paymentAccepted" => "Espèces, Chèque, Virement bancaire",
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
                "hasOfferCatalog" => [
                    "@type" => "OfferCatalog",
                    "name" => "Services de peinture",
                    "itemListElement" => [
                        [
                            "@type" => "OfferCatalog",
                            "name" => "Peinture intérieure",
                            "itemListElement" => [
                                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Peinture murs et plafonds"]],
                                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Peinture pièces humides"]],
                                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Préparation des supports"]],
                            ],
                        ],
                        [
                            "@type" => "OfferCatalog",
                            "name" => "Peinture extérieure",
                            "itemListElement" => [
                                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Peinture de façades"]],
                                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Peinture volets et portails"]],
                            ],
                        ],
                        [
                            "@type" => "OfferCatalog",
                            "name" => "Ravalement de façade",
                            "itemListElement" => [
                                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Ravalement de façade"]],
                            ],
                        ],
                        [
                            "@type" => "OfferCatalog",
                            "name" => "Peinture décorative",
                            "itemListElement" => [
                                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Enduits décoratifs"]],
                                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Patines et effets"]],
                            ],
                        ],
                        [
                            "@type" => "OfferCatalog",
                            "name" => "Revêtements muraux",
                            "itemListElement" => [
                                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Pose de papier peint"]],
                                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Toile de verre"]],
                            ],
                        ],
                        [
                            "@type" => "OfferCatalog",
                            "name" => "Boiseries et laquage",
                            "itemListElement" => [
                                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Laquage de portes et huisseries"]],
                                ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Peinture d'escaliers"]],
                            ],
                        ],
                    ],
                ],
            ],
            [
                "@type" => "WebPage",
                "@id" => url('/') . '#webpage',
                "url" => url('/'),
                "name" => "Devigny Peinture — Peintre professionnel à Évian, Thonon et dans le Chablais",
                "description" => "Artisan peintre avec plus de 20 ans d'expérience. Travaux de peinture intérieure, extérieure et décorative d'exception dans le Chablais, Haute-Savoie.",
                "isPartOf" => ["@id" => url('/') . '#website'],
                "about" => ["@id" => url('/') . '#business'],
                "inLanguage" => "fr-FR",
            ],
            [
                "@type" => "WebSite",
                "@id" => url('/') . '#website',
                "url" => url('/'),
                "name" => "Devigny Peinture",
                "publisher" => ["@id" => url('/') . '#business'],
                "inLanguage" => "fr-FR",
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
                ],
            ],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    @endphp
    </script>
@endsection

@section('content')
    @include('web.home.partials.hero')
    @include('web.home.partials.highlights')
    @include('web.home.partials.services')
    @include('web.home.partials.artisan')
    @include('web.home.partials.testimonials')
    @include('web.home.partials.cta')
    @include('web.home.partials.faq')
@endsection
