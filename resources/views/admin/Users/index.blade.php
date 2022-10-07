@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@section('type')
    Admin
@endsection
@section('page')
    User
@endsection

@section('style')
    <style>
        @media (min-width: 971px) {
            .mysearchdiv {
                max-width: 20%;
            }
        }

        input.dataTable-input {
            padding: 0.57rem 1rem 0.57rem 1rem;
            background: #1f283e !important;
            width: 170px;
            height: 40px;
            margin-top: 2px;
        }

        .dataTable-dropdown {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"><b>Success!</b> {{ session('success') ?? 'Success' }}</span>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible text-white" role="alert">
                <span class="text-sm"><b>Error!</b> {{ session('error') ?? 'Error' }}</span>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible text-white" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row mt-2 panel1">
            <div class="col-md-12 col-lg-12">
                <div class="card" id="card_panel2">
                    <div class="card-body pt-0">
                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-flush" id="datatable-search"
                                           style="text-align: center;vertical-align: middle;">
                                        <div class="col-md-2 col-lg-2">
                                            <h6 class="text-white" style=" margin-top: 32px; float: left; ">
                                                USERS</h6>
                                        </div>
                                        {{--<button class="btn bg-gradient-primary btn-sm m-1"
                                                style="margin-left: 8px !important;float: right;margin-top: 27px !important;padding: 0.590rem 1rem 0.590rem 1rem;"
                                                data-bs-toggle="modal"
                                                data-bs-target="#newUSER">ADD NEW USER
                                        </button>--}}
                                        <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                            </th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 text-center">Username</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 text-center">Email</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 text-center">Contact no</th>
                                            {{--<th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 text-center">Location</th>--}}
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 text-center">Status</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($users) > 0)
                                            @foreach($users as $user)
                                                <tr class="remove-{{ $user->id ?? '' }}">
                                                    <td class="text-sm font-weight-normal">
                                                        <div class="form-check p-0">
                                                            <input type="checkbox" class="form-check-input" id="customCheckDisabled">
                                                        </div>
                                                    </td>
                                                    <td class="text-sm font-weight-normal">{{ $user->name ?? '' }}</td>
                                                    <td class="text-sm font-weight-normal">{{ $user->email ?? '' }}</td>
                                                    <td class="text-sm font-weight-normal">{{ $user->phone ?? '' }}</td>
                                                    {{--<td class="text-sm font-weight-normal">San Francisco, CA</td>--}}
                                                    <td class="text-sm font-weight-normal text-center">Active</td>
                                                    <td class="text-sm font-weight-normal text-center">
                                                        <button type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="View User"
                                                                class="btn btn-icon bg-gradient-primary btn-sm"
                                                                onclick="panelchange(2)">
                                                            <i class="fa fa-eye"></i>
                                                        </button>
                                                        <button type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Delete User"
                                                                class="btn btn-icon bg-gradient-danger btn-sm delete_user"
                                                                data-id="{{ $user->id ?? ''}}"
                                                                data-action="{{ route('admin.users.destroy', $user->id ?? '')}}">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2 panel2  d-none">
            <div class="col-md-12 col-lg-12">
                <div class="card w-lg-40">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <label class="form-label">First Name</label>
                                    </div>
                                    <div class="col-md-2 col-lg-2">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label class="form-label text-white">John</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <label class="form-label">Last Name</label>
                                    </div>
                                    <div class="col-md-2 col-lg-2">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label class="form-label text-white">Doe</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <label class="form-label">Contact</label>
                                    </div>
                                    <div class="col-md-2 col-lg-2">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label class="form-label text-white">(000) 00 000</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <label class="form-label">Email</label>
                                    </div>
                                    <div class="col-md-2 col-lg-2">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label class="form-label text-white">John@gmail.com</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <label class="form-label">Address</label>
                                    </div>
                                    <div class="col-md-2 col-lg-2">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label class="form-label text-white">United State</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2 panel2 d-none">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body pt-0">
                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-flush" id="datatable-basic"
                                           style="text-align: center;vertical-align: middle;">
                                        <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                {{--<div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input" id="customCheckDisabled">
                                                </div>--}}
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Package
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Billing Month
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Due Date
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center ">
                                                Price
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center ">
                                                Status
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center ">
                                                Duration
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Beginner</td>
                                            <td class="text-sm font-weight-normal">July 02, 2022</td>
                                            <td class="text-sm font-weight-normal">July 02, 2022</td>
                                            <td class="text-sm font-weight-normal text-center">$30.00</td>
                                            <td class="text-sm font-weight-normal text-center text-success">Paid</td>
                                            <td class="text-sm font-weight-normal text-center">2 months</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Beginner</td>
                                            <td class="text-sm font-weight-normal">July 02, 2022</td>
                                            <td class="text-sm font-weight-normal">July 02, 2022</td>
                                            <td class="text-sm font-weight-normal text-center">$30.00</td>
                                            <td class="text-sm font-weight-normal text-center text-danger">Un Paid</td>
                                            <td class="text-sm font-weight-normal text-center">2 months</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Beginner</td>
                                            <td class="text-sm font-weight-normal">July 02, 2022</td>
                                            <td class="text-sm font-weight-normal">July 02, 2022</td>
                                            <td class="text-sm font-weight-normal text-center">$30.00</td>
                                            <td class="text-sm font-weight-normal text-center text-warning">Pending</td>
                                            <td class="text-sm font-weight-normal text-center">2 months</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/plugins/sweetalert.min.js') }}"></script>
    <script>
        const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
            searchable: true,
            fixedHeight: true,
        });

        /*$('#datatable-search').dataTable({
            "lengthChange": false
        });*/

        function panelchange(input) {
            if (input == 2) {
                $(".panel2").removeClass("d-none");
                $(".panel1").addClass("d-none");
            } else {
                $(".panel1").removeClass("d-none");
                $(".panel2").addClass("d-none");
            }
        }

        if (document.querySelector('.datetimepicker')) {
            flatpickr('.datetimepicker', {
                allowInput: true
            });
            // flatpickr
        }

        $('.delete_user').on('click', function (event) {
            event.preventDefault();
            let del_id = $(this).attr('data-id');
            let del_url = $(this).attr('data-action');

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn bg-gradient-success',
                    cancelButton: 'btn bg-gradient-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                showLoaderOnConfirm: true,

                preConfirm: function () {
                    return new Promise(function (resolve) {
                        $.ajax({
                            url: del_url,
                            type: 'Delete',
                            dataType: 'json',
                            data: {
                                _token: "{{ csrf_token() }}"
                            }
                        })
                        .done(function (response) {
                            console.log(response);
                            $(`.remove-${del_id}`).remove();
                            Swal.fire(response.header, response.message, response.status);
                        })
                        .fail(function () {
                            Swal.fire('Oops...', 'Something went wrong! Please try again later.', 'error')
                        });
                    });
                },
                allowOutsideClick: false
            })

        });

    </script>
@endsection
