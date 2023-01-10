<div>
    <div class="container-fluid">
        <h4>Kelola Akun</h4>

        <div class="mt-3 mb-3">
            <button class="btn btn-primary" wire:click="$set('createPage', 'true')">Buat akun</button>
        </div>
        <div class="mt-2">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent='create'>
                            <div class="">
                                <label for="" class="m-0">Nama</label>
                                <input type="text" wire:model='nama' class="form-control form-control-sm" id="">
                            </div>
                            <div class="">
                                <label for="" class="m-0">Username</label>
                                <input type="text" wire:model='username' class="form-control form-control-sm" id="">
                            </div>
                            <div class="">
                                <label for="" class="m-0">Password</label>
                                <input type="password" wire:model='password' class="form-control form-control-sm" id="">
                            </div>
                            <div class="">
                                <label for="" class="m-0">Ulangi Password</label>
                                <input type="password" wire:model='ulangi_password' class="form-control form-control-sm" id="">
                            </div>
                            <div class="">
                                <label for="" class="m-0">Role</label>
                                <select wire:model='role' class="form-control form-control-sm" id="">
                                    <option value="">Pilih</option>
                                    <option value="admin">admin</option>
                                    <option value="kepala">kepala</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                {{-- <button type="button"  class="btn btn-success">Simpan</button> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        username
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Telp
                                    </th>
                                    <th>
                                        alamat
                                    </th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->telp }}</td>
                                    <td>{{ $data->isaktif  ? 'aktif' : 'tidak aktif' }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning">Ubah</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
