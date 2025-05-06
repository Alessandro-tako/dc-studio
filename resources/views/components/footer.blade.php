<footer class="bg-dark text-white pt-5 pb-3 mt-5" role="contentinfo">
    <div class="container-fluid">

        <div class="row justify-content-evenly">

            {{-- Colonna: Contatti --}}
            <div class="col-12 col-md-4 mb-4 text-center text-md-start">
                <h2 class="h5 textColor mb-3">Contatti</h2>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="bi bi-geo-alt-fill me-2" aria-hidden="true"></i>
                        <span>Via Maremmana Inferiore 156, Villanova di Guidonia</span>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-envelope-fill me-2" aria-hidden="true"></i>
                        <a href="mailto:dcstudiobarber@gmail.com"
                            class="text-white text-decoration-none">dcstudiobarber@gmail.com</a>
                    </li>
                    <li>
                        <i class="bi bi-phone-fill me-2" aria-hidden="true"></i>
                        <a href="tel:+390774504981" class="text-white text-decoration-none">+39 0774 504981</a>
                    </li>
                </ul>
            </div>

            {{-- Colonna: Link veloci --}}
            <div class="col-12 col-md-4 mb-4 text-center text-md-start">
                <h2 class="h5 textColor mb-3">Link veloci</h2>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-white text-decoration-none">Chi Siamo</a></li>
                    <li><a href="{{ route('services') }}" class="text-white text-decoration-none">Servizi</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white text-decoration-none">Contatti</a></li>
                </ul>
            </div>

            {{-- Colonna: Social --}}
            <div class="col-12 col-md-4 mb-4 text-center text-md-start">
                <h2 class="h5 textColor mb-3">Seguici</h2>
                <div class="d-flex justify-content-evenly justify-content-md-start">
                    <a href="https://www.instagram.com/dcstudiobarber/" target="_blank" rel="noopener"
                        aria-label="Visita il nostro profilo Instagram" class="text-white">
                        <i class="bi bi-instagram fs-3"></i>
                    </a>
                </div>
            </div>

        </div>

        <hr class="border-light">

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-white mb-0 small">DC Studio Barber - P.IVA: 17490471004</p>
                <p class="text-white mb-0 small">&copy; 2024 - {{ now()->year }} Tutti i diritti riservati.</p>
                <p class="text-white small">🔥 Powered by Takohr • il Forgiatore di Codice ⚒️</p>
            </div>
        </div>
        <a href="https://www.iubenda.com/privacy-policy/37497829"
            class="iubenda-black iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy ">Privacy
            Policy</a>
        <script type="text/javascript">
            (function(w, d) {
                var loader = function() {
                    var s = d.createElement("script"),
                        tag = d.getElementsByTagName("script")[0];
                    s.src = "https://cdn.iubenda.com/iubenda.js";
                    tag.parentNode.insertBefore(s, tag);
                };
                if (w.addEventListener) {
                    w.addEventListener("load", loader, false);
                } else if (w.attachEvent) {
                    w.attachEvent("onload", loader);
                } else {
                    w.onload = loader;
                }
            })(window, document);
        </script>
        <a href="https://www.iubenda.com/privacy-policy/37497829/cookie-policy"
            class="iubenda-black iubenda-noiframe iubenda-embed iubenda-noiframe " title="Cookie Policy ">Cookie
            Policy</a>
        <script type="text/javascript">
            (function(w, d) {
                var loader = function() {
                    var s = d.createElement("script"),
                        tag = d.getElementsByTagName("script")[0];
                    s.src = "https://cdn.iubenda.com/iubenda.js";
                    tag.parentNode.insertBefore(s, tag);
                };
                if (w.addEventListener) {
                    w.addEventListener("load", loader, false);
                } else if (w.attachEvent) {
                    w.attachEvent("onload", loader);
                } else {
                    w.onload = loader;
                }
            })(window, document);
        </script>
    </div>
</footer>
