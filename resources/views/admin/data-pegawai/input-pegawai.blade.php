<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OSEC - Information System</title>
        <link rel="icon" type="image/png" href="{{asset('logo_osec.png')}}">
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        <div class="container-input-pegawai">
            <div class="header">
                <button class="btn-kembali">Kembali</button>
                <h2>Input Data Pegawai</h2>
            </div>
            <div class="form-group">
                <label for="nama">Nama Pegawai</label>
                <span>:</span>
                <input type="text" id="nama" name="nama" placeholder="Masukan nama pegawai" maxlength="100" required>
            </div>
            <div class="aksi">
                <button class="btn-batal">Batal</button>
                <button class="btn-simpan">Simpan</button>
            </div>
        </div>
    </body>
</html>