


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Registration Page</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('/dist/css/AdminLTE.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('/plugins/iCheck/square/blue.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        -->  <!--
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    </head>
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../../index2.html"><b>Admin</b>LTE</a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Register a new membership</p>

                <form  method="post" action="{{URL::Route('registersubmit')}}">
                    <div class="form-group has-feedback">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="text" class="form-control name" name="firstname" id="firstname" placeholder="First Name">
                        <span class="glyphicon glyphicon-user form-control-feedback" id=""></span>
                        <span id="namelocation">
                        </span></div>
                     <div class="form-group has-feedback">
                       
                        <input type="text" class="form-control name" name="lastname" id="lastname" placeholder="Last Name">
                        <span class="glyphicon glyphicon-user form-control-feedback" id=""></span>
                        <span id="namelocation">
                        </span></div>
                    <div class="form-group has-feedback">
                       
                        <input type="text" class="form-control name" name="gender" id="gender" placeholder="Gender ID">
                        <span class="glyphicon glyphicon-user form-control-feedback" id=""></span>
                        <span id="namelocation">
                        </span></div>
                    <div class="form-group has-feedback">
                       
                        <input type="text" class="form-control name" name="username" id="gender" placeholder="UserName">
                        <span class="glyphicon glyphicon-user form-control-feedback" id=""></span>
                        <span id="namelocation">
                        </span></div>
                    <div class="form-group has-feedback">
                       
                        <input type="password" class="form-control name" name="password" id="password" placeholder="Password">
                        <span class="glyphicon glyphicon-user form-control-feedback" id=""></span>
                        <span id="namelocation">
                        </span></div>
                    <div class="form-group has-feedback">
                       
                        <input type="password" class="form-control name" name="conformpassword" id="conformpassword" placeholder="conformpassword">
                        <span class="glyphicon glyphicon-user form-control-feedback" id=""></span>
                        <span id="namelocation">
                        </span></div>
                    
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" class="form-control"> I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <input type="submit" class="btn btn-primary btn-block btn-flat register" value="Register">


                        </div>
                        <!-- /.col -->
                    </div>


                </form>



                <!--    <div class="social-auth-links text-center">
                      <p>- OR -</p>
                      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                        Facebook</a>
                      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                        Google+</a>
                    </div>-->

                <a href="#" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.register-box -->

        <!-- jQuery 2.2.0 -->
        <script src="{{asset('/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- iCheck -->
        <script src="{{asset('/plugins/iCheck/icheck.min.js')}}"></script>
        <script src='/js/Admin.js'></script>
        <script>
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
        </script>
    </body>
</html>
