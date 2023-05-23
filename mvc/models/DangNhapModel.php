<?php
    class DangNhapModel extends DB{
        public function TAIKHOAN(){
            $taikhoan = "SELECT * FROM taikhoan inner join chucvu on taikhoan.macv = chucvu.macv";
            $kq = mysqli_query($this->con, $taikhoan);
            return $kq;
        }

        public function getNameLogin($email)
        {
            $name = "SELECT * FROM taikhoan where EMAIL = '$email'";
            $kq = mysqli_query($this->con, $name);
            return $kq;
        }

        public function TK($id){
            $taikhoan = "SELECT * FROM taikhoan inner join chucvu on taikhoan.macv = chucvu.macv where MATK = '$id'";
            $kq = mysqli_query($this->con, $taikhoan);
            return $kq;
        }

        public function Pass($id){
            $pass = "SELECT PASS FROM taikhoan where MATK = $id";
            $kq = mysqli_query($this->con, $pass);
            return $kq;
        }

        public function CHUCVU(){
            $cv = "SELECT * FROM chucvu";
            $kq = mysqli_query($this->con, $cv);
            return $kq;
        }

        public function MAKH(){
            $makh = "SELECT MAKH, TENKH FROM khachhang";
            $kq = mysqli_query($this->con, $makh);
            return $kq;
        }

        public function MANV(){
            $manv = "SELECT MANV, TENNV FROM nhanvien";
            $kq = mysqli_query($this->con, $manv);
            return $kq;
        }

        public function CHECKTAIKHOAN($email,$pass){
            $so = 0;
            $taikhoan = "SELECT * FROM taikhoan WHERE email='$email'";
            $query = mysqli_query($this->con, $taikhoan);
            $data = mysqli_fetch_assoc($query);
            $checkEmail = mysqli_num_rows($query);
            if( $checkEmail == 1 ){
               $checkPass =  password_verify($pass, $data['PASS']);
               if ( $checkPass == true )
               {
                   if ($data["MACV"] != 2){
                       $so = 1;
                   }else{
                       if ($data["masothue"] == null || $data["masothue"] == ""){
                           $so = 0;
                       }else{
                           $so = 1;
                       }
                   }
               }
            }else{
                $so = 0;
            }
            return $so;
        }
        public function checkMail($email){
            $matkhoan = "SELECT * FROM taikhoan where email = '$email'";
            $kq = mysqli_query($this->con, $matkhoan);
            return $kq;
        }
        public function checkquyen($email){
                $cv = "SELECT * FROM taikhoan WHERE email='$email'";
                $kq2 = mysqli_query($this->con, $cv);
                $row= mysqli_fetch_assoc($kq2);
                return $row['MACV'];
            }
        public function checkdangky($user,$email,$password,$repassword, $phone, $macv){
            $so=1;
            if( $password != $repassword || $user =="" || $password == "" || $repassword =="" || $email =="" || $phone == "")
            {
                $so=0;
            }else{
                $TKHOAN = "SELECT * FROM taikhoan WHERE phone ='$phone' ";
                $kq2 = mysqli_query($this->con, $TKHOAN);
                $kq3 = mysqli_num_rows($kq2);
                if ($kq3 > 0){
                    $so=0;
                }
            }

            $password = password_hash($password, PASSWORD_DEFAULT);
            if ( $so == 1   )
            {
                if ($macv == 2){
                    $sql = "INSERT INTO taikhoan (TENTK,PASS,MACV,EMAIL,phone) VALUES ('$user','$password',$macv,'$email','$phone')";
                }else{
                    $sql = "INSERT INTO taikhoan (TENTK,PASS,MACV,EMAIL,phone) VALUES ('$user','$password',$macv,'$email','$phone')";
                }
                if ( mysqli_query($this->con,$sql) === TRUE ){
                    echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
                }else{
                    echo "Lỗi".$sql."<br>".mysqli_error($this->con);
                }
            }
            return $so;
        }

        function themtk($TENTK,$PASS,$MACV,$EMAIL){
            $sql = "INSERT INTO taikhoan (TENTK,PASS,MACV,EMAIL)
                    VALUES ('$TENTK', '$PASS' , $MACV, '$EMAIL')";
            if ( mysqli_query($this->con, $sql) === TRUE ){
                echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
            }else{
                echo "Lỗi".$sql."<br>".mysqli_error($this->con);
            }
        }

        function suatk($id,$TENTK, $PASS,$MACV,$EMAIL){
            $sql = "UPDATE taikhoan SET TENTK = '$TENTK',
            PASS = '$PASS', MACV = $MACV , EMAIL = '$EMAIL' WHERE MATK = $id";
            if ( mysqli_query($this->con, $sql) === TRUE ){
                echo "<script type='text/javascript'>alert('Sửa thành công');</script>";
            }else{
                echo "Lỗi".$sql."<br>".mysqli_error($this->con);
            }
        }
        function suatknhatuyendung($id,$TENTK, $PASS,$MACV,$EMAIL,$masothue){


            $sql = "UPDATE taikhoan SET TENTK = '$TENTK',
            PASS = '$PASS', MACV = $MACV , EMAIL = '$EMAIL', masothue = '$masothue' WHERE MATK = $id";
            if ( mysqli_query($this->con, $sql) === TRUE ){
                echo "<script type='text/javascript'>alert('Sửa thành công');</script>";
            }else{
                echo "Lỗi".$sql."<br>".mysqli_error($this->con);
            }
        }
        function xoatk($id){
            $sql = "DELETE FROM taikhoan where MATK = $id";
            if ( mysqli_query($this->con, $sql) === TRUE ){
                echo "<script type='text/javascript'>alert('Xóa thành công');</script>";
            }else{
                echo "Lỗi".$sql."<br>".mysqli_error($this->con);
            }
        }

    }
?>
