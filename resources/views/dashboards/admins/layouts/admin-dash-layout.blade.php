<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <base href="{{ \URL::to('/') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ URL::to('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/ijaboCropTool/ijaboCropTool.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::to('dist/css/adminlte.min.css')}}">
    
    <link rel="stylesheet" href="{{ URL::to('plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ URL::to('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ URL::to('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ URL::to('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{ URL::to('dist/css/adminlte.min.css?v=3.2.0')}}">

    <link rel="stylesheet" href="{{ URL::to('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

    <link rel="stylesheet" href="{{ URL::to('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ URL::to('plugins/jqvmap/jqvmap.min.css')}}">

    <link rel="stylesheet" href="{{ URL::to('dist/css/adminlte.min.css?v=3.2.0')}}">

    <link rel="stylesheet" href="{{ URL::to('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    <link rel="stylesheet" href="{{ URL::to('plugins/daterangepicker/daterangepicker.css')}}">

    <link rel="stylesheet" href="{{ URL::to('plugins/summernote/summernote-bs4.min.css')}}">
</head>

<body class="sidebar-mini layout-fixed text-sm">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ \URL::to('/')}}" class="brand-link">
                <img src="{{ URL::to('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Your Site</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ Auth::user()->picture }}" class="img-circle elevation-2 admin_picture"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block admin_name">{{ Auth::user()->name }}</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-compact nav-child-indent nav-collapse-hide-child nav-flat"
                        data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <!-- <li class="nav-item">
                <a href="{{ route('admin.dashboard')}}" class="nav-link {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li> -->
                        <li class="nav-item">
                            <a href="{{ route('admin.profile')}}"
                                class="nav-link {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                <a href="{{ route('admin.settings')}}" class="nav-link {{ (request()->is('admin/settings*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-cog"></i>
                  <p>
                  Settings
                  </p>
                </a>
              </li> -->
                        <li class="nav-item">
                            <a href="{{ route('admin.addshablon')}}"
                                class="nav-link {{ (request()->is('admin/addshablon*')) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-plus-square"></i>
                                <p>
                                    Shablon Qo'shish
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.allshablon')}}"
                                class="nav-link {{ (request()->is('admin/allshablon*')) ? 'active' : '' }}">
                                <i class="nav-icon fa fa-th-large"></i>
                                <p>
                                   Barcha Hujjatlar
                                </p>
                            </a>
                        </li> 
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ URL::to('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Data-Table Script -->


<script src="{{ URL::to('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::to('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ URL::to('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ URL::to('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ URL::to('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ URL::to('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ URL::to('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ URL::to('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ URL::to('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ URL::to('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ URL::to('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ URL::to('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{ URL::to('dist/js/adminlte.min.js?v=3.2.0')}}"></script>

<script src="{{ URL::to('dist/js/demo.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');    
  });
</script>
    <!-- Bootstrap 4 -->
    <script src="{{ URL::to('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ URL::to('plugins/ijaboCropTool/ijaboCropTool.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::to('dist/js/adminlte.min.js')}}"></script>



    {{-- CUSTOM JS CODES --}}
    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(function() {

        /* UPDATE ADMIN PERSONAL INFO */

        $('#AdminInfoForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: new FormData(this),
                processData: false,
                dataType: 'json',
                contentType: false,
                beforeSend: function() {
                    $(document).find('span.error-text').text('');
                },
                success: function(data) {
                    if (data.status == 0) {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    } else {
                        $('.admin_name').each(function() {
                            $(this).html($('#AdminInfoForm').find($(
                                'input[name="name"]')).val());
                        });
                        alert(data.msg);
                    }
                }
            });
        });



        $(document).on('click', '#change_picture_btn', function() {
            $('#admin_image').click();
        });


        $('#admin_image').ijaboCropTool({
            preview: '.admin_picture',
            setRatio: 1,
            allowedExtensions: ['jpg', 'jpeg', 'png'],
            buttonsText: ['CROP', 'QUIT'],
            buttonsColor: ['#30bf7d', '#ee5155', -15],
            processUrl: '{{ route("adminPictureUpdate") }}',
            // withCSRF:['_token','{{ csrf_token() }}'],
            onSuccess: function(message, element, status) {
                alert(message);
            },
            onError: function(message, element, status) {
                alert(message);
            }
        });


        $('#changePasswordAdminForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: new FormData(this),
                processData: false,
                dataType: 'json',
                contentType: false,
                beforeSend: function() {
                    $(document).find('span.error-text').text('');
                },
                success: function(data) {
                    if (data.status == 0) {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    } else {
                        $('#changePasswordAdminForm')[0].reset();
                        alert(data.msg);
                    }
                }
            });
        });


    });
    </script>
</body>

</html>