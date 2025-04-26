<x-layout>
    <section class="bg-light-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Testo -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="mb-4">Chi siamo</h2>
                    <p class="lead text-gray">
                        Siamo un team di barbieri professionisti con una missione: trasformare ogni taglio in un'esperienza unica.
                    </p>
                    <p class="text-gray">
                        Tradizione e innovazione si incontrano nel nostro barber shop. Dalla rasatura classica ai tagli moderni, ogni dettaglio è curato con precisione e stile. Vieni a scoprire l’arte del grooming maschile.
                    </p>
                    <a href="{{ route('services') }}" class="btn btn-custom mt-3">Scopri i nostri servizi</a>
                </div>
    
                <!-- Immagine -->
                <div class="col-md-6">
                    <img src="https://picsum.photos/200" alt="Team Barber Shop" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Galleria Immagini -->
    <section class="py-5 bg-dark-section">
        <div class="container">
            <h2 class="text-center mb-5">Il nostro stile</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <img src="https://picsum.photos/200/300" class="img-fluid rounded shadow-sm gallery-img" alt="Taglio barba 1">
                </div>
                <div class="col-md-4">
                    <img src="https://picsum.photos/200" class="img-fluid rounded shadow-sm gallery-img" alt="Dettaglio stile">
                    <img src="https://picsum.photos/200" class="img-fluid rounded shadow-sm gallery-img mt-3" alt="Lavoro di precisione">
                </div>
                <div class="col-md-4">
                    <img src="https://picsum.photos/200" class="img-fluid rounded shadow-sm gallery-img" alt="Rasatura classica">
                </div>
            </div>
        </div>
    </section>
    
</x-layout>