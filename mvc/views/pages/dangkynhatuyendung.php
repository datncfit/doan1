<?php
$err = [];
if( isset($_POST['Username']) ){
    $name = $_POST['Username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $rPass = $_POST['repassword'];

    if( empty($name) ){
        $err['name']='Bạn chưa nhập tên';
    }

    if( empty($email) ){
        $err['email']='Bạn chưa nhập email';
    }
    if( empty($pass) ){
        $err['pass']='Bạn chưa nhập password';
    }
    if( $pass != $rPass ){
        $err['rPass'] = 'Mật khẩu nhập lại không đúng';
    }
}
?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
</head>

<body>
<div class="container">
        <form class="form-dangky"  action="http://localhost:8080/BaoCao/Login/TRANGDANGKY"  method="post">
            <div id="Head" >Đăng ký</div>
            <div class="form-text text-dangky">
                <label>Username </label>
                <input type="text" name="Username" class="form-control" pattern="[a-zA-Z0-9]{1,30}" id="txt_name" onblur="checkName();"/>
                <div>
                    <span><?php echo (isset($err['name']))?$err['name']:'';  ?></span>
                </div>
            </div>
            <div class="form-text text-dangky">
                <label for="">Email</label>
                <input type="text" pattern="^\w+@[a-zA-Z0-9]{3,}\.com$" name="email">
                <div>
                    <span><?php echo (isset($err['email']))?$err['email']:'';  ?></span>
                </div>
            </div>
            <div class="form-text text-dangky">
                <label>Password</label>
                <input type="password" name="password">
                <div>
                    <span><?php echo (isset($err['pass']))?$err['pass']:'';  ?></span>
                </div>
            </div>
            <div class="form-text text-dangky">
                <label>Enter the password</label>
                <input type="password" name="repassword">
                <div>
                    <span><?php echo (isset($err['rPass']))?$err['rPass']:'';  ?></span>
                </div>
            </div>
            <button type="submit" name="submit">Đăng ký</button>
            <button type="submit" name="changedangnhap">Đăng nhập</button>
        </form>
    </div>
    <script>
	const formlogin = document.querySelectorAll('.form-text input')
	const formlabel = document.querySelectorAll('.form-text label')

	for(let i=0;i<4;i++)
	{
		formlogin[i].addEventListener("mouseover",function(){
			formlabel[i].classList.add("focus")
		})
		formlogin[i].addEventListener("mouseout",function(){
			if(formlogin[i].value ==""){
				formlabel[i].classList.remove("focus")
			}
		})

	}
    // function checkName(){
    // var name = document.getElementById("txt_name").value;
    // var check_error_name = document.getElementById("error_name");
    // var regexName = /[a-zA-Z]+[a-zA-Z0-9]+$/;


    // if(name == "" || name == null)
    // {
    //     check_error_name.innerHTML = "*";

    // }
    // else if(!regexName.test(name)){
    //     check_error_name.innerHTML = "*";
    // }
    // else{
    //     check_error_name.innerHTML = "";
    //     return name;
    // }
    // }
</script>
<?php
if( isset($_POST['changedangnhap']))
{
    header("location:http://localhost:8080/BaoCao/Login/Trangchu");
}
?>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

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

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Xin Chào Nhà Tuyển Dụng!</h1>
                        </div>
                        <form class="user" action="http://localhost:8080/BaoCao/Login/checkDangKyTuyenDung"  method="post">
                            <div class="form-group">
                                <div>
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                           placeholder="User Name" name="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                       placeholder="Email Address">

                            </div>
                            <div class="form-group">
                                <input type="number" name="phone" class="form-control form-control-user" id="exampleInputPhone"
                                       placeholder="Phone">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password" class="form-control form-control-user"
                                           id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                           id="exampleRepeatPassword" name="repassword" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-user btn-block" type="submit" name="submit">Đăng Ký Nhà Tuyển Dụng</button>

                            </a>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="http://localhost:8080/BaoCao/Login/Dangky">Đăng ký tài khoản?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="http://localhost:8080/BaoCao/Login/">Đã có tài khoản? Đăng nhập!</a>
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

<?php
if(isset($_POST['changedangnhap']))
{
    header("location:http://localhost:8080/BaoCao/Login/Trangchu");
}
?>
</body>

</html>
