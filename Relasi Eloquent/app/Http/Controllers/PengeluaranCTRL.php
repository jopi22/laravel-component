<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;
use App\Models\Barang;

class PengeluaranCTRL extends Controller
{
    public function get(){
        $g = Pengeluaran::all();
        return view('pengeluaran', compact('g'));
    }
}
