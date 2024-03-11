<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <!-- AdminLTE App -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <!-- Custom CSS -->
    <style>
        /* เพิ่มสีพื้นหลัง */
        body {
            background-color: #00576f;
        }

        /* ปรับขนาดของ login-box */
        .login-box {
            margin-top: 80px;
            width: 400px;
        }

        /* ปรับขนาดของ login-logo */
        .login-logo {
            font-size: 40px;
        }

        /* เปลี่ยนสีของปุ่ม Sign In */
        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }

        /* เปลี่ยนสีของปุ่ม Sign In เมื่อเม้าส์ hover */
        .btn-primary:hover {
            background-color: #45a049;
            border-color: #45a049;
        }

        /* เปลี่ยนสีของปุ่ม Sign In เมื่อกด */
        .btn-primary:active {
            background-color: #3e8e41;
            border-color: #3e8e41;
        }

        /* เปลี่ยนสีของ social-auth-links */
        .social-auth-links .btn {
            margin-bottom: 10px;
        }

        /* เปลี่ยนสีของ social-auth-links */
        .social-auth-links .btn-primary {
            background-color: #3b5998;
            border-color: #3b5998;
        }

        /* เปลี่ยนสีของ social-auth-links เมื่อเม้าส์ hover */
        .social-auth-links .btn-primary:hover {
            background-color: #2d4373;
            border-color: #2d4373;
        }

        /* เปลี่ยนสีของ social-auth-links เมื่อกด */
        .social-auth-links .btn-primary:active {
            background-color: #1d2d4a;
            border-color: #1d2d4a;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>SE</b>Camp</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">

                <form action="<?php echo e(url('login')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\SE_camp\example-app\resources\views/login.blade.php ENDPATH**/ ?>