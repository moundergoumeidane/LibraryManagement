@extends('layouts.app')

@section('content')
    <!-- Content start -->
        <div class="h3 my-4">Détail prêt</div>

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
                                Détail du prêt
                            </h6>
                        </div>
                    </div>
                    <!-- Card Header end -->

                    <!-- Card Body start -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-user mr-1"></i>Abonné :</p>
                                    <p>{{$l->subscriber->last_name .' '. $l->subscriber->first_name}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-file mr-2"></i>Document :</p>
                                    <p>{{$l->document->title}}</p>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <p class="mb-2"><i class="fas fa-comment mr-1"></i>Description du prêt :</p>
                                    <p>{{$l-> comment}}</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <a href="{{route('loans.index')}}" class="btn btn-primary my-3">
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
