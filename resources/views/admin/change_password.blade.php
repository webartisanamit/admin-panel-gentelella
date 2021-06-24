@extends('layouts.admin')
@section('content')

    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Change Password </h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.changePassword') }}" method="POST">
                    @csrf
                    {{-- <h6 class="heading-small text-muted mb-4">User information</h6> --}}
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Current Password</label>
                                    <input class="form-control" id="password-field" type="password" name="current_password"
                                        placeholder="Current Password" required>
                                </div>
                                @error('current_password')
                                    <span class="validation invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">New Password</label>
                                    <input class="form-control" id="password-new" type="password" placeholder="New Password" name="new_password"
                                        required>
                                </div>
                                @error('new_password')
                                    <span class="validation invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Confirm New Password</label>
                                    <input class="form-control" id="password-confirm" type="password" placeholder="Confirm New Password"
                                        name="confirm_password" required>
                                </div>
                                @error('confirm_password')
                                    <span class="validation invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-4"> Submit </button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
