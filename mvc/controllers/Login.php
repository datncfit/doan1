<?php
    class Login extends Controller {
        function TrangChu(){
            $dn = $this->model("DangNhapModel");
            $this->view("LoginView", [
                "Page"=>"dangnhap",
                "tk"=>$dn->TAIKHOAN()
            ]);
        }

        function Kiemtra(){
            $dn = $this->model("DangNhapModel");
            $sp = $this->model("SanPhamModel");
            $so=$dn->CHECKTAIKHOAN($_POST["email"],$_POST["password"]);
            $kq=false;
            if($so>0){
                $kq=true;
                $so2=$dn->checkquyen($_POST["email"],$_POST["password"]);
                if( $so2 == 1 ){
                    $_SESSION['email']=$_POST["email"];
                    $_SESSION['password']=$_POST["password"];
                    $_SESSION['quyen']="admin";
                    $result=$dn->getNameLogin($_POST["email"]);
                    $name = mysqli_fetch_assoc($result);
                    $_SESSION['name']= $name["TENTK"];
                    $_SESSION['id']= $name["MATK"];
                }else if($so2 == 2){
                    $_SESSION['email']=$_POST["email"];
                    $_SESSION['password']=$_POST["password"];
                    $_SESSION['quyen']="nhatuyendung";
                    $result=$dn->getNameLogin($_POST["email"]);
                    $name = mysqli_fetch_assoc($result);
                    $_SESSION['name']=$name["TENTK"];
                    $_SESSION['id']= $name["MATK"];
                } else if($so2 == 3){
                    $_SESSION['email']=$_POST["email"];
                    $_SESSION['password']=$_POST["password"];
                    $_SESSION['quyen']="nhanvien";
                    $result=$dn->getNameLogin($_POST["email"]);
                    $name = mysqli_fetch_assoc($result);
                    $_SESSION['name']=$name["TENTK"];
                    $_SESSION['id']= $name["MATK"];
                }else{
                    $_SESSION['email']=$_POST["email"];
                    $_SESSION['password']=$_POST["password"];
                    $_SESSION['quyen']="khach";
                    $result=$dn->getNameLogin($_POST["email"]);
                    $name = mysqli_fetch_assoc($result);
                    $_SESSION['name']=$name["TENTK"];
                    $_SESSION['id']= $name["MATK"];
                }

                $ma = $dn->checkMail($_POST["email"]);
                $row = mysqli_fetch_assoc($ma);
                $_SESSION['MATK'] = $row['MATK'];

                $view=$this->view("LoginView",[
                    "check"=>$kq,
                ]);
            }else{
                $view=$this->view("LoginView",[
                    "check"=>$kq,
                    "checkdn"=>"Đăng nhập thất bại"
                ]);
            }

        }
        function Dangky(){
            $dn = $this->model("DangNhapModel");
            $this->view("LoginView", [
                "Page"=>"dangky",
                "tk"=>$dn->TAIKHOAN()
            ]);
        }
        function TRANGDANGKY(){
            $dn2 = $this->model("DangNhapModel");
            $so2 = $dn2->checkdangky($_POST["Username"],$_POST['email'],$_POST["password"],$_POST["repassword"],$_POST["phone"],4);
            $kq = false;
            if($so2>0){
                $kq=true;
            }
            $this->view("LoginView", [
                "checkdk"=>$kq,
                "Page"=>"dangky",
                "Page2"=>"dangnhap"
            ]);
        }
        function Dangxuat(){
            unset($_SESSION['email']);
            header('location: http://localhost:8080/BaoCao/');
        }

        function Quenmatkhau(){
            $dn = $this->model("DangNhapModel");
            $this->view("LoginView", [
                "Page"=>"quenmatkhau",
                "tk"=>$dn->TAIKHOAN()
            ]);
        }

        function Dangkynhatuyendung(){
            $this->view("LoginView", [
                "Page"=>"dangkynhatuyendung"
            ]);
        }

        function checkDangKyTuyenDung(){
            $dn2 = $this->model("DangNhapModel");
            $so2 = $dn2->checkdangky($_POST["Username"],$_POST['email'],$_POST["password"],$_POST["repassword"],$_POST["phone"],2);
            $kq = false;
            if($so2>0){
                $kq=true;
            }
            $this->view("LoginView", [
                "checkdk"=>$kq,
                "Page"=>"dangkynhatuyendung",
                "Page2"=>"successRegister"
            ]);
        }

}

?>
