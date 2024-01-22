@extends("profile.admin")

@section("dashboard-content")
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="{{ $user->image ? $user->image : 'assets/img/profile-img.jpg' }}" alt="Profil" class="rounded-circle">
                    <h2>{{ $user->name }}</h2>
                    <h4 class="text-info">{{ $user->role == 'user' ? "Simple Utilisateur" : "Admin" }}</h4> <!-- Remplace "Web Designer" par la colonne 'role' du modèle Utilisateur -->
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <!-- Onglets bordés -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Aperçu</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Modifier le Profil</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Mes Locations</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Changer le Mot de Passe</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">À propos</h5>
                            <p class="small fst-italic">{{ $user->about }}</p> <!-- Utilise la colonne 'about' du modèle Utilisateur -->

                            <h5 class="card-title">Détails du Profil</h5>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label font-weight-bold" style="font-weight: bold">Nom Complet</div>
                                <div class="col-lg-9 col-md-8 font-weight-bold">{{ $user->name }}</div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label font-weight-bold" style="font-weight: bold">Entreprise</div>
                                <div class="col-lg-9 col-md-8 font-weight-bold">{{ $user->job }}</div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label font-weight-bold" style="font-weight: bold">Emploi</div>
                                <div class="col-lg-9 col-md-8 font-weight-bold">{{ $user->role == 'user' ? "Simple Utilisateur" : "Admin" }}</div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label font-weight-bold" style="font-weight: bold">Pays</div>
                                <div class="col-lg-9 col-md-8 font-weight-bold">Bénin</div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label font-weight-bold" style="font-weight: bold">Adresse</div>
                                <div class="col-lg-9 col-md-8 font-weight-bold">{{ $user->address }}</div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label font-weight-bold" style="font-weight: bold">E-mail</div>
                                <div class="col-lg-9 col-md-8 font-weight-bold">{{ $user->email }}</div>
                            </div>


                          <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 label font-weight-bold" style="font-weight: bold">Téléphone</div>
                            <div class="col-lg-9 col-md-8 font-weight-bold">{{ $user->phone }}</div>
                          </div>

                        
                        </div>
                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- Formulaire de Modification du Profil -->
                            <form>
                              <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Image de Profil</label>
                                <div class="col-md-8 col-lg-9">
                                  <img src="{{ $user->image ? $user->image : 'assets/img/profile-img.jpg' }}" alt="Profil">
                                  <div class="pt-2">
                                    <a href="#" class="btn btn-primary btn-sm" title="Télécharger une nouvelle image de profil"><i class="bi bi-upload"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm" title="Supprimer mon image de profil"><i class="bi bi-trash"></i></a>
                                  </div>
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom Complet</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="about" class="col-md-4 col-lg-3 col-form-label">À propos</label>
                                <div class="col-md-8 col-lg-9">
                                  <textarea name="about" class="form-control" id="about" style="height: 100px">{{ $user->about }}</textarea>
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Entreprise</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="company" type="text" class="form-control" id="company" value="{{ $user->enterprise }}">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Job" class="col-md-4 col-lg-3 col-form-label">Emploi</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="job" type="text" class="form-control" id="Job" value="{{ $user->job }}">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Country" class="col-md-4 col-lg-3 col-form-label">Pays</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="country" type="text" class="form-control" id="Country" value="{{ $user->country }}">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Téléphone</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="phone" type="text" class="form-control" id="Phone" value="{{ $user->phone }}">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">E-mail</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="email" type="email" class="form-control" id="Email" value="{{ $user->email }}">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Adress</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="email" type="email" class="form-control" id="Email" value="{{ $user->address }}">
                                </div>
                              </div>
          
                              <div class="text-center">
                                <button type="submit" class="color-bg">Enregistrer les Modifications</button>
                              </div>
                            </form><!-- Fin Formulaire de Modification du Profil -->
          
                          </div>
          
                          <div class="tab-pane fade pt-3" id="profile-settings">
          
                            <!-- Location-->
                            <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Marque</th>
                                      <th scope="col">Modèle</th>
                                      <th scope="col">Date de location</th>
                                      <th scope="col">Statut</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($userRentals as $rental)
                                      <tr>
                                          <th scope="row">{{ $rental->id }}</th>
                                          <td>{{ $rental->car->brand }}</td>
                                          <td>{{ $rental->car->model }}</td>
                                          <td>{{ $rental->rental_date }}</td>
                                          <td>
                                              @if ($rental->status == 'pending')
                                                  <span style="color: orange">En cours</span>
                                              @else
                                                  <span style="color: green">Rendue</span>
                                              @endif
                                          </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>
                            <!-- Locations -->
          
                          </div>
          
                          <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Formulaire de Changement de Mot de Passe -->
                            <form>
          
                              <div class="row mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Mot de Passe Actuel</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="password" type="password" class="form-control" id="currentPassword">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nouveau Mot de Passe</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="newpassword" type="password" class="form-control" id="newPassword">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-entrer le Nouveau Mot de Passe</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                </div>
                              </div>
          
                              <div class="text-center">
                                <button type="submit" class="color-bg">Changer le Mot de Passe</button>
                              </div>
                            </form><!-- Fin Formulaire de Changement de Mot de Passe -->
                        </div>
                    </div><!-- Fin des Onglets Bordés -->
                </div>
            </div>
        </div>
    </div>
@endsection
