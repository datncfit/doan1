<?php

class CategoryModel extends DB
{
    public function getCategory(){
        $category = "SELECT * FROM category";
        $kq = mysqli_query($this->con, $category);
        return $kq;
    }

    public function addCategory($name){
        $sql = "INSERT INTO category (name)
                    VALUES ('$name')";
        if ( mysqli_query($this->con, $sql) === TRUE ){
            echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
        }else{
            echo "Lỗi".$sql."<br>".mysqli_error($this->con);
        }
    }

    public function getIdCategory($id){
        $category = "SELECT * FROM category where id_category = $id";
        $kq = mysqli_query($this->con, $category);
        return $kq;
    }

    public function editCategory($id, $name){
        $sql = "UPDATE category SET name = '$name' WHERE id_category = $id";
        if ( mysqli_query($this->con, $sql) === TRUE ){
            echo "<script type='text/javascript'>alert('Sửa thành công');</script>";
        }else{
            echo "Lỗi".$sql."<br>".mysqli_error($this->con);
        }
    }

    public function delCategory($id){
        $sql = "Delete from category WHERE id_category = $id";
        if ( mysqli_query($this->con, $sql) === TRUE ){
            echo "<script type='text/javascript'>alert('Xóa thành công');</script>";
            return true;
        }else{
            echo "Lỗi".$sql."<br>".mysqli_error($this->con);
            return false;
        }
    }
}
