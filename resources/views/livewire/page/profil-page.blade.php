<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        Akun saya
                    </div>
                    <div class="card-body">
                        <div class="mb-1">
                            <label class="m-0" for="">username</label>
                            <input type="text" wire:model='username' class="form-control form-control-sm">
                        </div>
                        {{-- <div class="mb-1">
                            <label class="m-0" for="">password lama</label>
                            <input type="password" wire:model='password'  class="form-control form-control-sm">
                        </div>
                        <div class="mb-1">
                            <label class="m-0" for="">password baru</label>
                            <input type="password" wire:model='new_password'  class="form-control form-control-sm">
                        </div> --}}

                        <hr>
                        <div class="mb-1"><b>Profil</b></div>

                        @if(auth()->user()->role == 'umum')
                        <div class="mb-1">

                            <label class="m-0" for="">nama</label>
                            <input type="text" maxlength="40" wire:model='nama' class="form-control form-control-sm">
                        </div>

                        <div class="mb-1">
                            <label class="m-0" for="">tempat_lahir</label>
                            <input type="text" maxlength="60" wire:model='tempat_lahir' class="form-control form-control-sm">
                        </div>
                        <div class="mb-1">
                            <label class="m-0" for="">tempat_lahir</label>
                            <input type="text" maxlength="60" wire:model='tempat_lahir' class="form-control form-control-sm">
                        </div>

                        <div class="mb-1">
                            <label class="m-0" for="">tgl_lahir</label>
                            <input type="date" wire:model='tgl_lahir' class="form-control form-control-sm">
                        </div>
                        <div class="mb-1">
                            <label class="m-0" for="">Jenis Kelamin</label>
                            <select wire:model='jk' id="" class="form-control form-control-sm">
                                <option value="">Pilih</option>
                                <option value="l">Laki laki</option>
                                <option value="p">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label class="m-0" for="">Kewarganegaraan</label>
                            <select wire:model='kewarganegaraan' id="" class="form-control form-control-sm">
                                <option value="">Pilih</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label class="m-0" for="">Agama</label>
                            <input type="text" maxlength="20" wire:model='agama' class="form-control form-control-sm">
                        </div>
                        <div class="mb-1">
                            <label class="m-0" for="">Pekerjaan</label>
                            <input type="text" maxlength="40" wire:model='pekerjaan' class="form-control form-control-sm">
                        </div>
                        <div class="mb-1">
                            <label class="m-0" for="">Alamat</label>
                            <input type="text" wire:model='alamat' class="form-control form-control-sm">
                        </div>
                        <div class="mb-1">
                            <label class="m-0" for="">Telp</label>
                            <input type="text" wire:model='telp' class="form-control form-control-sm">
                        </div>



                        @endif

                        <div class="">
                            <button class="btn btn-success mt-2 form-control" wire:click.prevent='simpan'>Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
