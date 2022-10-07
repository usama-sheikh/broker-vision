@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@section('type')
    Admin
@endsection
@section('page')
    Artist
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
                    {{--<div class="card-header pb-2 pt-3">
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
                    </div>--}}
                    <div class="card-body pt-0">
                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-flush" id="datatable-search"
                                           style="text-align: center;vertical-align: middle;">
                                        <div class="col-md-2 col-lg-2">
                                            <h6 class="text-white" style=" margin-top: 32px; float: left; ">ARTIST</h6>
                                        </div>
                                        <button class="btn bg-gradient-primary btn-sm m-1" style="margin-left: 8px !important;float: right;margin-top: 27px !important;padding: 0.590rem 1rem 0.590rem 1rem;" data-bs-toggle="modal"
                                                data-bs-target="#newArtist">ADD NEW ARTIST
                                        </button>
                                        <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                            </th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 text-center">
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
                                        @if(count($artists) > 0)
                                            {{--@php ($sr = $artists->perPage() * ($artists->currentPage() - 1) + 1)--}}
                                            @foreach($artists as $artist)
                                            <tr>
                                            <td class="text-sm font-weight-normal">
                                                <div class="form-check p-0">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="customCheckDisabled">
                                                </div>
                                            </td>
                                            <td class="text-sm font-weight-normal">{{ $artist->title ?? '' }}</td>
                                            <td class="text-sm font-weight-normal text-center">{{ $artist->origin ?? '' }}</td>
                                            <td class="text-sm font-weight-normal text-center">{{ $artist->genre ?? '' }}</td>
                                            <td class="text-sm font-weight-normal text-center">
                                                <a href="{{ $artist->getArtistImage() ?? '' }}"
                                                   class="cursor-pointer" target="_blank"><img
                                                        src="{{ $artist->getArtistImage() ?? '' }}"
                                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                                        style=" height: 34px !important; width: 50px !important; "></a>
                                            </td>
                                            <td class="text-sm font-weight-normal text-center">{{ $artist->members ?? '' }}</td>
                                            <td class="text-sm font-weight-normal d-lg-flex mt-3 justify-content-center">
                                                <div class="form-check form-switch  text-center">
                                                    <input class="form-check-input tracking_status" type="checkbox"
                                                           data-tracking-id="{{ $artist->id ?? ''}}"
                                                        {{ $artist->tracking == '1' ? 'checked' : '' }}>
                                                    <span id="tracking_status_loader_{{ $artist->id ?? '' }}"></span>
                                                </div>
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
                            <form action="{{ route('admin.add.new.artist') }}" method="post" name="addNewArtist"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="input-group input-group-outline">
                                                <input type="text" name="title" placeholder="Title"
                                                       class="form-control ms-1 @error('title') is-invalid @enderror">
                                                @error('title')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 mt-3">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="input-group input-group-outline">
                                                <input type="text" name="origin" placeholder="Origin"
                                                       class="form-control ms-1 @error('origin') is-invalid @enderror">
                                                @error('origin')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            {{--<div class="input-group input-group-outline">--}}
                                            <select class="form-select @error('genre') is-invalid @enderror"
                                                    name="genre">
                                                <option value="" selected="">Select Genre</option>
                                                <option value="1"> Pop</option>
                                            </select>
                                            {{--</div>--}}
                                            @error('genre')
                                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 mt-3">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="input-group input-group-outline">
                                                <input type="number" name="members" placeholder="Members"
                                                       class="form-control ms-1 @error('members') is-invalid @enderror">
                                                @error('members')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <input id="uploadImage" type="file" name="image"
                                                           class="form-control ms-1 d-none">
                                                    <button id="slectImageBtn" type="button" class="btn btn-link"
                                                            style="padding-left: 0px !important;color: #04adbf !important;">
                                                        Upload Image
                                                    </button>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <img id="uploadImagePreview"
                                                         style="float: right;width: 65px;border: 1px solid white;border-radius: 7px;margin-top: 4px;padding: 10px;"
                                                         src="{{ asset('assets/img/logos/broker vision-fin-02.png') }}">
                                                </div>
                                            </div>
                                            @error('image')
                                            <span class="invalid-feedback"
                                                  style="display: block !important; margin-top: -12px !important;"
                                                  role="alert">{{ $message }}</span>
                                            @enderror
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
                                                   class="form-control ms-1 @error('url') is-invalid @enderror">
                                            @error('url')
                                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                            @enderror
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
                                        <textarea class="form-control @error('url') is-invalid @enderror"
                                                  name="description" rows="5"
                                                  placeholder="Description"></textarea>
                                        @error('url')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                        @enderror
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
        const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
            searchable: true,
            fixedHeight: true,
        });

        $('#datatable-search').dataTable( {
            "lengthChange": false
        });
    </script>

    <script>
        function panelchange(input) {
            if (input === 2) {
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

        $(document).on('click', '#slectImageBtn', function () {
            $('#uploadImage').trigger('click');
        });

        $(document).on('change', '#uploadImage', function () {
            let file = $('#uploadImage')[0].files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#uploadImagePreview').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });

        $(document).on('change', '.tracking_status', function () {
            let status;
            let tracking_id = $(this).attr('data-tracking-id');
            if ($(this).is(':checked')) {
                status = 1;
            } else {
                status = 0;
            }
            $.ajax({
                url: '{{ route("admin.artist.tracking.status") }}',
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'status': status,
                    'tracking_id': tracking_id,
                },
                dataType: 'json',
                cache: false,

                beforeSend: function () {
                    $(`#tracking_status_loader_${tracking_id}`).html('<i class="fa fa-spinner fa-spin"></i>');
                    $(this).prop('disabled', true);
                },
                success: function (response) {
                    if (response.status === 200) {
                        $.notify({
                            message: response.message
                        }, {
                            // settings
                            type: 'success',
                            animate: {
                                enter: 'animated bounceInDown',
                                exit: 'animated bounceOutUp'
                            }
                        });
                    } else {
                        $.notify({
                            message: response.message
                        }, {
                            // settings
                            type: 'danger',
                            animate: {
                                enter: 'animated bounceInDown',
                                exit: 'animated bounceOutUp'
                            }
                        });
                        // location.reload();
                    }
                },
                complete: function (data) {
                    $(`#tracking_status_loader_${tracking_id}`).html('');
                    $(this).prop('disabled', false);
                }
            });

        });
    </script>
@endsection
