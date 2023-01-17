<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="icon" type="image/png" href="{{$url}}/img/favicon/jrCodeStudio.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" width="100%;">
                </div>

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    @if (session()->has('loginError'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span>{{ session('loginError') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">LOGIN</p>
                    </div>
                    <form method="post" action="/auth/login">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Masukan email" required>
                            <!-- <label class="form-label" for="form3Example3">Email address</label> -->
                            @error('email')
                                <div class="invalid-feedback mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-outline mb-3">
                            <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Masukan Password" required>
                            <!-- <label class="form-label" for="form3Example4">Password</label> -->
                            @error('password')
                                <div class="invalid-feedback mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2 mb-3">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; width: 100%;">Login</button>
                        </div>
                    </form>
                    <div>
                        <a href="/" class="btn btn-primary w-100 fs-5">Cancel</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-center py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2022 - by Bootcamp Student jrCodeStudio.com
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a href="#!" class="text-white me-4">
                    <!-- <i class="fab fa-facebook-f"></i> -->
                </a>
                <a href="#!" class="text-white me-4">
                    <!-- <i class="fab fa-twitter"></i> -->
                </a>
                <a href="#!" class="text-white me-4">
                    <!-- <i class="fab fa-google"></i> -->
                </a>
                <a href="#!" class="text-white">
                    <!-- <i class="fab fa-linkedin-in"></i> -->
                </a>
            </div>
            <!-- Right -->
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>