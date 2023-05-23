<?php
    class Quantri extends Controller {
        function TrangChu(){
            if($_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="admin" || $_SESSION['quyen']=="nhatuyendung"){
                $dn = $this->model("DangNhapModel");
                $sp = $this->model("SanPhamModel");
                $tk = $dn->TAIKHOAN();
                $this->view("QuanTriView", [
                "Page1"=>"quanlitaikhoan",
                "tk"=>$dn->TAIKHOAN(),
                "Page"=>"thongke",
                "Page2"=>"danhsach",
                "Page3"=>"them",
                "Page4"=>"xoa",
                "Page5"=>"sua",
                "sql"=>$sp->ALL(),
                "sql2"=>$sp->thuonghieu()
                ]);
            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }
        function Quanlitaikhoan(){
            if($_SESSION['quyen']=="admin"){
                $dn = $this->model("DangNhapModel");
                $tk = $dn->TAIKHOAN();
                $this->view("QuanTriView", [
                    "Page"=>"quanlitaikhoan",
                    "tk"=>$tk
                ]);
            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }
        function Nhanvien(){
            if($_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="admin" ){
                $dn = $this->model("DangNhapModel");
                $sp = $this->model("SanPhamModel");
                $this->view("QuanTriView", [
                "Page"=>"nhanvien",
                "Page2"=>"danhsach",
                "Page3"=>"them",
                "Page4"=>"xoa",
                "Page5"=>"sua",
                "sql"=>$sp->ALL(),
                "sql2"=>$sp->thuonghieu()
                ]);
            }
            else {
                header("location: http://localhost:8080/BaoCao/Login");
            }

        }
        function Them(){
            if($_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="admin" ){
                $dn = $this->model("DangNhapModel");
                $sp = $this->model("SanPhamModel");
                $this->view("QuanTriView", [
                "Page"=>"them",
                "sql"=>$sp->ALL(),
                "sql2"=>$sp->thuonghieu()
                ]);
            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }
        function Kiemtrathem(){
            if($_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="admin"){
                $sp = $this->model("SanPhamModel");
                if( isset($_POST['sbm']) ){
                    $prd_name = $_POST['prd_name'];
                    $image = $_FILES['image']['name'];
                    $image_tmp = $_FILES['image']['tmp_name'];
                    $price = $_POST['price'];
                    $quantity = $_POST['quantity'];
                    $description = $_POST['description'];
                    $brand_id = $_POST['brand_id'];

                    $so = $sp->themsp($prd_name,$image,$price,$quantity,$description,$brand_id);


                    header('location: http://localhost:8080/BaoCao/QUANTRI/Nhanvien');
                }
            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }

        }
        function xoa($id){
            if($_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="admin"){
                $dn = $this->model("DangNhapModel");
                $sp = $this->model("SanPhamModel");

                $xoa = $sp->xoasp($id);

                header('location: http://localhost:8080/BaoCao/QUANTRI/Nhanvien');
            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }

        }
        function sua($id){
            if($_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="admin"){
                $dn = $this->model("DangNhapModel");
                $sp = $this->model("SanPhamModel");
                $this->view("QuanTriView", [
                "Page"=>"sua",
                "sql"=>$sp->sp($id),
                "sql2"=>$sp->thuonghieu(),
                "id"=>$id
                ]);
            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }
        function Kiemtrasua($id){
            if($_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="admin"){
                $dn = $this->model("DangNhapModel");
                $sp = $this->model("SanPhamModel");

                $row_up = $sp->sp2($id);

                if( isset($_POST['sbm']) ){
                    $prd_name = $_POST['prd_name'];

                    if($_FILES['image']['name'] == ""){
                        $image = $row_up['image'];
                    }else{
                        $image = $_FILES['image']['name'];
                        $image_tmp = $_FILES['image']['tmp_name'];
                        move_uploaded_file($image_tmp, 'img/'.$image);
                    }

                    $price = $_POST['price'];
                    $quantity = $_POST['quantity'];
                    $description = $_POST['description'];
                    $brand_id = $_POST['brand_id'];

                    $so = $sp->suasp($id, $prd_name,$image,$price,$quantity,$description,$brand_id);
                    header('location: http://localhost:8080/BaoCao/QUANTRI/Nhanvien');
                }

            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }

        }


        // -----------------------

        function Themtk(){
            if($_SESSION['quyen']=="admin"){
                $dn = $this->model("DangNhapModel");
                $this->view("QuanTriView", [
                "Page"=>"themtk",
                "sql"=>$dn->CHUCVU(),
                "sql2"=>$dn->MANV()
                ]);
            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }

        function Kiemtrathemtk(){
            if($_SESSION['quyen']=="admin"){
                $dn = $this->model("DangNhapModel");
                if( isset($_POST['sbm']) ){
                    $TENTK = $_POST['TENTK'];
                    $PASS = $_POST['PASS'];
                    $PASS = password_hash($PASS, PASSWORD_DEFAULT);
                    // $MANV = $_POST['MANV'];
                    $MACV = $_POST['MACV'];
                    $EMAIL = $_POST['EMAIL'];
                    $so = $dn->themtk($TENTK,$PASS,$MACV,$EMAIL);
                    header('location: http://localhost:8080/BaoCao/QUANTRI/Quanlitaikhoan');
                }
            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }

        function Suatk($id){
            if($_SESSION['quyen']=="admin"){
                $dn = $this->model("DangNhapModel");
                $this->view("QuanTriView", [
                "Page"=>"suatk",
                "sql"=>$dn->Tk($id),
                "sql2"=>$dn->CHUCVU(),
                "sql3"=>$dn->MANV(),
                "sql4"=>$dn->MAKH(),
                "id"=>$id
                ]);
            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }
        function Kiemtrasuatk($id){
            if($_SESSION['quyen']=="admin"){
                $dn = $this->model("DangNhapModel");
                $pw = $dn->Pass($id);
                if( isset($_POST['sbm']) ){
                    $TENTK = $_POST['TENTK'];

                    $PASS = $_POST['PASS'];
                    if( $PASS != $pw )
                    {
                        $PASS = password_hash($PASS, PASSWORD_DEFAULT);
                    }
                    

                    $MACV = $_POST['MACV'];

                    $EMAIL = $_POST['EMAIL'];
                    if(isset($_POST['masothue'])){
                        $so = $dn->suatknhatuyendung($id,$TENTK,$PASS,$MACV,$EMAIL,$_POST['masothue']);
                    }else{
                        $so = $dn->suatk($id,$TENTK, $PASS,$MACV,$EMAIL);
                    }

                    header('location: http://localhost:8080/BaoCao/QUANTRI/Quanlitaikhoan');
                }

            }else {
                header("location: http://localhost:8080/BaoCao/Login/");
            }
        }
        function xoatk($id){
            if($_SESSION['quyen']=="admin"){
                $dn = $this->model("DangNhapModel");
                $xoa = $dn->xoatk($id);

                header('location: http://localhost:8080/BaoCao/QUANTRI/Quanlitaikhoan');
            }else {
                header("location: http://localhost:8080/BaoCao/Login/");
            }
        }

        function Quanlihoadon(){
            if($_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="admin" ){
                $dn = $this->model("DangNhapModel");
                $sp = $this->model("SanPhamModel");
                $this->view("QuanTriView", [
                "Page"=>"quanlihoadon",
                "sql"=>$sp->xemhoadon(),
                "Page3"=>"them",
                "Page4"=>"xoa",
                "Page5"=>"sua"
                ]);
            }
            else {
                header("location: http://localhost:8080/BaoCao/Login/");
            }
        }
        function Themhd(){
            if($_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="admin" ){
                $dn = $this->model("DangNhapModel");
                $this->view("QuanTriView", [
                "Page"=>"themhd"
                ]);
            }else {
                header("location: http://localhost:8080/BaoCao/Login/");
            }
        }

        function Kiemtrathemhd(){
            if($_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="admin" ){
                $dn = $this->model("DangNhapModel");
                $x = $this->model("SanPhamModel");
                if( isset($_POST['submit']) ){

                    $gt = $_POST["optradio"];
                    if(isset($_POST['optradio'])){
                        $gt = $_POST["optradio"];
                    }else {
                        $gt = false;
                    }

                    if($gt == "male"){
                        $gioitinh = "Nam";
                    }else{
                        $gioitinh = "Nữ";
                    }

                    $ht = $_POST["ht"];
                    $sdt = $_POST["sdt"];

                    $diachi = $_POST["optradio2"];
                    if(isset($_POST['optradio2'])){
                        $diachi = $_POST["optradio2"];
                    }else {
                        $diachi = false;
                    }

                    if($diachi == "gtn"){
                        $diachi = "Giao tận nơi";
                    }else{
                        $diachi = "Nhận tại siêu thị";
                    }
                    $sdt = $_POST["sdt"];
                    $trigia = $_POST["trigia"];

                    $trigia = (int)$trigia;

                    $date = date('Y-m-d H:i:s');
                    $email = $_POST["email"];
                    $yeucau = $_POST["yck"];
                    $ttdh = $_POST["ttdh"];
                    $x->hoadon2($date, $email, $sdt, $trigia, $diachi, $yeucau,$ttdh);
                    header('location: http://localhost:8080/BaoCao/QUANTRI/Quanlihoadon');
                }
            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }
        function suahd($SOHD){
            if($_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="admin" ){
                $dn = $this->model("DangNhapModel");
                $sp = $this->model("SanPhamModel");
                $this->view("QuanTriView", [
                "Page"=>"suahd",
                "sql"=>$sp->xemhoadonid($SOHD),
                "SOHD"=>$SOHD
                ]);
            }else {
                header("location: http://localhost:8080/BaoCao/Login/");
            }
        }
        function Kiemtrasuahd($SOHD){
            if($_SESSION['quyen']=="admin" ||  $_SESSION['quyen']=="nhanvien" ){
                $dn = $this->model("DangNhapModel");
                $sp = $this->model("SanPhamModel");
                if( isset($_POST['sbm']) ){
                    $NGHD = $_POST['NGHD'];

                    $EMAIL = $_POST['EMAIL'];

                    $TRIGIA = $_POST['TRIGIA'];

                    $DIACHI = $_POST['DIACHI'];
                    $YCK = $_POST['YCK'];

                    $TTDH = $_POST['TTDH'];
                    $SDT = $_POST['SDT'];
                    $sp->suahd($SOHD,$NGHD,$EMAIL,$TRIGIA,$DIACHI,$YCK,$TTDH,$SDT);
                    header('location: http://localhost:8080/BaoCao/QUANTRI/Quanlihoadon');
                }

            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }

        function xoahd($SOHD){
            $sp = $this->model("SanPhamModel");
            if($_SESSION['quyen']=="admin" ||  $_SESSION['quyen']=="nhanvien" ){
                $sp->xoahd($SOHD);
            }
            header("location: http://localhost:8080/BaoCao/QUANTRI/Quanlihoadon");
        }



        //----------------------------------Category--------------------------------------
        function Category(){
            $category = $this->model("CategoryModel");
            if($_SESSION['quyen']=="admin" ||  $_SESSION['quyen']=="nhanvien" ){
                $result = $category->getCategory();
                $this->view("QuanTriView", [
                    "Page"=>"listCategory",
                    "Category"=>$result
                ]);
            }else{
                header("location: http://localhost:8080/BaoCao/Login/");
            }





        }
        function addCategory(){
            if($_SESSION['quyen']=="admin" ||  $_SESSION['quyen']=="nhanvien" ){
                $this->view("QuanTriView", [
                    "Page"=>"addCategory"
                ]);
            }else{
                header("location: http://localhost:8080/BaoCao/Login/");
            }
        }

        function checkAddCategory(){
            if($_SESSION['quyen']=="admin" || $_SESSION['quyen']=="nhanvien" ){
                $category = $this->model("CategoryModel");
                if( isset($_POST['sbm']) ){
                    if ($_POST['name'] != "null"){
                        $name = $_POST['name'];
                        $category->addCategory($name);
                        header('location: http://localhost:8080/BaoCao/QUANTRI/Category');
                    }else {
                        header("location: http://localhost:8080/BaoCao/Login");
                    }
                }

            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }

        function editCategory($id){
            if($_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="admin"){
                $category = $this->model("CategoryModel");
                $this->view("QuanTriView", [
                    "Page"=>"editCategory",
                    "sql"=>$category->getIdCategory($id),
                    "id"=>$id
                ]);
            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }

        function checkEditCategory($id){
            if($_SESSION['quyen']=="admin" || $_SESSION['quyen']=="nhanvien" ){
                $category = $this->model("CategoryModel");
                if( isset($_POST['sbm']) ){
                    if ($_POST['name'] != "null"){
                        $name = $_POST['name'];
                        $category->editCategory($id,$name);
                        header('location: http://localhost:8080/BaoCao/QUANTRI/Category');
                    }else {
                        header("location: http://localhost:8080/BaoCao/Login");
                    }
                }

            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }

        function delCategory($id){
            if($_SESSION['quyen']=="admin" || $_SESSION['quyen']=="nhanvien" ){
                $category = $this->model("CategoryModel");
                $delCategory = $category->delCategory($id);
                if ($delCategory){
                    header('location: http://localhost:8080/BaoCao/QUANTRI/Category');
                }else{
                    header("location: http://localhost:8080/BaoCao/Login");
                }
            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }

        //-------------------------------------Post------------------------------
        function Post(){
            $post = $this->model("PostModel");
            if($_SESSION['quyen']=="admin" ||  $_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="nhatuyendung"){
                $result = $post->getPost();
                $this->view("QuanTriView", [
                    "Page"=>"listPost",
                    "Post"=>$result
                ]);
            }else{
                header("location: http://localhost:8080/BaoCao/Login/");
            }
        }

        function addPost(){
            $post = $this->model("PostModel");
            $categories = $this->model("CategoryModel");
            if($_SESSION['quyen']=="admin" ||  $_SESSION['quyen']=="nhanvien" ||  $_SESSION['quyen']=="nhatuyendung"){
                $category = $categories->getCategory();
                $company = $post->getCompany();
                $this->view("QuanTriView", [
                    "Page"=>"addPost",
                    "Category"=>$category,
                    "Company"=>$company
                ]);
            }else{
                header("location: http://localhost:8080/BaoCao/Login/");
            }
        }

        function checkAddPost(){
            if($_SESSION['quyen']=="admin" || $_SESSION['quyen']=="nhanvien" || $_SESSION["quyen"] == "nhatuyendung"){
                $category = $this->model("CategoryModel");
                $post = $this->model("PostModel");
                if( isset($_POST['sbm']) ){
                    if ($_POST['name'] != "null" && isset($_POST["cate"])){
                        $arrCate= array();
                        for ($i= 0; $i < count($_POST["cate"]); $i++){
                            array_push($arrCate, $_POST["cate"][$i]);
                        }
                        $arrCate = implode(",",$arrCate);


                        $target_dir = "public/uploads/";
                        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                        if ($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }

                        // Check file size
                        if ($_FILES["fileToUpload"]["size"] > 500000) {
                            echo "Sorry, your file is too large.";
                            $uploadOk = 0;
                        }

                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif" ) {
                            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }

                        // Check if $uploadOk is set to 0 by an error
                        if ($uploadOk == 0) {
                            echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                        } else {
                            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                            } else {
                                echo "Sorry, there was an error uploading your file.";
                            }
                        }


                        $name = $_POST['name'];
                        $title = $_POST['title'];
                        $description = $_POST['description'];
                        $salary = $_POST['salary'];
                        $company = $_POST['company'];
                        $job_native = $_POST['job_native'];
                        $position = $_POST['position'];
                        $city = $_POST['city'];
                        $district = $_POST['district'];
                        $wards = $_POST['wards'];
                        $thumb = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
                        $id_created = $_SESSION["MATK"];
                        $result =  $post->addPost($company, $id_created, $name, $title, $description, $arrCate, $position, $city, $district, $wards, $job_native, $salary, $thumb);
                        if ($result){
                            header("location: http://localhost:8080/BaoCao/QUANTRI/Post");
                        }else{
                            header("location: http://localhost:8080/BaoCao/QUANTRI/addPost");
                        }

                    }else {
                        header("location: http://localhost:8080/BaoCao/Login");
                    }
                }

            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }

        function editPost($id){
            $post = $this->model("PostModel");
            $categories = $this->model("CategoryModel");
            if($_SESSION['quyen']=="admin" ||  $_SESSION['quyen']=="nhanvien" ||  $_SESSION['quyen']=="nhatuyendung"){
                $category = $categories->getCategory();
                $company = $post->getCompany();
                $postId = $post->getPostId($id);
                $this->view("QuanTriView", [
                    "Page"=>"editPost",
                    "Category"=>$category,
                    "Company"=>$company,
                    "PostId"=>$postId
                ]);
            }else{
                header("location: http://localhost:8080/BaoCao/Login/");
            }
        }

        function checkEditPost($id){
            if($_SESSION['quyen']=="admin" || $_SESSION['quyen']=="nhanvien" || $_SESSION["quyen"] == "nhatuyendung"){
                $category = $this->model("CategoryModel");
                $post = $this->model("PostModel");
                if( isset($_POST['sbm']) ){
                    if ($_POST['name'] != "null" && isset($_POST["cate"])){
                        $arrCate= array();
                        for ($i= 0; $i < count($_POST["cate"]); $i++){
                            array_push($arrCate, $_POST["cate"][$i]);
                        }
                        $arrCate = implode(",",$arrCate);

                        $row_up = mysqli_fetch_assoc($post->getPostId($id));

                        if($_FILES['fileToUpload']['name'] == ""){
                            $thumb = $row_up['thumb'];
                        }else{
                            $target_dir = "public/uploads/";
                            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                            if ($check !== false) {
                                echo "File is an image - " . $check["mime"] . ".";
                                $uploadOk = 1;
                            } else {
                                echo "File is not an image.";
                                $uploadOk = 0;
                            }

                            // Check file size
                            if ($_FILES["fileToUpload"]["size"] > 500000) {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }

                            // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "gif" ) {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }

                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
                                // if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            }
                            $thumb = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
                        }

                        $name = $_POST['name'];
                        $title = $_POST['title'];
                        $description = $_POST['description'];
                        $salary = $_POST['salary'];
                        $company = $_POST['company'];
                        $job_native = $_POST['job_native'];
                        $location = $_POST['location'];
                        $id_created = $_SESSION["MATK"];
                        $result =  $post->editPost($id, $company, $id_created, $name, $title, $description, $arrCate, $location, $job_native, $salary, $thumb);
                        if ($result){
                            header("location: http://localhost:8080/BaoCao/QUANTRI/Post");
                        }else{
                            header("location: http://localhost:8080/BaoCao/QUANTRI/editPost/$id");
                        }

                    }else {
                        header("location: http://localhost:8080/BaoCao/Login");
                    }
                }

            }else {
                header("location: http://localhost:8080/BaoCao/Login");
            }
        }

        function delPost($id){
            if($_SESSION['quyen']=="admin" || $_SESSION['quyen']=="nhanvien" || $_SESSION["quyen"] == "nhatuyendung"){
                $post = $this->model("PostModel");
                $result = $post->delPost($id);
                if ($result){
                    header("location: http://localhost:8080/BaoCao/QUANTRI/Post");
                }
            }
        }
    }
?>
