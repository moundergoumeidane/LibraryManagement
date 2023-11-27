@extends('layouts.app')

@section('content')
    <!-- Content start -->
        <div class="h3 my-4">Modifier Abonné</div>

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
                        <form class="needs-validation" novalidate action="/subscribers/{{$s-> id}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="last_name"><i class="fas fa-user mr-1"></i>Nom</label>
                                    <input
                                        id="last_name"
                                        name="last_name"
                                        type="text"
                                        class="form-control"
                                        value="{{$s->last_name}}"
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
                                        value="{{$s->first_name}}"
                                        class="form-control"
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
                                        value="{{$s->email}}"

                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer votre adresse email
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="card_number"><i class="fas fa-id-card mr-2"></i>Numero de carte</label>
                                    <input
                                        id="card_number"
                                        name="card_number"
                                        type="number"
                                        class="form-control"
                                        value="{{$s->card_number}}"
                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer votre numero de carte
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="phone_number"><i class="fas fa-mobile-alt mr-2"></i>Numero de telephone</label>
                                    <input
                                        id="phone_number"
                                        name="phone_number"
                                        type="number"
                                        class="form-control"
                                        value="{{$s->phone_number}}"
                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer votre numero de telephone
                                    </div>
                                </div>
{{$errors}}
                                <div class="col-md-4 mb-3">
                                    <label for="state"><i class="far fa-question-circle mr-2" ></i>Etat :</label>
                                    <select class="form-control" id="state" name="state" value="{{$s->state}}" >
                                        <option value="1">Active</option>
                                        <option value="0">Pénalisé</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Vous devez entrer votre numero de telephone
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <a href="{{route('subscribers.index')}}" class="btn btn-outline-primary my-3">
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
    <!-- Content end -->
@endsection
