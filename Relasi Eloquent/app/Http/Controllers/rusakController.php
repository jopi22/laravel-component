<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\Rusak;
use Illuminate\Http\Request;

class rusakController extends Controller
{
    public function index()
    {
        $r = Rusak::all();
        return view('rusak', compact('r'));
    }

    public function motor()
    {
        $r = Motor::all();
        return view('motor', compact('r'));
    }

    public function rekap_motor($id)
    {
        $r = Rusak::where('motor_id', $id)->get();
        $m = Motor::find($id);
        return view('rekap_motor', compact('r','m'));
    }
}
