<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

    public function users()
    {
        $query = DB::table('tb_users')
            ->join('tb_bidang', 'tb_bidang.idBidang', '=', 'tb_users.idBidang')
            ->select('tb_users.namaUser', 'tb_users.emailUser', 'tb_bidang.namaBidang')
            ->get();

        $data = [
            'users' => $query
        ];

        return view('admin/content/users', $data);
    }

    public function bidang()
    {
        $query = DB::table('tb_bidang')->get();

        $data = [
            'bidang' => $query
        ];

        return view('admin/content/bidang', $data);
    }

    public function addUser()
    {
        $query = DB::table('tb_bidang')->get();

        $data = [
            'bidang' => $query
        ];

        return view('admin/content/tambahUser', $data);
    }

    public function store(Request $request)
    {
        // validate request data
        $this->validate($request, [
            'username' => 'required|string',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);
        // save into table
        DB::table('tb_users')->insert([
            'username' => $request->namaUser,
            'email' => $request->emailUser,
            'bidang' => $request->idBidang,
            'password' => md5($request->password)
        ]);
        // redirect to home
        return redirect('/admin.content.users');
    }
}
