<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logos/broker vision-fin-02.jpeg') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logos/broker vision-fin-02.jpeg') }}">
    <title>@yield('title') | {{config('app.name')}} </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/dist/sweetalert2.min.css') }}">
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet"/>
    @yield('style')
    <style>
        .bg-dark {
            background-color: #1f283e !important;
        }

        .bg-gradient-dark {
            background-image: linear-gradient(195deg, #1a2035 0%, #1a2035 100%);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #1f283e;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, 0.125);
            border-radius: 0.75rem;
        }

        .card-header:first-child {
            border-radius: 0.75rem 0.75rem 0 0;
            background-color: #1f283e;
        }

        .form-check:not(.form-switch) .form-check-input[type="checkbox"]:checked {
            background: #04adbf;
        }

        .form-check:not(.form-switch) .form-check-input[type="checkbox"]:checked, .form-check:not(.form-switch) .form-check-input[type="radio"]:checked {
            border-color: #04adbf;
        }

        .input-group.input-group-dynamic .form-control, .input-group.input-group-dynamic .form-control:focus, .input-group.input-group-static .form-control, .input-group.input-group-static .form-control:focus {
            background-image: linear-gradient(0deg, #04adbf 2px, rgba(156, 39, 176, 0) 0), linear-gradient(0deg, #d2d2d2 1px, rgba(209, 209, 209, 0) 0);
            border-radius: 0 !important;
        }

        .dropzone {
            min-height: 150px;
            background: #191f34;
            padding: 20px 20px;
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

        /* hide arrows Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none !important;
            margin: 0 !important;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield !important;
        }

        .alert-success {
            background-image: linear-gradient(195deg, #04adbf1a 0%, #04adbf 100%) !important;
        }
        .alert-danger {
            background-image: linear-gradient(195deg, #ef535000 0%, #04adbf 100%) !important;
        }
        .is-invalid {
            border: 1px solid #c95064 !important;
        }

        button.close {
            background: none;
            border: none;
        }
        button.swal2-confirm.btn.bg-gradient-success {
            background: #04adbf;
        }
        .swal2-icon.swal2-warning.swal2-icon-show {
            color: #04adbf;
            border-color: #04adbf;
        }
        .swal2-icon.swal2-success {
            border-color: #04adbf;
            color: #04adbf;
        }
        .swal2-icon.swal2-success [class^=swal2-success-line] {
            background-color: #04adbf;
        }
        .pagination {
            float: right;
            margin-right: 10px;
        }
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #04adbf;
            border-color: #04adbf;
        }
    </style>
</head>
