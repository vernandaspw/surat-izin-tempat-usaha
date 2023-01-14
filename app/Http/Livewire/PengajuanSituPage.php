<?php

namespace App\Http\Livewire;

use App\Models\JenisUsaha;
use App\Models\PengajuanSitu;
use Livewire\Component;
use Livewire\WithFileUploads;

class PengajuanSituPage extends Component
{
    use WithFileUploads;

    public $foto, $ktp, $npwp_pemilik, $nama_usaha, $alamat_usaha, $jenis_usaha_id, $jumlah_karyawan, $status_tempat, $bukti_tempat, $npwp_usaha, $akta_pendirian, $surat_izin_gangguan, $sk_domisili, $pbb;
    public function render()
    {
        $this->jenisusaha = JenisUsaha::latest()->get();

        return view('livewire.pengajuan-situ-page')->extends('layouts.app')->section('content');
    }

    public function simpan()
    {
        if ($this->foto) {
            $foto = $this->foto->store('img');
        }
        if ($this->ktp) {
            $ktp = $this->ktp->store('img');
        }
        if ($this->npwp_pemilik) {
            $npwp_pemilik = $this->npwp_pemilik->store('img');
        }

        if ($this->bukti_tempat) {
            $bukti_tempat = $this->bukti_tempat->store('img');
        }
        if ($this->npwp_usaha) {
            $npwp_usaha = $this->npwp_usaha->store('img');
        }
        if ($this->akta_pendirian) {
            $akta_pendirian = $this->akta_pendirian->store('img');
        }
        if ($this->surat_izin_gangguan) {
            $surat_izin_gangguan = $this->surat_izin_gangguan->store('img');
        }
        if ($this->sk_domisili) {
            $sk_domisili = $this->sk_domisili->store('img');
        }
        if ($this->pbb) {
            $pbb = $this->pbb->store('img');
        }

        $data = PengajuanSitu::create([
            'pemilik_id' => auth()->user()->id,
            'foto' => $foto != null ? $foto : null,
            'ktp' => $ktp != null ? $ktp : null,
            'npwp_pemilik' => $npwp_pemilik != null ? $npwp_pemilik : null,

            'nama_usaha' => $this->nama_usaha,
            'alamat_usaha' => $this->alamat_usaha,
            'jenis_usaha_id' => $this->jenis_usaha_id,
            'jumlah_karyawan' => $this->jumlah_karyawan,
            'status_tempat' => $this->status_tempat,
            'bukti_tempat' => $this->bukti_tempat != null ? $bukti_tempat : null,
            'npwp_usaha' => $this->npwp_usaha != null ? $npwp_usaha : null,
            'akta_pendirian' => $this->akta_pendirian != null ? $akta_pendirian : null,
            'surat_izin_gangguan' => $this->surat_izin_gangguan != null ? $surat_izin_gangguan : null,
            'sk_domisili' => $this->sk_domisili != null ? $sk_domisili : null,
            'pbb' => $this->pbb != null ? $pbb : null,
        ]);

        redirect()->to('situ-saya');

        $this->emit('success', ['pesan' => 'berhasil mengajukan']);
    }

}
