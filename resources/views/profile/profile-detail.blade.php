@extends("profile.admin")

@section("dashboard-content")
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="assets/img/profile-img.jpg" alt="Profil" class="rounded-circle">
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
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Paramètres</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Changer le Mot de Passe</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">À propos</h5>
                            <p class="small fst-italic">Je suis un simple utilisateur sur ce site et chauffeur qui emprunte les voitures</p> <!-- Utilise la colonne 'about' du modèle Utilisateur -->

                            <h5 class="card-title">Détails du Profil</h5>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label font-weight-bold" style="font-weight: bold">Nom Complet</div>
                                <div class="col-lg-9 col-md-8 font-weight-bold">{{ $user->name }}</div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label font-weight-bold" style="font-weight: bold">Entreprise</div>
                                <div class="col-lg-9 col-md-8 font-weight-bold">Car Location</div>
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
                        </div>
                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- Formulaire de Modification du Profil -->
                            <form>
                              <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Image de Profil</label>
                                <div class="col-md-8 col-lg-9">
                                  <img src="assets/img/profile-img.jpg" alt="Profil">
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
                                  <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Entreprise</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Job" class="col-md-4 col-lg-3 col-form-label">Emploi</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Country" class="col-md-4 col-lg-3 col-form-label">Pays</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="country" type="text" class="form-control" id="Country" value="USA">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Address" class="col-md-4 col-lg-3 col-form-label">Adresse</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Téléphone</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">E-mail</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Profil Twitter</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Profil Facebook</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Profil Instagram</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                                </div>
                              </div>
          
                              <div class="row mb-3">
                                <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Profil Linkedin</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                                </div>
                              </div>
          
                              <div class="text-center">
                                <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
                              </div>
                            </form><!-- Fin Formulaire de Modification du Profil -->
          
                          </div>
          
                          <div class="tab-pane fade pt-3" id="profile-settings">
          
                            <!-- Formulaire des Paramètres -->
                            <form>
          
                              <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Notifications par E-mail</label>
                                <div class="col-md-8 col-lg-9">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                    <label class="form-check-label" for="changesMade">
                                      Modifications apportées à votre compte
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                    <label class="form-check-label" for="newProducts">
                                      Informations sur les nouveaux produits et services
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="proOffers">
                                    <label class="form-check-label" for="proOffers">
                                      Offres marketing et promotions
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                    <label class="form-check-label" for="securityNotify">
                                      Alertes de sécurité
                                    </label>
                                  </div>
                                </div>
                              </div>
          
                              <div class="text-center">
                                <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
                              </div>
                            </form><!-- Fin Formulaire des Paramètres -->
          
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
                                <button type="submit" class="btn btn-primary">Changer le Mot de Passe</button>
                              </div>
                            </form><!-- Fin Formulaire de Changement de Mot de Passe -->
                        </div>
                    </div><!-- Fin des Onglets Bordés -->
                </div>
            </div>
        </div>
    </div>
@endsection
