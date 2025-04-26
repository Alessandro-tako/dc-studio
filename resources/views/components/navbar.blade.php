<nav class="navbar navbar-expand-lg navbar-dark bg-black px-3">
    <a class="navbar-brand text-white" href="{{ route('home') }}">DC Studio Barber</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Chi Siamo</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Servizi</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contatti</a></li>
        </ul>
    </div>
</nav>
