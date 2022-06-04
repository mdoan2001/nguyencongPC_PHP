<?php
class Home extends Controller{
    // NGUYEN MINH DOAN HIHI

    private $nsxModel;
    private $nsx = array();
    public function __construct()
    {
        
        //Kiem tra dang nhap
        // if($_POST["login"]==false){
        //     header('Location: http://localhost/nguyencongpc/');                                   
        // }

        $this->nsxModel = $this->model("NSXModel");
        // NSX
        $list = $this->nsxModel->GetList();
        while($item = mysqli_fetch_assoc($list)){
            array_push($this->nsx, $item);
        }

        if(!isset($_SESSION["loaiTaiKhoan"]))
            $_SESSION["loaiTaiKhoan"] = 1;
    }

    public function Show(){
        $sp = $this->model("SanPhamModel");
        $arr1 = array();
        $arr = array();
        $list = $sp->GetList();
        while($item = mysqli_fetch_assoc($list)){
            array_push($arr, $item);
            $arr1[$item["tenNSX"]][] = $item;
        }


        if($_SESSION["loaiTaiKhoan"] == 1){             
            $this->view("user","Layout", [
                "page"=>"Home",
                "array"=>$arr1,
                "nsx"=>$this->nsx,
                "title"=>"Máy tính Nguyễn Công"
            ]);
        }
        else{
            $this->view("admin","Layout", [
                "page"=>"SanPham",
                "array"=>$arr,
                "nsx"=>$this->nsx
            ]);
        }
                
    }
    
}
?>