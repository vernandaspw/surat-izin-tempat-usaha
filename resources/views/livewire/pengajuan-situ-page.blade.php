<div>
    <div class="container-fluid">
        <div class="mb-3">
            <h4>
                <b>Form Pengajuan Surat Izin tempat Usaha</b>
            </h4>

            <div class="col-md-5">
                <form wire:submit.prevent='simpan' enctype="multipart/form-data">
                    <div class="mb-2">
                        <b>Data Pemilik</b>
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">PassFoto Pemilik Usaha</label>
                        <input required wire:model='foto' type="file" class="form-control form-control-sm">
                        @error('foto') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">KTP Pemilik Usaha</label>
                        <input required wire:model='ktp' type="file" class="form-control form-control-sm">
                        @error('ktp') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">NPWP Pemilik Usaha</label>
                        <input wire:model='npwp_pemilik' type="file" class="form-control form-control-sm">
                        @error('npwp_pemilik') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <hr>
                    <div class="mb-2">
                        <b>Data Usaha</b>
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">Nama Usaha</label>
                        <input required wire:model='nama_usaha' maxlength="100" type="text" class="form-control form-control-sm">
                        @error('nama_usaha') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">Alamat Usaha</label>
                        <input required wire:model='alamat_usaha' type="text" class="form-control form-control-sm">
                        @error('alamat_usaha') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">Jenis Usaha</label>
                        <select class="form-control form-control-sm" required wire:model='jenis_usaha_id' id="">
                            <option value="">Pilih</option>
                            @foreach ($jenisusaha as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @error('jenis_usaha_id') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">Jumlah karyawan</label>
                        <input required wire:model='jumlah_karyawan'  type="number" class="form-control form-control-sm">
                        @error('jumlah_karyawan') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">status tempat usaha</label>
                        <select class="form-control form-control-sm" required wire:model='status_tempat' id="">
                            <option value="">Pilih</option>
                            <option value="pemilik">Sebagai pemilik</option>
                            <option value="sewa">Sebagai penyewa</option>
                        </select>
                        @error('status_tempat') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-1">
                        <label for="" class="m-0">bukti tempat usaha (Surat kepemilikan / bukti sewa)</label>
                        <input required wire:model='bukti_tempat' type="file" class="form-control form-control-sm">
                        @error('bukti_tempat') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">NPWP Usaha</label>
                        <input  wire:model='npwp_usaha' type="file" class="form-control form-control-sm">
                        @error('npwp_usaha') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">Akta Pendirian</label>
                        <input wire:model='akta_pendirian' type="file" class="form-control form-control-sm">
                        @error('akta_pendirian') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">Surat izin gangguan</label>
                        <input wire:model='surat_izin_gangguan' type="file" class="form-control form-control-sm">
                        @error('surat_izin_gangguan') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">Surat Keterangan Domisili usaha</label>
                        <input required wire:model='sk_domisili' type="file" class="form-control form-control-sm">
                        @error('sk_domisili') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-1">
                        <label for="" class="m-0">PBB terakhir</label>
                        <input wire:model='pbb' type="file" class="form-control form-control-sm">
                        @error('pbb') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-success form-control">Ajukan SITU</button>
                        <button type="reset" class="btn btn-secondary form-control mt-2">Reset</button>
                 </div>
                </form>
            </div>
        </div>
    </div>
</div>
