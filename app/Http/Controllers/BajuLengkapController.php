<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use Illuminate\Http\Request;

class BajuLengkapController extends Controller
{
    public function index($id=null, Request $request, )
    {
        $bajuLengkap = Baju::find($id);
        $baju = Baju::orderBy('created_at', 'desc')->get()->take(4);

        return view('bajuLengkap', compact('bajuLengkap','baju'));
    }
}
