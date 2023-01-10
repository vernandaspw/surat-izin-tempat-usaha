<div>
    <div class="container-fluid">
        @if($editPage)
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
                        <input required wire:model='jumlah_karyawan' type="number" class="form-control form-control-sm">
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
                        <input required wire:model='npwp_usaha' type="file" class="form-control form-control-sm">
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
        @else
        <div class="mb-3">
            <h4>
                <b>Form Pengajuan Surat Izin tempat Usaha</b>
            </h4>


            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent='simpan' enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-2 mt-3">
                                    <b>Data Pemilik</b>
                                </div>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        {{-- <tr>
                                     <th scope="col">Keterangan</th>
                                     <th scope="col">First</th>
                                     <th scope="col">Last</th>
                                     <th scope="col">Handle</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nama Pemilik</td>
                                            <td>{{ $data->pemilik->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>tempat_lahir, tanggal lahir</td>
                                            <td>{{ $data->pemilik->tempat_lahir }}, {{ $data->pemilik->tgl_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis kelamin</td>
                                            <td>{{ $data->pemilik->jk }}</td>
                                        </tr>
                                        <tr>
                                            <td>agama</td>
                                            <td>{{ $data->pemilik->agama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kewarganegaraan</td>
                                            <td>{{ $data->pemilik->kewarganegaraan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pekerjaan</td>
                                            <td>{{ $data->pemilik->pekerjaan }}</td>
                                        </tr>
                                        <tr>
                                            <td>alamat</td>
                                            <td>{{ $data->pemilik->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp</td>
                                            <td>{{ $data->pemilik->telp }}</td>
                                        </tr>
                                        <tr>
                                            <td>PassFoto Pemilik Usaha</td>
                                            <td><a href="{{ Storage::url($data->foto) }}" target="_blank" rel="noopener noreferrer"><img src="{{ Storage::url($data->foto) }}" width="200" height="150" alt=""></a></td>
                                        </tr>
                                        <tr>
                                            <td>KTP Pemilik Usaha</td>
                                            <td> <a href="{{ Storage::url($data->ktp) }}" target="_blank" rel="noopener noreferrer">
                                                <img src="{{ Storage::url($data->ktp) }}" width="200" height="150" alt=""></a></td>
                                        </tr>
                                        <tr>
                                            <td>NPWP Pemilik Usaha</td>
                                            <td><a href="{{ Storage::url($data->npwp_pemilik) }}" target="_blank" rel="noopener noreferrer">
                                                <img src="{{ Storage::url($data->npwp_pemilik) }}" width="200" height="150" alt=""></a></td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-2 mt-3">
                                    <b>Data Usaha</b>
                                </div>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        {{-- <tr>
                                     <th scope="col">Keterangan</th>
                                     <th scope="col">First</th>
                                     <th scope="col">Last</th>
                                     <th scope="col">Handle</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>Nama Usaha</td>
                                            <td>{{ $data->nama_usaha }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Usaha</td>
                                            <td>{{ $data->alamat_usaha }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Usaha</td>
                                            <td>{{ $data->jenis_usaha->nama }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah karyawan</td>
                                            <td>{{ $data->jumlah_karyawan }}</td>
                                        </tr>
                                        <tr>
                                            <td>status tempat usaha</td>
                                            <td>{{ $data->status_tempat }}</td>
                                        </tr>
                                        <tr>
                                            <td>bukti tempat usaha <span style="font-size: 13px">(Surat kepemilikan / bukti sewa)</span></td>
                                            <td>
                                                @if($data->bukti_tempat)
                                                <a href="{{ Storage::url($data->bukti_tempat) }}" target="_blank" rel="noopener noreferrer" class="btn btn-info btn-sm rounded-pill">Lihat</a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>NPWP Usaha</td>
                                            <td>
                                                @if($data->npwp_usaha)
                                                <a href="{{ Storage::url($data->npwp_usaha) }}" target="_blank" rel="noopener noreferrer" class="btn btn-info btn-sm rounded-pill">Lihat</a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Akta Pendirian</td>
                                            <td>
                                                @if($data->akta_pendirian)
                                                <a href="{{ Storage::url($data->akta_pendirian) }}" target="_blank" rel="noopener noreferrer" class="btn btn-info btn-sm rounded-pill">Lihat</a>

                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Surat izin gangguan</td>
                                            <td>
                                                @if($data->surat_izin_gangguan)
                                                <a href="{{ Storage::url($data->surat_izin_gangguan) }}" target="_blank" rel="noopener noreferrer" class="btn btn-info btn-sm rounded-pill">Lihat</a>

                                                @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Surat Keterangan Domisili usaha</td>
                                            <td>
                                                @if($data->sk_domisili)
                                                <a href="{{ Storage::url($data->sk_domisili) }}" target="_blank" rel="noopener noreferrer" class="btn btn-info btn-sm rounded-pill">Lihat</a></td>
                                            @endif
                                        </tr>

                                        <tr>
                                            <td>PBB terakhir</td>
                                            <td>@if($data->pbb)
                                                <a href="{{ Storage::url($data->pbb) }}" target="_blank" rel="noopener noreferrer" class="btn btn-info btn-sm rounded-pill">Lihat</a></td>
                                            @endif


                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="mt-3">
                            @if($data->status == 'request')
                            <button wire:click="cek('{{ $data->id }}')" type="submit" class="btn btn-success form-control">Sudah dicek</button>
                            @endif
                            @if($data->status == 'process')
                            <button wire:click="minta_approve('{{ $data->id }}')" type="button" class="btn btn-sm btn-success form-control">Minta Approve kepala</button>
                            <button wire:click="reject('{{ $data->id }}')" type="button" class="btn btn-sm btn-danger form-control">Reject</button>
                            @endif

                            @if(auth()->user()->role == 'kepala')
                            @if($data->status == 'pending')
                            <button wire:click="approve('{{ $data->id }}')" type="button" class="btn btn-sm btn-success">Approve</button>
                            <button wire:click="reject('{{ $data->id }}')" type="button" class="btn btn-sm btn-danger">Reject</button>
                            @endif
                            @endif
                            {{-- <button type="reset" class="btn btn-secondary form-control mt-2">Reset</button> --}}
                        </div>
                    </form>
                </div>
            </div>

        </div>
        @endif
    </div>
</div>
