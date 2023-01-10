<div>
    <div class="container-fluid">
        <div class="">
            <h4><b>Situ</b></h4>
        </div>
    </div>

    <div class="mt-2">
        <div class="container-fluid">
            <div class="table-responsive bg-white">
                <table class="table table-sm table-hover table-bordered">
                    <thead>
                        <th>
                            Pemilik
                        </th>
                        <th>Nama usaha</th>
                        <th>alamat Usaha</th>
                        <th>Jenis usaha</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($situ as $data)
                        <tr>
                            <td>
                                {{ $data->pemilik->nama }}
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
                                <button type="button" wire:click="lihat('{{ $data->id }}')" class="btn btn-sm btn-primary">Lihat</button>
                                @if(auth()->user()->role == 'admin')
                                @if($data->status == 'request')
                                <button wire:click="cek('{{ $data->id }}')" type="button" class="btn btn-sm btn-primary">Cek berkas</button>
                                @endif
                                @if($data->status == 'process')
                                <button wire:click="minta_approve('{{ $data->id }}')" type="button" class="btn btn-sm btn-success">Minta Approve kepala</button>
                                <button wire:click="reject('{{ $data->id }}')" type="button" class="btn btn-sm btn-danger">Reject</button>
                                @if($data->status == 'pending')
                                <button wire:click="reject('{{ $data->id }}')" type="button" class="btn btn-sm btn-danger">Reject</button>
                                @endif
                                @endif
                                @endif

                                @if(auth()->user()->role == 'kepala')
                                @if($data->status == 'pending')
                                <button wire:click="approve('{{ $data->id }}')" type="button" class="btn btn-sm btn-success">Approve</button>
                                <button wire:click="reject('{{ $data->id }}')" type="button" class="btn btn-sm btn-danger">Reject</button>
                                @endif
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
