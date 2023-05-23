<?php

class DataModelUser extends DB
{
    public function getPostUser(){
        $post = "SELECT * FROM post inner join taikhoan on taikhoan.MATK = post.id_user_company";
        $kq = mysqli_query($this->con, $post);
        return $kq;
    }

    public function getCatagoryUser(){
        $post = "SELECT * FROM category";
        $kq = mysqli_query($this->con, $post);
        return $kq;
    }

    public function getTop4Category(){
        $post = "SELECT * FROM category limit 4";
        $kq = mysqli_query($this->con, $post);
        return $kq;
    }
}
