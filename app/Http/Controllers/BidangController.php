<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DateTime;

class BidangController extends Controller
{
    //halaman hak akses
    public function bidang()
    {
        $query = DB::table('tb_bidang')->get();

        $data = [
            'bidang' => $query
        ];
        
        return view('admin/content/bidang', $data);
    }
    
}
