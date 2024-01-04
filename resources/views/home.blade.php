@extends('base')

@section('content')
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active custom-carousel-item">
                <img src="assets/cartwo.png" class="d-block w-100" alt="Image 1" style="height: 100vh">
                <div class="carousel-caption d-none d-md-flex flex-column align-items-center text-center text-white" style="height:65%">
                    <h1>Bienvenue sur CarLocation</h1>
                    <h3>La meilleure destination pour la location de voitures.</h3>
                    <hr class="my-4">
                    <h3>Explorez notre flotte de voitures et trouvez celle qui correspond à vos besoins.</h3>
                    <a class="btn btn-success btn-lg" href="{{ route('cars.index') }}" role="button">Voir les Voitures</a>
                </div>
            </div>
            <div class="carousel-item custom-carousel-item">
                <img src="assets/carsix.jpeg" class="d-block w-100" alt="Image 2" style="height: 100vh">
                <div class="carousel-caption d-none d-md-flex flex-column align-items-center text-center text-white" style="height:65%">
                    <h1>Découvrez notre sélection</h1>
                    <h3>Des voitures de qualité pour une expérience de conduite exceptionnelle.</h3>
                    <hr class="my-4">
                    <h3>Parcourez notre collection et trouvez la voiture parfaite pour chaque occasion.</h3>
                    <a class="btn btn-success btn-lg" href="{{ route('cars.index') }}" role="button">Voir les Voitures</a>
                </div>
            </div>
            <div class="carousel-item custom-carousel-item">
                <img src="assets/carfive.jpeg" class="d-block w-100" alt="Image 3" style="height: 100vh">
                <div class="carousel-caption d-none d-md-flex flex-column align-items-center text-center text-white" style="height:65%">
                    <h1>Réservez dès aujourd'hui</h1>
                    <h3>Profitez de tarifs compétitifs et d'une réservation simple en ligne.</h3>
                    <hr class="my-4">
                    <h3>Réservez la voiture de vos rêves en quelques clics.</h3>
                    <a class="btn btn-success btn-lg" href="{{ route('cars.index') }}" role="button">Voir les Voitures</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    

    <div class="jumbotron my-4 " style="width: 80%; margin:auto;">
        <h1 class="display-4">Bienvenue sur CarLocation</h1>
        <p class="lead">La meilleure destination pour la location de voitures.</p>
        <hr class="my-4">
        <p>Explorez notre flotte de voitures et trouvez celle qui correspond à vos besoins.</p>
        <a class="btn btn-success btn-lg" href="{{ route('cars.index') }}" role="button">Voir les Voitures</a>
    </div>
@endsection
