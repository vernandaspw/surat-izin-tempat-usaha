<div>
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h4><b>Situ saya</b></h4>

        </div>

    </div>



    <div class="mt-2">
        <div class="container-fluid">
            <div class="mb-2">
                <button wire:click="$toggle('ket')" type="button" class="btn btn-info">Keterangan</button>
                @if($ket)
                <div class="mt-3">
                    <ul>
                        <li>
                            requset : permintaan pengajuan
                        </li>
                    </ul>
                    <ul>
                        <li>
                            process : berkas sedang diperiksa oleh admin
                        </li>
                    </ul>
                    <ul>
                        <li>
                            pending : berkas sedang diperiksa oleh kepala lurah
                        </li>
                    </ul>
                    <ul>
                        <li>
                            approve : surat izin tempat usaha
                        </li>
                    </ul>
                    <ul>
                        <li>
                            reject : ditolak, kesalahan pada dokumen, setelah revisi silakan ajukan ulang.
                        </li>
                    </ul>
                </div>
                @endif
            </div>



            <div class="card">
                <div class="card-body">
                    <div class="table-responsive bg-white">
                        <table class="table table-sm table-hover table-bordered">
                            <thead>
                                <th>
                                    No
                                </th>

                                <th>Nama usaha</th>
                                <th>Alamat Usaha</th>
                                <th>Jenis usaha</th>
                                <th>Status</th>
                                <th>SITU</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($situ as $data)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        {{ $data->nama_usaha }}
                                    </td>
                                    <td>
                                        {{ $data->alamat_usaha }}
                                    </td>
                                    <td>
                                        {{ $data->jenis_usaha->nama }}
                                    </td>
                                    <td>
                                        <div class="badge @if($data->status == 'request')
                                    badge-info
                                    @elseif ($data->status == 'process')
                                    badge-warning
                                    @elseif ($data->status == 'pending')
                                    badge-warning
                                    @elseif ($data->status == 'approve')
                                    badge-success
                                    @elseif ($data->status == 'reject')
                                    badge-danger

                                    @endif">
                                            {{ $data->status }}
                                        </div>
                                    </td>
                                    <td>

                                        @if($data->status == 'approve')
                                        <a href="{{ url('surat', $data->id) }}" target="_blank" rel="noopener noreferrer" type="button" class="btn btn-success btn-sm">Siap Cetak</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if($data->status == 'reject')
                                        {{-- <button type="button" class="btn btn-sm btn-primary">Revisi</button> --}}
                                        @endif
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
