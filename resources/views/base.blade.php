<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CarLocation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ajoutez votre fichier CSS personnalisé -->
    <link rel="stylesheet" href="css/index.css">
    
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  @php
    $isHomePage = request()->is('/');
  @endphp
    <header id="header" class="fixed-top d-flex align-items-center {{ $isHomePage ? 'header-transparent' : '' }}">
        <div class="container d-flex justify-content-between align-items-center">
    
            <div class="logo">
                <a href="{{ route('home') }}" class="text-light">
                    <span>CAR LOCATION</span>
                </a>
            </div>
    
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="{{ request()->is('cars*') ? 'active' : '' }}">
                        <a href="{{ route('cars.index') }}">Voitures</a>
                    </li>
                    <li class="{{ request()->is('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact.index') }}">Contact</a>
                    </li>
            
                    @guest
                        <li class="{{ request()->is('register*') ? 'active' : '' }}">
                            <a href="{{ route('register.index') }}">Inscription</a>
                        </li>
                        <li class="{{ request()->is('login*') ? 'active' : '' }}">
                            <a href="{{ route('login.index') }}">Connexion</a>
                        </li>
                    @endguest
            
                    @auth
                        <li class="{{ request()->is('profile*') ? 'active' : '' }}">
                            <a href="{{ route('profile.index') }}" class="active">
                                Profil 
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}">
                                Déconnexion
                            </a>
                        </li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            
    
        </div>
    </header><!-- End Header -->
    
    <div>
        @yield('content')
    </div>

    
    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Notre Newsletter</h4>
                    <p>Restez informé sur nos offres spéciales et nos nouvelles voitures.</p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="S'abonner">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Liens Utiles</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Accueil</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact.index') }}">Contectez-nous</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Conditions d'utilisation</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Politique de confidentialité</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nos Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Location de Voitures</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Gestion de Flotte</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Réservation en Ligne</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Assistance Client</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Design Graphique</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contactez-nous</h4>
                    <p>
                        Résidence Universitaire <br>
                        Abomey-Calavi Campus<br>
                        Bénin - Atlantique <br><br>
                        <strong>Téléphone :</strong> +229 62396632<br>
                        <strong>Email :</strong> info@carlocation.com<br>
                    </p>

                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>À Propos de Car Location</h3>
                    <p>Car Location s'engage à fournir un service de location de voitures de qualité pour rendre vos déplacements plus faciles et plus confortables.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Car Location</span></strong>. Tous droits réservés
        </div>
        <div class="credits">
            Conçu par <a href="https://github.com/mathias-kinninkpo">Mathias KINNINKPO</a>
        </div>
    </div>
</footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/main1.js"></script>

</body>
</html>
