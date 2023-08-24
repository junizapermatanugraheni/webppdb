<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Registrasi Calon Siswa | SMK Ma'arif Wonosari</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="wizard.css">

    <link rel="icon" href="logo_smk.png">
</head>

<body class="hold-transition sidebar-mini px-4 py-4">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li style="color: white">{{ $item }}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <form action="/siswa/create/" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('POST') }}
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Form Identitas Siswa</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nmlengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nmlengkap" name="nmlengkap"
                                placeholder="Enter nama lengkap" value="{{ Session::get('nmlengkap') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="number" class="form-control" id="nik" name="nik"
                                placeholder="Enter nomor induk keluarga" maxlength="16"
                                value="{{ Session::get('nik') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="number" class="form-control" id="nisn" name="nisn"
                                placeholder="Enter nomor induk siswa nasional" value="{{ Session::get('nisn') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                placeholder="Enter alamat" value="{{ Session::get('alamat') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="notelp_siswa">Nomor Telepon Siswa</label>
                            <input type="text" class="form-control" id="notelp_siswa" name="notelp_siswa"
                                placeholder="Enter Nomor Telepon Siswa" value="{{ Session::get('notelp_siswa') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tmplahir">Tempat</label>
                            <input type="text" class="form-control" id="tmplahir" name="tmplahir"
                                placeholder="Enter tempat lahir" value="{{ Session::get('tmplahir') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tgllahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgllahir" name="tgllahir"
                                value="{{ Session::get('tgllahir') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="custom-select" name="jnskelamin">
                                <option value="">-- Pilih --</option>
                                <option value="laki-laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tgllahir">Agama</label>
                            <input type="text" class="form-control" id="agama" name="agama"
                                value="{{ Session::get('agama') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah"
                                value="{{ Session::get('asal_sekolah') }}" placeholder="Asal Sekolah"
                                name="asal_sekolah">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat_sekolah">Alamat Sekolah</label>
                    <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah"
                        value="{{ Session::get('alamat_sekolah') }}" placeholder="Alamat Sekolah">
                </div>
                <div class="form-group">
                    <label for="nmortu">Nama Orang Tua</label>
                    <input type="text" class="form-control" id="nmortu" name="nmortu"
                        value="{{ Session::get('nmortu') }}" placeholder="Enter Nama Orang Tua">
                </div>
                <div class="form-group">
                    <label for="alamat_ortu">Alamat Orang Tua</label>
                    <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu"
                        value="{{ Session::get('alamat_ortu') }}" placeholder="Enter Alamat Orang Tua">
                </div>
                <div class="form-group">
                    <label for="pekerjaan_ortu">Pekerjaan Orang Tua</label>
                    <input type="text" class="form-control" id="pekerjaan_ortu" name="pekerjaan_ortu"
                        value="{{ Session::get('pekerjaan_ortu') }}" placeholder="Enter Pekerjaan Orang Tua">
                </div>
                <div class="form-group">
                    <label for="notlp_ortu">Nomor Telepon Orang Tua</label>
                    <input type="number" class="form-control" id="notlp_ortu" name="notlp_ortu"
                        value="{{ Session::get('notlp_ortu') }}" placeholder="Enter Nomor Telepon Orang Tua">
                </div>
            </div>
        </div>
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Form Pilih Jurusan</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="custom-select" name="idjurusan">
                                <option value="">-- Pilih Jurusan --</option>
                                @foreach ($jurusan as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_jurusan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Form Nilai Ujian</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nilai_bindo">Bahasa Indonesia</label>
                    <input type="number" class="form-control" id="nilai_bindo" name="nilai_bindo"
                        value="{{ Session::get('nilai_bindo') }}" placeholder="Enter nilai bahasa indonesia">
                </div>
                <div class="form-group">
                    <label for="nilai_binggris">Bahasa Inggris</label>
                    <input type="number" class="form-control" id="nilai_binggris" name="nilai_binggris"
                        value="{{ Session::get('nilai_binggris') }}" placeholder="Enter nilai bahasa inggris">
                </div>
                <div class="form-group">
                    <label for="nilai_mt">Matematika</label>
                    <input type="number" class="form-control" id="nilai_mtk" name="nilai_mtk"
                        value="{{ Session::get('nilai_mtk') }}" placeholder="Enter nilai matematika">
                </div>
                <div class="form-group">
                    <label for="nilai_ipa">IPA</label>
                    <input type="number" class="form-control" id="nilai_ipa" name="nilai_ipa"
                        value="{{ Session::get('nilai_ipa') }}" placeholder="Enter nilai ipa">
                </div>
                <div class="form-group">
                    <label for="doc_nilaiujian">Scan Document Nilai Ujian</label>
                    <input type="file" class="form-control" id="doc_nilaiujian" name="doc_nilaiujian"
                        value="{{ Session::get('doc_nilaiujian') }}">
                </div>

            </div>
        </div>
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Form Upload Dokumen</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="doc_ketlulus">Surat Keterangan Lulus</label>
                    <input type="file" class="form-control" id="doc_ketlulus" name="doc_ketlulus"
                        value="{{ Session::get('doc_ketlulus') }}">
                </div>
                <div class="form-group">
                    <label for="doc_foto">Foto 4x6 </label>
                    <input type="file" class="form-control" id="doc_foto" name="doc_foto"
                        value="{{ Session::get('doc_foto') }}">

                </div>
                <div class="form-group">
                    <label for="doc_lainnya">Dokumen Pendukung Lainnya (KTM/Kartu Bantuan *jika ada) </label>
                    <input type="file" class="form-control" id="doc_lainnya" name="doc_lainnya"
                        value="{{ Session::get('doc_lainnya') }}">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary w-100" style="height: 50px!important">Simpan</button>
        </div>
    </form>
</body>

</html>
