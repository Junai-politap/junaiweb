<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('public/web') }}/assets/img/logo.png">
    <title>SiRembo Politap</title>
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/plugins.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/colors/aqua.css">
    <link rel="preload" href="{{ url('public/web') }}/assets/css/fonts/thicccboi.css" as="style"
        onload="this.rel='stylesheet'">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">


            <nav class="navbar navbar-expand-lg classic transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
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
                            <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                                aria-label="Close"></button>
                        </div>

                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other ms-lg-4">
                        <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                            <li class="nav-item d-none d-md-block">
                                <a href="http://simadu.politap.ac.id/login" class="btn btn-sm btn-primary rounded">Log In</a>
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
        <section class="wrapper bg-soft-primary mt-10">
            <div class="container pt-5 pb-15 py-lg-17 py-xl-19 pb-xl-20 position-relative">
                <img class="position-lg-absolute col-12 col-lg-10 col-xl-11 col-xxl-10 px-lg-5 px-xl-0 ms-n5 ms-sm-n8 ms-md-n10 ms-lg-0 mb-md-4 mb-lg-0"
                    src="{{ url('public/web') }}/assets/img/rembo.png"
                    srcset="{{ url('public/web') }}/assets/img/rembo@2x.png 2x" data-cue="fadeIn"
                    style="top: 1%; left: -21%; height: 95%;" />
                <div class="row gx-0 align-items-center">
                    <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-7 offset-xxl-6 ps-xxl-12 mt-md-n9 text-center text-lg-start"
                        data-cues="slideInDown" data-group="page-title" data-delay="600">
                        <h1 class="display-2 mb-4 mx-sm-n2 mx-md-0">Selamat Datang Di SIREMBO</h1>

                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-17">
                <div class="row text-center mt-xl-12">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h3 class="display-4 mb-9 px-xxl-11">Apa Itu SIREMBO !</h3>
                        <h2 class="fs-20 mb-3">
                            Sistem informasi manajemen birokrasi di lingkungan Politeknik Negeri Ketapang sebagai wadah
                            trasparansi birokrasi. Dimana data dan informasi disajikan secara terbuka dan dapat diakses
                            oleh seluruh pegawai dan masyarakat luas. Data yang disajikan meliputi Manajemen Perubahan,
                            Penataan Tatalaksana, Penataan Sistem, Manajemen SDM, Penguatan Akuntabilitas, Penguatan
                            Pengawasan, Peningkatan Kualita, Pelayanan Publik, Pemerintah yang bersih dan Bebas KKN, dan
                            Kualitas Pelayanan Publik
                        </h2>
                    </div>
                    <!-- /column -->
                </div>

                <div class="row gx-lg-8 gx-xl-10 mb-lg-19 mb-xl-22 align-items-center mt-10">
                    <div class="col-lg-6">
                        <figure><img src="{{ url('public/web') }}/assets/img/photos/device.png"
                                srcset="{{ url('public/web') }}/assets/img/photos/device@2x.png 2x" data-cue="fadeIn"
                                alt="" /></figure>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-6">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Fitur SIREMBO</h2>

                        <div class="row gy-6 gx-xxl-8 process-wrapper" data-cues="slideInUp" data-group="process">
                            <div class="col-md-4">
                                <h4 class="mb-1">1. Manajemen Perubahan</h4>
                                <p class="mb-0">Menampilkan data atau dokumen dari Manajemen Perubahan yang
                                    ada di Politeknik Negeri Ketapang</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-4">
                                <h4 class="mb-1">2. Penataan Tatalaksana</h4>
                                <p class="mb-0">Menampilkan data atau dokumen dari Penataan Tatalaksana yang
                                    ada di Politeknik Negeri Ketapang</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-4">
                                <h4 class="mb-1">3. Penataan Sistem Manajemen SDM</h4>
                                <p class="mb-0">Menampilkan data atau dokumen dari Penataan Sistem Manajemen
                                    SDM yang
                                    ada di Politeknik Negeri Ketapang</p>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-soft-primary">
            <div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="mt-lg-n20 mt-xl-n22 mb-14 mb-md-16 position-relative light-gallery-wrapper"
                            data-cue="slideInUp">
                            <a href="https://www.youtube.com/watch?v=zwoYAIyRaaU&t=4s"
                                class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 lightbox position-absolute"
                                style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"><i
                                    class="icn-caret-right"></i></a>
                            <figure class="rounded shadow"><img src="{{ url('public/web') }}/assets/img/rembo.png"
                                    srcset="{{ url('public/web') }}/assets/img/photos/v1@2x.jpg 2x" alt=""></figure>
                        </div>
                        <h3 class="display-4 mb-3 px-lg-12 px-xl-15 text-center">Tutorial Penggunaan SIREMBO</h3>

                        <div class="row" data-cue="fadeIn">
                            <div class="col-lg-6 mb-0">
                                <div id="accordion-1" class="accordion-wrapper">
                                    <div class="card">
                                        <div class="card-header" id="accordion-heading-1-1">
                                            <button class="collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-collapse-1-1" aria-expanded="false"
                                                aria-controls="accordion-collapse-1-1">Manajemen Perubahan</button>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="accordion-collapse-1-1" class="collapse"
                                            aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                                            <div class="card-body">
                                                <p>
                                                    Menampilkan data atau dokumen dari Manajemen Perubahan yang ada di
                                                    Politeknik Negeri Ketapang
                                                </p>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.collapse -->
                                    </div>
                                    <!-- /.card -->
                                    <div class="card">
                                        <div class="card-header" id="accordion-heading-1-2">
                                            <button class="collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-collapse-1-2" aria-expanded="false"
                                                aria-controls="accordion-collapse-1-2">Penataan Tatalaksana</button>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="accordion-collapse-1-2" class="collapse"
                                            aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                                            <div class="card-body">
                                                <p>Menampilkan data atau dokumen dari Penataan Tatalaksana yang ada di
                                                    Politeknik Negeri Ketapang</p>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.collapse -->
                                    </div>
                                    <!-- /.card -->
                                    <div class="card">
                                        <div class="card-header" id="accordion-heading-1-3">
                                            <button class="collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-collapse-1-3" aria-expanded="false"
                                                aria-controls="accordion-collapse-1-3">Penataan Sistem Manajemen
                                                SDM</button>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="accordion-collapse-1-3" class="collapse"
                                            aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                                            <div class="card-body">
                                                <p>
                                                    Menampilkan data atau dokumen dari Penataan Sistem Manajemen SDM
                                                    yang ada di Politeknik Negeri Ketapang
                                                </p>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.collapse -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.accordion-wrapper -->
                            </div>
                            <!--/column -->
                            <div class="col-lg-6">
                                <div id="accordion-2" class="accordion-wrapper">
                                    <div class="card">
                                        <div class="card-header" id="accordion-heading-2-1">
                                            <button class="collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-collapse-2-1" aria-expanded="false"
                                                aria-controls="accordion-collapse-2-1">Penguatan Akuntabilitas</button>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="accordion-collapse-2-1" class="collapse"
                                            aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                                            <div class="card-body">
                                                <p>
                                                    Menampilkan data atau dokumen dari Penguatan Akuntabilitas
                                                    yang ada di Politeknik Negeri Ketapang
                                                </p>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.collapse -->
                                    </div>
                                    <!-- /.card -->
                                    <div class="card">
                                        <div class="card-header" id="accordion-heading-2-2">
                                            <button class="collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-collapse-2-2" aria-expanded="false"
                                                aria-controls="accordion-collapse-2-2">Penguatan Pengawasan</button>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="accordion-collapse-2-2" class="collapse"
                                            aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                                            <div class="card-body">
                                                <p>
                                                    Menampilkan data atau dokumen dari Penguatan Pengawasan
                                                    yang ada di Politeknik Negeri Ketapang
                                                </p>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.collapse -->
                                    </div>
                                    <!-- /.card -->
                                    <div class="card">
                                        <div class="card-header" id="accordion-heading-2-3">
                                            <button class="collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-collapse-2-3" aria-expanded="false"
                                                aria-controls="accordion-collapse-2-3">Peningkatan Kualitas Pelayanan
                                                Publik</button>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="accordion-collapse-2-3" class="collapse"
                                            aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
                                            <div class="card-body">
                                                <p>
                                                    Menampilkan data atau dokumen dari Peningkatan Kualitas Pelayanan
                                                    Publik
                                                    yang ada di Politeknik Negeri Ketapang
                                                </p>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.collapse -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.accordion-wrapper -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->


    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-light">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="{{ url('public/web') }}/assets/img/logo.png"
                            srcset="{{ url('public/web') }}/assets/img/logo@2x.png 2x" alt="" />
                        <p class="mb-4">© {{ date('Y') }} SIREMBO. <br class="d-none d-lg-block" />
                            Informatics
                        </p>
                        <nav class="nav social ">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>

            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
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
