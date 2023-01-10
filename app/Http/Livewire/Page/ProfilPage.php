<?php

namespace App\Http\Livewire\Page;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ProfilPage extends Component
{
    public $username, $password, $new_password, $nama, $tempat_lahir, $tgl_lahir, $jk, $kewarganegaraan, $agama, $pekerjaan, $alamat, $telp;

    public function mount()
    {
        $this->username = auth()->user()->username;

        $this->nama = auth()->user()->nama;

        if (auth()->user()->role == 'umum') {
            $this->tempat_lahir = auth()->user()->tempat_lahir;
            $this->tgl_lahir = auth()->user()->tgl_lahir;
            $this->jk = auth()->user()->jk;
            $this->kewarganegaraan = auth()->user()->kewarganegaraan;
            $this->agama = auth()->user()->agama;
            $this->pekerjaan = auth()->user()->pekerjaan;
            $this->alamat = auth()->user()->alamat;
            $this->telp = auth()->user()->telp;
        }
    }
    public function render()
    {
        $this->akun = User::find(auth()->user()->id);

        return view('livewire.page.profil-page')->extends('layouts.app')->section('content');
    }

    public function simpan()
    {
        // cek pass lama
        $akun = User::find(auth()->user()->id);

        // if ($this->password != null) {
        //     if (Hash::check($this->password, $akun->password)) {
        //         $akun->update([
        //             'password' => Hash::make($this->new_password),
        //         ]);
        //     } else {
        //         $this->emit('error', ['pesan' => 'password lama salah']);
        //     }
        // }


        $data = $akun->update([
            'nama' => $this->nama,
            'username' => $this->username,
            'tempat_lahir' => $this->tempat_lahir,
            'tgl_lahir' => $this->tgl_lahir,
            'jk' => $this->jk,
            'kewarganegaraan' => $this->kewarganegaraan,
            'agama' => $this->agama,
            'pekerjaan' => $this->pekerjaan,
            'alamat' => $this->alamat,
            'telp' => $this->telp,
        ]);

        $this->emit('success', ['pesan' => 'berhasil edit akun']);
    }
}
