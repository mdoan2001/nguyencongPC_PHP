<?php
class Ajax extends Controller{
    public function Show(){

    }
    public function CheckEmail(){
        if(isset($_POST["email"])){
            $email = $_POST["email"];
            $userModel = $this->model("UsersModel");
            $check = $userModel->CheckEmail($email);
            echo ($check==1)?"true":"false";
        }
    }
}

?>