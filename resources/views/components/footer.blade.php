<footer class="bg-black text-light pt-5 pb-4 mt-5 border-top border-secondary" role="contentinfo">
    <div class="container">

        <div class="row g-4 justify-content-between">

            {{-- Contatti --}}
            <div class="col-12 col-md-4 text-center text-md-start">
                <h5 class="fw-bold font-serif mb-3">Contatti</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        Via Maremmana Inferiore 156, Villanova di Guidonia
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-envelope-fill me-2"></i>
                        <a href="mailto:dcstudiobarber@gmail.com" class="link-light text-decoration-none">dcstudiobarber@gmail.com</a>
                    </li>
                    <li>
                        <i class="bi bi-phone-fill me-2"></i>
                        <a href="tel:+390774504981" class="link-light text-decoration-none">+39 0774 504981</a>
                    </li>
                </ul>
            </div>

            {{-- Link utili --}}
            <div class="col-12 col-md-3 text-center text-md-start">
                <h5 class="fw-bold font-serif mb-3">Link utili</h5>
                <ul class="list-unstyled small">
                    <li><a href="{{ route('home') }}" class="link-light text-decoration-none">Home</a></li>
                    <li><a href="{{ route('about') }}" class="link-light text-decoration-none">Chi Siamo</a></li>
                    <li><a href="{{ route('services') }}" class="link-light text-decoration-none">Servizi</a></li>
                    <li><a href="{{ route('contact') }}" class="link-light text-decoration-none">Contatti</a></li>
                </ul>
            </div>

            {{-- Social --}}
            <div class="col-12 col-md-3 text-center text-md-start">
                <h5 class="fw-bold font-serif mb-3">Seguici</h5>
                <a href="https://www.instagram.com/dcstudiobarber/" target="_blank" rel="noopener" class="text-light fs-4">
                    <i class="bi bi-instagram"></i>
                </a>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="text-center small">
            <p class="mb-1">DC Studio Barber - P.IVA: 17490471004</p>
            <p class="mb-1">&copy; 2024 - {{ now()->year }} Tutti i diritti riservati.</p>
            <p class=" mb-0">🔥 Powered by Takohr • il Forgiatore di Codice ⚒️</p>
        </div>

        {{-- Iubenda --}}
        <div class="text-center mt-3">
            <a href="https://www.iubenda.com/privacy-policy/37497829" class="iubenda-black iubenda-noiframe iubenda-embed" title="Privacy Policy">Privacy Policy</a> |
            <a href="https://www.iubenda.com/privacy-policy/37497829/cookie-policy" class="iubenda-black iubenda-noiframe iubenda-embed" title="Cookie Policy">Cookie Policy</a>
        </div>
    </div>
</footer>
