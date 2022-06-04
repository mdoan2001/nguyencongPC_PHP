<?php
class Home extends Controller{
    // NGUYEN MINH DOAN HIHI

    private $nsxModel;
    private $nsx = array();
    private $soLuongSanPham;
    private $loaiTaiKhoan;
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


        if(!empty($_SESSION["email"])){
            //get loai tai khoan
            $modelUser = $this->model("UsersModel");
            $modelUser = $modelUser->GetLoaiTaiKhoan($_SESSION["email"]);
            $this->loaiTaiKhoan = mysqli_fetch_assoc($modelUser);
            $this->loaiTaiKhoan = $this->loaiTaiKhoan["loaiTaiKhoan"];


            $cartModel = $this->model("GioHangModel");      
            $soLuongSanPham = $cartModel->getSoLuongSanPham($_SESSION["email"]);
            $sl = mysqli_fetch_assoc($soLuongSanPham);
            $this->soLuongSanPham = ($sl["soLuong"]!=NULL)?$sl["soLuong"]:0;
        }
        else{
            $this->soLuongSanPham = 0 ;
            $this->loaiTaiKhoan = 1;
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

        if($this->loaiTaiKhoan == 0){      
            $this->view("admin","Layout", [
                "page"=>"SanPham",
                "array"=>$arr,
                "nsx"=>$this->nsx
            ]);            
        }
        else{
            $this->view("user","Layout", [
                "page"=>"Home",
                "array"=>$arr1,
                "nsx"=>$this->nsx,
                "title"=>"Máy tính Nguyễn Công",
                "tongSl"=>$this->soLuongSanPham
            ]);
        }
                
    }
    
}
?>