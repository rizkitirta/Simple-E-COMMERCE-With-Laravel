<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class PesanController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $barang = Barang::where('id', $id)->first();
        return view('pesan.index', compact('barang'));
    }
}
