<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CctvController extends Controller
{
    public function index()
    {
        $query = DB::table('tb_cctv')->get();

        $data = [
            'title' => "Manajemen CCTV | Command Center Magelang",
            'cctv' => $query
        ];

        return view('admin/content/cctv', $data);
    }

    public function addCctv()
    {
        $data = [
            'title' => "Manajemen CCTV | Command Center Magelang"
        ];
        return view('admin/content/tambahCctv', $data);
    }

    public function storeCctv(Request $request)
    {
        $messages = [
            'required' => 'Form :attribute wajib di isi *'
        ];

        // validate request data
        $this->validate($request, [
            'namaCctv' => 'required|unique:tb_cctv,namaCctv',
            'alamatCctv' => 'required',
            'urlCctv' => 'required'
        ], $messages);

        DB::table('tb_cctv')->insert([
            'namaCctv' => $request->namaCctv,
            'alamatCctv' => $request->alamatCctv,
            'urlCctv' => $request->urlCctv
        ]);

        return redirect('admin/halaman-cctv');
    }
}
