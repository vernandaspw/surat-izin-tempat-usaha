<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSitu;
use Illuminate\Http\Request;
use PDF;

class SuratController extends Controller
{
    public function index($id)
    {
        $data = PengajuanSitu::find($id);

        
        return view('surat', compact('data'));
    }

    public function exportPDF($id) {

        $data = PengajuanSitu::find($id);

        $pdf = PDF::loadView('surat', ['data' => $data]);

        return $pdf->download('surat.pdf');
      }
}
