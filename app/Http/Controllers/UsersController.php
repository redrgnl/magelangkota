<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


use Datetime;

class UsersController extends Controller
{
    //halaman data pengguna
    public function users()
    {
        $query = DB::table('tb_users')
            ->join('tb_bidang', 'tb_bidang.idBidang', '=', 'tb_users.idBidang')
            ->select('tb_users.idUser', 'tb_users.namaUser', 'tb_users.emailUser', 'tb_bidang.namaBidang', 'tb_users.idBidang')
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
        ], $messages);

        // save into table
        DB::table('tb_users')->insert([
            'namaUser' => $request->username,
            'emailUser' => $request->email,
            'idBidang' => $request->bidang,
            'password' => md5($request->password),
            'waktuDibuat' => $now
        ]);
        // redirect to home
        return redirect('/admin/halaman-pengguna')->with('success', 'Tambah Pengguna');
    }

    //halaman edit pengguna
    public function halamanEditUser($id)
    {
        $querypengguna = DB::table('tb_users')->where('idUser', $id)->get();
        $querybidang = DB::table('tb_bidang')->get();

        $data = [
            'title' => "Update Data Pengguna | Command Center Magelang",
            'bidang' => $querybidang,
            'datapengguna' => $querypengguna
        ];

        return view('admin/content/editUser', $data);
    }

    //fungsi update pengguna
    public function updatepengguna(Request $update)
    {
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
        return redirect('/admin/halaman-pengguna')->with('success', 'Edit Pengguna');;
    }

    //fungsi delete pengguna
    public function deletepengguna($id)
    {
        DB::table('tb_users')->where('idUser', $id)->delete();

        return redirect('/admin/halaman-pengguna')->with('success', 'Delete Pengguna');;
    }
}
