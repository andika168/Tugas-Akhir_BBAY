<!-- 
THEME: Small Apps | Bootstrap App Landing Template
AUTHOR: Themefisher
-->
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Dokumentasi Kegiatan</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bootstrap App Landing Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Small Apps Template v1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="../assets/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="../assets/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../assets/plugins/aos/aos.css">

    <!-- CUSTOM CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
    <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
        <div class="container">
            <a class="navbar-brand" href="{{route('landing')}}"><img src="../assets/images/logofup.png" alt="logo" width="100" height="100"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @@about">
                        <a class="nav-link" href="{{route('landing')}}">Beranda</a>
                    </li>
                    <li class="nav-item @@about">
                        <a class="nav-link" href="{{route('laporankeuangan')}}">Laporan Keuangan</a>
                    </li>
                    <li class="nav-item @@about">
                        <a class="nav-link" href="{{route('dokumentasikegiatan')}}">Dokumentasi Kegiatan</a>
                    </li>
                    <li class="nav-item @@about">
                        <a class="nav-link" href="{{route('tentangkami')}}">Tentang Kami</a>
                    </li>
                    <li class="nav-item @@about">
                        <a class="nav-link" href="{{route('donasi')}}">Donasi</a>
                    </li>
                    <li class="nav-item @@contact">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <!-- Page Title -->
                    <h1>Dokumentasi Kegiatan Fiqih Untuk Pemula</h1>
                    <!-- Page Description -->
                    <p>Dokumentasi kegiatan yang dilakukan oleh komunitas Fiqih Untuk Pemula</p>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Page Title  ====-->

    <section class="feature section pt-0">
        <div class="container">
            @foreach($activity as $kegiatan)
            <div class="row justify-content-center">
                @if($loop->iteration % 2 == 0)
                <!-- Jika genap, foto di kanan -->
                <!-- Name -->
                <div class="col-lg-6 mr-auto align-self-center">
                    <div class="feature-content">
                        <h2>{{ $kegiatan->nama }}</h2>
                        <!-- Description -->
                        <p class="desc"> {{ $kegiatan->description }}</p>
                    </div>
                </div>
                <!-- Featured Member -->
                <div class="col-lg-6 ml-auto justify-content-center">
                    <div class="image-content" data-aos="fade-right">
                        <div class="kegiatan">
                            <!--Image -->
                            <img class="img-fluid square-image" class="w-100" src="/{{ $kegiatan->photo }}" alt="Foto Kegiatan">
                        </div>
                    </div>
                </div>
                @else
                <!-- Jika ganjil, foto di kiri -->
                <!-- Featured Member -->
                <div class="col-lg-6 ml-auto justify-content-center">
                    <div class="image-content" data-aos="fade-right">
                        <div class="kegiatan">
                            <!--Image -->
                            <img class="img-fluid square-image" class="w-100" src="/{{ $kegiatan->photo }}" alt="Foto Kegiatan">
                        </div>
                    </div>
                </div>
                <!-- Name -->
                <div class="col-lg-6 mr-auto align-self-center">
                    <div class="feature-content">
                        <h2>{{ $kegiatan->nama }}</h2>
                        <!-- Description -->
                        <p class="desc"> {{ $kegiatan->description }}</p>
                        <!-- Social Sites -->
                    </div>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </section>

    <!--============================
=            Footer            =
=============================-->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
                        <div class="block">
                            <a href="{{route('landing')}}"><img src="../assets/images/logofup.png" alt="footer-logo" width="150" height="120"></a>
                            <!-- Social Site Icons -->
                            <p>Masjid Nurul Huda
                                <br>Jati Agung, Lampung Selatan
                            </p>
                            <br>
                            <ul class="social-icon list-inline">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/"><i class="ti-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://twitter.com/"><i class="ti-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/"><i class="ti-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                        <div class="block-2">
                            <!-- heading -->
                            <h6>Menu</h6>
                            <!-- links -->
                            <ul>
                                <li><a href="{{route('landing')}}">Beranda</a></li>
                                <li><a href="{{route('laporankeuangan')}}">Laporan Keuangan</a></li>
                                <li><a href="{{route('tentangkami')}}">Tentang Kami</a></li>
                                <li><a href="{{route('donasi')}}">Donasi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                        <div class="block-2">
                            <!-- heading -->
                            <h6>Program</h6>
                            <!-- links -->
                            <ul>
                                <li><a href="{{route('donasi')}}">Donasi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center bg-dark py-4">
            <small class="text-secondary">Copyright &copy; <script>
                    document.write(new Date().getFullYear())
                </script>. Designed UI &amp;by <a href="https://themefisher.com/">Themefisher </a>Customed by Manajemen FUP</small class="text-secondary">
        </div>
    </footer>


    <!-- To Top -->
    <div class="scroll-top-to">
        <i class="ti-angle-up"></i>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/slick/slick.min.js"></script>
    <script src="../assets/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="../assets/plugins/syotimer/jquery.syotimer.min.js"></script>
    <script src="../assets/plugins/aos/aos.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
    <script src="../assets/plugins/google-map/gmap.js"></script>

    <script src="../assets/js/script.js"></script>
</body>

</html>