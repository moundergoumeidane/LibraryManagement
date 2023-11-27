<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous"
    />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar start -->
    <div id="sidebar-wrapper" class="bg-primary border-right">
        <div class="sidebar-heading text-center py-3 text-light bg-primary">
            <div><i class="fas fa-book mr-2 mt-4 fa-2x"></i></div>
            <p class="mt-2">
                BIBLIO
                <span class="font-weight-bold">Gestion</span>
            </p>
        </div>
        <div class="list-group list-group-flush bg-primary">
            <a href="/home" class="list-group-item list-group-item-action bg-primary text-light">
                <i class="fas fa-tachometer-alt mr-4"></i>Tableau de bord</a
            >
            <a href="{{route('subscribers.index')}}" class="list-group-item list-group-item-action bg-primary text-light">
                <i class="fas fa-users mr-4"></i>Abonnés</a
            >
            <a href="{{route('documents.index')}}" class="list-group-item list-group-item-action bg-primary text-light">
                <i class="fas fa-book mr-4"></i>Documents</a
            >
            <a href="{{route('loans.index')}}" class="list-group-item list-group-item-action bg-primary text-light">
                <i class="fas fa-exchange-alt mr-4"></i>Prêts</a
            >
        </div>
    </div>
    <!-- Sidebar end -->

    <!-- Dashbaord start -->
    <div id="page-content-wrapper">
        <!-- Main Content start -->
        <div id="content">
            <!-- Navbar start -->
            <nav class="navbar navbar-expand-lg py-3">
                <button class="btn btn-primary" id="menu-toggle">
                    Toggle Menu
                </button>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/profile/index">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="document.getElementById('logout').submit()">Déconnexion</a>

                            <form action="{{route('logout')}}" method="post" id="logout">@csrf</form>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Navbar end -->

            <!-- Content start -->
            <div class="container-fluid">
               @yield('content')
            </div>
            <!-- Content end -->
        </div>
        <!-- Main Content end -->
    </div>
    <!-- Dashbaord end -->
    </div>

<script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"
></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Samedi', 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'],
            datasets: [{
                label: "Nombre d'inscription cette semaine",
                data: [12, 19, 3, 5, 2, 3, 9],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();


</script>
<script>
    //doughnut
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
        type: 'doughnut',
        data: {
            labels: ["Red", "Green", "Grey"],
            datasets: [{
                data: [300, 50,40],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#A8B3C5"]
            }]
        },
        options: {
            responsive: true
        }
    });
</script>
@stack('js')
</body>
</html>
