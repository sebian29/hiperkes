<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ ($title) ? $title : 'MTF :: PA' }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/ionicons-2.0.1/css/ionicons.min.css') }}" />
    <!-- Bootstrap 3 Dialog -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap3-dialog/css/bootstrap-dialog.min.css') }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/square/green.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/AdminLTE.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-purple.min.css') }}" />

    <!-- Air-Datepicker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/air-datepicker/css/datepicker.min.css') }}" />
    <!-- Selectize -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/selectize/css/selectize.bootstrap3.css') }}" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
        @include('common/header')
        <!-- Left side column. contains the logo and sidebar -->
        @include('common/sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2015 <a href="#">MTF</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 1.11.3 -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap Dialog -->
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap3-dialog/js/bootstrap-dialog.min.js') }}"></script>
    <!-- FastClick -->
    <script type="text/javascript" src="{{ asset('assets/js/fastclick.min.js') }}"></script>
    <!-- iCheck -->
    <script type="text/javascript" src="{{ asset('assets/plugins/iCheck/icheck.min.js') }}"></script>
    <!-- Selectize -->
    <script type="text/javascript" src="{{ asset('assets/plugins/selectize/js/standalone/selectize.min.js') }}"></script>
    <!-- Air-Datepicker -->
    <script type="text/javascript" src="{{ asset('assets/plugins/air-datepicker/js/datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/air-datepicker/js/i18n/datepicker.en.js') }}"></script>
    <!-- AdminLTE App -->
    <script type="text/javascript" src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- Javascript Page -->
    @if(isset($jspage))
    <script type="text/javascript" src="{{ asset('protected/resources/views/page/'.$jspage.'.js') }}"></script>
    @endif
</body>

</html>
