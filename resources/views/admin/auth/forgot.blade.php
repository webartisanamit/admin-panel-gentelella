@extends('layouts.admin_auth')
@section('content')
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-4 py-lg-5 pt-lg-5">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Forget Password</h1>
                        <!-- <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">

                    <div class="card-body px-lg-5 py-lg-3">
                        <div class="text-center text-muted mb-4">
                            <small></small>
                        </div>
                        <form role="form" method="post" action="{{route('admin.forgetPassword')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input name="email" class="form-control" placeholder="Email" type="email" value="{{old('email')}}" required>
                                </div>
                                @error('email')
                                <span class="validation invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            @if(Session::has('error'))
                            <span class="validation invalid-feedback" role="alert">
                                <strong>{{ Session::get("error") }}</strong>
                            </span>
                            @endif
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
