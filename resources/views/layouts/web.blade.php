<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title', 'Devigny Peinture — Peintre professionnel dans le Chablais')</title>
    <meta name="description" content="@yield('meta_description', 'Artisan peintre avec plus de 20 ans d\'expérience. Travaux de peinture intérieure, extérieure et décorative dans le Chablais, Haute-Savoie.')">

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    {{-- Polices --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600&display=swap" rel="stylesheet">

    {{-- CSS global (tokens + composants partagés) --}}
    @vite('resources/css/app.css')

    {{-- Assets des composants layout --}}
    @vite([
        'resources/css/components/layout/header.css',
        'resources/js/components/layout/header.js',
        'resources/css/components/layout/footer.css',
        'resources/js/components/layout/footer.js',
        'resources/css/components/layout/nav.css',
        'resources/js/components/layout/nav.js',
    ])

    {{-- Assets spécifiques à la page --}}
    @yield('assets')

    {{-- JSON-LD Schema --}}
    @hasSection('schema')
        @yield('schema')
    @else
        <script type="application/ld+json">
        @php
        echo json_encode([
            "@context" => "https://schema.org",
            "@type" => "HomeAndConstructionBusiness",
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
            "serviceType" => "Peinture en bâtiment",
            "address" => [
                "@type" => "PostalAddress",
                "addressRegion" => "Haute-Savoie",
                "addressCountry" => "FR",
            ],
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        @endphp
        </script>
    @endif
</head>
<body>

    <x-layout.header />

    <main>
        @yield('content')
    </main>

    <x-layout.nav />
    <x-layout.footer />

</body>
</html>
