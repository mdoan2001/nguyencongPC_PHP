<?php
class test extends Controller{
    

    function __construct()
    {
       
    }

    public function Show(){
        $this->view("user", "test", [
            "data"=>$_POST["sanpham"]
        ]);
    }

}
?>