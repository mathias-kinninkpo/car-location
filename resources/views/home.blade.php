@extends('base')

@section('content')
    <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Bienvenue chez <span>Car Location</span></h2>
                <p class="animate__animated animate__fadeInUp">Explorez notre large gamme de voitures à louer. Trouvez la voiture parfaite pour vos besoins de déplacement. Réservez en ligne dès maintenant.</p>
                <a href="{{ route('cars.index') }}" class="btn-get-started animate__animated animate__fadeInUp">Explorer</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Découvrez le confort de conduire avec Car Location</h2>
                <p class="animate__animated animate__fadeInUp">Trouvez la voiture idéale qui correspond à votre style et à votre budget. Profitez d'une expérience de conduite sans tracas avec Car Location.</p>
                <a href="{{ route('cars.index') }}" class="btn-get-started animate__animated animate__fadeInUp">Explorer</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Choix varié, tarifs compétitifs</h2>
                <p class="animate__animated animate__fadeInUp">Car Location offre une large sélection de voitures de qualité à des tarifs compétitifs. Trouvez la voiture parfaite pour chaque occasion.</p>
                <a href="{{ route('cars.index') }}" class="btn-get-started animate__animated animate__fadeInUp">Explorer</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"><i class="bx bxl-car"></i></div>
                        <h4 class="title"><a href="#">Large Flotte de Voitures</a></h4>
                        <p class="description">Découvrez notre large gamme de voitures, des compactes aux SUV, adaptées à tous les types de voyages.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon"><i class="bx bx-credit-card"></i></div>
                        <h4 class="title"><a href="#">Réservation en Ligne Facile</a></h4>
                        <p class="description">Réservez votre voiture en ligne en quelques clics. Paiement sécurisé et confirmation instantanée.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bx-time"></i></div>
                        <h4 class="title"><a href="#">Service Rapide</a></h4>
                        <p class="description">Gagnez du temps avec notre service rapide. Prenez la route rapidement avec Car Location.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-blue">
                        <div class="icon"><i class="bx bx-map"></i></div>
                        <h4 class="title"><a href="#">Lieux Variés</a></h4>
                        <p class="description">Avec des emplacements pratiques, Car Location rend la location de voiture facile et accessible.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" data-aos-delay="200">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="assets/img/carfour.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=UpaBOPwXpmc" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="#">Qualité et Confiance</a></h4>
                        <p class="description">Car Location est dédié à offrir une expérience de location de voiture de qualité avec une confiance totale.</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="#">Offres Spéciales</a></h4>
                        <p class="description">Profitez de nos offres spéciales et réductions pour économiser sur votre prochaine location de voiture.</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
        <div class="container">

            <div class="section-title">
                <h2>Fonctionnalités</h2>
                <p>Explorez les fonctionnalités qui font de Car Location le choix idéal pour vos besoins de location de voiture.</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="assets/img/features-1.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4">
                    <h3>Large Sélection de Voitures</h3>
                    <p class="fst-italic">
                        Trouvez la voiture parfaite parmi notre vaste gamme de véhicules bien entretenus.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> Des voitures compactes aux SUV spacieux.</li>
                        <li><i class="bi bi-check"></i> Options pour tous les budgets.</li>
                    </ul>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="assets/img/features-2.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3>Réservation Facile et Rapide</h3>
                    <p class="fst-italic">
                        Réservez votre voiture en ligne en quelques étapes simples.
                    </p>
                    <p>
                        Processus de réservation convivial avec confirmation instantanée.
                    </p>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="assets/img/features-3.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5">
                    <h3>Service Client Dédié</h3>
                    <p>Notre équipe de service client est disponible 24/7 pour répondre à vos questions et vous assister.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> Assistance en temps réel.</li>
                        <li><i class="bi bi-check"></i> Support téléphonique et en ligne.</li>
                    </ul>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="assets/img/features-4.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3>Points de Ramassage Pratiques</h3>
                    <p class="fst-italic">
                        Retirez et déposez votre voiture à des emplacements pratiques.
                    </p>
                    <p>
                        Emplacements stratégiquement situés pour votre confort.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->

</main>


@endsection
