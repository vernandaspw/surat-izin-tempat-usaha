<?php

namespace App\Http\Livewire\Umum;

use App\Models\PengajuanSitu;
use Livewire\Component;
use PDF;

class SituSayaPage extends Component
{
    public $ket = false;
    public function render()
    {

        $this->situ = PengajuanSitu::where('pemilik_id', auth()->user()->id)->latest()->get();

        return view('livewire.umum.situ-saya-page')->extends('layouts.app')->section('content');
    }

    public function cetak($id)
    {
        $record = PengajuanSitu::find($id);
        // dd($data);
        $data = [
            'pemilik' => $record->pemilik->nama,

        ];
        $pdfContent = PDF::loadView('surat', $data)->output();
        return response()->streamDownload(
            fn() => print($pdfContent),
            "situ.pdf"
        );
    }
}
