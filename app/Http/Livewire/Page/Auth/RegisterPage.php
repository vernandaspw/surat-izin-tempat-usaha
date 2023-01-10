<?php

namespace App\Http\Livewire\Page\Auth;

use App\Models\User;
use Livewire\Component;

class RegisterPage extends Component
{
    public $nama, $username, $password, $ulangi_password;

    public function render()
    {
        return view('livewire.page.auth.register-page')->extends('layouts.app')->section('content');
    }

    public function daftar()
    {
        $this->validate([
            'username' => ['required', 'string', 'max:20', 'unique:users', 'alpha_dash'],
        ]);

        if ($this->password != $this->ulangi_password) {
            $this->emit('error', ['pesan' => 'password & ulangi password tidak sama']);
        } else {
            $create = User::create([
                'nama' => $this->nama,
                'username' => $this->username,
                'password' => $this->password,
                'role' => 'umum'
            ]);

            if ($create) {
                auth()->login($create, false);
                redirect()->to('/');
            }else {
                $this->emit('error', ['pesan' => 'Gagal buat akun']);
            }
        }
    }
}
