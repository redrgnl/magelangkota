<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DateTime;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //halaman dashboard admin
    public function index()
    {
        $data = [
            'title' => "Manajemen Akses Pengguna | Command Center Magelang"
        ];
        return view('admin/content/dashboard', $data);
    }
}
