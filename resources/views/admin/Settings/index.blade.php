@extends('layouts.app')
@section('title') Settings @endsection
@section('type') Admin @endsection
@section('page') Settings @endsection

@section('style')
<style>
    i.fa.fa-angle-right {
        font-size: 15px !important;
    }
</style>
@endsection

@section('content')
    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-md-3 col-lg-3">
                <div class="card sidecard">
                    <div class="card-header pb-0">
                        <h6 class="text-bold text-white">Profile</h6>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-10">
                                        <label onclick="changeoverview(1)"
                                               class="cursor-pointer overview1 text-white text-bold"> Personal
                                            Info</label>
                                    </div>
                                    <div class="col-2">
                                        <i class="fa fa-angle-right overview1 text-xs mt-1 text-white text-bold"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-10">
                                        <label onclick="changeoverview(2)" class="cursor-pointer overview2"> Change
                                            Password</label>
                                    </div>
                                    <div class="col-2">
                                        <i class="fa fa-angle-right overview2 text-xs mt-1"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-10">
                                        <label onclick="changeoverview(4)" class="cursor-pointer overview4"> Genres </label>
                                    </div>
                                    <div class="col-2">
                                        <i class="fa fa-angle-right overview4 text-xs mt-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-9" id="profile1_panel">
                <div class="card">
                    <div class="card-header pt-0 pb-0">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <h6 class="pb-0 py-2 text-bold text-white">Personal Info</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-md-3 col-lg-3">
                                <img src="{{ asset('assets/img/kal-visuals-square.jpg') }}" alt="img-blur-shadow"
                                     class="img-fluid shadow border-radius-lg">
                            </div>
                            <div class="col-md-9 col-lg-9">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="form-label">First Name</label>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label text-white">John</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="form-label">Last Name</label>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label text-white">Doe</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="form-label">Contact</label>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label text-white">(000) 00 000</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="form-label">Email</label>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">:</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label text-white">John@gmail.com</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-lg-9 d-none" id="profile2_panel">
                <div class="card">
                    <div class="card-header pt-0 pb-0">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <h6 class="pb-0 py-2 text-bold text-white">Password Change</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-md-3 col-lg-3">
                                <label class="text-sm pt-2">Current Passowrd</label>
                            </div>
                            <div class="col-md-9 col-lg-9">
                                <div class="input-group input-group-outline">
                                    <input type="password" name="Name" value="12345" class="form-control ms-1">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-3 col-lg-3">
                                <label class="text-sm pt-2">New Passowrd</label>
                            </div>
                            <div class="col-md-9 col-lg-9">
                                <div class="input-group input-group-outline">
                                    <input type="password" name="Name" value="12345" class="form-control ms-1">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-3 col-lg-3">
                                <label class="text-sm pt-2">Confirm New Passowrd</label>
                            </div>
                            <div class="col-md-9 col-lg-9">
                                <div class="input-group input-group-outline">
                                    <input type="password" name="Name" value="12345" class="form-control ms-1">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="text-right col-md-12 text-end">
                                <button type="button" class="btn bg-gradient-primary btn-sm">SAVE CHANGES</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-9 d-none" id="profile3_panel">
                <div class="card">
                    <div class="card-header pt-0 pb-0">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <h6 class="pb-0 py-2 text-bold">Update Personal Info</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">

                            <div class="col-md-12 col-lg-12 py-3">
                                <div class="row">
                                    <div class="col-md-2 col-lg-2">
                                        <label class="text-bold form-label my-2">First Name</label>
                                    </div>
                                    <div class="col-md-10 col-lg-10">
                                        <div class="input-group input-group-outline">
                                            <input type="text" name="Name" value="John" placeholder="First Name..."
                                                   class="form-control ms-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 py-3">
                                <div class="row">
                                    <div class="col-md-2 col-lg-2">
                                        <label class="text-bold form-label my-2">Last Name</label>
                                    </div>
                                    <div class="col-md-10 col-lg-10">
                                        <div class="input-group input-group-outline">
                                            <input type="text" name="Name" value="Doe" placeholder="Last Name..."
                                                   class="form-control ms-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 py-3">
                                <div class="row">
                                    <div class="col-md-2 col-lg-2">
                                        <label class="text-bold form-label my-2">Contact</label>
                                    </div>
                                    <div class="col-md-10 col-lg-10">
                                        <div class="input-group input-group-outline">
                                            <input type="text" name="Name" value="(000) 00 000" placeholder="Contact..."
                                                   class="form-control ms-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 py-3">
                                <div class="row">
                                    <div class="col-md-2 col-lg-2">
                                        <label class="text-bold form-label my-2">Last Name</label>
                                    </div>
                                    <div class="col-md-10 col-lg-10">
                                        <div class="input-group input-group-outline">
                                            <input type="email" name="Name" value="John@gmail.com"
                                                   placeholder="Email..." class="form-control ms-1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12 my-3">
                                <div class="row">
                                    <div class="col-md-2 col-lg-2">
                                        <label class="text-bold form-label">Image</label>
                                    </div>
                                    <div class="col-md-10 col-lg-10">
                                        <div class="form-control border dropzone" id="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right col-md-12 text-end">
                                <button type="button" class="btn btn-primary">Update</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-9 d-none" id="profile4_panel">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header pb-0 pt-3">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6">
                                        <h5 class="pb-0 py-2 text-white"> Genres </h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                                        <button class="btn bg-none text-info btn-sm m-1" data-bs-toggle="modal" data-bs-target="#NEWGENRE"> ADD NEW GENRE</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label">Pop</label>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Classic</label>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Electropop</label>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Dance-pop</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="NEWGENRE" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content bg-dark">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <h6 class="font-weight-bold text-white">Track New Genre</h6>
                            </div>
                            <div class="col-md-6 col-lg-6 text-end">
                                <button type="button" class="btn btn-link text-white font-weight-bold text-lg p-0" onclick="return parent.closewindow();" data-bs-dismiss="modal">&times;</button>
                            </div>
                            <hr />
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <label class="text-bold form-label my-2">Enter Genre</label>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="input-group input-group-outline">
                                            <input type="text" name="Name" placeholder="Pop" class="form-control ms-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right col-md-12 text-end pt-3">
                                <a class="btn bg-gradient-primary btn-sm"> Save</a>
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

        if (document.getElementById('choices-vision')) {
            var vision = document.getElementById('choices-vision');
            const example = new Choices(vision);
        }

        if (document.querySelector('.datetimepicker')) {
            flatpickr('.datetimepicker', {
                allowInput: true
            }); // flatpickr
        }
    </script>
    <script>

        function changeoverview(input){
            if(input===2)
            {
                $("#profile1_panel").addClass("d-none");
                $("#profile2_panel").removeClass("d-none");
                $("#profile3_panel").addClass("d-none");
                $("#profile4_panel").addClass("d-none");

                $(".overview2").addClass("text-white text-bold");
                $(".overview1").removeClass("text-white text-bold");
                $(".overview4").removeClass("text-white text-bold");
            }
            else if(input===3)
            {
                $("#profile1_panel").addClass("d-none");
                $("#profile2_panel").addClass("d-none");
                $("#profile3_panel").removeClass("d-none");
                $("#profile4_panel").removeClass("d-none");

                $(".overview3").addClass("text-white text-bold");
                $(".overview1").removeClass("text-white text-bold");
                $(".overview4").removeClass("text-white text-bold");
            }
            else if(input===4)
            {
                $("#profile1_panel").addClass("d-none");
                $("#profile2_panel").addClass("d-none");
                $("#profile3_panel").addClass("d-none");
                $("#profile4_panel").removeClass("d-none");

                $(".overview1").removeClass("text-white text-bold");
                $(".overview2").removeClass("text-white text-bold");
                $(".overview4").addClass("text-white text-bold");
            }
            else
            {
                $("#profile2_panel").addClass("d-none");
                $("#profile1_panel").removeClass("d-none");
                $("#profile3_panel").addClass("d-none");
                $("#profile4_panel").addClass("d-none");

                $(".overview1").addClass("text-white text-bold");
                $(".overview4").removeClass("text-white text-bold");
                $(".overview2").removeClass("text-white text-bold");
            }
            //$(".selvision").removeClass("d-none");
            //$(".printvision").addClass("d-none");
        }

    </script>
@endsection
