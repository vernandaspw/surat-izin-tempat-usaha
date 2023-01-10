<?php

namespace App\Http\Livewire;

use App\Models\JenisUsaha;
use Livewire\Component;

class JenisUsahaPage extends Component
{

    public $createPage = false, $editPage = false;
    public $nama, $ID;

    public function render()
    {
        $this->datas = JenisUsaha::latest()->get();

        return view('livewire.jenis-usaha-page')->extends('layouts.app')->section('content');
    }

    public function tambahData()
    {
        JenisUsaha::create([
            'nama' => $this->nama
        ]);

        $this->emit('success', ['pesan' => 'berhasil buat data']);

        $this->nama = null;
        $this->createPage = false;
    }

    public function tutupTambah()
    {
        $this->nama  = null;
        $this->createPage = false;
    }

    public function UbahPage($id)
    {
        $data = JenisUsaha::find($id);

        $this->ID = $id;
        $this->nama = $data->nama;
        $this->editPage = true;
    }

    public function ubahData()
    {
        $data = JenisUsaha::find($this->ID);

        $data->update([
            'nama' => $this->nama
        ]);

        $this->nama  = null;
        $this->editPage = false;
        $this->emit('success', ['pesan' => 'berhasil ubah data']);
    }

    public function tutupEdit()
    {
        $this->nama  = null;
        $this->editPage = false;
    }

    public function hapus($id)
    {
        $data = JenisUsaha::find($id)->delete();
        $this->emit('success', ['pesan' => 'berhasil hapus data']);
    }
}
