<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DateTime;

class AdminController extends Controller
{
    //halaman dashboard admin
    public function index(){
        return view('admin/content/dashboard');
    }
}
