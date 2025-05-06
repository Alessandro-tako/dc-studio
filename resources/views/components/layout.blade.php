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

    <title>@yield('title', 'DC Studio Barber')</title>
</head>

<body class="d-flex flex-column min-vh-100">
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
