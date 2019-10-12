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
        $query = DB::table('tb_bidang')
        ->orderBy('idBidang')
        ->get();

        $data = [
            'bidang' => $query
        ];
        
        return view('admin/content/bidang', $data);
    }
    public function tambah_bdg()
    {
    	return view('admin/content/tambahBidang');
    }
    
    public function proses_tambahBidang(Request $request){
    	$now = new DateTime();

        $messages = [
            'required' => 'Form :attribute wajib di isi *',

        ];

    	$this->validate($request, [
    		'nama_bidang' => 'required'

    	],$messages);

    	DB::table('tb_bidang')->insert([
    		'namaBidang' => $request->nama_bidang,
    		'waktuDibuat' => $now
    	]);

    	return redirect('admin/halaman-hak-akses');
    }

    public function editBidang($id){
    	$bidang = DB::table('tb_bidang')->where('idBidang',$id)->get();

    	foreach ($bidang as $key) {
    		$data['id'] = $key->idBidang;
    		$data['oldBidang'] =$key->namaBidang;
    	}

    	return view('admin/content/editBidang', $data);
    }
    public function proses_editBidang(Request $request){
    	$now = new DateTime();

        $messages = [
            'required' => 'Form :attribute wajib di isi *',

        ];

    	$this->validate($request, [
    		'nama_bidang' => 'required'

    	],$messages);

    	DB::table('tb_bidang')->where('idBidang', $request->idBdg)->update([

    		'namaBidang' => $request->nama_bidang,
    		'waktuDibuat' => $now
    	]);

    	return redirect('admin/halaman-hak-akses');
    }


// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('tb_bidang')->where('idBidang',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/admin/halaman-hak-akses');
}
}
