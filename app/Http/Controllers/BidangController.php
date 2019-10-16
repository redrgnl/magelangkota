<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Datetime;

class BidangController extends Controller
{
    //halaman bidang
    public function bidang()
    {
        $query = DB::table('tb_bidang')->get();

        $data = [
            'title' => "Manajemen Akses Pengguna | Command Center Magelang",
            'bidang' => $query
        ];

        return view('admin/content/bidang', $data);
    }

    //halaman tambah hak akses
    public function addakses()
    {
        $data = [
            'title' => "Tambah Akses | Command Center Magelang",
        ];

        return view('admin/content/tambahBidang', $data);
    }

    //store hak akses
    public function storeakses(Request $tambah)
    {
        $now = new DateTime();

        $this->validate($tambah, [
            'hakses' => 'required|string'
        ]);

        DB::table('tb_bidang')->insert([
            'namaBidang' => $tambah->hakses,
            'waktuDibuat' => $now
        ]);

        return redirect('/admin/halaman-hak-akses')->with('success', 'Tambah Bidang');
    }

    //halaman edit hak akses
    public function halamanEditAkses($id)
    {
        $queryakses = DB::table('tb_bidang')->where('idBidang', $id)->get();

        $data = [
            'title' => "Update Akses Pengguna | Command Center Magelang",
            'akses' => $queryakses
        ];

        return view('admin/content/editBidang', $data);
    }

    //update hak akses
    public function updateakses(Request $update)
    {
        $now = new DateTime();

        $this->validate($update, [
            'hakses' => 'required|string'
        ]);

        DB::table('tb_bidang')->where('idBidang', $update->idakses)->update([
            'namaBidang' => $update->hakses,
            'waktuDibuat' => $now
        ]);

        return redirect('/admin/halaman-hak-akses')->with('success', 'Update Hakakses');
    }

    //delete bidang
    public function deleteakses($id)
    {
        DB::table('tb_bidang')->where('idBidang', $id)->delete();

        return redirect('/admin/halaman-hak-akses')->with('success', 'Delete Hak akses');
    }
}
