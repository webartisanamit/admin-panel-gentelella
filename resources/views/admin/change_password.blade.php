@extends('layouts.admin')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Change Password</h3>
        </div>
        <div class="title_right">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Change Password Form</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form" data-parsley-validate>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="current-password">Current Password * :</label>
                                    <input type="password" id="current-password" class="form-control" name="current_password" required />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="new-password">New Password * :</label>
                                    <input type="password" id="new-password" class="form-control" name="password" required />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="confirm-password">Confirm New Password * :</label>
                                    <input type="password" id="confirm-password" class="form-control" name="password_confirmation" data-parsley-trigger="change" required />
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
