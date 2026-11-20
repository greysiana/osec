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
        <form action="{{route('pegawai.store')}}" method="POST">
            @csrf
            <div class="container-input-pegawai">
                <div class="header">
                    <a href="{{route('admin.data-pegawai')}}">
                        <button class="btn-kembali">Kembali</button>
                    </a>
                    <h2>Input Data Pegawai</h2>
                </div>
                <div class="form-group"> 
                    <label for="nama" class="nama_pegawai">Nama Pegawai</label>
                    <span>:</span>
                    <input type="text" id="nama" name="nama" placeholder="Masukan nama pegawai" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <span>:</span>
                    <div>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : ''}}>
                        <label for="" class="pilihan_jk">Laki-laki</label>
                    </div>
                    <div>
                        <input type="radio" name="jenis_kelamin" value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : ''}}>
                        <label for="" class="pilihan_jk">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <span>:</span>
                    <select name="id_jabatan" id="id_jabatan">
                        <option value="">-- Pilih Jabatan --</option>
                        @foreach($jabatan as $data)
                            <option value="{{$data->id_jabatan}}" {{old('id_jabatan') == $data->id_jabatan ? 'selected' : ''}}>
                                {{$data->nama_jabatan}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Status Kepegawaian</label>
                    <span>:</span>
                    <select name="status_kepegawaian" id="status_kepegawaian">
                        <option value="">-- Pilih Status Kepegawaian --</option>
                        <option value="tetap" {{old('status_kepegawaian') == 'tetap' ? 'selected' : ''}}>Pegawai Tetap</option>
                        <option value="kontrak" {{old('status_kepegawaian') == 'kontrak' ? 'selected' : ''}}>Pegawai Kontrak</option>
                        <option value="magang" {{old('status_kepegawaian') == 'magang' ? 'selected' : ''}}>Pegawai Magang</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <span>:</span>
                    <select name="status" id="status">
                        <option value="">-- Pilih Status --</option>
                        <option value="aktif" {{old('status') == 'aktif' ? 'selected' : ''}}>Aktif</option>
                        <option value="tidak_aktif" {{old('status') == 'tidak_aktif' ? 'selected' : ''}}>Tidak Aktif</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Masuk</label>
                    <span>:</span>
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="{{old('tanggal_masuk')}}">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <span>:</span>
                    <input type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="">Konfirmasi Password</label>
                    <span>:</span>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </div>
                <div class="aksi">
                    <button class="btn-batal" type="reset">Batal</button>
                    <button class="btn-simpan" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </body>
</html>