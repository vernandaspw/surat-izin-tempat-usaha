<!DOCTYPE html>
<head>
    <title>SURAT</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        #halaman {
            width: auto;
            height: auto;
            position: absolute;
            /* border: 1px solid; */
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 80px;
        }

    </style>

    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</head>

<body>
    <div id=halaman>
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('assets/Coat_of_arms_of_South_Sumatra.svg.png') }}" width="70" alt="">
            </div>
            <div class="col-9 text-start">
                <h6 id=judul>PEMERINTAH KOTA PALEMBANG</h6>
                <h3 id=judul>KELURAHAN DEMANG LEBAR DAUN</h3>
                <h5 id=judul>Jl. Tanah Merah</h5>
            </div>
        </div>
        <hr>
        <div class="text-center mt-2">
            <h5>
                SURAT IZIN TEMPAT USAHA
                </h4>
        </div>
        <p class="text-justify">
            <b>Memberikan Ijin Usaha Kepada</b>
        </p>
        <table>
            <tr>
                <td style="width: 30%;">Nama Usaha</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->nama_usaha }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat Usaha</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->alamat_usaha }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Bidang Usaha</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $data->jenis_usaha->nama }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Pemilik Usaha</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $data->pemilik->nama }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Berlaku s/d Tanggal</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->created_at->addYear(5)->format('d F Y') }}</td>
            </tr>
        </table>

        <p class="mt-3">Dengan ketentuan bahwa usaha tersebut memenuhi syarat berdasarkan peraturan daerah kota palembang tentang perubahan atas Peraturan daerah tentang ijin usaha.</p>
        <p class="">Surat ijin tempat usaha ini sebagai dasar untuk mengajukan surat ijin lainnya kepada instansi yang berwenang mengeluarkannya.</p>

        <div style="width: 40%; text-align: left; float: right;">Palembang, {{ $data->updated_at->format('d F Y') }}</div><br>
        <div style="width: 40%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 40%; text-align: left; float: right;">{{ $data->pemilik->nama }}</div>

    </div>


    <script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>



</body>

</html>
