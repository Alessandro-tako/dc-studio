<x-layout>


    <!-- Hero Section -->
        <section class="hero d-flex align-items-center justify-content-center text-center"
            style="background-image: url('{{Storage::url('images/hero.jpg') }}');">
            <div class="overlay text-center p-4 rounded">
                <h1 class="display-4 fw-bold"><span class="text-highlight">DC Studio Barber</span></h1>
                <h2 id="typewriter" class="fw-bold"></h2>

                <a href="{{ route('services') }}" class="btn btn-custom mt-4">Scopri i nostri servizi</a>
            </div>
        </section>

    <!-- Sezione Chi Siamo -->
    <section class="bg-dark-section text-center py-5">
        <div class="container">
            <h2 class="mb-4">Chi siamo</h2>
            <p class="text-gray">Una barberia moderna con un tocco tradizionale. Offriamo un’esperienza unica tra cura,
                relax e stile. Il nostro team è pronto ad accoglierti e valorizzare la tua immagine.</p>
            <a href="{{ route('about') }}" class="btn btn-outline-light mt-3">Scopri di più</a>
        </div>
    </section>

    <!-- Sezione Servizi -->
    <section class="bg-light-section text-center py-5">
        <div class="container">
            <h2 class="mb-4">Servizi Principali</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-box">
                        <h5>Taglio Uomo</h5>
                        <p class="text-gray">Tagli classici e moderni su misura per te.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <h5>Rasatura Tradizionale</h5>
                        <p class="text-gray">Rasatura con panno caldo e rasoio a mano libera.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <h5>Modellatura Barba</h5>
                        <p class="text-gray">Design e cura della tua barba con stile.</p>
                    </div>
                </div>
            </div>
            <a href="{{ route('services') }}" class="btn btn-outline-light mt-4">Tutti i servizi</a>
        </div>
    </section>

    <!-- Sezione Contatti -->
    <section class="bg-dark-section text-center py-5">
        <div class="container">
            <h2 class="mb-4">Contattaci</h2>
            <p class="text-gray">Prenota un taglio o vieni a trovarci in barberia. Siamo in centro, facilmente
                raggiungibili.</p>
            <a href="{{ route('contact') }}" class="btn btn-custom mt-3">Vai alla sezione contatti</a>
        </div>
    </section>

</x-layout>
