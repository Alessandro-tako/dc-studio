<x-layout>

    {{-- HERO CHI SIAMO --}}
    <section class="services-hero" role="banner">
        <div class="container text-center">
            <h1 class="services-title">Chi siamo</h1>
            <p class="services-subtitle">Stile, passione e precisione — benvenuto nel mondo di DC Studio Barber.</p>
        </div>
    </section>

    {{-- TESTO + IMMAGINE --}}
    <section class="py-5" id="storia" role="region" aria-labelledby="titolo-storia">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-5">
                    <div class="services-box">
                        <h2 id="titolo-storia" class="h4 mb-3">La nostra storia</h2>
                        <p>DC Studio nasce da un’idea semplice: offrire più di un taglio. Offriamo un’esperienza, un momento di pausa in un ambiente curato, dove ogni cliente è unico.</p>
                        <p>Con passione per il dettaglio, tecniche aggiornate e un tocco di stile personale, siamo diventati un punto di riferimento a Villanova (RM).</p>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="services-box p-0 overflow-hidden">
                        <img src="{{ Storage::url('images/foto-team.png') }}" class="img-fluid rounded" alt="Il team di DC Studio Barber">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- GALLERIA / LOOKBOOK --}}
    <section class="py-5" id="lookbook" role="region" aria-labelledby="titolo-galleria">
        <div class="container">
            <h2 id="titolo-galleria" class="services-title text-center mb-4">Il nostro stile</h2>
            <p class="services-subtitle text-center mb-5">Scopri alcuni dei nostri tagli, barbe e trattamenti</p>

            <div class="row g-4">
                @foreach (range(1, 12) as $i)
                    <div class="col-6 col-md-4">
                        <figure class="services-box p-0 overflow-hidden m-0">
                            <img src="{{ Storage::url('images/foto' . $i . '.png') }}" class="galleria-img" alt="Look taglio e barba {{ $i }}">
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
