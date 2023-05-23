<?php
    class SanPhamModel extends DB {
        public function thuonghieu(){
            $th = "SELECT * FROM brands";
            $kq2 = mysqli_query($this->con, $th);
            return $kq2;
        }
        public function ALL(){
            $all = "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id ";
            $kq2 = mysqli_query($this->con, $all);
            return $kq2;
        }
//-----------------------------------------------------------------Trang chu-----------------------------------------------
        public function sieusale(){
            $all = "SELECT * FROM khuyenmai inner join products on products.prd_id = khuyenmai.prd_id where DATE(NOW()) < ngaykt && DATE(NOW()) > ngaybd ";
            $kq2 = mysqli_query($this->con, $all);
            return $kq2;
        }

        public function sanphamnoibac(){
            $all = "SELECT * from products ORDER by price DESC";
            $kq2 = mysqli_query($this->con, $all);
            return $kq2;
        }

        public function sanphammoi(){
            $sql = "SELECT * FROM products ORDER BY ngaynhap DESC";
            $kq2 = mysqli_query($this->con, $sql);
            return $kq2;
        }

        public function ALL3($ma){
            $all = "SELECT * FROM products  inner join brands on products.brand_id = brands.brand_id where products.brand_id = $ma  ";
            $kq2 = mysqli_query($this->con, $all);
            return $kq2;
        }
        public function ALL4($ma){
            $all = "SELECT * FROM products  inner join brands on products.brand_id = brands.brand_id where products.brand_id = $ma  ";
            $kq2 = mysqli_query($this->con, $all);
            return $kq2;
        }

        public function gh($email){
            $al = "SELECT * FROM giohang where email = '$email'";
            return mysqli_query($this->con, $al);
        }

        public function ALLDT(){
            $alldt = "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id where products.maloai=1";
            return mysqli_query($this->con, $alldt);
        }
        public function ALLLT(){
            $alllt = "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id where products.maloai=2 ";
            return mysqli_query($this->con, $alllt);
        }
        function chitet($ma){
            $thongtinsp = "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id where products.prd_id = '" .$ma."'";
            return mysqli_query($this->con, $thongtinsp);
        }
        function chitet2($ma){
            $thongtinsp = "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id where products.prd_id = '" .$ma."'";
            return mysqli_query($this->con, $thongtinsp);
        }
        function ten($ma){
            $ten = "SELECT prd_name from products where products.prd_id = '" .$ma."'";
            return mysqli_query($this->con, $ten);
        }
        function hinhanh($ma){
            $sql = "SELECT hinhanh.image FROM hinhanh inner join products on products.prd_id = hinhanh.prd_id where hinhanh.prd_id = '$ma'";
            return mysqli_query($this->con, $sql);
        }
        function chitiethinhanh($ma){
            $sql = "SELECT * FROM chitiethinhanh where prd_id = '$ma'";
            return mysqli_query($this->con, $sql);
        }

        function Anh($ma){
            $anh = "SELECT image from products where products.prd_id = '" .$ma."'";
            return mysqli_query($this->con, $anh);
        }

        public function sp($id){
            $all = "SELECT * FROM products where prd_id = $id ";
            $kq2 = mysqli_query($this->con, $all);
            return $kq2;
        }

        public function sp2($id){
            $all = "SELECT * FROM products where prd_id = $id ";
            $kq2 = mysqli_query($this->con, $all);
            return mysqli_fetch_assoc($kq2);
        }

//-----------------------------------------------------gio hang------------------------------------        
        function themgiohang($ma, $SL, $gia, $tonggia,$email,$ngaytao,$image,$tensp){
            $sql = "INSERT INTO giohang (prd_id, SL, GIA, TONGGIA, EMAIL,NGTAO,img,tensp)
            VALUES ($ma, $SL, $gia, $tonggia, '$email','$ngaytao','$image','$tensp')";
            mysqli_query($this->con, $sql);
        }

        public function imggiohang($ma){
            $all = "SELECT * FROM products where prd_id = $ma ";
            $kq2 = mysqli_query($this->con, $all);
            return $kq2;
        }

        function xoagiohang($ma){
            $sql = "DELETE FROM giohang where MAGIO = $ma";
            return mysqli_query($this->con, $sql);
        }
        

        function themsp($prd_name, $image, $price, $quantity, $description, $brand_id){
            $sql = "INSERT INTO products (prd_name, image, price, quantity, description, brand_id)
                    VALUES ('$prd_name', '$image', $price, $quantity, '$description', $brand_id)";
            if ( mysqli_query($this->con, $sql) === TRUE ){
                echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
            }else{
                echo "Lỗi".$sql."<br>".mysqli_error($this->con);
            }
            // move_uploaded_file($image_tmp, 'img/'.$image);
        }

        function suasp($id, $prd_name, $image, $price, $quantity, $description, $brand_id){
            
            
            $sql = "UPDATE products SET prd_name = '$prd_name', image = '$image',
            price = $price, quantity = $quantity, description = '$description' , brand_id = $brand_id WHERE prd_id = $id";
            if ( mysqli_query($this->con, $sql) === TRUE ){
                echo "<script type='text/javascript'>alert('Sửa thành công');</script>";
            }else{
                echo "Lỗi".$sql."<br>".mysqli_error($this->con);
            }
            // move_uploaded_file($image_tmp, 'img/'.$image);
        }

        function xoasp($id){
            $sql = "DELETE FROM products where prd_id = $id";
            if ( mysqli_query($this->con, $sql) === TRUE ){
                echo "<script type='text/javascript'>alert('Xóa thành công');</script>";
            }else{
                echo "Lỗi".$sql."<br>".mysqli_error($this->con);
            }
        }
        function timkiem($search){
            $query = "select * from products where prd_name like '%$search%'";
            return mysqli_query($this->con, $query);
        }
        
        
//-------------------------------------------------------hoa don------------------------------------------------
        
        function tongtien($a){
            $sql = "SELECT SUM(TONGGIA) FROM giohang WHERE email = '$a'";
            return mysqli_query($this->con, $sql);
        }
        function hoadon($date, $email , $sdt,  $trigia, $diachi, $yeucau){
            $sql = "INSERT INTO hoadon (NGHD, EMAIL, TRIGIA, diachi, yeucaukhac, sodienthoai,tinhtrangdonhang)
                    VALUES ('$date', '$email', $trigia, '$diachi', '$yeucau', '$sdt',2)";
            return mysqli_query($this->con, $sql);
        }
        function hoadon2($date, $email , $sdt,  $trigia, $diachi, $yeucau, $ttdh){
            $sql = "INSERT INTO hoadon (NGHD, EMAIL, TRIGIA, diachi, yeucaukhac, sodienthoai,tinhtrangdonhang)
                    VALUES ('$date', '$email', $trigia, '$diachi', '$yeucau', '$sdt','$ttdh')";
            return mysqli_query($this->con, $sql);
        }
        function hoadon3($date,  $sdt,  $trigia, $diachi, $yeucau){
            $sql = "INSERT INTO hoadon (NGHD,  TRIGIA, diachi, yeucaukhac, sodienthoai,tinhtrangdonhang)
                    VALUES ('$date',  $trigia, '$diachi', '$yeucau', '$sdt','chưa')";
            return mysqli_query($this->con, $sql);
        }

        function xemhoadon(){
            $sql = "SELECT * FROM hoadon";
            return mysqli_query($this->con, $sql);
        }
        function xemhoadonid($SOHD){
            $sql = "SELECT * FROM hoadon where SOHD = $SOHD";
            return mysqli_query($this->con, $sql);
        }
        function xemhoadonemail($email){
            $sql = "SELECT * FROM hoadon where EMAIL = '$email'";
            return mysqli_query($this->con, $sql);
        }
        function suahd($SOHD,$NGHD,$EMAIL,$TRIGIA,$DIACHI,$YCK,$TTDH,$SDT){
            
            
            $sql = "UPDATE hoadon SET NGHD = '$NGHD',
            EMAIL = '$EMAIL', TRIGIA = $TRIGIA , diachi = '$DIACHI' , yeucaukhac = '$YCK', tinhtrangdonhang = '$TTDH', sodienthoai = '$SDT'  WHERE SOHD = $SOHD";
            if ( mysqli_query($this->con, $sql) === TRUE ){
                echo "<script type='text/javascript'>alert('Sửa thành công');</script>";
            }else{
                echo "Lỗi".$sql."<br>".mysqli_error($this->con);
            }
        }
        function xoahd($SOHD){
            $sql = "DELETE FROM hoadon where SOHD = $SOHD";
            if ( mysqli_query($this->con, $sql) === TRUE ){
                echo "<script type='text/javascript'>alert('Xóa thành công');</script>";
            }else{
                echo "Lỗi".$sql."<br>".mysqli_error($this->con);
            }
        }
        
        function kiemtrakhachhang($sdt){
            $so = 0;
            $sql = "SELECT * FROM khachhang where SDT = $sdt";
            $query = mysqli_query($this->con, $sql);
            $data = mysqli_fetch_assoc($query);
            $checkkhachhang = mysqli_num_rows($query);
            if( $checkkhachhang == 1 ){
                $so = 1;
            }else{
                $so = 0;
            }
            return $so;
        }

        function themkhachhang($ht,$sdt,$gioitinh){
            $sql = "INSERT INTO khachhang (TENKH, SDT, gioitinh)
            VALUES ('$ht', $sdt, '$gioitinh')";
            mysqli_query($this->con, $sql);
        }
    }
?>