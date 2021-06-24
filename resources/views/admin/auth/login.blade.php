@extends('layouts.admin_auth')
@section('content')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form role="form" method="post" action="{{ route('admin.login') }}">
                    @csrf
                    <h1>Login Form</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button class="btn btn-primary submit" type="submit">Log in</button>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div class="clearfix"></div>
                        <br>
                        <div>
                            <h1><i class="fa fa-paw"></i> Admin Panel </h1>
                            <p>©2021 All Rights Reserved. Admin Panel</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
@endsection
