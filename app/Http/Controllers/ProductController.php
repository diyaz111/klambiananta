<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $baju = Baju::orderBy('created_at', 'DESC')->get();
        return view('product', compact('baju'));
    }
}
