@extends('layouts.app')

@section('content')
    <!-- Content start -->
        <div class="h3 my-4">Création Prêt</div>

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
                    <div class="card-body ">
                        <form class="needs-validation" method="post" action="/loans/" novalidate>
                            <div class="form-row">
                                @csrf

                                <div class="col-md-6 mb-3">
                                    <label for="type"
                                    ><i class="fas fa-user mr-1"></i>Abonné</label>
                                    <select
                                        class="form-control"
                                        id="type"
                                        name="subscriber_id"
                                        required
                                    >
                                        @foreach($subs as $s)
                                        <option value="{{$s->id}}">{{$s->last_name . ' ' .$s->first_name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Vous devez choisir un abonné
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="type"
                                    ><i class="fas fa-file mr-1"></i>Document</label>
                                    <select
                                        class="form-control"
                                        id="type"
                                        name="document_id"
                                        required>
                                        @foreach($docs as $d)
                                            <option value="{{$d->id}}">{{$d->title}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Vous devez choisir un document
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="comment"
                                    ><i class="fas fa-comment mr-1"></i>Description du prêt </label>
                                    <textarea id="comment" name="comment" class="w-100 form-control" rows="4"></textarea>
                                </div>

                            </div>

                            <div class="text-right">
                                <a
                                    href="{{route('loans.index')}}"
                                    class="btn btn-outline-primary my-3"
                                >
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

