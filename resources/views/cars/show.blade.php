@extends("base")

@section("content")
    <main id="main">
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Le détail de la voiture {{ $car->brand }} {{ $car->model }}</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('cars.index') }}">Voitures</a></li>
                        <li>{{ $car->brand }} {{ $car->model }}</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Blog Section -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        @endif

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <img src="{{ asset('images/cars/' . $car->image) }}" class="card-img-top" alt="{{ $car->brand }} {{ $car->model }}">
                            <div class="card-body">
                                <h2>{{ $car->brand }} {{ $car->model }}</h2>
                                <p class="card-text">{{ $car->description }}</p>
                                <p class="card-text"><strong>Nombre de réservations passées:</strong> {{ $nbre }} </p>
                                <p class="card-text"><strong>Disponibilité:</strong>
                                    @if($car->availability)
                                        <span style="color: green;">Disponible</span>
                                    @else
                                        <span style="color: red;">Non disponible</span>
                                    @endif
                                </p>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div style="margin-bottom: 30px">
                            <h2 class="text-center" style="margin-bottom: 20px">Réserver cette voiture</h2>
                            
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <ul class="list-group">
                                <li class="list-group-item mb-2"><strong>Marque:</strong> {{ $car->brand }}</li>
                                <li class="list-group-item mb-2"><strong>Modèle:</strong> {{ $car->model }}</li>
                                <li class="list-group-item mb-2"><strong>Année:</strong> {{ $car->year }}</li>
                                <li class="list-group-item mb-2"><strong>Numéro d'enregistrement:</strong> {{ $car->registration_number }}</li>
                            </ul>
                        </div>                        
                        
                        <div>
                            <div class="reply-form">    
                                <h5 class="text-center" style="margin-top: 30px">Veuillez remplir le formulaire ci-dessous pour effectuer une réservation.</h5>
                                <form method="POST" action="{{ route('cars.store', ['car' => $car->id ]) }}">
                                    @csrf
                                    <input type="hidden" name="car_id" value="{{ $car->id }}">
                                    <div class="form-group">
                                        <label for="pickupDate"><h4 style="margin-top: 20px">Date de prise en charge</h4></label>
                                        <input name="rental_date" type="date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="returnDate"><h4 style="margin-top: 20px">Date de retour</h4></label>
                                        <input name="return_date" type="date" class="form-control" required>
                                    </div>
                                    <button type="submit" class="color-bg" style="margin: 10px" @if(!$car->availability) disabled @endif>
                                        @if($car->availability) Réserver @else Voiture réservée @endif
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
