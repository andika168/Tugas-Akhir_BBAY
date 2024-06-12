<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Admin | Laporan Keuangan</title>

    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">
    <link href=" https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" rel="stylesheet">
    <link href=" https://cdn.datatables.net/datetime/1.5.2/css/dataTables.dateTime.min.css " rel="stylesheet">
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="font-w600 text-dual" href="/dashboard">
                    <span class="smini-hide">
                        <span class="font-w700 font-size-h5">Admin</span>
                    </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Color Variations -->
                    <div class="dropdown d-inline-block ml-3">
                        <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                            <br>
                            <p>Tema</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                            <!-- Color Themes -->
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                                <span>Default</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                                <span>Amethyst</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                                <span>City</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                                <span>Flat</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                                <span>Modern</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                                <span>Smooth</span>
                            </a>
                            <!-- END Color Themes -->

                            <div class="dropdown-divider"></div>

                            <!-- Sidebar Styles -->
                            <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                <span>Sidebar Light</span>
                            </a>
                            <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                <span>Sidebar Dark</span>
                            </a>
                            <!-- Sidebar Styles -->
                            <div class="dropdown-divider"></div>
                            <!-- Header Styles -->
                            <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                                <span>Header Light</span>
                            </a>
                            <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                                <span>Header Dark</span>
                            </a>
                            <!-- Header Styles -->
                        </div>
                    </div>
                    <!-- END Themes -->
                    <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                        <button type="button" class=" btn-sm mr-2">x</button>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
            <!-- END Side Header -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="/dashboard">
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Menu</li>
                    <li class="nav-main-item open">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                            <span class="nav-main-link-name">Forms</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link active" href="/adminkeuangan">
                                    <span class="nav-main-link-name">Laporan Keuangan</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link active" href="/adminpemasukan">
                                    <span class="nav-main-link-name">Laporan Pemasukan</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link active" href="/adminpengeluaran">
                                    <span class="nav-main-link-name">Laporan Pengeluaran</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Sidebar -->
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                    </button>
                    <!-- END Toggle Sidebar -->
                    <!-- Toggle Mini Sidebar -->
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                    </button>
                    <!-- END Toggle Mini Sidebar -->
                    <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                    </button>
                    <a href="{{route('dashboard')}}"><button type="button" class="btn btn-sm mr-2">Back</button></a>
                    <!-- END Open Search Section -->
                </div>
                <!-- END Left Section -->
                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded" src="../assets/images/avatar10.jpg" style="width: 18px;">
                            <span class="d-none d-sm-inline-block ml-1">Admin</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-primary">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="../assets/images/avatar10.jpg" alt="">
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{route('logout')}}">
                                    <span>Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->
            <!-- Header Loader -->
            <div id="page-header-loader" class="overlay-header bg-white">
                <div class="content-header">
                    <div class="w-100 text-center">
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->
        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->

            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            Admin | Laporan Keuangan
                        </h1>
                    </div>
                    <div>
                        <p>
                            Note:
                            <br>
                            Status CREATED :"Artinya bukti transaksi baru diinputkan oleh user dan perlu konfirmasi oleh admin, namun tetap muncul dan pada tabel laporan keuangan di halaman depan"
                            <br>
                            Status VERIFIED :"Artinya Bukti transaksi sudah di konfirmasi oleh admin dan akan muncul pada tabel laporan keuangan di halaman depan"
                            <br>
                            Status REJECTED :"Artinya Bukti transaksi ditolak oleh admin dan tidak akan ditampilkan pada tabel laporan keuangan di halaman depan"
                            <br>
                            Tombol VERIFIED:"Untuk menyetujui bukti donasi yang telah diupload"
                            <br>
                            Tombol REJECTED:"Untuk menolak bukti donasi yang telah diupload"
                        </p>
                    </div>
                </div>
            </div>
            <!-- END Hero -->
            <!-- Page Content -->
            <div class="px-4">
                <div class="mt-4">
                    <h5 class="text">Filter Berdasarkan Tanggal</h5>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <label for="min">Tanggal Awal:</label>
                            <input type="text" id="min" name="min" class="form-control" placeholder="Pilih Tanggal Awal">
                        </div>
                        <div class="col-md-6">
                            <label for="max">Tanggal Akhir:</label>
                            <input type="text" id="max" name="max" class="form-control" placeholder="Pilih Tanggal Akhir">
                        </div>
                    </div>
                </div>
                <br>
                <a href="{{route('pengeluaran')}}">
                    <button class="btn btn-primary">
                        Tambah Data Pengeluaran BBAY
                    </button>
                </a>
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID transaksi</th>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th>Saldo Masuk</th>
                            <th>Saldo Keluar</th>
                            <th>Jenis Transaksi</th>
                            <th>Status</th>
                            <th>Dibuat</th>
                            <th>Bukti Transfer</th>
                            <th>Dirubah Oleh</th>
                            <th>Aksi</th>
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
                            <td>{{$item->status}}</td>
                            <td>{{date ('d-m-y', strtotime($item->created_at))}}</td>
                            <td>
                                <a href="{{asset($item->bukti)}}" target="_blank">
                                    <div class="container">
                                        <button type="" class="button-look" data-toggle="tooltip" data-placement="auto" title="LIHAT">
                                            &#8858;
                                        </button>
                                    </div>
                                </a>
                            </td>
                            <td>
                                {{isset($item->user->username)?$item->user->username:"N/A"}}
                            </td>
                            <td>
                                @if(\App\Models\Keuangan::STATUS_VERIFIED!=$item->status)
                                <a href="{{route('keuangan_verified',['id'=>$item->id])}}"> <button class="button-check" data-toggle="tooltip" data-placement="auto" title="VERIFY">
                                        &#10004;
                                    </button>
                                </a>
                                @endif
                                @if(\App\Models\Keuangan::STATUS_REJECTED!=$item->status)
                                <a href="{{route('keuangan_rejected',['id'=>$item->id])}}"><button class="button-cross" data-toggle="tooltip" data-placement="auto" title="REJECT">
                                        &#10006;
                                    </button></a>
                                @endif
                                @if(\App\Models\Keuangan::STATUS_CREATED==$item->status)
                                <a href="{{route('update_pemasukan',['id'=>$item->id])}}"><button class="button-pencil" data-toggle="tooltip" data-placement="auto" title="EDIT">
                                        &#9998;
                                    </button></a>
                                @endif
                            </td>
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
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tfoot>
                </table>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row font-size-sm">
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                        <a class="font-w600" href="https://1.envato.market/xWy" target="_blank">OneUI 4.2</a> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->
    <!--
            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
    <script src="assets/js/oneui.core.min.js"></script>
    <script src="assets/js/oneui.app.min.js"></script>
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

        // Custom filtering function which will search data in column 7 between two values
        DataTable.ext.search.push(function(settings, data, dataIndex) {
            let min = minDate.val();
            let max = maxDate.val();
            let date = moment(data[7], "DD-MM-YY").toDate();

            // console.log(min, max, date, moment(data[7], "DD-MM-YY").toDate());

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
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>