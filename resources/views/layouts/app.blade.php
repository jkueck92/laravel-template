<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="{{ asset("adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("adminlte/bower_components/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("adminlte/bower_components/Ionicons/css/ionicons.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("adminlte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("adminlte/dist/css/skins/_all-skins.min.css")}}" rel="stylesheet" type="text/css"/>
    @yield('additional-css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('layouts.header')
    @include('layouts.sidebar')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>
</div>
<script src="{{ asset ("adminlte/bower_components/jquery/dist/jquery.min.js") }}"></script>
<script src="{{ asset ("adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>
<script src="{{ asset ("adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js") }}"></script>
<script src="{{ asset ("adminlte/bower_components/fastclick/lib/fastclick.js") }}"></script>
<script src="{{ asset ("adminlte/dist/js/adminlte.min.js") }}"></script>
@yield('additional-js')
@yield('script')
</body>
</html>
