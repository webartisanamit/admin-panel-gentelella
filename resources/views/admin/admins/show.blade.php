@extends('layouts.admin')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Customer information</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ $user->name }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.users.index') }}">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="col-auto">
                                            <img alt="Image placeholder" src="{{ $user->profile_photo_url }}" class="avatar rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="form-control-label col-md-3" for="input-email">Email address:</label>
                                            <div class="col-md-9"> {{ $user->email }} </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="form-control-label col-md-3" for="input-first-name">First name:</label>
                                            <div class="col-md-9">
                                                {{ $user->first_name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="form-control-label col-md-3" for="input-last-name">Last name:</label>
                                            <div class="col-md-9">
                                                {{ $user->last_name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="form-control-label col-md-3" for="input-last-name">Phone Number:</label>
                                            <div class="col-md-9">
                                                {{ $user->country_code }} {{ $user->phone_number }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="form-control-label col-md-3" for="input-last-name">Active:</label>
                                            <div class="col-md-9">
                                                {{ $user->active ? 'Active' : 'Inactive' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="form-control-label col-md-3" for="input-last-name">Profile Completed:</label>
                                            <div class="col-md-9">
                                                {{ $user->profile_setup == 1 ? 'Yes' : 'No' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="form-control-label col-md-3">Account Type:</label>
                                            <div class="col-md-9">
                                                {{ $user->account_type ?? '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($user->account_type == 'corporate' && $user->userCorporate)
                                <h3 class="mb-3">Corporate Details</h3>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3">Corporate Name:</label>
                                                <div class="col-md-9">
                                                    {{ $user->userCorporate->corporate_name ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3">Owner Name:</label>
                                                <div class="col-md-9">
                                                    {{ $user->userCorporate->owner_name ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3">Email:</label>
                                                <div class="col-md-9">
                                                    {{ $user->userCorporate->email ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3">Unique ID:</label>
                                                <div class="col-md-9">
                                                    {{ $user->userCorporate->unique_id ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3">Contact Details:</label>
                                                <div class="col-md-9">
                                                    {{ $user->userCorporate->contact_details ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3">Address:</label>
                                                <div class="col-md-9">
                                                    {{ $user->userCorporate->address ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
