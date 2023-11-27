@extends('layouts.app')

@section('content')
    <!-- Content start -->
        <div class="h3 my-4">Détail Abonné</div>

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
                                Détail de l'abonné
                            </h6>
                        </div>
                    </div>
                    <!-- Card Header end -->

                    <!-- Card Body start -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-user mr-1"></i>Nom :</p>
                                    <p>{{$s->last_name}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-user mr-2"></i>Prénom :</p>
                                    <p>{{$s->first_name}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-envelope mr-2"></i>Adresse Email :</p>
                                    <p>{{$s->email}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-id-card mr-2"></i>Numéro de carte :</p>
                                    <p>{{$s->card_number}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-mobile-alt mr-2"></i>Numéro de telephone :</p>
                                    <p>{{$s->phone_number}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="far fa-question-circle mr-2"></i>Etat :</p>
                                    <p>
                                        <span class="bg-success text-light px-3 rounded-pill">
                                                Active
                                        </span></p>
                                </div>
                            </div>
                            <div class="text-right">
                                <a href="{{route('subscribers.index')}}" class="btn btn-primary my-3">
                                    Retour
                                </a>
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
