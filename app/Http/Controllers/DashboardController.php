<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    	$data['page'] = "Dashboard";
    	return view('/admin/content/index', $data);
    }
}
