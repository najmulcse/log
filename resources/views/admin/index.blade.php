<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin E </title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    {{--<link href="css/plugins/morris.css" rel="stylesheet">--}}

    <!-- Custom Fonts -->
    {{--<link href="{{asset('fonts')}}" rel="stylesheet" type="text/css">--}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->

</head>

<body>
<body>



<!-- Navigation -->
@include('layouts.navigation')


<div class="row">
@include('layouts.sidebar')

<!-- body -->

    <div class="col-md-10">
       <h2>Default page</h2>
    </div>
</div>

<!--Sidebar -->



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
