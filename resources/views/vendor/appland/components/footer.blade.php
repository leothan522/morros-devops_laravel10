<footer id="footer">

    {{--<div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>--}}

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{ config('app.name') }}{{--Appland--}}</h3>
                    <p>
                        @yield('footer_direccion', 'A108 Adam Street') <br>
                        @yield('footer_ciudad', 'New York, NY 535022')<br>
                        @yield('footer_estado', 'United States') <br><br>
                        <strong>Teléfono:</strong> @yield('footer_telefono', '+58 424 338 6600')<br>
                        <strong>Email:</strong> @yield('footer_email', 'leothan522@gmail.com')<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Enlaces útiles</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre nosotros</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://ginecobs.morros-devops.xyz/" target="_blank">Sistema GINECOBS</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://tienda.morros-devops.xyz/" target="_blank">Sistema TIENDA SPORTEC</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Términos de servicio</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nuestros servicios</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Desarrollo web</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Desarrollo android</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Gestión de productos</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Instalación de equipos y S.O.</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Instalación y configuración de Redes</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links p-0">
                    {{--<h4>Nuestras Redes Sociales</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>--}}
                    <img src="{{ asset('img/logo.png') }}" class="img-fluid rounded" alt="Logo Morros Devops">
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; 2023 <strong><span>{{ config('app.name') }}{{--Appland--}}</span></strong>. Reservados todos los derechos
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
            Dev. <a href="https://t.me/Leothan" target="_blank">Ing. Yonathan Castillo</a>
        </div>
    </div>
</footer>
