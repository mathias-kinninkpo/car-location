@extends('base')

@section('content')
<section class="vh-100 d-flex justify-content-center align-items-center" style="background-color: #eee;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px; height: 70vh">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-7 order-2 order-lg-1 d-flex align-items-center">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-5 order-1 order-lg-2">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Connexion</p>

                                <form method="POST" action="{{ route('login.store') }}" class="php-email-form">
                                    @csrf

                                    <!-- Form input group for Email -->
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Votre Adresse E-Mail</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512">
                                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                                            </svg>
                                            <div class="form-outline flex-fill mb-0" style="margin-left: 20px">
                                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required />
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Form input group for Password -->
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/>
                                            </svg>
                                            <div class="form-outline flex-fill mb-0" style="margin-left: 20px">
                                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required />
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="color-bg">Se Connecter</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
