<nav class="navbar navbar-expand-lg nav-cus fixed-top" role="navigation" aria-label="Barra di navigazione principale" data-bs-theme="dark">
    <div class="container-fluid">
        {{-- Logo e brand --}}
        <a class="navbar-brand text-white d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ Storage::url('images/logoNavbar.png') }}" alt="Logo DC Studio" class="navbar-logo me-2">
            <span>Studio Barber</span>
        </a>

        {{-- Toggle button per mobile --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Menu di navigazione">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Link di navigazione --}}
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item">
                    <a class="nav-link custom-link1" href="{{ route('about') }}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-link2" href="{{ route('services') }}">Servizi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-link2" href="{{ route('contact') }}">Contatti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
