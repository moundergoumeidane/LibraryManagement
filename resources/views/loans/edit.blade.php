@extends('layouts.app')

@section('content')
    <!-- Content start -->
        <div class="h3 my-4">Modification Prêt</div>

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
                        <form class="needs-validation" novalidate action="/loans/{{$l-> id}}" method="post">
                            {{$errors}}
                            @csrf
                            @method('put')
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <p class="mb-2"><i class="fas fa-user mr-1"></i>Abonné :</p>
                                    <p>{{$l->subscriber->last_name .' '. $l->subscriber->first_name}}</p>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <p class="mb-2"><i class="fas fa-file mr-2"></i>Document :</p>
                                    <p>{{$l->document->title}}</p>
                                </div>

{{--                                <div class="col-md-6 mb-3">--}}
{{--                                    <label for="to"><i class="fas fa-calendar mr-1"></i>Date remise</label>--}}
{{--                                        <input--}}
{{--                                            class="form-control"--}}
{{--                                            type="date"--}}
{{--                                            value="{{$l->to->format('d-m-Y')}}"--}}
{{--                                            id="to"--}}
{{--                                            name="to"--}}
{{--                                        >--}}

{{--                                </div>--}}

                                <div class="col-md-12 mb-3">
                                    <label for="comment"
                                    ><i class="fas fa-comment mr-1"></i>Description du prêt </label>
                                    <textarea id="comment" name="comment" class="w-100 form-control" value="{{$l->comment}}" rows="4">{{$l->comment}}</textarea>
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
