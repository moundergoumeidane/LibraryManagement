@extends('layouts.app')

@section('content')
    <!-- Content start -->
    <div class="container-fluid">
        <div class="h3 my-4">Détail profile</div>

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
                                Détail du profile
                            </h6>
                        </div>
                    </div>
                    <!-- Card Header end -->

                    <!-- Card Body start -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-user-friends mr-1"></i>Nom :</p>
                                    <p>{{$user->last_name}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-user mr-2"></i>Prénom :</p>
                                    <p>{{$user->first_name}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-envelope mr-2"></i>Adresse Email :</p>
                                    <p>{{$user->email}}</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <a href="/home" class="btn btn-outline-primary my-3">
                                    Retour
                                </a>
                                <a href="/profile/edit" class="btn btn-primary my-3">
                                    Modifier
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
