<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
    <style>
    body {
        background-color: #ffffff;
    }

    /* เปลี่ยนสีของปุ่ม Register */
.btn-primary {
    background-color: #56e90c;
    border-color: #56e90c;
    color: #ffffff; /* เพิ่มสีของตัวอักษรเป็นสีขาว */
}

/* เปลี่ยนสีของปุ่ม Register เมื่อเม้าส์ hover */
.btn-primary:hover {
    background-color: #3da60c;
    border-color: #3da60c;
    color: #ffffff; /* เพิ่มสีของตัวอักษรเป็นสีขาว */
}

/* เปลี่ยนสีของปุ่ม Register เมื่อกด */
.btn-primary:active {
    background-color: #2c7e08;
    border-color: #2c7e08;
    color: #ffffff; /* เพิ่มสีของตัวอักษรเป็นสีขาว */
}

/* ปรับสีของข้อความเมื่อมี error */
.is-invalid .form-control {
    border-color: #dc3545;
    color: #ffffff; /* เพิ่มสีของตัวอักษรเป็นสีขาว */
}

/* ปรับสีของลิงก์ */
.text-center a {
    color: #ffffff; /* เปลี่ยนสีของลิงก์เป็นสีขาว */
}

/* ปรับสีของตัวอักษรในปุ่มลงชื่อเข้าใช้ผ่านช่องทางต่าง ๆ */
.social-auth-links .btn {
    color: #ffffff; /* เปลี่ยนสีของตัวอักษรในปุ่มลงชื่อเข้าใช้เป็นสีขาว */
}


    </style>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>SE</b>CAMP</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="{{ url('/register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    {{ $errors->first('email') }}
                    <div class="input-group mb-3">
                        <input type="email" name="email"
                            class="form-control <?php if($errors->has('email')){ ?>is-invalid<?php } ?>" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    {{ $errors->first('password') }}
                    <div class="input-group mb-3">
                        <input type="password" name="password"
                            class="form-control <?php if($errors->has('password')){ ?>is-invalid<?php } ?>"
                            placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation"
                            class="form-control <?php if($errors->has('password')){ ?>is-invalid<?php } ?>"
                            placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="social-auth-links text-center mb-3">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google mr-2"></i> Sign in using Google
                        </a>
                        <a href="#" class="btn btn-block btn-info">
                            <i class="fab fa-twitter mr-2"></i> Sign in using Twitter
                        </a>
                        <a href="#" class="btn btn-block btn-warning">
                            <i class="fab fa-instagram mr-2"></i> Sign in using Instagram
                        </a>
                    </div>

                </form>

                <a href="login" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('assets/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
