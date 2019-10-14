<?php

namespace App\Http\Controllers;

use App\Tb_users;
use Validator, Redirect, Response;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
            'emailUser' => 'required',
            'password' => 'required',
        ]);
        $user = Tb_users::where('emailUser', $request->emailUser)
            ->where('password', md5($request->password))
            ->first();
        if (!empty($user)) {
            return redirect('admin/halaman-dashboard');
        } else {
            return redirect('login');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
