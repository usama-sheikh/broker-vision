@extends('layouts.app')
@section('title') Top Picks @endsection
@section('type') User @endsection
@section('page') Top Picks @endsection

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
                            @if(count($topPicks) > 0)
                                {{--@php ($sr = $topPicks->perPage() * ($topPicks->currentPage() - 1) + 1)--}}
                                @foreach($topPicks as $topPick)
                                    <div class="col-md-12 py-1">
                                        <div class="row py-2 bg-gradient-dark rounded">
                                            <div class="col-md-1 col-lg-1">
                                                <img src="{{ $topPick->getArtistImage() ?? '' }}"
                                                     alt="img-blur-shadow" style="height: 62px;"
                                                     class="img-fluid shadow border-radius-lg">
                                            </div>
                                            <div class="col-md-8 col-lg-8">
                                                <label class="text-bold p-0 text-white m-0 cursor-pointer"
                                                       data-bs-toggle="modal" data-bs-target="#ViewTopPicks"> {{ $topPick->title ?? '' }}</label>
                                                <p class="text-xs text-white m-0"> {{ $topPick->origin ?? '' }}</p>
                                                <p class="text-xs m-0"> {{ \Carbon\Carbon::parse($topPick->created_at)->diffForHumans() ?? '' }}</p>
                                            </div>
                                            <div class="col-md-3 col-lg-3 text-end">

                                                <div class="btn-group mt-2 mb-0">
                                                    <button type="button"
                                                            class="btn bg-gradient-dark  dropdown-toggle text-lg p-2 mt-0 pb-0"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                    </button>
                                                    <ul class="bg-dark  dropdown-menu px-2 py-3 border"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item border-radius-md" href="#"><i
                                                                    class="fa fa-arrows text-white me-2"></i>Move
                                                                to tracking</a></li>
                                                        <li><a class="dropdown-item border-radius-md viewTopPicDetail"
                                                               href="javascript:;"
                                                               data-title="{{ $topPick->title ?? '' }}"
                                                               data-origin="{{ $topPick->origin ?? '' }}"
                                                               data-genre="{{ $topPick->genre ?? '' }}"
                                                               data-members="{{ $topPick->members ?? '' }}"
                                                               data-description="{{ $topPick->description ?? '' }}"
                                                               data-image="{{ $topPick->getArtistImage() ?? '' }}"
                                                            ><i class="fa fa-eye text-white me-2"></i>View</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    @if ($topPicks->hasPages())
                        {{ $topPicks->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ViewTopPicks" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         role="dialog" aria-labelledby="exampleModalLabel"
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
                                     class="img-fluid shadow border-radius-lg p-2 imageTopPick">
                            </div>
                            <div class="col-md-8 col-lg-8">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <h5 class="pb-0 py-2 text-bold text-white titleTopPick"></h5>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label text-white">Title</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label text-sm titleTopPick"></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label text-white">Origin</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label text-sm originTopPick"></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label text-white ">Genre</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label text-sm genreTopPick"></label>
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
                                        <p class="text-sm descriptionTopPick"></p>
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

    <script>
        $(document).on('click','.viewTopPicDetail', function (){
            let title = $(this).attr('data-title');
            let origin = $(this).attr('data-origin');
            let genre = $(this).attr('data-genre');
            let members = $(this).attr('data-members');
            let description = $(this).attr('data-description');
            let image = $(this).attr('data-image');

            $('.titleTopPick').html(title);
            $('.originTopPick').html(origin);
            $('.genreTopPick').html(genre);
            $('.membersTopPick').html(members);
            $('.descriptionTopPick').html(description);
            $('.imageTopPick').attr('src',image);

            $('#ViewTopPicks').modal('show')
        });
    </script>
@endsection
