@extends('layouts.app')

@section('content')
    <!-- Content start -->
        <div class="h3 my-4">Modification Profil</div>

        <!-- Form start -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header start -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                    >
                        <div>
                            <h6 class="m-0 font-weight-bold text-primary">
                                Formulaire de modification
                            </h6>
                        </div>
                    </div>
                    <!-- Card Header end -->

                    <!-- Card Body start -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate action="/profile/update" method="post" >
                            {{$errors}}
                         @csrf
                            @method('put')
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="last_name"><i class="fas fa-user-friends mr-1"></i>Nom</label>
                                    <input
                                        id="last_name"
                                        name="last_name"
                                        type="text"
                                        class="form-control"
                                        value="{{$user->last_name}}"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer votre nom
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="first_name"><i class="fas fa-user mr-2"></i>Prénom</label>
                                    <input
                                        id="first_name"
                                        name="first_name"
                                        type="text"
                                        class="form-control"
                                        value="{{$user->first_name}}"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer votre prénom
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="email"><i class="fas fa-envelope mr-2"></i>Adresse Email</label>
                                    <input
                                        id="email"
                                        name="email"
                                        type="email"
                                        class="form-control"
                                        value="{{$user->email}}"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer votre adresse email
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="old_password"><i class="fas fa-lock mr-2"></i>Ancien Mot de passe</label>
                                    <input
                                        id="old_password"
                                        name="old_password"
                                        type="password"
                                        class="form-control"
                                        placeholder="Ancien mot de passe"

                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer votre ancien mot de passe
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="new_password"><i class="fas fa-lock mr-2"></i>Nouveau Mot de passe</label>
                                    <input
                                        id="new_password"
                                        type="password"
                                        class="form-control"
                                        placeholder="Nouveau mot de passe"

                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer un nouveau mot de passe
                                    </div>
                                </div>


                                <div class="col-md-4 mb-3">
                                    <label for="new_password_confirmation">
                                        <i class="fas fa-lock mr-2"></i>Confirmation Nouveau Mot de passe</label>
                                    <input
                                        id="new_password_confirmation"
                                        type="password"
                                        class="form-control"
                                        placeholder="Confirmation du nouveau mot de passe"

                                    />
                                    <div class="invalid-feedback">
                                        Vous devez confirmer votre nouveau mot de passe
                                    </div>
                                </div>


                            </div>

                            <div class="text-right">
                                <a href="/profile/index" class="btn btn-outline-primary my-3">
                                    Annuler
                                </a>
                                <button class="btn btn-primary my-3" type="submit">
                                    Enregistrer
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Card Body end -->
                </div>
            </div>
        </div>
        <!-- Form end -->
    </div>
    <!-- Content end -->
@endsection
