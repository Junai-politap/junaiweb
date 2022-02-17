<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('public/web') }}/assets/img/politap.png">
    <title>Simadu Politap</title>
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/plugins.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/colors/purple.css">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-logo transparent position-absolute navbar-dark">
                <div class="container justify-content-between align-items-center">
                    <div class="d-flex flex-row w-100 justify-content-between align-items-center d-lg-none">
                        <div class="navbar-brand"><a href="./index.html">
                                <img class="logo-dark" src="{{ url('public/web') }}/assets/img/logo-purple.png"
                                    srcset="{{ url('public/web') }}/assets/img/logo-purple@2x.png 2x" alt="" />
                                <img class="logo-light" src="{{ url('public/web') }}/assets/img/logo-light.png"
                                    srcset="{{ url('public/web') }}/assets/img/logo-light@2x.png 2x" alt="" />
                            </a></div>
                        <div class="navbar-other ms-auto">
                            <ul class="navbar-nav flex-row align-items-center" data-sm-skip="true">
                                <li class="nav-item d-lg-none">
                                    <div class="navbar-hamburger"><button class="hamburger animate plain"
                                            data-toggle="offcanvas-nav"><span></span></button></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="navbar-collapse-wrapper d-flex flex-row align-items-center w-100">
                        <div class="navbar-collapse offcanvas-nav">
                            <div class="offcanvas-header mx-lg-auto order-0 order-lg-1 d-lg-flex px-lg-15">
                                <img class="logo-dark" style="width: 70px"
                                    src="{{ url('public/web') }}/assets/img/ti.png" style="width: 70px"
                                    srcset="{{ url('public/web') }}/assets/img/ti.png 2x" alt="" />
                                <img class="logo-light" style="width: 70px"
                                    src="{{ url('public/web') }}/assets/img/ti.png" style="width: 70px"
                                    srcset="{{ url('public/web') }}/assets/img/ti.png 2x" alt="" />
                                <button type="button"
                                    class="btn-close btn-close-white offcanvas-close offcanvas-nav-close d-md-none"
                                    aria-label="Close"></button>
                                <h1 class="text-center mt-3">SIMADU</h1>

                            </div>
                            <div class="w-100 order-1 order-lg-0 d-lg-flex">
                                <ul class="navbar-nav ms-lg-auto">


                                </ul>
                                <!-- /.navbar-nav -->
                            </div>
                            <div class="w-100 order-3 order-lg-2 d-lg-flex">
                                {{-- <ul class="navbar-nav me-lg-auto">
                                    <li class="nav-item "><a class="nav-link" href="#!">Blog</a>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- /header -->
        <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300 text-white"
            data-image-src="{{ url('public/web') }}/assets/img/photos/bg2.jpg">
            <div class="container pt-17 pb-19 pt-md-19 pb-md-20 light-gallery-wrapper text-center">
                <div class="row mb-11">
                    <div class="col-md-9 col-lg-7 col-xxl-6 mx-auto" data-cues="zoomIn" data-group="page-title"
                        data-interval="-200">
                        <h2 class="h6 text-uppercase ls-xl text-white mb-5">Selamat Datang Di Simadu</h2>
                        <h3 class="display-1 text-white mb-7">Sistem ....</h3>
                        <a href="https://www.youtube.com/watch?v=zwoYAIyRaaU"
                            class="btn btn-circle btn-white btn-play ripple mx-auto mb-5 lightbox"><i
                                class="icn-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper bg-light angled upper-end lower-end">
            <div class="container pb-14 pb-md-16">
                <div class="row">
                    <div class="col-12 mt-n20">
                        <figure class="rounded">
                            <img src="{{ url('public/web') }}/assets/img/poto.png">
                        </figure>
                        <div class="row" data-cue="slideInUp">
                            <div class="col-xl-10 mx-auto">
                                <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 text-white mt-n5 mt-lg-0 mt-lg-n50p mb-lg-n50p border-radius-lg-top"
                                    data-image-src="{{ url('public/web') }}/assets/img/photos/bg2.jpg">
                                    <div class="card-body p-9 p-xl-10">
                                        <div class="row align-items-center counter-wrapper gy-4 text-center">
                                            <div class="col-6 col-lg-3">
                                                <h3 class="counter counter-lg text-white">7518</h3>
                                                <p>Completed Projects</p>
                                            </div>
                                            <!--/column -->
                                            <div class="col-6 col-lg-3">
                                                <h3 class="counter counter-lg text-white">3472</h3>
                                                <p>Satisfied Customers</p>
                                            </div>
                                            <!--/column -->
                                            <div class="col-6 col-lg-3">
                                                <h3 class="counter counter-lg text-white">2184</h3>
                                                <p>Expert Employees</p>
                                            </div>
                                            <!--/column -->
                                            <div class="col-6 col-lg-3">
                                                <h3 class="counter counter-lg text-white">4523</h3>
                                                <p>Awards Won</p>
                                            </div>
                                            <!--/column -->
                                        </div>
                                        <!--/.row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-lg-8 gy-8 mt-5 mt-md-12 mt-lg-0 mb-15 align-items-center">
                    <div class="col-lg-12">
                        <h2 class="display-4 mb-3">Fitur Apa Saja yang Ada di SIMADU?</h2>
                        <p class="lead fs-lg mb-8 pe-xxl-2">The full service we are offering is <span
                                class="underline">specifically</span> designed to meet your business needs and
                            projects.</p>
                        <div class="row gx-xl-10 gy-6" data-cues="slideInUp" data-group="services">
                            <div class="col-md-4 col-lg-12 col-xl-4">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5">
                                            <span class="icon-thumbnail"> Peg</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Data Pegawai</h4>
                                        <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p>
                                    </div>
                                </div>
                            </div>
                            <!--/column -->
                            <div class="col-md-4 col-lg-12 col-xl-4">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5">
                                            <span class="icon-thumbnail"> Jur</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Jurusan</h4>
                                        <p class="mb-0">Vivamus sagittis lacus augue laoreet vel.</p>
                                    </div>
                                </div>
                            </div>
                            <!--/column -->
                            <div class="col-md-4 col-lg-12 col-xl-4">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5">
                                            <span class="icon-thumbnail"> Pro</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Prodi</h4>
                                        <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-12 col-xl-4">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5">
                                            <span class="icon-thumbnail"> Dos</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Dosen</h4>
                                        <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-12 col-xl-4">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5">
                                            <span class="icon-thumbnail"> Mhs</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Mahasiswa</h4>
                                        <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-12 col-xl-4">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5">
                                            <span class="icon-thumbnail"> Uk</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Unit Kerja</h4>
                                        <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-12 col-xl-4">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5">
                                            <span class="icon-thumbnail"> Kur</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Kurikulum</h4>
                                        <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-12 col-xl-4">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5">
                                            <span class="icon-thumbnail"> TA</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Tahun Ajar</h4>
                                        <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-12 col-xl-4">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5">
                                            <span class="icon-thumbnail"> Mhs</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="  mb-1">Mahasiswa Aktif</h4>
                                        <p class="mb-0">Aenean lacinia bibendum nulla sed
                                            consectetur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <h2 class="display-4 mb-3">Siapa Saja yang bisa Akses SIMADU?</h2>
                <p class="lead fs-lg mb-8">We make your spending <span class="underline">stress-free</span>
                    for
                    you to have the perfect control.</p>
                <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line" data-cues="slideInUp" data-group="process">
                    <div class="col-md-6 col-lg-4"> <span
                            class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4">
                            <span class="number">01</span></span>
                        <h4 class="mb-1">Direktut Politap</h4>
                        <p>
                            Nulla vitae elit libero elit non porta gravida eget metus cras. Aenean eu leo quam.
                            Pellentesque ornare.
                        </p>
                    </div>

                    <div class="col-md-6 col-lg-4"> <span
                            class="icon btn btn-circle btn-lg btn-primary disabled mb-4">
                            <span class="number">02</span></span>
                        <h4 class="mb-1">Admin Prodi</h4>
                        <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.
                        </p>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4"> <span
                            class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span
                                class="number">03</span></span>
                        <h4 class="mb-1">Sub Bagian Akademik</h4>
                        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit
                            libero.
                        </p>
                    </div>
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>

        <section class="wrapper bg-light angled upper-end lower-end">
            <div class="container py-14 py-md-16">

                <div class="row gy-10 gx-lg-8 gx-xl-12 align-items-center">
                    <div class="col-lg-6 position-relative">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-12">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/Ti9lDD7Pgw0"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <h2 class="display-4 mb-3">Totorial Penggunaan SIMADU</h2>
                        <p>
                            Berikut adalah video tutorial dari penggunaan SIMADU
                        </p>
                        <a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-15">
            <div class="mt-10"></div>
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img src="{{ url('public/web') }}/assets/img/ti.png" style="width: 80px;"
                            srcset="{{ url('public/web') }}/assets/img/ti.png 2x" alt="" />
                        <p class="mb-4">© Informatics.id. <br class="d-none d-lg-block" />
                            Part of Simadu Politap
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Our Other Services</h4>
                        <p>Programming Online Course <a href=""> idbeetech.id</a></p>
                        <p>Software House & IT Consultant <a href="">idbeesoft.id</a></p>
                    </div>
                </div>

                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Social Media</h4>
                        <p class="mb-5">
                        </p>
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
