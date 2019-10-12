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
        
    //===========================================================================================================//
    
    //halaman data pengguna
    public function users()
    {
        $query = DB::table('tb_users')
            ->join('tb_bidang', 'tb_bidang.idBidang', '=', 'tb_users.idBidang')
            ->select('tb_users.idUser', 'tb_users.namaUser', 'tb_users.emailUser', 'tb_bidang.namaBidang')
            ->get();

        $data = [
            'title' => "Manajemen Pengguna | Command Center Magelang",
            'users' => $query
        ];

        return view('admin/content/users', $data);
    }

    //fungsi tambah user
    public function addUser()
    {
        $query = DB::table('tb_bidang')->get();

        $data = [
            'title' => "Tambah Pengguna Baru | Command Center Magelang",
            'bidang' => $query
        ];

        return view('admin/content/tambahUser', $data);
    }

    //fungsi simpan user
    public function storepengguna(Request $request)
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
            'title' => "Update Data Pengguna | Command Center Magelang",
            'bidang' => $querybidang,
            'datapengguna' => $querypengguna  
        ];
        
        return view ('admin/content/editUser', $data);
    }
    
    //fungsi update pengguna
    public function updatepengguna(Request $update) {
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
    public function deletepengguna($id) {
        DB::table('tb_users')->where('idUser', $id)->delete();
        
        return redirect ('/admin/halaman-pengguna');
    }
    
    //===========================================================================================================//
    
    //halaman bidang
    public function bidang() {
        $query = DB::table('tb_bidang')->get();
        
        $data = [
            'title' => "Manajemen Akses Pengguna | Command Center Magelang",
            'bidang' => $query
        ];
        
        return view ('admin/content/bidang', $data);
    }
    
    //halaman tambah hak akses
    public function addakses() {
        $data = [
            'title' => "Tambah Akses | Command Center Magelang",  
        ];
        
        return view ('admin/content/tambahBidang', $data);
    }
    
    //store hak akses
    public function storeakses(Request $tambah) {
        $now = new DateTime();
        
        $this->validate($tambah, [
            'hakses' => 'required|string'
        ]);
        
        DB::table('tb_bidang')->insert([
            'namaBidang' => $tambah->hakses,
            'waktuDibuat' => $now
        ]);
        
        return redirect ('/admin/halaman-hak-akses');
    }
    
    //halaman edit hak akses
    public function halamanEditAkses($id) {
        $queryakses = DB::table('tb_bidang')->where('idBidang', $id)->get();
        
        $data = [
            'title' => "Update Akses Pengguna | Command Center Magelang",
            'akses' => $queryakses
        ];
        
        return view ('admin/content/editBidang', $data);
    }
    
    //update hak akses
    public function updateakses(Request $update) {
        $now = new DateTime();
        
        $this->validate($update, [
            'hakses' => 'required|string'
        ]);
        
        DB::table('tb_bidang')->where('idBidang', $update->idakses)->update([
            'namaBidang' => $update->hakses,
            'waktuDibuat' => $now
        ]);
        
        return redirect ('/admin/halaman-hak-akses');
    }
    
    //delete bidang
    public function deleteakses($id) {
        DB::table('tb_bidang')->where('idBidang', $id)->delete();
        
        return redirect ('/admin/halaman-hak-akses');
    }
}
