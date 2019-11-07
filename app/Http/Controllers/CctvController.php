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
    public function halamanEditCctv($id)
    {
        $queryCctv = DB::table('tb_cctv')->where('idCctv', $id)->get();
        foreach ($queryCctv as $key) {
            $idCctv = $key->idCctv;
            $namaCctv = $key->namaCctv;
            $alamat = $key->alamatCctv;
            $url = $key->urlCctv;
            $tumb = $key->urlTumb;

        }

        $data = [
            'title' => "Update Data Cctv | Command Center Magelang",
            'dataCctv' => $queryCctv,
            'id' => $idCctv,
            'nama' => $namaCctv,
            'alamat' => $alamat,
            'url' => $url,
            'tumb' => $tumb

        ];

        return view('admin/content/editCctv', $data);
    }
    public function updateCctv(Request $update) {
        
        DB::table('tb_cctv')->where('idCctv', $update->id)->update([
            'namaCctv' => $update->namaCctv,
            'alamatCctv' => $update->alamatCctv,
            'urlCctv' => $update->urlCctv,
            'urlTumb' => $update->urlTumb
        ]);
        
        return redirect ('admin/edit-data-cctv/'.$update->id.'')->with('success', 'Update cctv');
    }
    //proses delete grafik
    public function deleteCctv($id)
    {
        DB::table('tb_cctv')->where('idCctv', $id)->delete();

        return redirect('admin/halaman-cctv')->with('success', 'Delete cctv');
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
            'urlCctv' => $request->urlCctv,
            'urlTumb' => $request->urlTumb
        ]);

        return redirect('admin/halaman-cctv');
    }
}
