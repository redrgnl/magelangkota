<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
    	$data['page'] = "Dashboard";
    	return view('/admin/content/index', $data);
    }
    public function sektor($id){
    	$data['page'] = "Dashboard";
		$metabase = DB::table('tb_grafik')->where('idGrafik', $id)->get();
		foreach ($metabase as $key ) {

			$data['idMetabase'] = $key->metabaseId;
			$data['judul'] = $key->judulGrafik;

		}

    	return view('/admin/content/sektor', $data);
    }
}
