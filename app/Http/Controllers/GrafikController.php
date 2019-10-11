<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DateTime;

class GrafikController extends Controller
{
// menu grafik
    public function grafik(){

        $data['grafik'] = DB::table('tb_grafik')
        ->join('tb_sektor', 'tb_grafik.idSektor', '=', 'tb_sektor.idSektor')
        ->select('tb_grafik.judulGrafik', 'tb_sektor.namaSektor')
        ->get();


        return view('admin/content/grafik', $data);
    }
    public function tambah_graf(){

        $data['sektor'] = DB::table('tb_sektor')->get();


        return view('admin/content/tambahGraf', $data);
    }

    public function proses_tambahGraf(Request $request){
        $now = new DateTime();

        $messages = [
            'required' => 'Form :attribute wajib di isi *',
            'min' => ':attribute harus berisi minimal 5 karakter *',

        ];
        $this->validate($request,[
            'judul' => 'required|min:5',
            'metabase' => 'required',
            'sektor' => 'required'


        ], $messages);

        DB::table('tb_grafik')->insert([
            'judulGrafik' => $request->judul,
            'metabaseId' => $request->metabase,
            'idSektor' => $request->sektor,
            'waktuDibuat' => $now
        ]);

        return redirect('admin/halaman-list-grafik');

        // return view('admin/content/bidang', $data);
    }
}
