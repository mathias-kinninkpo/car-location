@extends('profile.admin')

@section('dashboard-content')


<div class="container mt-5">
    <h2>Liste des Locations</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Voiture</th>
                    <th scope="col">Locataire</th>
                    <th scope="col">Date de location</th>
                    <th scope="col">Date de retour prévue</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rentals as $rental)
                    <tr>
                        <th scope="row">{{ $rental->id }}</th>
                        <td>{{ $rental->car->brand }} {{ $rental->car->model }}</td>
                        <td>{{ $rental->user->name }}</td>
                        <td>{{ $rental->rental_date }}</td>
                        <td>{{ $rental->return_date }}</td>
                        <td>
                            @if ($rental->status == 'pending')
                                <span style="color: orange">En cours</span>
                            @else
                                <span style="color: green">Rendue</span>
                            @endif
                        </td>
                        <td>
                            @if ($rental->status === 'pending')
                                <form action="{{ route('profile.rendre', ['id' => $rental->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="color-bg">Marquer Rendu</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
