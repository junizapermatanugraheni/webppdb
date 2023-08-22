<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PPDB SMK Ma'arif Wonosari</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="logo_smk.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="app.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        @include('partials.header')
        <!-- Testimonial section-->
        <div class="card my-4 mt-5 mx-5">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="shadow-primary border-radius-lg pt-4 pb-3" style="background-color: #198754">
                    <div class="row justify-content-between">
                        <div class="col-6 justify-content-between">
                            <h6 class="text-white text-capitalize ps-3">Informasi</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">

                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                    No</th>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-left">
                                    Jurusan</th>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                    Kuota Siswa</th>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                    Akreditas</th>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                    Jumlah Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //  $i = $data->firstItem(); 
                            ?>
                            {{-- @foreach ($data as $item) --}}
                                <tr>
                                    <td class="align-middle text-center">
                                        {{-- {{ $i }} --}}
                                    </td>
                                    <td>
                                        {{-- {{ $item->nama_jurusan }} --}}
                                    </td>
                                    <td class="align-middle text-center"> 
                                        {{-- {{ $item->kuota }} --}}
                                    </td>
                                    <td class="align-middle text-center"> 
                                        {{-- {{ $item->akreditasi }} --}}
                                    </td>
                                    <td class="align-middle text-center">
                                         {{-- {{ $item->jmlkelas }} --}}
                                        </td>

                                </tr>
                                <?php 
                                // $i++; 
                                ?>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                    <div class="mx-4 mt-5">
                        {{-- {!! $data->links() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer-->
    @include('partials.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
