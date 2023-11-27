@extends('layouts.app')

@section('content')
    <!-- Content start -->
        <div class="h3 my-4">Modification Document</div>

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
                        <form class="needs-validation" novalidate action="/documents/{{$d-> id}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="title"
                                    ><i class="fas fa-file mr-1"></i>Titre</label
                                    >
                                    <input
                                        id="title"
                                        name="title"
                                        type="text"
                                        value="{{$d -> title}}"
                                        class="form-control"
                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer un titre
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="author"
                                    ><i class="fas fa-user mr-1"></i>Auteur</label
                                    >
                                    <input
                                        id="author"
                                        name="author"
                                        type="text"
                                        value="{{$d -> author}}"
                                        class="form-control"
                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer le nom de l'auteur
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="type"
                                    ><i class="fas fa-file mr-1"></i>Type</label
                                    >
                                    <select
                                        class="form-control"
                                        id="type"
                                        name="type"
                                        value="{{$d->type}}"
                                    >
                                        <option >{{$d -> type}}</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Vous devez séléctionner le type
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="edition"
                                    ><i class="fas fa-building mr-1"></i>Edition</label
                                    >
                                    <input
                                        id="edition"
                                        name="edition"
                                        type="text"
                                        value="{{$d -> edition}}"
                                       class="form-control {{-- @error('edition') is-invalid @enderror--}}"
                                    />
{{--                                    <div class="invalid-feedback">--}}
{{--                                    @error('edition')--}}
{{--                                    {{"Vous devez entrer l'édition"}}--}}
{{--                                    @enderror--}}
{{--                                    </div>--}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="promotion"><i class="fas fa-square mr-1"></i>Promotion</label>
                                    <input
                                        id="promotion"
                                        name="promotion"
                                        type="number"
                                        value="{{$d -> promotion}}"
                                        class="form-control  {{--}}@error('promotion') is-invalid @enderror--}}"
                                    />
{{--                                    <div class="invalid-feedback">--}}
{{--                                    @error('promotion')--}}
{{--                                    {{'Vous devez entrer la promotion'}}--}}
{{--                                    @enderror--}}
{{--                                    </div>--}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="ISBN"
                                    ><i class="fas fa-barcode mr-1"></i>ISBN</label
                                    >
                                    <input
                                        id="ISBN"
                                        name="ISBN"
                                        type="text"
                                        value="{{$d -> ISBN}}"
                                       class="w-100 form-control  {{--@error('ISBN') is-invalid @enderror--}}"
                                    />
{{--                                    @error('ISBN')--}}

{{--                                        {{'Vous devez entrer le ISBN'}}--}}

{{--                                    @enderror--}}
                                    {{--
                                    <div class="invalid-feedback">
                                        Vous devez mettre une description
                                    </div>
                                    --}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="number_of_copies"><i class="fas fa-sort-numeric-up mr-1"></i>Nombre
                                        d'exemplaires</label>
                                    <input
                                        id="number_of_copies"
                                        name="number_of_copies"
                                        type="number"
                                        value="{{$d ->number_of_copies}}"
                                        class="form-control"
                                    />
                                    <div class="invalid-feedback">
                                        Vous devez entrer le nombre d'exemplaires
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="placement"
                                    ><i class="fas fa-thumbtack mr-1"></i>Emplacement</label
                                    >
                                    <input
                                        id="placement"
                                        name="placement"
                                        type="text"
                                        value="{{$d-> placement}}"
                                       class="w-100 form-control  @error('placement') is-invalid @enderror"
                                        placeholder="Rangeé-Numéro-Etagere"
                                    />
                                    @error('placement')
{{--                                    <div class="invalid-feedback">--}}
                                        {{'Vous devez entrer un emplacement'}}
{{--                                    </div>--}}
                                    @enderror
                                </div>

                            </div>

                            <div class="text-right">
                                <a
                                    href="{{route('documents.index')}}"
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

@push('js')

    <script>
        let type = document.getElementById('type');
        let edition = document.getElementById('edition');
        let promotion = document.getElementById('promotion');
        let ISBN = document.getElementById('ISBN');



        type.addEventListener('change',function (e){
            if (e.target.value === 'Mémoire')
            {
                promotion.removeAttribute('disabled')
                edition.setAttribute('disabled','')
                ISBN.setAttribute('disabled','')
            }else {
                promotion.setAttribute('disabled','')
                edition.removeAttribute('disabled')
                ISBN.removeAttribute('disabled')
            }
        })
    </script>

@endpush

