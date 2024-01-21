@extends("profile.admin")

@section("dashboard-content")

<section>
    <h2>La liste des utilisateurs</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif

    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Nom & Prénom</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Adresse</th>
                <th>Rôle</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                @if ($user->id == $userloged->id)
                    @continue
                @endif
                <tr>
                    <td>
                        <img src="{{ $user->image ? $user->image : asset('assets/img/profile-img.jpg') }}" alt="Profil" class="rounded-circle" width="40" height="40">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address}}</td>
                    <td>{{ $user->role == 'user' ? 'Utilisateur' : 'Admin' }}</td>
                    <td>
                        @if ($user->role == 'user')  
                            <form action="{{ route('profile.grantadmin', ['id' => $user->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="color-bg">Nommer Admin</button>
                            </form>
                        @else
                            <form action="{{ route('profile.revoqueadmin', ['id' => $user->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger">Revoquer le droit Admin</button>
                            </form>
                        @endif
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection
