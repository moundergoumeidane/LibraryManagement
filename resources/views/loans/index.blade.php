@extends('layouts.app')

@section('content')
    <!-- Content start -->
        <div class="h3 my-4">Prêts</div>

        <!-- Data Table start -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header start -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                    >
                        <div>
                            <h6 class="m-0 font-weight-bold text-primary">
                                Liste des prêts
                            </h6>
                        </div>
                    </div>
                    <!-- Card Header end -->

                    <!-- Card Body start -->
                    <div class="card-body">
                        <div>
                            <!-- Search start -->
                            <div class="row justify-content-between mb-3">
                                <div class="col-lg-auto">
                                    <a
                                        href="{{route('loans.create')}}"
                                        class="btn btn-primary"
                                    ><i class="fas fa-plus mr-2"></i>Ajouter</a>
                                </div>
                                <div class="col-lg-4">
                                    <form action="">
                                        <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Search"
                                            name="search"
                                            aria-label="Search"
                                            aria-describedby="button-search"
                                        />
                                        <div class="input-group-append">
                                            <button
                                                class="btn btn-outline-secondary"
                                                type="submit"
                                                id="button-search"
                                            >
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- Search end -->
                            <!-- Table start -->
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">Abonné</th>
                                    <th scope="col">Document</th>
                                    <th scope="col">Date Prêt</th>
                                    <th scope="col">Date Remise</th>
                                    <th scope="col">Etat</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($loans as $key => $l)
                                <tr>
                                    <th scope="row">{{$key + 1 }}</th>
                                    <td>{{$l->subscriber->last_name .' '. $l->subscriber->first_name}}</td>
                                    <td>{{$l->document->title}}</td>
                                    <td>{{$l->created_at->format('d-m-Y')}}</td>
                                    <td>{{$l->to->format('d-m-Y')}}</td>
                                    <td>
                                        @if($l->to > now())
                                            <span class="bg-warning text-light px-3 rounded-pill">
                                                Prêté
                                            </span>
                                        @else
                                            <span class="bg-danger text-light px-3 rounded-pill">
                                                Expéré
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/loans/{{$l->id}}" class="text-decoration-none">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="/loans/{{$l->id}}/edit" class="text-decoration-none mx-2">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a onclick="deleteLoan({{$l -> id}})"
                                           class="text-decoration-none"
                                            {{--                                            data-toggle="modal"--}}
                                            {{--                                            data-target="#deleteModal"--}}
                                        >

                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <form action="/loans/{{$l -> id}}" method="post" id="form-delete-{{$l -> id}}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- Table end -->
                            <!-- Pagination start -->
                            <nav class="mt-5">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">6</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Pagination end -->
                        </div>
                    </div>
                    <!-- Card Body end -->
                </div>
            </div>
        </div>
        <!-- Data Table end -->
    <!-- Content end -->
@endsection

@push('js')
    <script>
        const deleteLoan= id=> {
            confirm('Etes vous sur de supprimer cet abonné ?')&& document.getElementById('form-delete-'+id).submit();
        }
    </script>
@endpush
