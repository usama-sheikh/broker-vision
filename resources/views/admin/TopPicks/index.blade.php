@extends('layouts.app')
@section('title') Dashboard @endsection
@section('type') Admin @endsection
@section('page') Dashboard @endsection

@section('style')@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header pb-2 pt-1">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <h6 class="pb-0 py-2 text-white">Our top picks</h6>
                                <div class="btn-group">
                                    <button type="button"
                                            class="btn bg-gradient-dark btn-md dropdown-toggle text-xs p-2 pb-1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-sort me-3"></i> Sort by Alphabets
                                    </button>
                                    <ul class="bg-dark  dropdown-menu px-2 py-3 border"
                                        aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">A-Z</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Z-A</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-md-12 py-1">
                                <div class="row py-2 bg-gradient-dark rounded">
                                    <div class="col-md-1 col-lg-1">
                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                             class="img-fluid shadow border-radius-lg">
                                    </div>
                                    <div class="col-md-8 col-lg-8">
                                        <label class="text-bold p-0 text-white m-0 cursor-pointer"
                                               data-bs-toggle="modal" data-bs-target="#ViewTopPicks"> Lewis
                                            Pirates</label>
                                        <p class="text-xs text-white m-0"> United State</p>
                                        <p class="text-xs m-0"> July 20, 2022</p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 text-end">

                                        <div class="btn-group mt-2 mb-0">
                                            <button type="button"
                                                    class="btn bg-gradient-dark  dropdown-toggle text-lg p-2 mt-0 pb-0"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                            </button>
                                            <ul class="bg-dark  dropdown-menu px-2 py-3 border"
                                                aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item border-radius-md" href="#"><i class="fa fa-arrows text-white me-2"></i>Move
                                                        to tracking</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;"
                                                       data-bs-toggle="modal" data-bs-target="#ViewTopPicks"><i
                                                            class="fa fa-eye text-white me-2"></i>View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 py-1">
                                <div class="row py-2 bg-gradient-dark rounded">
                                    <div class="col-md-1 col-lg-1">
                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                             class="img-fluid shadow border-radius-lg">
                                    </div>
                                    <div class="col-md-8 col-lg-8">
                                        <label class="text-bold p-0 text-white m-0 cursor-pointer"
                                               data-bs-toggle="modal" data-bs-target="#ViewTopPicks"> Lewis
                                            Pirates</label>
                                        <p class="text-xs text-white m-0"> United State</p>
                                        <p class="text-xs m-0"> July 20, 2022</p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 text-end">

                                        <div class="btn-group mt-2 mb-0">
                                            <button type="button"
                                                    class="btn bg-gradient-dark  dropdown-toggle text-lg p-2 mt-0 pb-0"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                            </button>
                                            <ul class="bg-dark  dropdown-menu px-2 py-3 border"
                                                aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item border-radius-md" href="{{ route('user.tracking.index') }}"><i class="fa fa-arrows text-white me-2"></i>Move
                                                        to tracking</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;"
                                                       data-bs-toggle="modal" data-bs-target="#ViewTopPicks"><i
                                                            class="fa fa-eye text-white me-2"></i>View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 py-1">
                                <div class="row py-2 bg-gradient-dark rounded">
                                    <div class="col-md-1 col-lg-1">
                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                             class="img-fluid shadow border-radius-lg">
                                    </div>
                                    <div class="col-md-8 col-lg-8">
                                        <label class="text-bold p-0 text-white m-0 cursor-pointer"
                                               data-bs-toggle="modal" data-bs-target="#ViewTopPicks"> Lewis
                                            Pirates</label>
                                        <p class="text-xs text-white m-0"> United State</p>
                                        <p class="text-xs m-0"> July 20, 2022</p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 text-end">

                                        <div class="btn-group mt-2 mb-0">
                                            <button type="button"
                                                    class="btn bg-gradient-dark  dropdown-toggle text-lg p-2 mt-0 pb-0"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                            </button>
                                            <ul class="bg-dark  dropdown-menu px-2 py-3 border"
                                                aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item border-radius-md" href="{{ route('user.tracking.index') }}"><i class="fa fa-arrows text-white me-2"></i>Move
                                                        to tracking</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;"
                                                       data-bs-toggle="modal" data-bs-target="#ViewTopPicks"><i
                                                            class="fa fa-eye text-white me-2"></i>View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 py-1">
                                <div class="row py-2 bg-gradient-dark rounded">
                                    <div class="col-md-1 col-lg-1">
                                        <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                             class="img-fluid shadow border-radius-lg">
                                    </div>
                                    <div class="col-md-8 col-lg-8">
                                        <label class="text-bold p-0 text-white m-0 cursor-pointer"
                                               data-bs-toggle="modal" data-bs-target="#ViewTopPicks"> Lewis
                                            Pirates</label>
                                        <p class="text-xs text-white m-0"> United State</p>
                                        <p class="text-xs m-0"> July 20, 2022</p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 text-end">

                                        <div class="btn-group mt-2 mb-0">
                                            <button type="button"
                                                    class="btn bg-gradient-dark  dropdown-toggle text-lg p-2 mt-0 pb-0"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                            </button>
                                            <ul class="bg-dark  dropdown-menu px-2 py-3 border"
                                                aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item border-radius-md" href="{{ route('user.tracking.index') }}"><i class="fa fa-arrows text-white me-2"></i>Move
                                                        to tracking</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;"
                                                       data-bs-toggle="modal" data-bs-target="#ViewTopPicks"><i
                                                            class="fa fa-eye text-white me-2"></i>View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="ViewTopPicks" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content bg-dark">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <h6 class="font-weight-bold text-white">DETAILS</h6>
                            </div>
                            <div class="col-md-6 col-lg-6 text-end">
                                <button type="button" class="btn btn-link text-white font-weight-bold text-lg p-0"
                                        onclick="return parent.closewindow();" data-bs-dismiss="modal">&times;
                                </button>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                     class="img-fluid shadow border-radius-lg p-2">
                            </div>
                            <div class="col-md-8 col-lg-8">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <h5 class="pb-0 py-2 text-bold text-white">Taylor Smith</h5>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label text-white">Title</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label text-sm">Lorem ipsum</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label text-white">Origin</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label text-sm">Berlin</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label text-white">Genre</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label text-sm">Classic</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label text-white">Description</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-sm">
                                            Lorem ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem
                                            ipsum ipsum lorem ipsum ipsum lorem ipsum
                                            lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum
                                            lorem ipsum.
                                        </p>
                                    </div>
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
@endsection
