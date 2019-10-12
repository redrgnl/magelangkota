<?php

namespace App\Http\Controllers;

use Validator, Redirect, Response;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;

use Illuminate\Http\Request;

class AuthController extends Controller
{
//    public function index()
//    {
//        return view('auth/login');
//    }
//
//    public function postLogin(Request $request)
//    {
//        request()->validate([
//            'email' => 'required',
//            'password' => 'required',
//        ]);
//
//        $credentials = $request->only('emailUser', 'password');
//        if (Auth::attempt($credentials)) {
//            // Authentication passed...
//            return redirect ('/admin/halaman-dashboard');
//        }
//        
//        return Redirect::to("login")->withSuccess('Username atau Password anda salah!');
//    }
//
//    public function dashboard()
//    {
//        if (Auth::check()) {
//            return view('dashboard');
//        }
//        return Redirect::to("login")->withSuccess('Opps! You do not have access');
//    }
//
//    public function logout()
//    {
//        Session::flush();
//        Auth::logout();
//        return Redirect('login');
//    }
}
