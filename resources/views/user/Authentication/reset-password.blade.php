<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logos/broker vision-fin-02.jpeg') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logos/broker vision-fin-02.jpeg') }}">
    <title>
        Rest Password | {{config('app.name')}}
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.0.2') }}" rel="stylesheet"/>
    <style>
        .bg-dark {
            background-color: #1f283e !important;
        }

        .bg-gradient-dark {
            background-image: linear-gradient(195deg, #1a2035 0%, #1a2035 100%);
        }

        input.form-control {
            color: white !important;
        }

        .input-group.input-group-outline.is-focused .form-label + .form-control, .input-group.input-group-outline.is-filled .form-label + .form-control {
            border-color: #04adbf !important;
            border-top-color: transparent !important;
            box-shadow: inset 1px 0 #04adbf, inset -1px 0 #04adbf, inset 0 -1px #04adbf !important;
        }

        .input-group.input-group-outline.is-focused .form-label, .input-group.input-group-outline.is-filled .form-label {
            color: #04adbf !important;
        }

        .input-group.input-group-outline.is-focused .form-label:before, .input-group.input-group-outline.is-focused .form-label:after, .input-group.input-group-outline.is-filled .form-label:before, .input-group.input-group-outline.is-filled .form-label:after {
            border-top-color: #04adbf !important;
            box-shadow: inset 0 1px #04adbf !important;
        }
    </style>
</head>

<body class="bg-gray-200">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="">
            <img src="{{ asset('assets/img/logos/broker vision-fin-02.png') }}" width="154"/>
        </a>
    </div>
</nav>
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100"
         style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card bg-dark z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header bg-dark p-0 mt-n4 mb-0 p-3">
                            <div class="bg-dark border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-normal text-center mt-2 mb-0">Reset Your Password</h4>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible text-white" role="alert">
                                    <span class="text-sm"><b>Success!</b> {{ session('status') ?? 'Success' }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                            data-bs-dismiss="alert"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                    <span class="text-sm"><b>Error!</b> {{ session('error') ?? 'Error' }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                            data-bs-dismiss="alert"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <form role="form" class="text-start" method="POST" action="{{ route('password.update') }}"
                                  autocomplete="off">
                            @csrf
                            <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email', $request->email) }}" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           name="password_confirmation">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-primary w-100 my-2 mb-2">Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<!-- Kanban scripts -->
<script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script src="{{ asset("assets/js/material-dashboard.min.js?v=3.0.2") }}"></script>
</body>
</html>
