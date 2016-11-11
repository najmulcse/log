<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/libs.css')}}" rel="stylesheet">



</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
@include('layouts.navigation')


<div class="row">

<!--Sidebar -->
@include('layouts.sidebar')

<!-- body -->

</div>

<!-- end row -->

    <!-- /#page-wrapper -->
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('js/libs.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="js/bootstrap.min.js"></script>-->

    <!-- Morris Charts JavaScript -->
{{--<script src="js/plugins/morris/raphael.min.js"></script>--}}
{{--<script src="js/plugins/morris/morris.min.js"></script>--}}
{{--<script src="js/plugins/morris/morris-data.js"></script>--}}

</body>

</html>
