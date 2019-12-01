<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('/sb/vendor/bootstrap/css/bootstrap.min.css') }}">

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="{{asset('/sb/vendor/metisMenu/metisMenu.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/sb/dist/css/sb-admin-2.css')}}">

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="{{asset('/sb/vendor/morrisjs/morris.css')}}">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{asset('/sb/vendor/font-awesome/css/font-awesome.min.css')}}">


    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

</head>
<body>
    <div id="wrapper">
        @include('adminpanel.layout.nav')
        @yield('content')

    </div>
    <!-- /#wrapper -->
</body>

    

    <!-- jQuery -->
    <script src="{{asset('/sb/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('/sb/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('/sb/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('/sb/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('/sb/vendor/morrisjs/morris.min.js')}}"></script>
    <script src="{{asset('/sb/data/morris-data.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('/sb/dist/js/sb-admin-2.js')}}"></script>


</html>