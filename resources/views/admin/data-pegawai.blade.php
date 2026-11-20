<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <title>OSEC - Information System</title>
        <link rel="icon" type="image/png" href="{{asset('logo_osec.png')}}">
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body> 
        @include('admin.dashboard')
        <div class="container-content"> 
            <h2>Data Pegawai</h2>
            <div class="kategori-pegawai">
                <div class="kategori">
                    <h4 class="tetap">Pegawai Tetap</h4>
                    <span class="titik-dua">:</span>
                    <span>{{$pegawaiTetap}}</span>
                </div>
                <div class="kategori">
                    <h4>Pegawai Kontrak</h4>
                    <span class="titik-dua">:</span>
                    <span>{{$pegawaiKontrak}}</span>
                </div>
                <div class="kategori">
                    <h4>Pegawai Magang</h4>
                    <span class="titik-dua">:</span>
                    <span>{{$pegawaiMagang}}</span>
                </div>
            </div>
            <div class="container-button-aksi">
                <div class="cari-pegawai">
                    <input type="text" placeholder="Cari data pegawai">
                </div>
                <div class="tambah-pegawai">
                    <a href="{{route('pegawai.create')}}">
                        <button>
                            <i class="fa-solid fa-plus"></i>
                            <span>Tambah Pegawai</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="tabel-data-pegawai">
                <table class="tabel-pegawai">
                    <thead>
                        <tr>
                            <th>No</th> 
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pegawai as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->username}}</td>
                                <td>{{$data->jabatan->nama_jabatan ?? '-' }}</td>
                                <td>{{$data->status}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body> 
</html>