<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use DateTime;

class UserController extends Controller
{
    public function index(){

    	    	// $data['sektor'] = DB::table('tb_sektor')->get();

    	return view('/admin/content/user');
    }
    public function tambah(){

    	    	$data['bdg'] = DB::table('tb_bidang')->get();


    	return view('/admin/content/tambahUser', $data);
    }
    public function prs_tambah(Request $request){

    	$pass = hash('md5', hash('sha256', $request->password));
    	$now = new DateTime();
    	DB::table('tb_users')->insert([
    		'namaUser' => $request->uname,
    		'idBidang' => $request->bidang,
    		'emailUser' => $request->cemail,
    		'password' => $pass,
    		'waktuDibuat' => $now
    	]);

    	    	// $data['sektor'] = DB::table('tb_sektor')->get();


    	return redirect('/admin/content/tambahUser');
    }
}
