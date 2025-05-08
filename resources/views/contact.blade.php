<x-layout>

    <section class="contact-section" role="region" aria-labelledby="contatti-titolo">
        <div class="container-fluid">
            <h1 id="contatti-titolo" class="contact-title mt-5">Contattaci</h1>
            <p class="contact-subtitle">Hai domande o vuoi prenotare? Siamo qui per te.</p>

            <div class="row justify-content-center align-items-center">

                {{-- Informazioni di contatto --}}
                <div class="col-12 col-md-6 mb-5">
                    <div class="contact-box" role="complementary" aria-label="Informazioni di contatto">
                        <h2 class="h4">Informazioni</h2>
                        <ul class="list-unstyled fs-5">
                            <li class="mb-3">
                                <i class="bi bi-telephone-fill me-2" aria-hidden="true"></i>
                                <strong>Telefono:</strong> <a href="tel:+390774504981">+39 0774 504981</a>
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-envelope-fill me-2" aria-hidden="true"></i>
                                <strong>Email:</strong>
                                <a href="mailto:dcstudiobarber@gmail.com">dcstudiobarber@gmail.com</a>
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-geo-alt-fill me-2" aria-hidden="true"></i>
                                <strong>Indirizzo:</strong> Via Maremmana Inferiore, 156, Villanova (RM)
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-instagram me-2" aria-hidden="true"></i>
                                <strong>Instagram:</strong>
                                <a href="https://www.instagram.com/dcstudiobarber/" target="_blank" rel="noopener">Seguici</a>
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-calendar-check me-2" aria-hidden="true"></i>
                                <strong>Prenotazioni:</strong>
                                <a href="https://www.barberapp.it" target="_blank" rel="noopener">Prenota ora</a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Mappa --}}
                <div class="col-12 col-md-6 mt-2">
                    <div class="contact-box p-0" role="complementary" aria-label="Mappa della posizione">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2966.814528612404!2d12.75525647741818!3d41.96131867123269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f797ddffec92f%3A0x636c13bfd066cf99!2sDC%20Studio%20Barber!5e0!3m2!1sit!2sit!4v1743930538490!5m2!1sit!2sit"
                            allowfullscreen
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Mappa DC Studio Barber"
                            width="100%"
                            height="400"
                            style="border:0; border-radius: 10px;">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layout>
