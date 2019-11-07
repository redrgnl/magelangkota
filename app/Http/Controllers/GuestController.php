<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class GuestController extends Controller
{
    public function index()
    {
        $data['graf'] = DB::table('tb_detailbidang')
            ->join('tb_grafik', 'tb_grafik.idGrafik', '=', 'tb_detailbidang.idgrafik')
            ->join('tb_sektor', 'tb_sektor.idSektor', '=', 'tb_grafik.idSektor')
            ->select('*')
            ->get();
        
        $data['sektorss'] = DB::table('tb_sektor')
            ->join('tb_grafik', 'tb_grafik.idSektor', '=', 'tb_sektor.idSektor')
            ->select('tb_sektor.color', 'tb_sektor.icon', 'tb_sektor.namaSektor', 'tb_sektor.idSektor')
            ->groupBy('tb_sektor.idSektor')
            ->get();
        return view('/user/homepage', $data);
    }

    public function tampil_graf($id)
    {
    if(is_numeric($id)){
        $graf = DB::table('tb_grafik')
            ->join('tb_sektor', 'tb_grafik.idSektor', '=', 'tb_sektor.idSektor')
            ->select('tb_grafik.idGrafik', 'tb_grafik.judulGrafik', 'tb_sektor.namaSektor', 'tb_grafik.metabaseId')
            ->where('tb_grafik.idGrafik', $id)
            ->get();
        
        foreach ($graf as $grf) {
            $sector = $grf->namaSektor;
            $judulgraf = $grf->judulGrafik;
            $metagraf = $grf->metabaseId;
        }
        
        $data = [
            'sector' => $sector,
            'title' => 'Command Center Magelang',
            'judulgraf' => $judulgraf,
            'meta' => $metagraf
        ];
        
//        if(stripos($metagraf, "http://") !== false || stripos($metagraf, "https://") !== false){
//            $data = [
//                'sector' => $sector,
//                'title' => 'Command Center Magelang',
//                'judulgraf' => $judulgraf,
//                'meta' => $metagraf
//            ];
//        }else{
//            $data = [
//            'sector' => 'Unknown',
//            'title' => 'Command Center Magelang',
//            'judulgraf' => 'Unknown',
//            'meta' => 'Unknown'
//            ];
//        }

            if (Session::get('idUser')) {
                // redirect ke halaman backoffice
            return view('/admin/content/tampilGrafik', $data);

            } else {
                // redirect ke halaman front office guest
            return view('/user/contentGuest/tampilGrafik', $data);
            } 
    }else{
        return abort(404);
    } 
}
    
    function fetchsektor(Request $request)
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
                            if (in_array("1", explode(',', $graf->detBidang))) {
                                $output .= '<li style="padding: 10px">
                                        <a style="color: blue" href="/guest/halaman-tampil-grafik/'.$graf->idGrafik.'">'.$graf->judulGrafik.'</a>
                                        </li>';
                            }
                        }
                    $output .= '</ul>';
                } else {

                    $output .= '<li style="padding: 10px"><a href="#" style="color: blue">Tidak Di Temukan</a></li>';
                }
                    $output .= '</ul>';

            echo $output;

        }
    }
    
    function fetch_guest(Request $request)
    {
        if (!empty($request->get('query'))) {
            $query = $request->get('query');
            $data = DB::table('tb_grafik')
                ->join('tb_detailbidang', 'tb_grafik.idGrafik', '=', 'tb_detailbidang.idGrafik')
                ->select('tb_grafik.idGrafik', 'tb_grafik.judulGrafik')
                ->where('tb_detailbidang.detBidang', 'LIKE', "%1%")
                ->where('tb_grafik.judulGrafik', 'LIKE', "%" . $query . "%")->limit(5)->get();

            $output = '
                <ul style="background-color: white; border: 2px solid blue; border-radius: 5px; max-height: 500px; overflow: scroll; opacity: 0.8">
                ';
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $graf) {
                    $output .= '<li style="padding: 10px">
                                        <a style="color: blue" href="/admin/halaman-tampil-grafik/' . $graf->idGrafik . '">' . $graf->judulGrafik . '</a>
                                    </li> ';
                }
                $output .= '</ul>';
            } else {

                $output .= '<li style="padding: 10px"><a href="#" style="color: blue">Tidak Di Temukan</a></li>';
            }
            $output .= '</ul>';

            echo $output;
        }
    }
}
