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
    //menampilkan halaman login
    public function index(Request $request)
    {
        if ($request->session()->exists('login')) {
            // user value cannot be found in session
            return redirect()->back()->with('alert', 'Silahkan logout Terlebih dahulu!');
        }
        return view('auth/login');
    }

    public function postLogin(Request $request)
    {
        //isi allert
        $messages = [
            'required' => 'Form : attribute wajib di isi *',
            'email' => 'Tolong gunakan : attribute yang sah *',
            'max' => ': attribute max 100',
        ];

        //validasi form
        request()->validate([
            'emailUser' => 'required|email|max:100',
            'password' => 'required',
        ], $messages);

        //fungsi login
        $user = Tb_users::where('emailUser', $request->emailUser)
            ->where('password', md5($request->password))
            ->first();
        if (!empty($user)) {
            //membuat session user logged in
            Session::put('namaUser', $user->namaUser);
            Session::put('emailUser', $user->emailUser);
            Session::put('idBidang', $user->idBidang);
            Session::put('idUser', $user->idUser);
            Session::put('login', TRUE);
            return redirect('admin/halaman-dashboard');
        } else {
            //gagal login
            return redirect('login')->with('alert', 'Password atau Email, Salah !');
        }
    }

    //logout function
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
