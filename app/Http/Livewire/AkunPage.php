<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AkunPage extends Component
{
    public $createPage=false, $editPage=false;


    public function render()
    {
        $this->datas = User::where('role', '!=', 'administrator')->latest()->get();

        return view('livewire.akun-page')->extends('layouts.app')->section('content');
    }

    public function create()
    {
        $user = User::create([
            ''
        ]);

        $this->emit('success', ['pesan' => 'berhasil simpam data']);
    }
}
