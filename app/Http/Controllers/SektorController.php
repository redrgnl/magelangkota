<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Datetime;

class SektorController extends Controller
{
    public function sektor() {
        $data = [
            'title' => "Manajemen Sektor | Command Center Magelang",
            'datasektor' => DB::table('tb_sektor')->get()
        ];
        
        return view ('admin/content/sektor', $data);
    }
    
    public function addsektor() {
        $data = [
            'title' => "Tambah Sektor | Command Center Magelang"
        ];
        
        return view ('admin/content/tambahSektor', $data);
    }
    
    public function storesektor(Request $insert) {
        $now = new DateTime();
        
        DB::table('tb_sektor')->insert([
            'namaSektor' => $insert->sektor,
            'waktuDibuat' => $now,
            'icon' => $insert->iconsektor,
            'color' => $insert->warnasektor
        ]);
        
        return redirect ('admin/halaman-sektor');
    }
    
    public function editsektor($id) {
        $data = [
            'title' => "Update Data Sektor | Command Center Magelang",
            'datasektor' => DB::table('tb_sektor')->where('idSektor', $id)->get()
        ];
        
        return view ('admin/content/editSektor', $data);
    }
    
    public function updatesektor(Request $update) {
        $now = new Datetime();
        
        DB::table('tb_sektor')->where('idSektor', $update->id)->update([
            'namaSektor' => $update->sektor,
            'waktuDibuat' => $now,
            'icon' => $update->iconsektor,
            'color' => $update->warnasektor
        ]);
        
        return redirect ('admin/halaman-sektor');
    }
    
    public function deletesektor($id) {
        DB::table('tb_sektor')->where('idSektor', $id)->delete();
        
        return redirect ('admin/halaman-sektor');
    }
}
