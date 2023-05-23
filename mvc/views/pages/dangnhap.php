<?php
	$err = [];
	if( isset($_POST['email']) ){
		$pass = $_POST['password'];
		$email = $_POST['email'];
	}
	if( empty($email) ){
		$err['email']='Bạn chưa nhập email';
	}
	if( empty($pass) ){
		$err['pass']='Bạn chưa nhập password';
	}


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="../public/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../public/template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Chào mừng bạn trở lại!</h1>
                                    </div>
                                    <form class="user" action="http://localhost:8080/BaoCao/Login/kiemtra" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ghi nhớ đăng nhập</label>
                                            </div>
                                        </div>
										<button class="btn btn-primary btn-user btn-block" type="submit" name="submit">Đăng nhập</button>
                                        <hr>
                                        <a href="http://localhost:8080/BaoCao/Login/Dangkynhatuyendung" class="btn btn-google btn-user btn-block">
                                            <i class="fa fa-home"></i> Đăng Ký Nhà Tuyển Dụng
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="http://localhost:8080/BaoCao/Login/Quenmatkhau">Quên mật khẩu?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="http://localhost:8080/BaoCao/Login/Dangky">Đăng ký tài khoản!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../public/template/vendor/jquery/jquery.min.js"></script>
    <script src="../public/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../public/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../public/template/js/sb-admin-2.min.js"></script>

</body>
<script>
    <?php
    if (isset($checkdn)){
        ?>
        console.log(<?php echo $checkdn?>);
    <?php
    }
    ?>
</script>
</html>