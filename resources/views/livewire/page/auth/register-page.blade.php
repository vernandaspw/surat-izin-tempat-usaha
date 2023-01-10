<div>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block ">
                        <img src="{{ asset('assets/Coat_of_arms_of_South_Sumatra.svg.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Aplikasi Pengajuan Surat Izin Tempat Usaha Kelurahan Demang Lebar Daun</h1>
                                <p class="text-muted">Untuk mengajukan SITU, silakan daftar terlebih dahulu</p>
                            </div>
                            <form class="user" wire:submit.prevent='daftar'>
                                <div class="form-group ">
                                    <input required wire:model='nama' type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama lengkap">

                                </div>
                                <div class="form-group">
                                    <input required wire:model='username' type="username" class="form-control form-control-user" id="exampleInputusername" placeholder="username">
                                    @error('username')
                                    <div class="text-danger" style="font-size: 13px">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input required wire:model='password' type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input required wire:model='ulangi_password' type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-user btn-block">
                                    Buat akun
                                </button>
                                <hr>

                            </form>
                            <hr>
                            <div class="text-center">
                                {{-- <a class="small" href="forgot-password.html">Forgot Password?</a> --}}
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ url('login', []) }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<style>
    body {
        background-color: rgb(0, 183, 0);
    }

</style>
