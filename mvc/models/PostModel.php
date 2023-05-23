<?php

class PostModel extends DB
{
    public function getPost(){
       if (isset($_SESSION["quyen"])){
           if ($_SESSION["quyen"] != "nhatuyendung"){
               $post = "SELECT * FROM post inner join taikhoan on taikhoan.MATK = post.id_user_company";
               $kq = mysqli_query($this->con, $post);
               return $kq;
           }else{
               $id = $_SESSION["id"];
               $post = "SELECT * FROM post inner join taikhoan on taikhoan.MATK = post.	id_user_company where id_user_company = $id";
               $kq = mysqli_query($this->con, $post);
               return $kq;
           }
       }
    }

    public function getPostId($id){
        $post = "SELECT * FROM post inner join taikhoan on taikhoan.MATK = post.id_user_company where id_post = $id";
        $kq = mysqli_query($this->con, $post);
        return $kq;
    }


    public function getCompany(){
        $company = "SELECT * FROM taikhoan  where macv = 2";
        $kq = mysqli_query($this->con, $company);
        return $kq;
    }

    public function addPost($id_company, $id_u_created, $name, $title, $description, $arrCate, $position, $city, $district, $wards, $job_native, $salary, $thumb ){
        $sql = "INSERT INTO post (id_user_company, id_user_created, name, title, description, list_tag, position, city, district, wards, job_native, salary, thumb)
                    VALUES ($id_company, $id_u_created,'$name', '$title', '$description', '$arrCate', '$position', $city, $district, $wards,'$job_native', '$salary', '$thumb')";
        if ( mysqli_query($this->con, $sql) === TRUE ){
            echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
            return true;
        }else{
            echo "Lỗi".$sql."<br>".mysqli_error($this->con);
            return false;
        }
    }

    public function delPost($id){
        $company = "DELETE from post where id_post = $id";
        $kq = mysqli_query($this->con, $company);
        if ( $kq === TRUE ){
            echo "<script type='text/javascript'>alert('Xóa thành công');</script>";
            return true;
        }else{
            echo "Lỗi".$company."<br>".mysqli_error($this->con);
            return false;
        }
    }

    public function editPost($id, $company, $id_created, $name, $title, $description, $arrCate, $location, $job_native, $salary, $thumb){
        $sql = "UPDATE post SET id_user_company = $company, id_user_created = $id_created,
                                name = '$name',  title = '$title', description = '$description',
                                list_tag = '$arrCate', location = '$location', job_native = '$job_native',
                                salary = '$salary', thumb = '$thumb'
            WHERE id_post = $id";
        if ( mysqli_query($this->con, $sql) === TRUE ){
            echo "<script type='text/javascript'>alert('Sửa thành công');</script>";
            return true;
        }else{
            echo "Lỗi".$sql."<br>".mysqli_error($this->con);
            return false;
        }
    }
}
