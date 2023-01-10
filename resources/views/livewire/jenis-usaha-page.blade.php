<div>
    <div>
        <div class="container-fluid">
            <div class="">
                <h4><b>Master Jenis Usaha</b></h4>
            </div>
        </div>

        <div class="mt-2">
            <div class="container-fluid">
                <div class="mb-3">
                    <button type="button" class="btn btn-primary" wire:click="$set('createPage', 'true')">Tambah jenis usaha</button>
                </div>
                @if($createPage)
                <div class="col-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            Tambah jenis usaha
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent='tambahData'>
                                <div class="">
                                    <label for="" class="m-0">Nama</label>
                                    <input type="text" wire:model='nama' class="form-control form-control-sm">
                                </div>
                                <div class="">
                                    <button type="submit" class="btn mt-2 btn-success form-control">Simpan</button>
                                    <button type="button" class="btn btn-secondary mt-2 form-control" wire:click="tutupTambah()">Tutup</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @if($editPage)

                <div class="col-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            Ubah jenis usaha
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent='ubahData'>
                                <div class="">
                                    <label for="" class="m-0">Nama</label>
                                    <input type="text" wire:model='nama' class="form-control form-control-sm">
                                </div>
                                <div class="">
                                    <button type="submit" class="btn mt-2 btn-success form-control">Simpan</button>
                                    <button type="button" class="btn btn-secondary mt-2 form-control" wire:click="tutupEdit()">Tutup</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @else

                <div class="table-responsive bg-white">
                    <table class="table table-sm table-hover table-bordered">
                        <thead>
                            <th>
                                Jenis
                            </th>

                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                           <tr>
                            <td>
                                {{ $data->nama }}
                            </td>

                            <td>
                                <button wire:click="UbahPage('{{ $data->id }}')" type="button" class="btn btn-warning">Ubah</button>
                                <button wire:click="hapus('{{ $data->id }}')" type="button" class="btn btn-danger">Hapus</button>
                            </td>
                           </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>

</div>
