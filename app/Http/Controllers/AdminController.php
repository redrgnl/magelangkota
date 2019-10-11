<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    
    public function users() {
        $query = DB::table('tb_users')
            ->join('tb_bidang', 'tb_bidang.idBidang', '=', 'tb_users.idBidang')
            ->select('tb_users.namaUser', 'tb_users.emailUser', 'tb_bidang.namaBidang')
            ->get();
        
        $data = [
            'users' => $query 
        ];
        
        return view ('admin/content/users', $data);
    }
    
    public function bidang() {
        $query = DB::table('tb_bidang')->get();
        
        $data = [
            'bidang' => $query
        ];
        
        return view ('admin/content/bidang', $data);
    }
}
