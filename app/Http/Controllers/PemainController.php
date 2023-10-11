<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;

class PemainController extends Controller
{
    //buat controller dan model pemain untuk menampilkan data pemain
    public function index()
    {
        $pemains = Pemain::all();
        return view('pemain.index', compact('pemains'));
    }
}
