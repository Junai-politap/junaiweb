<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('public/web') }}/assets/img/logo.png">
    <title>Simadu Qr</title>
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/plugins.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/style.css">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="#">
                            <img src="{{ url('public/web') }}/assets/img/logo.png"
                                srcset="{{ url('public/web') }}/assets/img/logo@2x.png 2x"
                                style="width: 15%; height: 10%;">
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas-nav">
                        <div class="offcanvas-header d-lg-none d-xl-none">
                            <a href="#"><img src="{{ url('public/web') }}/assets/img/logo.png"
                                    srcset="{{ url('public/web') }}/assets/img/logo@2x.png 2x"
                                    style="width: 15%; height: 10%;"></a>
                            <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                                aria-label="Close"></button>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">

                            <li class="nav-item d-none d-md-block">
                                <a href="http://simadu.politap.ac.id/login"
                                    class="btn btn-sm btn-primary rounded-pill">Log In</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section class="wrapper bg-soft-primary">
            <div class="container pt-10 pb-20 pt-md-14 pb-md-23 text-center">
                <div class="row">
                    <div class="col-xl-5 mx-auto mb-6">
                        <h1 class="display-1 mb-3">Selamat Datang di</h1>
                        <h1 class="display-1 mb-3">SIMADU QR</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-16">
                <div class="row text-center mb-12 mb-md-15">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-n18 mt-md-n22">
                        <figure><img class="w-auto" src="{{ url('public/web') }}/assets/img/sim-qr.png"
                                srcset="{{ url('public/web') }}/assets/img/sim-qr@2x.png 2x" alt="" />
                        </figure>
                    </div>
                </div>
                <div class="row gx-lg-8 gx-xl-12 gy-6 mb-10 align-items-center">
                    <div class="col-sm-2"></div>
                    <div class="col-lg-8">
                        <h3 class="display-5 mb-5">Apa itu SIMADU QR ?</h3>
                        <p>
                            Aplikasi pembuatan QR-Code Untuk tanda tangan digital yang digunakan untuk dokumen digital
                            di lingkungan Politeknik Negeri Ketapang. Tanda tangan digital berupa QR Code yang mempunyai
                            karakteristik khusus. Aplikasi ini di khususkan untuk pimpinan unit yang ada di Lingkungan
                            Politeknik Negeri Ketapang.
                        </p>
                    </div>
                </div>
                <div class="row gx-lg-8 gx-xl-12 gy-6 gy-md-0 text-center">

                </div>
            </div>
        </section>
        <section class="wrapper bg-gray">
            <div class="container py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-16 align-items-center">
                    <div class="col-lg-7">
                        <iframe width="700" height="415" src="https://www.youtube.com/embed/Ti9lDD7Pgw0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="col-lg-5">
                        <h3 class="display-5 mb-7 pe-xxl-5">Tutorial Penggunaan SIMADU QR</h3>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md5">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="{{ url('public/web') }}/assets/img/logo.png"
                            srcset="{{ url('public/web') }}/assets/img/logo@2x.png 2x" alt="" />
                        <p class="mb-4">© {{ date('Y') }} SIMADU | QR. <br
                                class="d-none d-lg-block" />Informatics
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
