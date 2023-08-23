<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Login Calon Siswa</title>
    <link rel="icon" href="logo_smk.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="logo_smk.png" alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $item)
                                            <li style="color: white">{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                            @endif
                            <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                            <form action="/siswa/login_siswa" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="nik">NIK (Nomor Induk Keluarga)</label>
                                    <input id="nik" type="nik" class="form-control" name="nik"
                                        value="{{ Session::get('nik') }}" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="password">Password *(tanggal lahir, contoh :
                                            20072001)</label>
                                    </div>
                                    <input id="tgllahir" type="password" class="form-control" name="tgllahir" required>
                                </div>

                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-success btn-block w-100">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Belum Punya Akun? <a href="/siswa/form_pendaftaran" class="text-dark">Daftar
                                    Disini</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        Copyright &copy; 2023 &mdash; SMK Ma'arif Wonosari
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/login.js"></script>
</body>

</html>
