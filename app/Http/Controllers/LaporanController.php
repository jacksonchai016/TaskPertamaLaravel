<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\replacement_class;
use PDF;

class LaporanController extends Controller
{
    //
    public function index(){
        $rep = replacement_class::all();
        return view('laporan/replacement_class', ['replacement_class'=>$rep]);
    }

    public function cetak_pdf(){
        $rep = replacement_class::all();
        $pdf = PDF::loadview('laporan/replacement_class_pdf', ['replacement_class'=>$rep]);

        return $pdf->download('laporan-replacement-class');
    }
}
