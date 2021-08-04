@extends('layouts.admin')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Admins</h3>
        </div>
        <div class="title_right">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Admin Form</h2>
                    <a class="btn btn-success btn-sm pull-right" href="{{ route('admin.admins.index') }}">
                        <i class="fa fa-list"></i> List
                    </a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form" data-parsley-validate>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="profile-picture-upload">
                                        <img src="" alt="Profile picture preview" class="imagePreview">
                                        <button class="upload-button mode-upload" type="button">Upload avatar</button>
                                        <input type="file" class="hidden-inputfile upload-image" accept="image/*" name="profile_photo" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstname">First Name * :</label>
                                    <input type="text" id="firstname" class="form-control" name="first_name" required />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Last Name * :</label>
                                    <input type="text" id="lastname" class="form-control" name="last_name" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email * :</label>
                                    <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number * :</label>
                                    <input type="text" id="phone" class="form-control" name="phone_number" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password">Password * :</label>
                                    <input type="password" id="password" class="form-control" name="password" required />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="passwordconfirmation">Confirm Password * :</label>
                                    <input type="password" id="passwordconfirmation" class="form-control" name="password_confirmation" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <button type="Submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('extra_scripts')
    <script src="{{ asset('assets/js/upload-file.js') }}"></script>
@endsection
