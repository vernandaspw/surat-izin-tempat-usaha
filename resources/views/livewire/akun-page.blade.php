<div>
    <div class="container-fluid">
        <h4>Kelola Akun</h4>

        <div class="mt-3 mb-3">
            {{-- <button class="btn btn-primary">Buat akun</button> --}}
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
