<?php

namespace App\Http\Livewire;

use App\Models\JenisUsaha;
use App\Models\PengajuanSitu;
use Livewire\Component;

class SituDetailPage extends Component
{
    public $editPage = false;

    public $ID;

    public function mount($id)
    {
        $this->ID = $id;
    }

    public function render()
    {
        $this->jenisusaha = JenisUsaha::latest()->get();

        $this->data = PengajuanSitu::find($this->ID);


        return view('livewire.situ-detail-page')->extends('layouts.app')->section('content');
    }

    public function cek($id)
    {
        PengajuanSitu::find($id)->update([
            'status' => 'process'
        ]);

        redirect()->to('situ-detail/'.$id);
    }

    public function minta_approve($id)
    {
        PengajuanSitu::find($id)->update([
            'status' => 'pending'
        ]);

        $this->emit('success', ['pesan' => 'Success request approve']);
    }

    public function reject($id)
    {
        PengajuanSitu::find($id)->update([
            'status' => 'reject'
        ]);

        $this->emit('success', ['pesan' => 'Tolak pengajuan karena ada kesalahan berkas']);
    }

    public function approve($id)
    {
        PengajuanSitu::find($id)->update([
            'status' => 'approve',
            // 'diaprove_oleh' => auth()->user()->id
        ]);

        $this->emit('success', ['pesan' => 'Success approve']);
    }
}
