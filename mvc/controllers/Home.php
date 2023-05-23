<?php
    class Home extends Controller{
        function TrangChu(){
            $dataModelUser = $this->model("DataModelUser");
            $posts = $dataModelUser->getPostUser();
            $categories = $dataModelUser->getCatagoryUser();
            $top4Category = $dataModelUser->getTop4Category();
            $this->view("TrangChuView", [
                "Page"=>"trangchu",
                "Posts"=>$posts,
                "Categorys"=>$categories,
                "top4Category"=>$top4Category
            ]);
        }
    }
?>
