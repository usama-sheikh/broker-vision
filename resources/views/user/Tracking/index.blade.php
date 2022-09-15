@extends('layouts.app')
@section('title') Tracking @endsection
@section('type') User @endsection
@section('page') Tracking @endsection

@section('style')
    <style>
        .myslider {
            position: absolute;
            top: 15%;
        }
    </style>
    <style>

        @media (min-width: 971px) {
            .mysearchdiv {
                max-width: 20%;
            }
        }

        @media (max-width: 640px) {
            .mrg_top {
                margin-top: 24px !important;
            }
        }

        .accordion-button {
            font-size: 0.9rem !important;
            color: #7b809a;
            text-align: left;
        }

        .accordion .accordion-button {
            margin: 0 auto;
            font-size: 0.9rem !important;
        }

        .taskspan {
            min-width: 62px;
            max-height: 32px;
        }

        .visiontab-cotent {
            max-height: 138px;
        }

        .carousel-control-prev, .carousel-control-next {
            width: 3%;
        }
        .carousel-indicators {
            top: 105%;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card" id="card_panel1">
                    <div class="card-header pb-2 pt-3">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <h5 class="pb-0 py-2 text-white"> Favourites</h5>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                <i class="fa fa-table me-2 text-white bg-success p-2 cursor-pointer rounded"
                                   onclick="panelchange(2)"> </i>
                                <button class="btn bg-gradient-primary btn-sm m-1" data-bs-toggle="modal"
                                        data-bs-target="#NEWARTIST"> TRACK NEW ARTIST
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="row mt-2">
                            <div class="col-12">
                                <div id="favourites" class="carousel slide" data-bs-ride="carousel">

                                    <!-- Indicators/dots -->
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#favourites" data-bs-slide-to="0"
                                                class="active"></button>
                                        <button type="button" data-bs-target="#favourites" data-bs-slide-to="1"></button>
                                        <button type="button" data-bs-target="#favourites" data-bs-slide-to="2"></button>
                                    </div>

                                    <!-- The slideshow/carousel -->
                                    <div class="col-12">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3">
                                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                             alt="img-blur-shadow"
                                                             class="img-fluid shadow border-radius-lg">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                                <p class="text-sm p-0 m-0">United States</p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                                <h6 class=" p-0 m-0 pe-2"><i
                                                                        class="fa fa-star text-warning"></i></h6>
                                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3">
                                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                             alt="img-blur-shadow"
                                                             class="img-fluid shadow border-radius-lg">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                                <p class="text-sm p-0 m-0">United States</p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                                <h6 class=" p-0 m-0 pe-2"><i
                                                                        class="fa fa-star text-warning"></i></h6>
                                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3">
                                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                             alt="img-blur-shadow"
                                                             class="img-fluid shadow border-radius-lg">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                                <p class="text-sm p-0 m-0">United States</p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                                <h6 class=" p-0 m-0 pe-2"><i
                                                                        class="fa fa-star text-warning"></i></h6>
                                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3">
                                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                             alt="img-blur-shadow"
                                                             class="img-fluid shadow border-radius-lg">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                                <p class="text-sm p-0 m-0">United States</p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                                <h6 class=" p-0 m-0 pe-2"><i
                                                                        class="fa fa-star text-warning"></i></h6>
                                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3">
                                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                             alt="img-blur-shadow"
                                                             class="img-fluid shadow border-radius-lg">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                                <p class="text-sm p-0 m-0">United States</p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                                <h6 class=" p-0 m-0 pe-2"><i
                                                                        class="fa fa-star text-warning"></i></h6>
                                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3">
                                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                             alt="img-blur-shadow"
                                                             class="img-fluid shadow border-radius-lg">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                                <p class="text-sm p-0 m-0">United States</p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                                <h6 class=" p-0 m-0 pe-2"><i
                                                                        class="fa fa-star text-warning"></i></h6>
                                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3">
                                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                             alt="img-blur-shadow"
                                                             class="img-fluid shadow border-radius-lg">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                                <p class="text-sm p-0 m-0">United States</p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                                <h6 class=" p-0 m-0 pe-2"><i
                                                                        class="fa fa-star text-warning"></i></h6>
                                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3">
                                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                             alt="img-blur-shadow"
                                                             class="img-fluid shadow border-radius-lg">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                                <p class="text-sm p-0 m-0">United States</p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                                <h6 class=" p-0 m-0 pe-2"><i
                                                                        class="fa fa-star text-warning"></i></h6>
                                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3">
                                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                             alt="img-blur-shadow"
                                                             class="img-fluid shadow border-radius-lg">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                                <p class="text-sm p-0 m-0">United States</p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                                <h6 class=" p-0 m-0 pe-2"><i
                                                                        class="fa fa-star text-warning"></i></h6>
                                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3">
                                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                             alt="img-blur-shadow"
                                                             class="img-fluid shadow border-radius-lg">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                                <p class="text-sm p-0 m-0">United States</p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                                <h6 class=" p-0 m-0 pe-2"><i
                                                                        class="fa fa-star text-warning"></i></h6>
                                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3">
                                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                             alt="img-blur-shadow"
                                                             class="img-fluid shadow border-radius-lg">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                                <p class="text-sm p-0 m-0">United States</p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                                <h6 class=" p-0 m-0 pe-2"><i
                                                                        class="fa fa-star text-warning"></i></h6>
                                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3">
                                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                             alt="img-blur-shadow"
                                                             class="img-fluid shadow border-radius-lg">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                                <p class="text-sm p-0 m-0">United States</p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                                <h6 class=" p-0 m-0 pe-2"><i
                                                                        class="fa fa-star text-warning"></i></h6>
                                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Left and right controls/icons -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#favourites"
                                            data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#favourites"
                                            data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 py-2">
                                <h5 class="text-white">All</h5>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 mb-4">
                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                             class="img-fluid shadow border-radius-lg">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                <p class="text-sm p-0 m-0">United States</p>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                <h6 class=" p-0 m-0 pe-2"><i class="fa fa-star text-warning"></i></h6>
                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 mb-4">
                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                             class="img-fluid shadow border-radius-lg">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                <p class="text-sm p-0 m-0">United States</p>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                <h6 class=" p-0 m-0 pe-2"><i class="fa fa-star text-warning"></i></h6>
                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 mb-4">
                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                             class="img-fluid shadow border-radius-lg">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                <p class="text-sm p-0 m-0">United States</p>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                <h6 class=" p-0 m-0 pe-2"><i class="fa fa-star text-warning"></i></h6>
                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 mb-4">
                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                             class="img-fluid shadow border-radius-lg">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                <p class="text-sm p-0 m-0">United States</p>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                <h6 class=" p-0 m-0 pe-2"><i class="fa fa-star text-warning"></i></h6>
                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 mb-4">
                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                             class="img-fluid shadow border-radius-lg">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                <p class="text-sm p-0 m-0">United States</p>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                <h6 class=" p-0 m-0 pe-2"><i class="fa fa-star text-warning"></i></h6>
                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 mb-4">
                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                             class="img-fluid shadow border-radius-lg">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                <p class="text-sm p-0 m-0">United States</p>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                <h6 class=" p-0 m-0 pe-2"><i class="fa fa-star text-warning"></i></h6>
                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 mb-4">
                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                             class="img-fluid shadow border-radius-lg">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                <p class="text-sm p-0 m-0">United States</p>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                <h6 class=" p-0 m-0 pe-2"><i class="fa fa-star text-warning"></i></h6>
                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 mb-4">
                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                             class="img-fluid shadow border-radius-lg">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <label class="text-white p-0 m-0">Lewis Pirates</label>
                                                <p class="text-sm p-0 m-0">20/10/2022</p>
                                                <p class="text-sm p-0 m-0">United States</p>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                                <h6 class=" p-0 m-0 pe-2"><i class="fa fa-star text-warning"></i></h6>
                                                <p class="text-sm text-white p-0 m-0 pe-2">$30.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 py-3 text-center">
                                        Load more...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card d-none" id="card_panel2">
                    <div class="card-header pb-2 pt-3">
                        <div class="row">
                            <div class="col-md-2 col-lg-2">
                                <h6 class="text-white">Tracking</h6>
                            </div>
                            <div class="col-md-10 col-lg-10 d-lg-flex justify-content-end">
                                <div class="input-group input-group-outline m-1 mysearchdiv">
                                    <label class="form-label">Search here</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn bg-gradient-dark btn-sm m-1 dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        All
                                    </button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn bg-gradient-dark btn-sm m-1 dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        Location
                                    </button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn bg-gradient-dark btn-sm m-1 dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        Artist
                                    </button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn bg-gradient-dark btn-sm m-1 dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        Event Date
                                    </button>
                                </div>
                                <i class="fa fa-box text-white bg-success cursor-pointer p-2 m-2 rounded"
                                   onclick="panelchange(1)"> </i>
                                <button class="btn bg-gradient-primary btn-sm m-1" data-bs-toggle="modal"
                                        data-bs-target="#NEWARTIST">TRACK NEW ARTIST
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-flush " id="datatable-basic"
                                           style="text-align: center;vertical-align: middle;">
                                        <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Artist
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Event Date
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Avenue
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Location
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Price
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action
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
                                            <td class="text-sm font-weight-normal">Terrance Lewis</td>
                                            <td class="text-sm font-weight-normal">20/10/2022</td>
                                            <td class="text-sm font-weight-normal">Berlin</td>
                                            <td class="text-sm font-weight-normal">San Francisco, CA</td>
                                            <td class="text-sm font-weight-normal">$30.00</td>
                                            <td class="text-sm font-weight-normal text-center">Favourites</td>
                                            <td class="text-sm font-weight-normal text-center"><a href="{{ route('user.tracking.artist.index',1) }}" class="btn
                                                btn-icon bg-gradient-primary btn-sm"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Terrance Lewis</td>
                                            <td class="text-sm font-weight-normal">20/10/2022</td>
                                            <td class="text-sm font-weight-normal">Berlin</td>
                                            <td class="text-sm font-weight-normal">San Francisco, CA</td>
                                            <td class="text-sm font-weight-normal">$30.00</td>
                                            <td class="text-sm font-weight-normal text-center">-</td>
                                            <td class="text-sm font-weight-normal text-center"><a href="{{ route('user.tracking.artist.index',1) }}" class="btn
                                                btn-icon bg-gradient-primary btn-sm"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Terrance Lewis</td>
                                            <td class="text-sm font-weight-normal">20/10/2022</td>
                                            <td class="text-sm font-weight-normal">Berlin</td>
                                            <td class="text-sm font-weight-normal">San Francisco, CA</td>
                                            <td class="text-sm font-weight-normal">$30.00</td>
                                            <td class="text-sm font-weight-normal text-center">Favourites</td>
                                            <td class="text-sm font-weight-normal text-center"><a href="{{ route('user.tracking.artist.index',1) }}" class="btn
                                                btn-icon bg-gradient-primary btn-sm"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Terrance Lewis</td>
                                            <td class="text-sm font-weight-normal">20/10/2022</td>
                                            <td class="text-sm font-weight-normal">Berlin</td>
                                            <td class="text-sm font-weight-normal">San Francisco, CA</td>
                                            <td class="text-sm font-weight-normal">$30.00</td>
                                            <td class="text-sm font-weight-normal text-center">-</td>
                                            <td class="text-sm font-weight-normal text-center"><a href="{{ route('user.tracking.artist.index',1) }}" class="btn
                                                btn-icon bg-gradient-primary btn-sm"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Terrance Lewis</td>
                                            <td class="text-sm font-weight-normal">20/10/2022</td>
                                            <td class="text-sm font-weight-normal">Berlin</td>
                                            <td class="text-sm font-weight-normal">San Francisco, CA</td>
                                            <td class="text-sm font-weight-normal">$30.00</td>
                                            <td class="text-sm font-weight-normal text-center">Favourites</td>
                                            <td class="text-sm font-weight-normal text-center"><a href="{{ route('user.tracking.artist.index',1) }}" class="btn
                                                btn-icon bg-gradient-primary btn-sm"><i class="fa fa-eye"></i></a></td>
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

    <div class="modal fade" id="NEWARTIST" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content bg-dark">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <h6 class="font-weight-bold text-white"> Track New Artist</h6>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                <button type="button" class="btn btn-link text-white font-weight-bold" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-md ms-3 cursor-pointer"></i>
                                </button>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <label class="text-bold form-label text-white"> URL</label>
                                        <div class="input-group input-group-outline">
                                            <input type="text" name="Name" placeholder="Paste URL here..."
                                                   class="form-control ms-1">
                                        </div>
                                        <p class="py-3">Click on: <a class="text-info cursor-pointer"
                                                                     href="http://www.vividaseats.com/">http://www.vividaseats.com/</a>
                                            copy URL of your favourite artist/band show and paste to start tracking.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right col-md-12 text-end">
                                <a href="{{ route('user.tracking.artist.index',1) }}" class="btn bg-gradient-primary"> Save</a>
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
        function panelchange(input) {
            if (input === 1) {
                $("#card_panel1").removeClass("d-none");
                $("#card_panel2").addClass("d-none");
            } else {
                $("#card_panel1").addClass("d-none");
                $("#card_panel2").removeClass("d-none");
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
