<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class GuestController extends Controller
{
    public function index()
    {
        $data['graf'] = DB::table('tb_detailbidang')
            ->join('tb_grafik', 'tb_grafik.idGrafik', '=', 'tb_detailbidang.idgrafik')
            ->join('tb_sektor', 'tb_sektor.idSektor', '=', 'tb_grafik.idSektor')
            ->select('*')
            ->get();
        return view('/user/homepage', $data);
    }

    public function tampil_graf($id)
    {
        $graf = DB::table('tb_grafik')
            ->join('tb_sektor', 'tb_grafik.idSektor', '=', 'tb_sektor.idSektor')
            ->select('tb_grafik.idGrafik', 'tb_grafik.judulGrafik', 'tb_sektor.namaSektor', 'tb_grafik.metabaseId')
            ->where('tb_grafik.idGrafik', $id)
            ->get();

        foreach ($graf as $grf) {
            $sector = $grf->namaSektor;
            $judulgraf = $grf->judulGrafik;
            $metagraf = $grf->metabaseId;
        }

        $data = [
            'sector' => $sector,
            'title' => 'Command Center Magelang',
            'judulgraf' => $judulgraf,
            'metaID' => $metagraf
        ];

        if (Session::get('idUser')) {
            // redirect ke halaman backoffice
        return view('/admin/content/tampilGrafik', $data);

        } else {
            // redirect ke halaman front office guest
        return view('/user/contentGuest/tampilGrafik', $data);
        }  
    }
    
    //live search    
    public function guesttest() {
        $data['sector'] = "asdasd";
        $data['title'] = "asdasd";
        return view ('/user/contentGuest/test', $data);
    }
    
    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('tb_grafik')
         ->where('CustomerName', 'like', '%'.$query.'%')
         ->orWhere('Address', 'like', '%'.$query.'%')
         ->orWhere('City', 'like', '%'.$query.'%')
         ->orWhere('PostalCode', 'like', '%'.$query.'%')
         ->orWhere('Country', 'like', '%'.$query.'%')
         ->orderBy('CustomerID', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('tbl_customer')
         ->orderBy('CustomerID', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->CustomerName.'</td>
         <td>'.$row->Address.'</td>
         <td>'.$row->City.'</td>
         <td>'.$row->PostalCode.'</td>
         <td>'.$row->Country.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <option>Data Not Found</option>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
