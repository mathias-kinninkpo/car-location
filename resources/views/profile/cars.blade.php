@extends("profile.admin")

@section("dashboard-content")

<section>
    <h2>Liste des Voitures</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Année</th>
                <th>Numéro d'enregistrement</th>
                <th>Disponibilité</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->year }}</td>
                    <td>{{ $car->registration_number }}</td>
                    <td>{{ $car->availability ? 'Disponible' : 'Non disponible' }}</td>
                    <td>{{ $car->description }}</td>
                    <td>
                        <a href="{{ route('profile.editcar', ['id' => $car->id]) }}" class="color-bg"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('profile.deletecar', ['id' => $car->id]) }}" method="post" style="display:inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection
