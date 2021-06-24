@extends('layouts.admin')
@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Edit profile </h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.profile-update') }}" method="POST">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="col-auto">
                                        <img alt="Image placeholder" src="{{ $user->profile_photo_url }}"
                                            class="avatar rounded-circle profile-picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Profile Picture</label>
                                    <input type="file" id="input-profile-picture" class="form-control"
                                        placeholder="profile_photo" name="profile_photo" accept="image/*">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email address</label>
                                    <input type="email" id="input-email" class="form-control" name="email"
                                        value="{{ old('email', $user->email) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">First name</label>
                                    <input type="text" id="input-first-name" name="first_name" class="form-control"
                                        placeholder="First name" value="{{ old('first_name', $user->first_name) }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Last name</label>
                                    <input type="text" id="input-last-name" class="form-control" name="last_name"
                                        placeholder="Last name" value="{{ old('last_name', $user->last_name ?? '') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-4"> Submit </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('extra_scripts')
    <script>
        $(document).ready(function() {
            $('body').on('change', '#input-profile-picture', function() {
                var input = $(this)[0];
                if (input.files.length) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.profile-picture').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });

    </script>
@endsection
