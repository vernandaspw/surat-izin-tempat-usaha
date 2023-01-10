<div>



    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block ">
                                <img src="{{ asset('assets/Coat_of_arms_of_South_Sumatra.svg.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Aplikasi Pengajuan Surat Izin Tempat Usaha Kelurahan Demang Lebar Daun</h1>
                                    </div>
                                    <form class="user" wire:submit.prevent='masuk'>
                                        <div class="form-group">
                                            <input wire:model='username' autocomplete="off" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                            @error('username')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input wire:model='password' autocomplete="off" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                            @error('password')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input wire:model='ingat' type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>

                                    </form>
                                    <hr>
                                    {{-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> --}}
                                    <div class="text-center">
                                        <a class="small text-success" href="{{ url('register', []) }}">Buat akun baru</a>
                                    </div>
                                </div>
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
