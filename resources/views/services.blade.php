<x-layout>

    {{-- HERO --}}
    <section class="services-hero" role="banner">
        <div class="container text-center">
            <h1 class="services-title">Servizi & Prezzi</h1>
            <p class="services-subtitle">Professionalità, relax e stile. Scopri cosa possiamo fare per te.</p>
        </div>
    </section>

    {{-- TABELLA SERVIZI --}}
    <section class="py-5" id="listino" role="region" aria-labelledby="tabella-servizi">
        <div class="container">
            <h2 id="tabella-servizi" class="visually-hidden">Lista Servizi e Prezzi</h2>
            <div class="table-responsive services-box">
                <table class="table table-hover table-bordered align-middle text-center mb-0">
                    <caption class="text-white text-start pb-2">Prezzi aggiornati dei nostri servizi principali</caption>
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Servizio</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Prezzo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Barba</th>
                            <td>Modellatura e rifinitura con prodotti professionali</td>
                            <td>8€</td>
                        </tr>
                        <tr>
                            <th scope="row">Taglio misura unica</th>
                            <td>Taglio con macchinetta su tutta la testa</td>
                            <td>10€</td>
                        </tr>
                        <tr>
                            <th scope="row">Meches</th>
                            <td>Colpi di luce, a partire da €10 in base alla quantità</td>
                            <td>A partire da 10€</td>
                        </tr>
                        <tr>
                            <th scope="row">Taglio</th>
                            <td>Taglio su misura, moderno o classico</td>
                            <td>14€</td>
                        </tr>
                        <tr>
                            <th scope="row">Barba & Shampoo</th>
                            <td>Barba rifinita + lavaggio rilassante</td>
                            <td>14€</td>
                        </tr>
                        <tr>
                            <th scope="row">Taglio & Shampoo</th>
                            <td>Taglio personalizzato + lavaggio con prodotti professionali</td>
                            <td>17€</td>
                        </tr>
                        <tr>
                            <th scope="row">Taglio, Barba & Shampoo</th>
                            <td>Servizio completo: taglio, rifinitura barba e lavaggio</td>
                            <td>25€</td>
                        </tr>
                        <tr>
                            <th scope="row">Permanente</th>
                            <td>Trattamento per capelli mossi o ricci a lunga durata</td>
                            <td>30€</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</x-layout>

