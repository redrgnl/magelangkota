<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DateTime;

class GrafikController extends Controller
{
    
    // menu grafik
    public function grafik()
    {
        $data['title'] = "Daftar Grafik | Command Center Magelang";

        $data['grafik'] = DB::table('tb_grafik')
            ->join('tb_sektor', 'tb_grafik.idSektor', '=', 'tb_sektor.idSektor')
            ->select('tb_grafik.idGrafik', 'tb_grafik.judulGrafik', 'tb_sektor.namaSektor')
            ->get();

        return view('admin/content/grafik', $data);
    }
    public function halamanEditGrafik($id)
    {
        $queryGrafik = DB::table('tb_grafik')->where('idGrafik', $id)->get();
        
        $queryAllBidang = DB::table('tb_bidang')->get();

        $sektor = DB::table('tb_sektor')->get();

        $querydetBidang = DB::table('tb_detailbidang')->where('idGrafik', $id)->get();

        foreach ($queryGrafik as $key ) {
            $data['id_graf'] = $key->idGrafik;
            $data['sktr'] = $key->idSektor;
            $data['meta'] = $key->metabaseId;
            $data['judul'] = $key->judulGrafik;
        }
        $data['title'] = "Update Data Grafik | Command Center Magelang";
        $data['bidang'] = $querydetBidang;
        $data['grafik'] = $queryGrafik;
        $data['all_sktr'] = $sektor;
        $data['allBid'] = $queryAllBidang;

        // $data = [
        //     'title' => "Update Data Grafik | Command Center Magelang",
        //     'bidang' => $querydetBidang,
        //     'grafik' => $queryGrafik,
        //     'all_sktr' => $sektor
        // ];

        return view('admin/content/editGrafik', $data);
    }

    //tambah grafik baru
    public function tambah_graf()
    {
        $data = [
            'title' => "Tambah Grafik Baru | Command Center Magelang",
            'sektor' => DB::table('tb_sektor')->get(),
            'bidang' => DB::table('tb_bidang')->get()
        ];

        return view('admin/content/tambahGraf', $data);
    }
//irfan
    public function proses_tambahGraf(Request $request)
    {
        $now = new DateTime();

        $messages = [
            'required' => 'Form :attribute wajib di isi *',
            'min' => ':attribute harus berisi minimal 5 karakter *',

        ];
        $this->validate($request, [
            'judul' => 'required|min:5',
            'metabase' => 'required',
            'sektor' => 'required'


        ], $messages);



        $lastid = DB::table('tb_grafik')->insertGetId([
                    'judulGrafik' => $request->judul,
                    'metabaseId' => $request->metabase,
                    'idSektor' => $request->sektor,
                    'waktuDibuat' => $now
                  ]);

        $detbidang = $request->get('chkbidang');

        $dipilih = count($detbidang);

        for($count = 0; $count<$dipilih; $count++)
        {
            $id_clean = $lastid;
            $detbidang_clean = $detbidang[$count];
            $waktu = $now;

            DB::table('tb_detailbidang')->insert([
                'idGrafik' => $lastid,
                'detBidang' => $detbidang_clean,
                'waktuDibuat' => $waktu
            ]);



        }


        return redirect('admin/halaman-list-grafik');

    }


// bagus
    // public function proses_tambahGraf(Request $request)
    // {
    //     $now = new DateTime();

    //     $messages = [
    //         'required' => 'Form :attribute wajib di isi *',
    //         'min' => ':attribute harus berisi minimal 5 karakter *',

    //     ];
    //     $this->validate($request, [
    //         'judul' => 'required|min:5',
    //         'metabase' => 'required',
    //         'sektor' => 'required'


    //     ], $messages);

    //     $lastid = DB::table('tb_grafik')->insertGetId([
    //                 'judulGrafik' => $request->judul,
    //                 'metabaseId' => $request->metabase,
    //                 'idSektor' => $request->sektor,
    //                 'waktuDibuat' => $now
    //               ]);

    //     $detbidang = implode(",", $request->get('chkbidang')); 
        
    //     DB::table('tb_detailbidang')->insert([
    //         'idGrafik' => $lastid,
    //         'detBidang' => $detbidang,
    //         'waktuDibuat' => $now
    //     ]);
        
    //     return redirect('admin/halaman-list-grafik');
    // }
    
    public function deletegraf($id) {
        DB::table('tb_grafik')->where('idGrafik', $id)->delete();
        
        return redirect ('admin/halaman-list-grafik');
    }
}
