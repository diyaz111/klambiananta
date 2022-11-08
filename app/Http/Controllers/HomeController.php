<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Buku;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $bajuAll = Baju::orderBy('created_at', 'DESC')->get()->take(10);
        $baju = Baju::get();
        unset($bajuAll[0]);
        $murah = Baju::whereNull('diskon')->get()->take(5);
        $diskon = Baju::whereNotNull('diskon')->get();

        return view('home', compact('baju', 'murah', 'diskon', 'bajuAll'));
    }

    public function bajuLengkap($id = 0){

        $employee = Baju::find($id);

        $html = "";
        if(!empty($employee)){
           $html = "<tr>
                <td width='30%'><b>ID:</b></td>
                <td width='70%'> ".$employee->id."</td>
             </tr>
             <tr>
                <td width='30%'><b>Username:</b></td>
                <td width='70%'> ".$employee->nama."</td>
             </tr>
             <tr>
                <td width='30%'><b>Name:</b></td>
                <td width='70%'> ".$employee->harga."</td>
             </tr>
             <tr>
                <td width='30%'><b>Email:</b></td>
                <td width='70%'> ".$employee->diskon."</td>
             </tr>
             ";
        }
        $response['html'] = $html;

        return response()->json($response);
     }
}
