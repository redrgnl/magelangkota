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
            ->select('tb_users.idUser', 'tb_users.namaUser', 'tb_users.emailUser', 'tb_bidang.namaBidang')
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
    
    public function halamanEditUser($id) {
        $querypengguna = DB::table('tb_users')->where('idUser', $id)->get();
        $querybidang = DB::table('tb_bidang')->get();
        
        $data = [
            'bidang' => $querybidang,
            'datapengguna' => $querypengguna  
        ];
        
        return view ('admin/content/editUser', $data);
    }
    
    public function update(Request $update) {
        $now = new DateTime();
        
        $this->validate($update, [
           'username' => 'required|string',
           'email' => 'required|email|max:100',
           'password' => 'required|min:6',
           'confirm_password' => 'required|same:password'  
        ]);
        
        DB::table('tb_users')->where('idUser', $update->idd)->update([
            'namaUser' => $update->username,
            'emailUser' => $update->email,
            'idBidang' => $update->bidang,
            'password' => md5($update->password),
            'waktuDibuat' => $now
        ]);
        // redirect to home
        return redirect('/admin/halaman-pengguna');
    }
}
