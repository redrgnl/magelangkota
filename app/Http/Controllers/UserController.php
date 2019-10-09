<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

    	    	// $data['sektor'] = DB::table('tb_sektor')->get();

    	return view('/admin/content/user');
    }
    public function tambah(){

    	    	// $data['sektor'] = DB::table('tb_sektor')->get();

    	return view('/admin/content/tambahUser');
    }
}
