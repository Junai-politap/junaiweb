<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('public/web') }}/assets/img/logo.png">
    <title>Simanja Politap</title>
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/plugins.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/colors/aqua.css">
    <link rel="preload" href="{{ url('public/web') }}/assets/css/fonts/thicccboi.css" as="style"
        onload="this.rel='stylesheet'">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-dark">
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-dark">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="./index.html">
                            <img class="logo-dark" src="{{ url('public/web') }}/assets/img/logo.png"
                                srcset="{{ url('public/web') }}/assets/img/logo@2x.png 2x" alt="" />
                            <img class="logo-light" src="{{ url('public/web') }}/assets/img/logo-light.png"
                                srcset="{{ url('public/web') }}/assets/img/logo-light@2x.png 2x" alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas-nav">
                        <div class="offcanvas-header d-lg-none d-xl-none">
                            <a href="./index.html"><img src="{{ url('public/web') }}/assets/img/logo-light.png"
                                    srcset="{{ url('public/web') }}/assets/img/logo-light@2x.png 2x" alt="" /></a>
                            <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                                aria-label="Close"></button>
                        </div>
                        <ul class="navbar-nav mt-1">

                        </ul>
                    </div>
                    <div class="navbar-other w-100 d-flex ms-auto mt-3">
                        <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">

                            <li class="nav-item d-none d-md-block">
                                <a href="http://simadu.politap.ac.id/login" class="btn btn-sm btn-primary rounded">Log
                                    In</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <div class="navbar-hamburger"><button class="hamburger animate plain"
                                        data-toggle="offcanvas-nav"><span></span></button></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section class="wrapper bg-dark angled lower-start">
            <div class="container pt-7 pt-md-11 pb-8">
                <div class="row gx-0 gy-10 align-items-center">
                    <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
                        <h1 class="display-1 text-white mb-4">Selamat Datang di <br /><span
                                class="typer text-primary text-nowrap" data-delay="100"
                                data-words="SIMANJA POLITAP"></span><span class="cursor text-primary"
                                data-owner="typer"></span></h1>

                        <div>

                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
                        <div class="position-relative light-gallery-wrapper">
                            <a href="https://www.youtube.com/watch?v=Ti9lDD7Pgw0&t=1s"
                                class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 lightbox position-absolute"
                                style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"><i
                                    class="icn-caret-right"></i></a>
                            <figure class="rounded shadow-lg" style="width: 180%; height: 120%; margin-left: -20%"><img
                                    src="{{ url('public/web') }}/assets/img/simanja.png"
                                    srcset="{{ url('public/web') }}/assets/img/simanja@2x.png 2x">
                            </figure>
                        </div>
                        <!-- /div -->
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper bg-light">
            <div class="container pt-19 pt-md-21 pb-16 pb-md-18">
                <div class="row">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <h3 class="display-4 mb-1">Apa Itu SIMANJA?
                            <h2 class="fs-16 text-uppercase text-line text-primary mb-9">
                                SIMANJA Sistem Informasi Manajemen Kinerja Pegawai
                            </h2>
                        </h3>
                    </div>
                </div>
                <div class="row gx-md-8 gy-8 mb-14 mb-md-18">
                    <div class="col-md-12 col-lg-12">

                        <p class="mb-3">
                            Sistem informasi pengajuan beban kinerja dosen (BKD) dan laporan kinerja dosen (LKD)
                            dilingkungan Politeknik Negeri Ketapang. Dimana pengajuan dilakukan secara paperless dan
                            ditandangi secara digital oleh pimpinan dan tim penilai asesor BKD
                        </p>

                    </div>
                </div>

                <div class="row gy-10 gy-sm-13 gx-lg-3 mb-16 mb-md-18 align-items-center">
                    <div class="col-md-8 col-lg-12 position-relative">
                        <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Fitur apa saja yang ada di SIMANJA
                            ?
                        </h2>

                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-block btn-soft-primary disabled me-5">
                                    <span class="number fs-18">1</span>
                                </span>
                            </div>
                            <div>
                                <h4 class="mb-1">Dashboard</h4>
                                <p class="mb-0">
                                    Halaman Utama dari sistem Informasi Pengajuan Beban kinerja Dosen
                                </p>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-block btn-soft-primary disabled me-5">
                                    <span class="number fs-18">2</span>
                                </span>
                            </div>
                            <div>
                                <h4 class="mb-1">Rencana Kerja</h4>
                                <p class="mb-0">
                                    Fitur untuk melihat kegiatan per-semester dosen dan untuk melihat laporan dosen yang
                                    ada di Politeknik Negeri Ketapang
                                </p>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-block btn-soft-primary disabled me-5">
                                    <span class="number fs-18">3</span>
                                </span>
                            </div>
                            <div>
                                <h4 class="mb-1">Realisasi Kerja</h4>
                                <p class="mb-0">
                                    Fitur untuk melihat Reaslisasi Kegiatan Dosen per-semester Politeknik Negeri
                                    Ketapang
                                </p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-block btn-soft-primary disabled me-5">
                                    <span class="number fs-18">4</span>
                                </span>
                            </div>
                            <div>
                                <h4 class="mb-1">Kesimpulan </h4>
                                <p class="mb-0">
                                    Hasil atau Kesimpulan dari rencana kerja dosen Politeknik Negeri Ketapang
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center">
                    <div class="col-md-8 col-lg-6 offset-lg-1 order-lg-2 position-relative">


                        <iframe width="650" height="400" src="https://www.youtube.com/embed/Ti9lDD7Pgw0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <div class="col-lg-5">
                        <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Video Tutorial Penggunaan SIMANJA?
                        </h2>
                        <h3 class="display-4 mb-7">

                        </h3>
                        <div class="accordion accordion-wrapper" id="accordionExample">
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingOne">
                                    <button class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Dashboard
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Halaman Utama dari sistem Informasi Pengajuan Beban kinerja Dosen
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingTwo">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Rencana Kerja </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Rencana Kerja Fitur untuk melihat kegiatan per-semester dosen dan untuk
                                            melihat laporan dosen yang ada di Politeknik Negeri Ketapang
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingThree">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree"> Realisasi Kerja </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Realisasi Kerja
                                            Fitur untuk melihat Reaslisasi Kegiatan Dosen per-semester Politeknik Negeri
                                            Ketapang
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingThree">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour"> Kesimpulan </button>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Hasil atau Kesimpulan dari rencana kerja dosen Politeknik Negeri Ketapang
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper image-wrapper bg-image bg-overlay"
            data-image-src="{{ url('public/web') }}/assets/img/simanja.png">
            <div class="container py-18">
                <div class="row">

                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </section>


        <section class="wrapper bg-light angled upper-end lower-start">

        </section>
    </div>

    <footer class="bg-dark text-inverse">
        <div class="container pt-17 pt-md-19 pb-13 pb-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="{{ url('public/web') }}/assets/img/logo.png"
                            srcset="{{ url('public/web') }}/assets/img/logo-light@2x.png 2x" alt="" />
                        <p class="mb-4">© {{ date('Y') }} SIMANJA. <br class="d-none d-lg-block" />
                            Informatics.id
                        </p>
                    </div>

                </div>
                <div class="col-md-4 col-lg-3">

                </div>
                <div class="col-md-4 col-lg-3">

                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Social Media</h4>

                        <div class="newsletter-wrapper">
                            <nav class="nav social social-white">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                        </div>

                    </div>

                </div>
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
