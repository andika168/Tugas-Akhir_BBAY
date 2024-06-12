@extends('layouts.app');

@section('content')
<!-- Header Section Start -->
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

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
    <div class="shapes-container">
        <div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
        <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
        <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
        <div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
        <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
                <h1 class="text-white font-weight-bold mb-4">Selamat Datang di Website Bahagia Bersama Anak Yatim</h1>
                <p class="text-white">Website ini ditujukan untuk menggalang donasi kepada anak yatim yang berada di Lampung Selatan, Jati Agung</p>
                <br>
                <a href=" {{route('donasi')}}" class="btn btn-main-md">Ayo Donasi</a>
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <img class="img-fluid" src="../assets/images/dokumentasibbay.jpeg" alt="screenshot">
            </div>
        </div>
    </div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top">
    <div class="container">
        <div class="rounded shadow p-5 bg-white">
            <p>
                Bahagia Bersama Anak Yatim Merupakan sebuah Agenda rutin yang dilakukan oleh komunitas Fiqih Untuk Pemula yang berfokus pada pengumpulan donasi untuk anak yatim.
            </p>
        </div>
    </div>
</section>

<!--==================================
=            Feature Grid            =
===================================-->
<section class="feature section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml-auto justify-content-center">
                <!-- Feature Mockup -->
                <div class="image-content" data-aos="fade-right">
                    <img class="img-fluid" src="../assets/images/Dokumentasi BBAY 1.jpg" alt="dokumentasikegiatan" width="">
                </div>
            </div>
            <div class="col-lg-6 mr-auto align-self-center">
                <div class="feature-content">
                    <!-- Feature Title -->
                    <h2>Mari Berdonasi</h2>
                    <!-- Feature Description -->
                </div>
                <!-- Testimonial Quote -->
                <div class="testimonial">
                    <p>
                        "Kami Mewakili Management Fiqih Untuk Pemula mengucapkan, Jazakumullah Khoir atas Kontribusinya, Semoga Allah Ta'ala senantiasa Memberkahi harta Antum semua. Aamiin..."
                    </p>
                    <ul class="list-inline meta">
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item">Manajemen FUP</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml-auto align-self-center">
                <div class="feature-content">
                    <!-- Feature Title -->
                    <h2>Mari Berdonasi</h2>
                    <!-- Feature Description -->
                </div>
                <!-- Testimonial Quote -->
                <div class="testimonial">
                    <p>
                        "Kami Mewakili Management Fiqih Untuk Pemula mengucapkan, Jazakumullah Khoir atas Kontribusinya, Semoga Allah Ta'ala senantiasa Memberkahi harta Antum semua. Aamiin..."
                    </p>
                    <ul class="list-inline meta">
                        <li class="list-inline-item">Manajemen FUP</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mr-auto justify-content-center">
                <!-- Feature mockup -->
                <div class="image-content" data-aos="fade-left">
                    <img class="img-fluid" src="../assets/images/Dokumentasi BBAY 2.jpg" alt="dokumentasikegiatan">
                </div>
            </div>
        </div>
    </div>
</section>
<!--====  End of Feature Grid  ====-->
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
                        <ul class="list-inline">
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

@endsection
@push('scripts')
<!-- jQuery first, then Tether, then Bootstrap JS. -->
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
@endpush