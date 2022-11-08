<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $data['baju'] = Baju::select('*')->get();
        return view('welcome',$data);
     }

     public function getEmployeeDetails($empid = 0){

        $employee = Baju::find($empid);

        $html = "";
        if(!empty($employee)){
           $html = "<tr>
                <td width='30%'><b>ID:</b></td>
                <td width='70%'> ".$employee->id."</td>
             </tr>
             <tr>
                <td width='30%'><b>Username:</b></td>
                <td><img src='{{url('images/baju/gambar2/'. $employee->gambar2)}}' alt='image' style='margin-right: 10px;' /></td>
                <td width='70%'> ".$employee->name."</td>
             </tr>
             <tr>
                <td width='30%'><b>Name:</b></td>
                <td width='70%'> ".$employee->harga."</td>
             </tr>
             <tr>
                <td width='30%'><b>Email:</b></td>
                <td width='70%'> ".$employee->diskon."</td>
             </tr>
             <tr>
                <td width='30%'><b>Age:</b></td>
                <td width='70%'> ".$employee->isi."</td>
             </tr>";
        }
        $response['html'] = $html;

        return response()->json($response);
     }
}
