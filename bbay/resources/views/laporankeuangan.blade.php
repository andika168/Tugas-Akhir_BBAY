<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Laporan Keuangan</title>

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
    <link href=" https://use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet">
    <link href=" https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" rel="stylesheet">
    <link href=" https://cdn.datatables.net/datetime/1.5.2/css/dataTables.dateTime.min.css " rel="stylesheet">
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
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="section blog-single">
        <div class="container">
            <div class="post-title text-center">
                <h1>Transparansi Keuangan Donasi "Bahagia Bersama Anak Yatim"</h1>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="{{route('laporankeuangan')}}" class="btn btn-primary btn-lg mr-5 shadow" data-toggle="button" aria-pressed="false" autocomplete="off">
                    <i class="fa fa-file-text-o"></i> Laporan Keuangan
                </a>
                <a href="{{route('laporanpemasukan')}}" class="btn btn-success btn-lg mr-5 shadow" data-toggle="button" aria-pressed="false" autocomplete="off">
                    <i class="fa fa-arrow-circle-up"></i> Laporan Pemasukan
                </a>
                <a href="{{route('laporanpengeluaran')}}" class="btn btn-danger btn-lg shadow" data-toggle="button" aria-pressed="false" autocomplete="off">
                    <i class="fa fa-arrow-circle-down"></i> Laporan Pengeluaran
                </a>
            </div>
            <div class="row mt-4">
                <div class="col-md-10 m-auto">
                    <div class="mt-4">
                        <h5 class="text-center">Filter Berdasarkan Tanggal</h5>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <label for="min">Tanggal Awal:</label>
                                <div class="input-group">
                                    <input type="text" id="min" name="min" class="form-control" placeholder="Pilih Tanggal Awal">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="max">Tanggal Akhir:</label>
                                <div class="input-group">
                                    <input type="text" id="max" name="max" class="form-control" placeholder="Pilih Tanggal Akhir">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Post -->
                    <article class="single-post">
                        <!-- Post title -->
                        <br>
                        <div class="post-title text-center">
                            <h1>Laporan Keuangan</h1>
                        </div>
                        <!-- Post Details -->
                        <div class="post-details">
                            @if(Session::has('sukses') && Session::get('sukses'))
                            <div class="bg-success p-2 rounded">
                                <h5>Berhasil Upload Bukti Donasi</h5>
                            </div>
                            @endif
                            <table id="example" class="display table table-striped table-bordered" style=" width:100%">
                                <thead>
                                    <tr>
                                        <th>ID transaksi</th>
                                        <th>Nama</th>
                                        <th>Keterangan</th>
                                        <th>Saldo Masuk</th>
                                        <th>Saldo Keluar</th>
                                        <th>Jenis Transaksi</th>
                                        <th>Dibuat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($keuangan as $item)
                                    <tr>
                                        <td>{{$item->id_trx}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->keterangan}}</td>
                                        <td>@if($item->jenis == 'Pemasukan')
                                            Rp.{{$item->jumlah}}
                                            @endif
                                        </td>
                                        <td>@if($item->jenis == 'Pengeluaran')
                                            Rp.{{$item->jumlah}}
                                            @endif
                                        </td>
                                        <td>{{$item->jenis}}</td>
                                        <td>{{date ('d-m-y', strtotime($item->created_at))}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Jumlah<br>Rp.{{$total}}</th>
                                    <th>Jumlah<br>Rp.{{$total_pengeluaran}}</th>
                                    <th>Saldo<br>Rp.{{$total-$total_pengeluaran}}</th>
                                    <th> </th>
                                </tfoot>
                            </table>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Single Article  ====-->
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
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js" type="text/javascript"></script>

    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.5.2/js/dataTables.dateTime.min.js"></script>
    <script>
        new DataTable('#example', {
            layout: {
                topStart: {
                    buttons: ['csv', 'excel', 'print']
                },
                bottomEnd: {
                    paging: {
                        boundaryNumbers: false
                    }
                }
            }
        });
    </script>
    <script>
        let minDate, maxDate;

        // Custom filtering function which will search data in column 6 between two values
        DataTable.ext.search.push(function(settings, data, dataIndex) {
            let min = minDate.val();
            let max = maxDate.val();
            let date = moment(data[6], "DD-MM-YY").toDate();

            // console.log(min, max, date, moment(data[6], "DD-MM-YY").toDate());

            if (
                (min === null && max === null) ||
                (min === null && date <= max) ||
                (min <= date && max === null) ||
                (min <= date && date <= max)
            ) {
                return true;
            }
            return false;
        });

        // Create date inputs
        minDate = new DateTime('#min', {
            format: ' D-MM-YY'
        });
        maxDate = new DateTime('#max', {
            format: 'D-MM-YY'
        });

        // DataTables initialisation
        let table = new DataTable('#example');

        // Refilter the table
        document.querySelectorAll('#min, #max').forEach((el) => {
            el.addEventListener('change', () => table.draw());
        });
    </script>
</body>

</html>