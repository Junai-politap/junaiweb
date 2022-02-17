<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('public/web') }}/assets/img/logo.png">
    <title>Sivensa Politap</title>
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/plugins.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/colors/pink.css">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-gray">
            <nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light">
                <div class="container">
                    <div
                        class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
                        <div class="navbar-brand w-100">
                            <a href="./index.html">
                                <img src="{{ url('public/web') }}/assets/img/logo.png"
                                    srcset="{{ url('public/web') }}/assets/img/logo@2x.png 2x" alt="" />
                            </a>
                        </div>
                        <div class="navbar-collapse offcanvas-nav">
                            <div class="offcanvas-header d-lg-none d-xl-none">
                                <a href="./index.html"><img src="{{ url('public/web') }}/assets/img/logo.png"
                                        srcset="{{ url('public/web') }}/assets/img/logo@2x.png 2x" alt="" /></a>
                                <button type="button"
                                    class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                                    aria-label="Close"></button>
                            </div>

                        </div>
                        <!-- /.navbar-collapse -->
                        <div class="navbar-other w-100 d-flex ms-auto">
                            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                                <li class="nav-item">
                                    <nav class="nav social social-muted justify-content-end text-end">
                                        <span><a href="http://simadu.politap.ac.id/login"
                                                class="btn btn-lg btn-primary rounded-pill me-2">Log
                                                In</a></span>
                                    </nav>
                                </li>
                                <li class="nav-item d-lg-none">
                                    <div class="navbar-hamburger"><button class="hamburger animate plain"
                                            data-toggle="offcanvas-nav"><span></span></button></div>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                        </div>
                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.navbar-collapse-wrapper -->
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->
        <section class="wrapper bg-gray">
            <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
                <div class="row gy-10 gy-md-13 gy-lg-0 align-items-center">
                    <div class="col-md-8 col-lg-5 d-flex position-relative mx-auto" data-cues="slideInDown"
                        data-group="header">
                        <div class="img-blob"><img src="{{ url('public/web') }}/assets/img/sivensa.png"
                                srcset="{{ url('public/web') }}/assets/img/sivensa.png@2x.png 2x" alt="" /></div>
                        <div class="card shadow-lg position-absolute" style="bottom: 10%; right: 2%;">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex flex-row align-items-center">


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-xxl-5 text-center text-lg-start" data-cues="slideInDown"
                        data-group="page-title" data-delay="600">
                        <h1 class="display-1 mb-5">Selamat Datang di SIVENSA</h1>
                        <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">
                            Apa Itu SIVENSA ?
                        </p>
                        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
                            data-group="page-title-buttons" data-delay="900">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper bg-light wrapper-border">
            <div class="container py-14 py-md-18">
                <div class="row gx-lg-8 gx-xl-12 gy-6 mb-10">
                    <div class="col-lg-6 order-lg-2">
                        <ul class="progress-list">
                            <li>
                                <p>Kerjasama</p>
                                <div class="progressbar line soft-violet" data-value="100"></div>
                            </li>
                            <li>
                                <p>BUMN/BUMD</p>
                                <div class="progressbar line soft-blue" data-value="80"></div>
                            </li>
                            <li>
                                <p>Perusahaan</p>
                                <div class="progressbar line soft-leaf" data-value="85"></div>
                            </li>
                            <li>
                                <p>UMKM</p>
                                <div class="progressbar line soft-pink" data-value="90"></div>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6">
                        <h2 class="display-4 mb-3">SIVENSA itu apa?</h2>
                        <p class="lead fs-20 mb-5">
                            Sistem informasi yang mengelola dokumen perjanjian kerjasama antara politap dan mitra dunia
                            usaha, dunia industri dan dunia kerja (DUDIKA). Dimana didalam sistem disajikan peta
                            kerjasama sebaran lokasi Peta Kerjasama, Instansi Pemerintah, BUMN/BUMD, Perusahaan,
                            Organisasi Nirlaba (NGO), Desa, Bumdes, UMKM, SMK/SMA/MA, Politeknik/Universitas dan
                            Asosiasi DUDIKA di Kabupaten Ketapang dengan Politeknik Negeri Ketapang
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <section class="wrapper bg-light wrapper-border">
            <div class="container py-14 pt-md-18 pb-md-16">
                <div class="row align-items-center mb-10">
                    <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                        <h2 class="display-4 mb-3">Peta Kerjasama</h2>
                        <p class="lead fs-20 mb-0">Berikut ini adalah peta kerjasama Politap dengan Mitra</p>
                    </div>
                    <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">

                    </div>
                </div>
                <div class="card bg-soft-violet mb-10">
                    <div class="card-body p-12 pb-0">
                        <div class="row">

                            <div class="col-lg-10 offset-lg-1 align-self-end">
                                <figure><img class="img-fluid"
                                        src="{{ url('public/web') }}/assets/img/sivensa.png" alt="" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container py-14 pt-md-18 pb-md-16" style="margin-top: -10%">
                <div class="row align-items-center mb-10">
                    <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                        <h2 class="display-4 mb-3">Peta Instansi Pemerintah</h2>
                        <p class="lead fs-20 mb-0">Berikut ini adalah peta Dengan Instansi Pemerintah</p>
                    </div>
                    <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">

                    </div>
                </div>
                <div class="card bg-soft-violet mb-10">
                    <div class="card-body p-12 pb-0">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1 align-self-end">
                                <figure><img class="img-fluid"
                                        src="{{ url('public/web') }}/assets/img/ven-1.png" alt="" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container py-14 pt-md-18 pb-md-16" style="margin-top: -10%">
                <div class="row align-items-center mb-10">
                    <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                        <h2 class="display-4 mb-3">BUMN/BUMD</h2>
                        <p class="lead fs-20 mb-0">Berikut ini adalah peta BUMN/BUMD</p>
                    </div>
                    <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">

                    </div>
                </div>
                <div class="card bg-soft-violet mb-10">
                    <div class="card-body p-12 pb-0">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1 align-self-end">
                                <figure><img class="img-fluid"
                                        src="{{ url('public/web') }}/assets/img/ven-2.png" alt="" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container py-14 pt-md-18 pb-md-16" style="margin-top: -10%">
                <div class="row align-items-center mb-10">
                    <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                        <h2 class="display-4 mb-3">Perusahaan</h2>
                        <p class="lead fs-20 mb-0">Berikut ini adalah peta Dengan Perusahaan</p>
                    </div>
                    <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">

                    </div>
                </div>
                <div class="card bg-soft-violet mb-10">
                    <div class="card-body p-12 pb-0">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1 align-self-end">
                                <figure><img class="img-fluid"
                                        src="{{ url('public/web') }}/assets/img/ven-3.png" alt="" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <footer>
        <div class="container pt-md-18 pb-7">

            <div class="d-md-flex align-items-center justify-content-between">
                <p class="mb-2 mb-lg-0">© {{ date('Y') }} SIVENSA. Informatics.</p>
                <nav class="nav social social-muted mb-0 text-md-end">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                </nav>
            </div>
        </div>
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="{{ url('public/web') }}/assets/js/plugins.js"></script>
    <script src="{{ url('public/web') }}/assets/js/theme.js"></script>
</body>

</html>
