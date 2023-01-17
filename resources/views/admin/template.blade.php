<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?= $title ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ $url }}/img/favicon/jrCodeStudio.png">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ $url }}/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ $url }}/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ $url }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ $url }}/plugins/select2/css/select2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i
                }; // add zero in front of numbers < 10
                return i;
            }
        }
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed" onload="startTime()">
    <div class="wrapper">

        <!-- Navbar Start -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Sistem Informasi Manajemen jrCodeStudio</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <div class="nav-link">Jam Server (<b id="txt"></b>)</div>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        {{ auth()->user()->username }}
                        <i class="fas fa-cog"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <div>
                            <a class="dropdown-item" href="/"
                                style="text-decoration: none; color:rgb(2, 1, 1)">Home</a>
                        </div>
                        <hr>
                        <form action="/auth/logout" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>

                    </div>
                </li>
            </ul>
        </nav>
        <!-- /Navbar End -->

        <!-- Sidebar Start -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/Admin" class="brand-link">
                <img src="{{ $url }}/img/favicon/jrCodeStudio.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-2" style="opacity: .9" size="32x32">
                <span class="brand-text font-weight-light">jrCodeStudio</span>
            </a>
            <br>

            <div class="sidebar">

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="/dashboard/" class="nav-link">
                                <i class="fas fa-user"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/masterAdmin" class="nav-link">
                                <i class="fas fa-user"></i>
                                <p>Master Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/masterPortofolio" class="nav-link">
                                <i class="fas fa-user"></i>
                                <p>Master Portofolio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/masterTempatMagang" class="nav-link">
                                <i class="fas fa-users"></i>
                                <p>Master Magang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/pengajuanMagang" class="nav-link">
                                <i class="fas fa-users"></i>
                                <p>Pengajuan Magang</p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="fas fa-cog"></i>
                                Kelas
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <div>
                                    <a class="dropdown-item" href="/dashboard/masterKelas"
                                        style="text-decoration: none; color:rgb(2, 1, 1)">Kelas</a>
                                </div>
                                <hr>
                                <div>
                                    <a class="dropdown-item" href="/dashboard/masterJadwal"
                                        style="text-decoration: none; color:rgb(2, 1, 1)">Jadwal</a>
                                </div>
                                <hr>
                                <div>
                                    <a class="dropdown-item" href="/"
                                        style="text-decoration: none; color:rgb(2, 1, 1)">Paket</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- /Sidebar End -->

        <div>
            @yield('content')
        </div>

        <!-- Footer Start -->
        <footer class="main-footer">
            Copyright &copy; by Layanan Bootcamp Student jrCodeStudio.com
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 4.1.9
            </div>
        </footer>
        <!-- /Footer End -->

        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>

    <!-- jQuery -->
    <script src="{{ $url }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ $url }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ $url }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ $url }}/dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="{{ $url }}/plugins/datatables/jquery.dataTables.js"></script>
    <script src="{{ $url }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- Select2 -->
    <script src="{{ $url }}/plugins/select2/js/select2.full.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script>
        $(function() {
            $('#example').DataTable();
            /* $('#example').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            }); */
            $('.select2').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.btn').on('click', function() {
                var filter = $('#filter').val();
                var text = $('#getFilter').val(filter);

            })
        })
    </script>
</body>

</html>
