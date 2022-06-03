<?php
class Controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($loaiTaiKhoan, $view, $data=[]){
        if($loaiTaiKhoan == "admin"){
            require_once "./mvc/views/".$view.".php";
        }
        else
            require_once "../nguyencongpc/public/".$view.".php";
        }
    }
?>