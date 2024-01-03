@extends('base')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Bienvenue sur CarLocation</h1>
        <p class="lead">La meilleure destination pour la location de voitures.</p>
        <hr class="my-4">
        <p>Explorez notre flotte de voitures et trouvez celle qui correspond à vos besoins.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('cars.index') }}" role="button">Voir les Voitures</a>
    </div>
@endsection
