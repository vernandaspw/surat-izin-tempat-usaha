<?php

namespace App\Http\Livewire\Page\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginPage extends Component
{
    public $username, $password, $ingat = false;

    public function render()
    {
        return view('livewire.page.auth.login-page')->extends('layouts.app')->section('content');
    }

    public function masuk()
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // cek username
        $user = User::where('username', $this->username)->first();
        if ($user) {
            // cek password
            if (Hash::check($this->password, $user->password)) {
                if ($user->isaktif) {
                    auth()->login($user, $this->ingat);
                    return redirect('/');
                } else {
                    $this->emit('error', ['pesan' => 'akun tidak aktif']);
                }
            } else {
                $this->emit('error', ['pesan' => 'password salah']);
            }
        } else {
            $this->emit('error', ['pesan' => 'username tidak ditemukan']);
        }
    }
}
