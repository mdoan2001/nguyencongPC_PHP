<?php
class Home extends Controller{
    // NGUYEN MINH DOAN HIHI

    private $nsxModel;
    private $nsx = array();
    private $soLuongSanPham;
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

        if(empty($_SESSION["loaiTaiKhoan"]) || !isset($_SESSION["loaiTaiKhoan"]))
            $_SESSION["loaiTaiKhoan"] = 1;

        if(!empty($_SESSION["email"])){
            $cartModel = $this->model("GioHangModel");      
            $soLuongSanPham = $cartModel->getSoLuongSanPham($_SESSION["email"]);
            $this->soLuongSanPham = mysqli_fetch_assoc($soLuongSanPham);
            $this->soLuongSanPham = $this->soLuongSanPham["soLuong"];
        }
        else{
            $this->soLuongSanPham = 0 ;
        }
        
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
                "title"=>"Máy tính Nguyễn Công",
                "tongSl"=>$this->soLuongSanPham
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