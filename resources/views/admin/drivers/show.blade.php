@extends('layouts.admin')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">User information</h6>
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
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.drivers.index') }}">
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
                                            <img alt="Image placeholder" src="{{ $user->profile_photo_url }}"
                                                class="avatar rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="form-control-label col-md-3" for="input-email">Email
                                                address:</label>
                                            <div class="col-md-9"> {{ $user->email }} </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="form-control-label col-md-3" for="input-first-name">First
                                                name:</label>
                                            <div class="col-md-9">
                                                {{ $user->first_name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="form-control-label col-md-3" for="input-last-name">Last
                                                name:</label>
                                            <div class="col-md-9">
                                                {{ $user->last_name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="form-control-label col-md-3" for="input-last-name">Phone
                                                Number:</label>
                                            <div class="col-md-9">
                                                {{ $user->country_code ?? '' }} {{ $user->phone_number ?? '' }}
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
                                            <label class="form-control-label col-md-3" for="input-last-name">Profile
                                                Completed:</label>
                                            <div class="col-md-9">
                                                {{ $user->profile_setup == 1 ? 'Yes' : 'No' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($user->userBankDetail)
                                <h3 class="mb-3">Bank Details</h3>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3">Account Number:</label>
                                                <div class="col-md-9">
                                                    {{ $user->userBankDetail->account_number ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3">Account Holder Name:</label>
                                                <div class="col-md-9">
                                                    {{ $user->userBankDetail->holder_name ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3">Swift Code:</label>
                                                <div class="col-md-9">
                                                    {{ $user->userBankDetail->swift_code ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($user->userDocument)
                                <h3 class="mb-3">User Documents</h3>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3">DL Number:</label>
                                                <div class="col-md-9">
                                                    {{ $user->userDocument->driving_license_number ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3 dl_label">DL Front Image:</label>
                                                <div class="col-md-9">
                                                    <img alt="Responsive image" src="{{ $user->userDocument->driving_license_front_path }}"
                                                        class="dl_img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3 dl_label">DL Back Image:</label>
                                                <div class="col-md-9">
                                                    <img alt="Responsive image" src="{{ $user->userDocument->driving_license_back_path }}"
                                                        class="dl_img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3">ID Proof Number:</label>
                                                <div class="col-md-9">
                                                    {{ $user->userDocument->id_proof_number ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3 dl_label">ID Proof Front Image:</label>
                                                <div class="col-md-9">
                                                    <img alt="Responsive image" src="{{ $user->userDocument->id_proof_front_path }}"
                                                        class="dl_img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-control-label col-md-3 dl_label">ID Proof Back Image:</label>
                                                <div class="col-md-9">
                                                    <img alt="Responsive image" src="{{ $user->userDocument->id_proof_back_path }}"
                                                        class="dl_img">
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
