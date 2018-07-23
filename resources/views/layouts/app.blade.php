<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Manage | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!--  CSS -->
        @include('layouts.styles')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">

    <!-- for login page -->
    <!-- <body class="hold-transition login-page"> -->
    <!-- for login page -->
        <div class="wrapper">
            @include('layouts.header')

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                @yield('content')
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            @include('layouts.footer')
            @include('layouts.right-sidebar')

            <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar-->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!--  JS -->
        @include('layouts.js')
    </body>
</html>