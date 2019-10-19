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
    
    //tampil grafik
    public function tampil_graf($id)
    {
        $graf = DB::table('tb_grafik')
            ->join('tb_sektor', 'tb_grafik.idSektor', '=', 'tb_sektor.idSektor')
            ->select('tb_grafik.idGrafik', 'tb_grafik.judulGrafik', 'tb_sektor.namaSektor', 'tb_grafik.metabaseId')
            ->where('tb_grafik.idGrafik', $id)
            ->get();
        $data['all_graf'] = DB::table('tb_grafik')->where('idSektor', $id)->get();

        $data['title'] = "Halaman Grafik | Command Center Magelang";

        foreach ($graf as $key) {
            $data['id'] = $key->idGrafik;
            $data['meta'] = $key->metabaseId;
            $data['judul'] = $key->judulGrafik;
            $data['nam_sek'] = $key->namaSektor;
        }

        if (!empty($graf)) {
            return view('admin/content/tampilGrafik', $data);
        } else {
            return "Data kosong";
        }
    }
    
    public function ajax_metabase($id)
    {

        $grafik = DB::table('tb_grafik')->where('metabaseId', $id)->get();

        foreach ($grafik as $key) {
            $meta = $key->metabaseId;
            $judul = $key->judulGrafik;
        }
        return response()->json([
            'metabaseId' => $meta,
            'judulGrafik' => $judul
        ]);
    }

    //proses tambah graf
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

        $detbidang = implode(",", $request->get('chkbidang'));

        DB::table('tb_detailbidang')->insert([
            'idGrafik' => $lastid,
            'detBidang' => $detbidang . ",15",
            'waktuDibuat' => $now
        ]);

        return redirect('admin/halaman-list-grafik')->with('success', 'Tambah Grafik');
    }

    //halaman edit grafik
    public function halamanEditGrafik($id)
    {
        $queryGrafik = DB::table('tb_grafik')->where('idGrafik', $id)->get();

        $queryAllBidang = DB::table('tb_bidang')->get();

        $sektor = DB::table('tb_sektor')->get();

        $querydetBidang = DB::table('tb_detailbidang')->where('idGrafik', $id)->get();

        foreach ($queryGrafik as $key) {
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

        $querychk = DB::table('tb_detailbidang')->where('idGrafik', $id)->get();

        foreach ($querychk as $quck) {
            $checked = explode(',', $quck->detBidang);
        }

        $data['checked'] = $checked;

        return view('admin/content/editGrafik', $data);
    }

    //proses update grafik
    public function updategrafik(Request $update)
    {
        $now = new DateTime();

        DB::table('tb_grafik')->where('idGrafik', $update->id_graf)->update([
            'idSektor' => $update->sektor,
            'metabaseId' => $update->metabase,
            'judulGrafik' => $update->judul,
            'waktuDibuat' => $now
        ]);

        $detbidang = implode(",", $update->get('chkbidang'));

        DB::table('tb_detailbidang')->where('idGrafik', $update->id_graf)->update([
            'detBidang' => $detbidang . ",15",
            'waktuDibuat' => $now
        ]);

        return redirect('admin/halaman-list-grafik')->with('success', 'Update Grafik');
    }

    //proses delete grafik
    public function deletegraf($id)
    {
        DB::table('tb_grafik')->where('idGrafik', $id)->delete();

        return redirect('admin/halaman-list-grafik')->with('success', 'Delete Grafik');
    }
    function fetch(Request $request)
    {
        if(!empty($request->get('query')))
        {
            $query = $request->get('query');
            $data = DB::table('tb_grafik')->where('judulGrafik', 'LIKE', "%".$query."%")->get();



            $output = '<ul class="dropdown-menu" style="display:block;position:relative;">';
            $total_row = $data->count();
          if($total_row > 0)
          {
                foreach ($data as $graf) 
                {   

                        $output .= '<li><a href="/guest/halaman-tampil-grafik/'.$graf->idGrafik.'">'.$graf->judulGrafik.'</a></li>';

                }
                    $output .= '</ul>';
         }else{

            $output .= '<li><a href="#">Tidak Di Temukan</a></li>';
         }
                    $output .= '</ul>';

            echo $output;

        }
    }
}
