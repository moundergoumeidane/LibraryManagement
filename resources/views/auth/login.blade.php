<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous"
    />
    <title>Login</title>
</head>
<body>


<!--Login start-->
<section id="login">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="login-box col-lg-5 p-5 bg-light">
                <div class="h1 text-center mb-5">
                    <i class="fas fa-book fa-2x text-primary"></i>
                </div>
                <form class="needs-validation" action="login" method="post" novalidate>

                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <input
                                placeholder="Adresse Email"
                                type="email"
                                name="email"
                                class="form-control"
                                required
                            />
                            <div class="invalid-feedback">
                                Vous devez entrer une adresse email
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <input
                                placeholder="Mot de Passe"
                                type="password"
                                name="password"
                                class="form-control"
                                required
                            />
                            <div class="invalid-feedback">
                                Vous devez entrer un mot de passe
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary d-block w-100 my-3" type="submit">
                        Se connecter
                    </button>
                    <div class="text-center">
                        <a href="{{route('password.request')}}">Mot de passe oublié ?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Login start-->

<script src="/assets/js/bootstrap.min.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        "use strict";
        window.addEventListener(
            "load",
            function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName("needs-validation");
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (
                    form
                ) {
                    form.addEventListener(
                        "submit",
                        function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add("was-validated");
                        },
                        false
                    );
                });
            },
            false
        );
    })();
</script>
</body>
</html>
