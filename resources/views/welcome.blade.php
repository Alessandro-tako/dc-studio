<x-layout>

    {{-- HERO SECTION --}}
    <section class="hero-section d-flex align-items-center justify-content-center text-center text-white" role="banner">
        <div class="container">
            <img src="{{ Storage::url('images/logoPrincipale.png') }}" alt="Logo DC Studio Barber" class="img-fluid mb-4" style="filter: drop-shadow(0 0 15px white);">
            <h1 class="display-4 fw-bold neon-text">Tagli freschi, stile autentico</h1>
            <p class="lead mt-3">Scopri l'esperienza DC Studio — dove il taglio è arte.</p>
            <a href="https://www.barberapp.it" class="btn btn-outline-light btn-lg mt-4" aria-label="Prenota un appuntamento">Prenota ora</a>
        </div>
    </section>

    {{-- CHI SIAMO --}}
    <section class="about-section py-5 text-light" id="chi-siamo" role="region" aria-labelledby="chi-siamo-titolo">
        <div class="container text-center">
            <h2 id="chi-siamo-titolo" class="section-title text-uppercase mb-4">Chi siamo</h2>
            <p class="lead">DC Studio è molto più di un barbiere. È uno spazio dove stile, precisione e accoglienza si fondono per offrirti l'esperienza perfetta. Ogni cliente è unico — proprio come ogni nostro taglio.</p>
        </div>
    </section>

    {{-- SERVIZI --}}
    <section class="services-section py-5 text-dark" id="servizi" role="region" aria-labelledby="servizi-titolo">
        <div class="container">
            <h2 id="servizi-titolo" class="text-center section-title mb-5 text-uppercase text-light">I nostri servizi</h2>
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <article class="p-4 bg-white rounded shadow-sm h-100 hover-up">
                        <i class="bi bi-scissors fs-1 text-dark" aria-hidden="true"></i>
                        <h3 class="mt-3 h5">Taglio Uomo</h3>
                        <p>Taglio moderno o classico, sempre su misura per te.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="p-4 bg-white rounded shadow-sm h-100 hover-up">
                        <i class="bi bi-person-fill fs-1 text-dark" aria-hidden="true"></i>
                        <h3 class="mt-3 h5">Rifinitura Barba</h3>
                        <p>Barba modellata con precisione e prodotti professionali.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="p-4 bg-white rounded shadow-sm h-100 hover-up">
                        <i class="bi bi-stars fs-1 text-dark" aria-hidden="true"></i>
                        <h3 class="mt-3 h5">Trattamenti Premium</h3>
                        <p>Maschere viso, scrub e relax per un look impeccabile.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

</x-layout>
