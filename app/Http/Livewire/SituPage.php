<?php

namespace App\Http\Livewire;

use App\Models\PengajuanSitu;
use Livewire\Component;

class SituPage extends Component
{
    public function render()
    {
        $this->situ = PengajuanSitu::latest()->get();


        return view('livewire.situ-page')->extends('layouts.app')->section('content');
    }

    public function cek($id)
    {
        PengajuanSitu::find($id)->update([
            'status' => 'process'
        ]);

        redirect()->to('situ-detail/'.$id);
    }

    public function lihat($id)
    {
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
            'diaprove_oleh' => auth()->user()->id
        ]);

        $this->emit('success', ['pesan' => 'Success approve']);
    }
}
