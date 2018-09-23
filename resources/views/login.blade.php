<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Service | Manager</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!--  CSS -->
        @include('layouts.styles')
        <!-- for login page start -->
        <link rel="stylesheet" href="bower_components/admin-lte/plugins/iCheck/square/blue.css">
        <!-- end for login page -->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="javascript:void(0);"><b>Login </b>here</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form id="login" action="/login" method="post">
                     {{ csrf_field() }} 
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <!-- <div class="col-xs-8" style="visibility: hidden;"> -->
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center">
                  <p>- OR -</p>
                  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                    Facebook</a>
                  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                    Google+</a>
                </div> -->
                <!-- /.social-auth-links -->

                <!-- <a href="#">I forgot my password</a><br> -->
                <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!--  JS -->
        @include('layouts.js')
        <!-- for login page -->
        <script src="bower_components/admin-lte/plugins/iCheck/icheck.min.js"></script>
        <script src="{{asset('assets/web/js/login.js')}}"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
        <!-- end for login page -->
    </body>
</html>
