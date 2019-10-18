<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function index()
    {
        $data['graf'] = DB::table('tb_detailbidang')
            ->join('tb_grafik', 'tb_grafik.idGrafik', '=', 'tb_detailbidang.idgrafik')
            ->join('tb_sektor', 'tb_sektor.idSektor', '=', 'tb_grafik.idSektor')
            ->select('*')
            ->get();
        return view('/user/homepage', $data);
    }

    public function tampil_graf($id)
    {
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
            'metaID' => $metagraf
        ];

        return view('/user/contentGuest/tampilGrafik', $data);
    }
}
