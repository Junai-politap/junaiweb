<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('public/web') }}/assets/img/logo.png">
    <title>Simantan Politap</title>
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/plugins.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/colors/navy.css">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-gray">
            <nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light caret-none">
                <div class="container">
                    <div class="navbar-collapse-wrapper bg-white d-flex">
                        <div class="navbar-brand">
                            <a href="#">
                                <img src="{{ url('public/web') }}/assets/img/logo.png"
                                    srcset="{{ url('public/web') }}/assets/img/logo@2x.png 2x" style="width: 100%"
                                    alt="" />
                            </a>
                        </div>
                        <h1 class="mt-2" style="margin-left: 2%">Simantan Politap</h1>
                        <div class="navbar-collapse offcanvas-nav">
                            <div class="offcanvas-header d-lg-none d-xl-none">
                                <img src="{{ url('public/web') }}/assets/img/logo.png"
                                    srcset="{{ url('public/web') }}/assets/img/logo@2x.png 2x" style="width: 20%"
                                    alt="" />
                                <button type="button"
                                    class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                                    aria-label="Close"></button>
                            </div>
                            <ul class="navbar-nav">
                            </ul>
                        </div>
                        <div class="navbar-other w-100 d-flex ms-auto">
                            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                                <li class="nav-item">
                                    <nav class="nav social social-muted justify-content-end text-end">
                                        <a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Log
                                            In</a>
                                    </nav>
                                    <!-- /.social -->
                                </li>
                                <li class="nav-item d-lg-none">
                                    <div class="navbar-hamburger"><button class="hamburger animate plain"
                                            data-toggle="offcanvas-nav"><span></span></button></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <section class="wrapper bg-gray">
            <div class="container pt-12 pt-md-16 text-center">
                <div class="row">
                    <div class="col-lg-8 col-xxl-7 mx-auto text-center" data-cues="slideInDown" data-group="page-title"
                        data-delay="600">
                        <h1 class="fs-35 text-uppercase ls-xl text-dark mb-4">Hallo ! Selamat Datang di Simantan</h1>
                        <h2 class="display-1 fs-20 mb-7">
                            {{-- Simantan Adalah --}}
                        </h2>
                    </div>
                </div>
            </div>
            <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;" data-cues="slideInDown"
                data-group="page-title" data-delay="300">
                <img src="{{ url('public/web') }}/assets/img/poto.png" alt="" />
            </figure>
        </section>

        <section class="wrapper bg-gray">
            <div class="container">
                <div class="card shadow-none my-n15 my-lg-n17">
                    <div class="card-body py-12 py-lg-14 px-lg-11 py-xl-16 px-xl-13">
                        <div class="row text-center">
                            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                                <h3 class="display-4">
                                    Apa Itu Simantan ?
                                </h3>
                                <h2 class="fs-15 text-uppercase text-muted">Simantan Adalah Sistem Informasi Manajemen
                                    Persuratan
                                </h2>
                            </div>
                        </div>

                        <div class="row gx-md-8 gx-xl-12 gy-8 mt-1 mb-md-16 text-center">
                            <div class="col-md-12">
                                <div class="icon btn btn-block btn-lg btn-soft-purple disabled">
                                    <span class="icon-thumbnail"> Det</span>
                                </div>
                                <h4>Uraian ciptaan </h4>
                                <p>
                                    Sistem informasi manajemen persuratan adalah sistem informasi yang digunakan untuk
                                    mengelola persuratan secara paperless, mulai dari pengajuan surat, persetujuan
                                    surat, disposisi dan manajemen arsip surat keluar, surat masuk, surat tugas dan
                                    surat keputusan di lingkungan Politeknik Negeri Ketapang. Notifikasi pengajuan surat
                                    dapat dipantau oleh unit pengusul melalui sistem ini.
                                </p>

                            </div>

                        </div>

                        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
                            <h2 class="fs-20 text-uppercase"> Fitur apa saja yang ada di Simantan ?</h2>

                            <div class="col-lg-6">
                                <div class="d-flex flex-row">
                                    <div>
                                        <span class="icon btn btn-block btn-lg btn-soft-purple disabled mt-1 me-5"><span
                                                class="number fs-22">01</span></span>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Pengajuan Baru</h4>
                                        <p class="mb-0">
                                            Fitur untuk menambahkan pengajuan surat baru di Politeknik Negeri Ketapang
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-8 ms-lg-10">
                                    <div>
                                        <span class="icon btn btn-block btn-lg btn-soft-green disabled mt-1 me-5"><span
                                                class="number fs-22">02</span></span>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Pengajuan Aktif</h4>
                                        <p class="mb-0">
                                            Fitur untuk melihat pengajuan surat yang aktif di Politeknik Negeri Ketapang
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-8">
                                    <div>
                                        <span class="icon btn btn-block btn-lg btn-soft-orange disabled mt-1 me-5"><span
                                                class="number fs-22">03</span></span>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Pengajuan Selesai</h4>
                                        <p class="mb-0">
                                            Fitur untuk melihat pengajuan yang telah selesai diajukan di Politeknik
                                            Negeri Ketapang
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="d-flex flex-row">
                                    <div>
                                        <span class="icon btn btn-block btn-lg btn-soft-purple disabled mt-1 me-5">
                                            <span class="number fs-22">04</span>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Riwayat Pengajuan</h4>
                                        <p class="mb-0">
                                            Fitur untuk melihat riwayat pengajuan surat di Politeknik Negeri Ketapang
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-8 ms-lg-10">
                                    <div>
                                        <span class="icon btn btn-block btn-lg btn-soft-green disabled mt-1 me-5">
                                            <span class="number fs-22">05</span>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Surat Masuk</h4>
                                        <p class="mb-0">
                                            Fitur untuk menambahkan pengarsipan surat masuk di Politeknik Negeri
                                            Ketapang
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-8">
                                    <div>
                                        <span class="icon btn btn-block btn-lg btn-soft-orange disabled mt-1 me-5">
                                            <span class="number fs-22">06</span>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Surat Keluar</h4>
                                        <p class="mb-0">
                                            Fitur untuk menambahkan pengarsipan surat Keluar di Politeknik Negeri
                                            Ketapang
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- <hr class="my-14 my-md-16" /> --}}

                        {{-- <div class="row text-center">
                            <div class="col-lg-10 col-xl-10 col-xxl-8 mx-auto">
                                <h3 class="display-4">Tampilan</h3>
                                <h2 class="fs-15 text-uppercase text-muted mb-6"> Berikut Ini Beberapa Tampilan Fitur
                                    Simantan </h2>
                            </div>
                        </div>
                        <div class="carousel owl-carousel blog grid-view mb-18" data-margin="30" data-dots="true"
                            data-autoplay="false" data-autoplay-timeout="5000"
                            data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                            <div class="item">
                                <article>
                                    <figure class="overlay overlay1 hover-scale rounded mb-6"><a href="#"> <img
                                                src="{{ url('public/web') }}/assets/img/photos/b4.jpg" alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-header">
                                        <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                href="./blog-post.html">Ligula tristique quis risus</a></h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14
                                                    Apr 2021</span></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-file-alt fs-15"></i>Coding</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!-- /.item -->
                            <div class="item">
                                <article>
                                    <figure class="overlay overlay1 hover-scale rounded mb-6"><a href="#"> <img
                                                src="{{ url('public/web') }}/assets/img/photos/b5.jpg" alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-header">
                                        <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                href="./blog-post.html">Nullam id dolor elit id nibh</a></h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29
                                                    Mar 2021</span></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-file-alt fs-15"></i>Workspace</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!-- /.item -->
                            <div class="item">
                                <article>
                                    <figure class="overlay overlay1 hover-scale rounded mb-6"><a href="#"> <img
                                                src="{{ url('public/web') }}/assets/img/photos/b6.jpg" alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-header">
                                        <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26
                                                    Feb 2021</span></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-file-alt fs-15"></i>Meeting</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!-- /.item -->
                            <div class="item">
                                <article>
                                    <figure class="overlay overlay1 hover-scale rounded mb-6"><a href="#"> <img
                                                src="{{ url('public/web') }}/assets/img/photos/b7.jpg" alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-header">
                                        <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                href="./blog-post.html">Morbi leo risus porta eget</a></h2>
                                    </div>
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li class="post-date">
                                                <i class="uil uil-calendar-alt"></i>
                                                <span>
                                                    7 Jan 2021
                                                </span>
                                            </li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-file-alt fs-15"></i>Business Tips</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!-- /.item -->
                        </div> --}}

                        <hr class="my-14 my-md-16" />
                        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                            <div class="col-md-8 col-lg-6 order-lg-2">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/Ti9lDD7Pgw0"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                            <div class="col-lg-6">

                                <h3 class="display-4 mb-5">Video Tutorial Penggunaan Simantan</h3>

                                <div class="row gy-3 gx-xl-8">
                                    <div class="col-xl-6">
                                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                            <li>
                                                <i class="uil uil-check"></i>
                                                <span>
                                                    Pegajuan Surat Baru
                                                </span>
                                            </li>
                                            <li>
                                                <i class="uil uil-check"></i>
                                                <span>
                                                    Riwayat Pengajuan
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-6">
                                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                            <li>
                                                <i class="uil uil-check"></i>
                                                <span>
                                                    Pengajuan Aktif
                                                </span>
                                            </li>
                                            <li>
                                                <i class="uil uil-check"></i>
                                                <span>
                                                    Pegajuan Selesai
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="bg-dark text-inverse" style="margin-top: -5%">
        <div class="container pt-20 pt-lg-21 pb-7">

            <hr class=" mt-md-15 mb-7" />
            <div class="d-md-flex align-items-center justify-content-between">
                <p class="mb-2 mb-lg-0">© {{ date('Y') }} Ar-Razy Muhammad.</p>
                <nav class="nav social social-white text-md-end">
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
