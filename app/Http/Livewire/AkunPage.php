<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AkunPage extends Component
{
    public $createPage = false, $editPage = false;

    public $nama, $username, $password, $role, $ulangi_password;

    public function render()
    {
        $this->datas = User::where('role', '!=', 'administrator')->latest()->get();

        return view('livewire.akun-page')->extends('layouts.app')->section('content');
    }

    public function openCreate()
    {
        $this->createPage = true;
    }

    public function resetData()
    {
        $this->nama = null;
        $this->username = null;
        $this->password = null;
        $this->role = null;
        $this->ulangi_password = null;
    }

    public function create()
    {
        $this->validate([
            'username' => ['required', 'string', 'max:20', 'unique:users', 'alpha_dash'],
            'ulangi_password' => 'same:password'
        ]);

        if ($this->password != $this->ulangi_password) {
            $this->emit('error', ['pesan' => 'password & ulangi password tidak sama']);
        } else {
            $create = User::create([
                'nama' => $this->nama,
                'username' => $this->username,
                'password' => $this->password,
                'role' => $this->role,
            ]);
        }

        $this->createPage = false;
        $this->emit('success', ['pesan' => 'berhasil simpam data']);
    }
}
