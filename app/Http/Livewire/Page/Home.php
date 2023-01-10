<?php

namespace App\Http\Livewire\Page;

use App\Models\PengajuanSitu;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $this->request = PengajuanSitu::where('status', 'request')->get()->count();
        $this->process = PengajuanSitu::where('status', 'process')->get()->count();
        $this->pending = PengajuanSitu::where('status', 'pending')->get()->count();
        $this->approve = PengajuanSitu::where('status', 'approve')->get()->count();
        $this->reject = PengajuanSitu::where('status', 'reject')->get()->count();

        $this->request_saya = PengajuanSitu::where('pemilik_id', auth()->user()->id)->where('status', 'request')->get()->count();
        $this->process_saya = PengajuanSitu::where('pemilik_id', auth()->user()->id)->where('status', 'process')->get()->count();
        $this->pending_saya = PengajuanSitu::where('pemilik_id', auth()->user()->id)->where('status', 'pending')->get()->count();
        $this->approve_saya = PengajuanSitu::where('pemilik_id', auth()->user()->id)->where('status', 'approve')->get()->count();
        $this->reject_saya = PengajuanSitu::where('pemilik_id', auth()->user()->id)->where('status', 'reject')->get()->count();

        return view('livewire.page.home')->extends('layouts.app')->section('content');
    }
}
