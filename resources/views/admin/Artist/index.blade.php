@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@section('type')
    Admin
@endsection
@section('page')
    Dashboard
@endsection

@section('style')
    <style>
        @media (min-width: 971px) {
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
                                <button class="btn bg-gradient-primary btn-sm m-1" data-bs-toggle="modal"
                                        data-bs-target="#newArtist">ADD NEW ARTIST
                                </button>

                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-flush" id="datatable-basic"
                                           style="text-align: center;vertical-align: middle;">
                                        <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                            </th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                                Title
                                            </th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 text-center">
                                                Origin
                                            </th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 text-center">
                                                Genre
                                            </th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 text-center">
                                                Image
                                            </th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 text-center">
                                                Members
                                            </th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 text-center">
                                                Tracking
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
                                            <td class="text-sm font-weight-normal">Lorem Ipsum</td>
                                            <td class="text-sm font-weight-normal text-center">Berlin</td>
                                            <td class="text-sm font-weight-normal text-center">Pop, Electropop</td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <a href="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                   class="cursor-pointer" target="_blank"><img
                                                        src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                                        width="30"></a>
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">1</td>
                                            <td class="text-sm font-weight-normal d-lg-flex mt-3 justify-content-center">
                                                <div class="form-check form-switch  text-center">
                                                    <input class="form-check-input" type="checkbox"
                                                           id="flexSwitchCheckDefault" checked="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Lorem Ipsum</td>
                                            <td class="text-sm font-weight-normal text-center">Berlin</td>
                                            <td class="text-sm font-weight-normal text-center">Pop, Electropop</td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <a href="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                   class="cursor-pointer" target="_blank"><img
                                                        src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                                        width="30"></a>
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">1</td>
                                            <td class="text-sm font-weight-normal d-lg-flex mt-3 justify-content-center">
                                                <div class="form-check form-switch  text-center">
                                                    <input class="form-check-input" type="checkbox"
                                                           id="flexSwitchCheckDefault" checked="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Lorem Ipsum</td>
                                            <td class="text-sm font-weight-normal text-center">Berlin</td>
                                            <td class="text-sm font-weight-normal text-center">Pop, Electropop</td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <a href="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                   class="cursor-pointer" target="_blank"><img
                                                        src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                                        width="30"></a>
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">1</td>
                                            <td class="text-sm font-weight-normal d-lg-flex mt-3 justify-content-center">
                                                <div class="form-check form-switch  text-center">
                                                    <input class="form-check-input" type="checkbox"
                                                           id="flexSwitchCheckDefault" checked="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">Lorem Ipsum</td>
                                            <td class="text-sm font-weight-normal text-center">Berlin</td>
                                            <td class="text-sm font-weight-normal text-center">Pop, Electropop</td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <a href="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                   class="cursor-pointer" target="_blank"><img
                                                        src="{{ asset('assets/img/kal-visuals-square.jpg') }}"
                                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                                        width="30"></a>
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">1</td>
                                            <td class="text-sm font-weight-normal d-lg-flex mt-3 justify-content-center">
                                                <div class="form-check form-switch  text-center">
                                                    <input class="form-check-input" type="checkbox"
                                                           id="flexSwitchCheckDefault" checked="">
                                                </div>
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
    </div>

    <div class="modal fade" id="newArtist" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content bg-dark">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <h6 class="font-weight-bold text-white">Add New Artist</h6>
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
                            <form action="{{ route('admin.add.new.artist') }}" method="post" name="addNewArtist" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="input-group input-group-outline">
                                                <input type="text" name="title" placeholder="Title"
                                                       class="form-control ms-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 mt-3">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="input-group input-group-outline">
                                                <input type="text" name="origin" placeholder="Origin"
                                                       class="form-control ms-1">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            {{--<div class="input-group input-group-outline">--}}
                                            <select class="form-select" name="genre">
                                                <option selected="">Select Genre</option>
                                                <option> Pop</option>
                                                <option> Electropop</option>
                                                <option>Classic</option>
                                                <option>Dance-pop</option>
                                            </select>
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 mt-3">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="input-group input-group-outline">
                                                <input type="text" name="members" placeholder="Members"
                                                       class="form-control ms-1">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <input type="file" name="image" class="d-none">
                                                    <button type="button" class="btn btn-link"
                                                            style="padding-left: 0px !important;color: #04adbf !important;">
                                                        Upload Image
                                                    </button>
                                                </div>
                                                <div class="col-md-6 col-lg-6"><img
                                                        style="float: right;width: 65px;border: 1px solid white;border-radius: 7px;margin-top: 4px;padding: 10px;"
                                                        src="http://127.0.0.1:8000/assets/img/logos/broker%20vision-fin-02.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="col-md-12 col-lg-12 mt-3">
                                    <div class="form-control border dropzone" id="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file"/>
                                        </div>
                                    </div>
                                </div>--}}
                                <div class="col-md-12 col-lg-12">
                                    {{--<div class="row">--}}
                                    <div class="col-md-12 col-lg-12">
                                        <label class="text-bold form-label text-white"> URL</label>
                                        <div class="input-group input-group-outline">
                                            <input type="text" name="url" placeholder="Paste URL here..."
                                                   class="form-control ms-1">
                                        </div>
                                        <p class="py-3" style="padding-bottom: 0rem !important;font-size: 14px;">Click
                                            on: <a style="color: #04adbf !important;" class="cursor-pointer"
                                                   href="http://www.vividaseats.com/"> http://www.vividaseats.com/</a>
                                            copy URL of your favourite artist/band show and paste to start tracking.</p>
                                    </div>
                                    {{--</div>--}}
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="input-group input-group-outline">
                                        <textarea class="form-control" name="description" rows="5"
                                                  placeholder="Description"></textarea>
                                    </div>
                                </div>
                                <div class="text-right col-md-12 text-end mt-3">
                                    <button type="submit" class="btn bg-gradient-primary"> Add</button>
                                </div>
                            </form>
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

    </script>
@endsection
