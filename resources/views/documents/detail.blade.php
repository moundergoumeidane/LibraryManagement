@extends('layouts.app')

@section('content')
    <!-- Content start -->
        <div class="h3 my-4">Detail Document</div>

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
                                Detail du document
                            </h6>
                        </div>
                    </div>
                    <!-- Card Header end -->

                    <!-- Card Body start -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-file mr-1"></i>Titre :</p>
                                    <p>{{$d->title}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-user mr-2"></i>Auteur :</p>
                                    <p>{{$d->author}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-file mr-2"></i>Type :</p>
                                    <p>{{$d->type}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-building mr-2"></i>Edition :</p>
                                    <p>{{$d->edition}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-square mr-2"></i>Promotion :</p>
                                    <p>{{$d->promotion}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-barcode mr-2"></i>ISBN :</p>
                                    <p>{{$d->ISBN}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-sort-numeric-up mr-2"></i>Nombre d'examplaires :</p>
                                    <p>{{$d->number_of_copies}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-thumbtack mr-2"></i>Emplacement :</p>
                                    <p><span class="bg-success text-light px-3 rounded-pill">{{$d->placement}}</span></p>
                                </div>
                            </div>

                            <div class="text-right">
                                <a href="{{route('documents.index')}}" class="btn btn-primary my-3">
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
    <!-- Content end -->
@endsection
