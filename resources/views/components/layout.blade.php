<!DOCTYPE html>
<html lang="it">

<head>
    <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {
            "siteId": 4017087,
            "cookiePolicyId": 37497829,
            "lang": "it",
            "storage": {
                "useSiteId": true
            }
        };
    </script>
    <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/4017087.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta name="description"
        content="DC Studio Barber - Tagli moderni, barba curata, stile autentico a Villanova. Prenota online il tuo appuntamento.">
    <meta name="keywords" content="Barbiere, DC Studio, Taglio uomo, Barba, Barber Villanova, Prenotazione online">

    <meta property="og:title" content="DC Studio Barber">
    <meta property="og:description" content="Tagli freschi, stile autentico. Scopri l’esperienza DC Studio Barber.">
    <meta property="og:image" content="{{ asset('images/logoPrincipale.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500&display=swap"
        rel="stylesheet">

    @if (app()->environment('production'))
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-FTQJSGS4PD"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-FTQJSGS4PD');
        </script>
    @endif

    {{-- JSON-LD: Attività locale --}}
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Barbershop",
            "name": "DC Studio Barber",
            "image": "https://dcstudiobarber.it/images/logoPrincipale.png",
            "url": "https://dcstudiobarber.it",
            "telephone": "+39 0774 504981",
            "priceRange": "€€",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Via Maremmana Inferiore, 156",
                "addressLocality": "Villanova",
                "addressRegion": "RM",
                "postalCode": "00012",
                "addressCountry": "IT"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 41.9613187,
                "longitude": 12.7586316
            },
            "openingHoursSpecification": [
                {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                ],
                "opens": "09:00",
                "closes": "19:30"
                }
            ],
            "makesOffer": [
                {
                "@type": "Offer",
                "name": "Taglio Uomo",
                "price": "14.00",
                "priceCurrency": "EUR"
                },
                {
                "@type": "Offer",
                "name": "Shampoo & Barba",
                "price": "14.00",
                "priceCurrency": "EUR"
                },
                {
                "@type": "Offer",
                "name": "Look Completo",
                "price": "25.00",
                "priceCurrency": "EUR"
                }
            ],
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5.0",
                "reviewCount": "22"
            },
            "sameAs": [
                "https://www.instagram.com/dcstudiobarber/",
                "https://www.barberapp.it"
            ]
        }
        </script>

        <style>
            html, body{
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('storage/images/bg-wood.png') }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
        </style>
        


    <title>@yield('title', 'DC Studio Barber')</title>
</head>

<body class="d-flex flex-column min-vh-100 mt-5">
    {{-- Navbar --}}
    <header>
        <x-navbar />
    </header>

    {{-- Contenuto principale --}}
    <main class="flex-grow-1">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer>
        <x-footer />
    </footer>
</body>

</html>
