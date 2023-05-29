<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                <div>
                    <h1>@yield('hero_title', 'Página de destino de la aplicación')</h1>
                    <h2>@yield('hero_message', 'Lorem ipsum dolor sit amet, tota senserit percipitur ius ut, usu et fastidii forensibus voluptatibus. His ei nihil feugait')</h2>

                    <a href="{{ asset('apk/demoapp.apk') }}" class="download-btn"><i class="bx bxl-android"></i> Descargar APK</a>

                    {{--<a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
                    <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a>--}}

                </div>
            </div>
            <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                <img src="{{ asset('vendor/appland/assets/img/hero-img.png') }}{{--assets/img/hero-img.png--}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section>
