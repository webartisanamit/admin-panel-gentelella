<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\User;
use Auth, Mail, DB;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {

        return redirect()->route('admin.dashboard');
    }

    public function logout()
    {
        notify()->success('Somthing went wrong');
        return redirect()->route('admin.loginForm');
    }

    public function forgetForm()
    {
        return view('admin.auth.forgot');
    }

    public function forgetPassword(Request $request)
    {
        notify()->success('A password resent link has been sent to your registered email address');
        return redirect()->route('admin.loginForm');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function profileUpdate(Request $request)
    {
        notify()->success('Profile updated successfully');
        return back();
    }

    public function changePasswordForm()
    {
        return view('admin.change_password');
    }

    public function changePassword(Request $request)
    {
        notify()->warning('You have entered wrong current password');
        return back();
    }
}
