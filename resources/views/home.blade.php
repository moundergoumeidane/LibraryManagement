@extends('layouts.app')

@section('content')
    <!-- Content start -->
    <div class="h3 my-4">Tableau de bord</div>

    <!-- Crd start -->
    <div class="row">
        <div class="col-lg-4 px-3">
            <div
                class="px-5 py-4 crd crd-primary d-flex align-items-center"
            >
                <div class="mr-5">
                    <i class="fas fa-users fa-3x text-primary"></i>
                </div>
                <div>
                    <p class="mt-0 mb-2 text-primary text-capitalize">
                        Abonnés
                    </p>
                    <div class="h3 font-weight-bold my-0">
                        <?php use App\Http\Controllers\SubscriberController;
                        echo SubscriberController::countsubs(); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 px-3">
            <div
                class="px-5 py-4 crd crd-success d-flex align-items-center"
            >
                <div class="mr-5">
                    <i class="fas fa-book fa-3x text-success"></i>
                </div>
                <div>
                    <p class="mt-0 mb-2 text-success text-capitalize">
                        Documents
                    </p>
                    <div class="h3 font-weight-bold my-0">
                        <?php use App\Http\Controllers\DocumentController;
                        echo DocumentController::countdocs(); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 px-3">
            <div
                class="px-5 py-4 crd crd-warning d-flex align-items-center"
            >
                <div class="mr-5">
                    <i class="fas fa-exchange-alt fa-3x text-warning"></i>
                </div>
                <div>
                    <p class="mt-0 mb-2 text-warning text-capitalize">Prêts</p>
                    <div class="h3 font-weight-bold my-0">
                        <?php use App\Http\Controllers\LoanController;
                        echo LoanController::countloans(); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Crd end -->

    <div class="h3 my-4">Graphes</div>

    <!-- Graphs start -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                >
                    <h6 class="m-0 font-weight-bold text-primary">Graphe</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header start -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                >
                    <h6 class="m-0 font-weight-bold text-primary">Graphe</h6>
                </div>
                <!-- Card Header end -->
                <!-- Card Body start -->
                <div class="card-body">
                    <canvas id="doughnutChart"></canvas>
                </div>
                <!-- Card Header end -->
            </div>
        </div>
    </div>
    <!-- Graphs end -->
    <!-- Content end -->
@endsection
