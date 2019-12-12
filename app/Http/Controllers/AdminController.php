<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DateTime;

class AdminController extends Controller
{

    //halaman dashboard admin
    public function index()
    {
        $data = [
            'title' => "Manajemen Akses Pengguna | Command Center Magelang",
            'sektorss' => DB::table('tb_sektor')
                            ->join('tb_grafik', 'tb_grafik.idSektor', '=', 'tb_sektor.idSektor')
                            ->select('tb_sektor.color', 'tb_sektor.icon', 'tb_sektor.namaSektor', 'tb_sektor.idSektor')
                            ->groupBy('tb_sektor.idSektor')
                            ->get(),
            'grafikterdaftar' => DB::table('tb_grafik')->count()
        ];
        return view('admin/content/dashboard', $data);
    }
    
    function fetchadminsektor(Request $request)
    {
        if(!empty($request->get('query')))
        {            
            $idsek = $request->get('query');
            
            /* 
            
            SELECT tb_grafik.idGrafik, tb_grafik.judulGrafik, tb_sektor.idSektor, tb_detailbidang.detBidang FROM tb_sektor, tb_grafik, tb_detailbidang WHERE tb_sektor.idSektor = tb_grafik.idSektor AND tb_grafik.idGrafik = tb_detailbidang.idGrafik
            
            */
                        
            $data = DB::table('tb_grafik')
                ->join('tb_sektor', 'tb_sektor.idSektor', '=', 'tb_grafik.idSektor')
                ->join('tb_detailbidang', 'tb_grafik.idGrafik', '=', 'tb_detailbidang.idGrafik')
                ->select('tb_grafik.idGrafik', 'tb_grafik.judulGrafik', 'tb_sektor.namaSektor', 'tb_detailbidang.detBidang')
                ->where('tb_grafik.idSektor', $idsek)
                ->get();
            
            $output = '
                <ul>
                ';
            
            $total_row = $data->count();
              if($total_row > 0)
                {
                    foreach ($data as $graf) 
                        {  
                            $output .= '<li style="padding: 10px">
                                    <a style="color: blue" href="/admin/halaman-tampil-grafik/'.$graf->idGrafik.'">'.$graf->judulGrafik.'</a>
                                    </li>';
                        }
                    $output .= '</ul>';
                } else {

                    $output .= '<li style="padding: 10px"><a href="#" style="color: blue">Tidak Di Temukan</a></li>';
                }
                    $output .= '</ul>';

            echo $output;

        }
    }
    
    public function iframeharga() {
        $data = [
            'title' => "Survey Harga Pasar | Command Center Magelang"
        ];
        return view('admin/content/iframeharga', $data);
    }
    
    public function testbl() {
        $data = [
            'title' => "asdasdelang"
        ];
        return view('admin/content/test', $data);
    }
}
