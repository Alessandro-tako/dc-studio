<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Vite assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- SEO meta tags --}}
    <meta name="description" content="DC Studio Barber - Tagli moderni, barba curata, stile autentico a Villanova. Prenota online il tuo appuntamento.">
    <meta name="keywords" content="Barbiere, DC Studio, Taglio uomo, Barba, Barber Villanova, Prenotazione online">

    {{-- Open Graph (per condivisione social) --}}
    <meta property="og:title" content="DC Studio Barber">
    <meta property="og:description" content="Tagli freschi, stile autentico. Scopri l’esperienza DC Studio Barber.">
    <meta property="og:image" content="{{ asset('images/logoPrincipale.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    {{-- Title --}}
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
