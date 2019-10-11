<?php

namespace App\Http\Controllers;

// use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DateTime;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin/content/dashboard');
    }
    
    // public function users() {

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
    public function tambah_pgn(){

        $data['bdg'] = DB::table('tb_bidang')->get();

        return view('tambahUser', $data);
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
                $now = new DateTime();

        // validate request data
        $this->validate($request, [
            'username' => 'required|string',
            'email' => 'required|email|max:100|unique:tb_users,emailUser',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);

        // save into table
        DB::table('tb_users')->insert([
            'namaUser' => $request->username,
            'emailUser' => $request->email,
            'idBidang' => $request->bidang,
            'password' => md5($request->password),
            'waktuDibuat' => $now
        ]);
        // redirect to home
        return redirect('/admin/halaman-pengguna');
    }
    
    
}
