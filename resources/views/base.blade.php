<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CarLocation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">

</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light header">
        <div class="d-flex align-items-center m-auto" style="width: 80%">
            <div style="width: 80%">
                <a class="navbar-brand text-white" href="{{ route('home') }}">CAR LOCATION</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="w-50 collapse navbar-collapse header-element ms-auto me-auto" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link text-white" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item {{ request()->is('cars*') ? 'active' : '' }}">
                        <a class="nav-link text-white" href="{{ route('cars.index') }}">Voitures</a>
                    </li>
                    <li class="nav-item {{ request()->is('contact*') ? 'active' : '' }}">
                        <a class="nav-link text-white" href="{{ route('contact.index') }}">Contact</a>
                    </li>
                    <li class="nav-item {{ request()->is('register*') ? 'active' : '' }}">
                        <a class="nav-link text-white" href="{{ route('register.create') }}">Inscription</a>
                    </li>
                    <li class="nav-item {{ request()->is('login*') ? 'active' : '' }}">
                        <a class="nav-link text-white" href="{{ route('login.create') }}">Connexion</a>
                    </li>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white {{ request()->is('users*') ? 'active' : '' }}" href="{{ route('users.index') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profil
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Voir</a>
                                <a class="dropdown-item" href="#">Éditer</a>
                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto py-5 text-white footer-bg">
        <div class="container text-center">
            <span class="text-wite">© 2024 CarLocation - Tous droits réservés</span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
