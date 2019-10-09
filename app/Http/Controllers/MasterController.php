<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterController extends Controller
{
    public function index(){

    	// $data['sektor'] = DB::table('tb_sektor')->get();

    	return view('/admin/master');
    }
}
