@extends('layouts.app')
@section('title') Dashboard @endsection
@section('type') Admin @endsection
@section('page') Dashboard @endsection

@section('style')
<style>
    @@media (min-width: 971px) {
        .mysearchdiv {
            max-width: 20%;
        }
    }
</style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-2 panel1">
            <div class="col-md-12 col-lg-12">
                <div class="card" id="card_panel2">
                    <div class="card-header pb-2 pt-3">
                        <div class="row">
                            <div class="col-md-2 col-lg-2">
                                <h6 class="text-white">Users</h6>
                            </div>
                            <div class="col-md-10 col-lg-10 d-lg-flex justify-content-end">
                                <div class="input-group input-group-outline m-1 mysearchdiv">
                                    <label class="form-label">Search here</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-flush" id="datatable-basic" style="text-align: center;vertical-align: middle;">
                                        <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                            </th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Username</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Email</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Contact no</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Location</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Status</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input" id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Terrance Lewis</td>
                                            <td class="text-sm font-weight-normal">Terrance@gmail.com</td>
                                            <td class="text-sm font-weight-normal">(000) 000 000</td>
                                            <td class="text-sm font-weight-normal">San Francisco, CA</td>
                                            <td class="text-sm font-weight-normal text-center">Active</td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <a href="javascript:;" class="btn btn-icon bg-gradient-primary btn-sm" onclick="panelchange(2)"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:;" class="btn btn-icon bg-gradient-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input" id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Terrance Lewis</td>
                                            <td class="text-sm font-weight-normal">Terrance@gmail.com</td>
                                            <td class="text-sm font-weight-normal">(000) 000 000</td>
                                            <td class="text-sm font-weight-normal">San Francisco, CA</td>
                                            <td class="text-sm font-weight-normal text-center">Active</td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <a href="javascript:;" class="btn btn-icon bg-gradient-primary btn-sm" onclick="panelchange(2)"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:;" class="btn btn-icon bg-gradient-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input" id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Terrance Lewis</td>
                                            <td class="text-sm font-weight-normal">Terrance@gmail.com</td>
                                            <td class="text-sm font-weight-normal">(000) 000 000</td>
                                            <td class="text-sm font-weight-normal">San Francisco, CA</td>
                                            <td class="text-sm font-weight-normal text-center">Active</td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <a href="javascript:;" class="btn btn-icon bg-gradient-primary btn-sm" onclick="panelchange(2)"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:;" class="btn btn-icon bg-gradient-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input" id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Terrance Lewis</td>
                                            <td class="text-sm font-weight-normal">Terrance@gmail.com</td>
                                            <td class="text-sm font-weight-normal">(000) 000 000</td>
                                            <td class="text-sm font-weight-normal">San Francisco, CA</td>
                                            <td class="text-sm font-weight-normal text-center">Active</td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <a href="javascript:;" class="btn btn-icon bg-gradient-primary btn-sm" onclick="panelchange(2)"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:;" class="btn btn-icon bg-gradient-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
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
                                    <table class="table table-flush" id="datatable-basic" style="text-align: center;vertical-align: middle;">
                                        <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                {{--<div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input" id="customCheckDisabled">
                                                </div>--}}
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Package</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Billing Month</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Due Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center ">Price</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center ">Status</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center ">Duration</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input" id="customCheckDisabled">
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
                                                    <input type="checkbox" class="form-check-input" id="customCheckDisabled">
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
                                                    <input type="checkbox" class="form-check-input" id="customCheckDisabled">
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
    <script>

        function panelchange(input){
            if(input==2)
            {
                $(".panel2").removeClass("d-none");
                $(".panel1").addClass("d-none");
            }
            else
            {
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

    </script>
@endsection
