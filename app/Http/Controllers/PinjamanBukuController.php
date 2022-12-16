<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PeminjamanBuku;
use PDF;

class PinjamanBukuController extends Controller
{
    //
    public function index()
    {
        $pb = PeminjamanBuku::all();
        return view('laporan.v_peminjamanbuku', ['peminjamanbuku' => $pb]);
    }

    public function print()
    {
        $pb = PeminjamanBuku::all();
        
        return view('laporan.v_print', ['peminjamanbuku' => $pb]);
    }
}
