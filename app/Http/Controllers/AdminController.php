<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DateTime;

class AdminController extends Controller
{
    //halaman dashboard admin
    public function index(){
        return view('admin/content/dashboard');
    }
    
    //halaman data pengguna
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


    //fungsi tambah user
    public function addUser()
    {
        $query = DB::table('tb_bidang')->get();

        $data = [
            'bidang' => $query
        ];

        return view('admin/content/tambahUser', $data);
    }

    //fungsi simpan user
    public function store(Request $request)
    {
        $now = new DateTime();
        $messages = [
            'required' => 'Form :attribute wajib di isi *',
            'min' => ':attribute harus berisi minimal 6 karakter *',
            'email' => 'Tolong gunakan :attribute yang sah *',
            'max' => ':attribute max 100',
            'same' => ':attribute harus sama dengan password, mohon cek kembali',

        ];

        // validate request data
        $this->validate($request, [
            'username' => 'required|string',
            'email' => 'required|email|max:100|unique:tb_users,emailUser',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ],$messages);

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
    
    //halaman edit pengguna
    public function halamanEditUser($id) {
        $querypengguna = DB::table('tb_users')->where('idUser', $id)->get();
        $querybidang = DB::table('tb_bidang')->get();
        
        $data = [
            'bidang' => $querybidang,
            'datapengguna' => $querypengguna  
        ];
        
        return view ('admin/content/editUser', $data);
    }
    
    //fungsi update pengguna
    public function update(Request $update) {
        $now = new DateTime();
        $messages = [
            'required' => 'Form :attribute wajib di isi *',
            'min' => ':attribute harus berisi minimal 6 karakter *',
            'email' => 'Tolong gunakan :attribute yang sah *',
            'max' => ':attribute max 100',
            'same' => ':attribute harus sama dengan password, mohon cek kembali',

        ];
        
        $this->validate($update, [
           'username' => 'required|string',
           'email' => 'required|email|max:100',
           'password' => 'required|min:6',
           'confirm_password' => 'required|same:password'  
        ], $messages);
        
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
    
    //fungsi delete pengguna
    public function delete($id) {
        DB::table('tb_users')->where('idUser', $id)->delete();
        
        return redirect ('/admin/halaman-pengguna');
    }
}
