<?php
    class App{
        // http://localhost/New/Home/SayHi/1/2/3

        protected $controller = "Home";
        protected $action = "TrangChu" ;
        protected $params = [];

        function __construct(){
            // Array ( [0] => TrangChu [1] => List [2] => 1 [3] => 2 [4] => 3 )
            $arr = $this->UrlProcess();
            //Xử lí controller
            if( isset($arr[0]) ){
                if( file_exists( "./mvc/controllers/".$arr[0].".php" ) ){
                    $this->controller = $arr[0];
                    unset($arr[0]);
                }
            }
            require_once "./mvc/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;

            //Xử lý action
            // Array ([1] => List [2] => 1 [3] => 2 [4] => 3 )
            if( isset($arr[1]) ){
                if( method_exists($this->controller, $arr[1]) ){
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }
            //Xử lý params
            // Array ([2] => 1 [3] => 2 [4] => 3 )
            $this->params = $arr?array_values($arr):[];

            call_user_func_array(array($this->controller,$this->action), $this->params);
        }
        
        function UrlProcess(){
            //cắt chuỗi và bắt lỗi khoảng trắng + kí tự lạ
            if( isset($_GET["url"]) ){
                return explode("/",filter_var(trim($_GET["url"], "/")));
            }
        }
    }
?>