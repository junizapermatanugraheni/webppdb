<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Master Informasi | SMK Ma'arif Wonosari</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="wizard.css">

    <link rel="apple-touch-icon" sizes="76x76" href="logo_smk.png">
    <link rel="icon" type="image/png" href="logo_smk.png">
</head>

<body class="hold-transition sidebar-mini px-4 py-4">
    <a href="{{ url('informasi') }}" class="btn btn-secondary mb-5">Kembali</a>

    @if ($errors->any())
        <div class="pt-3">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
        </div>
    @endif

    <form action="{{ url('informasi/'.$data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Form Edit Master Input Informasi</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Jurusan</label>
                    <input type="text" class="form-control"
                        name="nama_jurusan" id="nama_jurusan" value="{{ $data-> nama_jurusan}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kuota Siswa</label>
                    <input type="number" class="form-control"
                        name="kuota" id="kuota" value="{{ $data-> kuota}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Akreditasi</label>
                    <input type="text" class="form-control"
                        name="akreditasi" id="akreditasi"  value="{{ $data-> akreditasi}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Kelas</label>
                    <input type="number" class="form-control"
                        name="jmlkelas" id="jmlkelas"  value="{{ $data-> jmlkelas}}">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</body>

</html>
