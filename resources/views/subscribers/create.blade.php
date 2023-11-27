@extends('layouts.app')

@section('content')
    <!-- Content start -->
        <div class="h3 my-4">Création Abonné</div>

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
                                Formulaire de création
                            </h6>
                        </div>
                    </div>
                    <!-- Card Header end -->

                    <!-- Card Body start -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate action="{{route('subscribers.store')}}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="last_name"><i class="fas fa-user mr-1"></i>Nom</label>
                                    <input
                                        name="last_name"
                                        id="last_name"
                                        type="text"
                                        class="form-control"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer un nom
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="first_name"><i class="fas fa-user mr-2"></i>Prénom</label>
                                    <input
                                        name="first_name"
                                        id="first_name"
                                        type="text"
                                        class="form-control"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer un prénom
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="email"><i class="fas fa-envelope mr-2"></i>Adresse Email</label>
                                    <input
                                        id="email"
                                       name="email"
                                        type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        required
                                    />
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{'vous devez enter une adresse email'}}
                                    </div>
                                    @enderror
{{--                                    <div class="invalid-feedback">--}}
{{--                                        Vous devez entrer votre adresse email--}}
{{--                                    </div>--}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="card_number"><i class="fas fa-id-card mr-2"></i>Numéro de carte</label>
                                    <input
                                        id="card_number"
                                        name="card_number"
                                        type="number"
                                        class="form-control"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer un numéro de carte
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="phone_number"><i class="fas fa-mobile-alt mr-2"></i>Numéro de telephone</label>
                                    <input
                                        id="phone_number"
                                        name="phone_number"
                                        type="number"
                                        class="form-control"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer un numéro de téléphone
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <a href="{{route('subscribers.index')}}" class="btn btn-outline-primary my-3">
                                    Annuler
                                </a>
                                <button class="btn btn-primary my-3" type="submit">
                                    Ajouter
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Card Body end -->
                </div>
            </div>
        </div>
        <!-- Form end -->
    <!-- Content end -->
@endsection
