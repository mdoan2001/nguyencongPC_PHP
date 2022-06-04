<?php

class GioHang extends Controller{

    private $nsxModel;
    private $nsx = array();
    private $cartModel;
    public function __construct()
    {
        $this->cartModel = $this->model("GioHangModel");
        
        //Kiem tra dang nhap
        if($_SESSION["isLogin"]== 0){
            header('Location: http://localhost/nguyencongpc/');                                   
        }

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
        
        $cart = $this->cartModel->ShowbyEmail($_SESSION["email"]);

        $array = array();
        while($item = mysqli_fetch_assoc($cart)){
            array_push($array, $item);
        }
        $tongSl = 0;
        $tongTien =0;

        for($i=0; $i<count($array); $i++){
            $tongSl += $array[$i]["soLuong"];
            $tongTien += $array[$i]["gia"] * $array[$i]["soLuong"];
        }
        

        $this->view("user", "Layout",[
            "page"=>"cart",
            "nsx"=>$this->nsx,
            "array"=>$array,
            "tongSl"=>$tongSl,
            "tongTien"=>$tongTien,
            "title"=>"Thông tin giỏ hàng"

        ]);
                
    }
    public function themGioHang($maSanPham){
        $num = $this->cartModel->checkMaSanPham($maSanPham);
        if($num == 0){
            $this->cartModel->Insert($_SESSION["email"], $maSanPham, 1);
            header('Location: http://localhost/nguyencongpc/GioHang');                        
        }
        else{
            $this->cartModel->tangSoLuong($maSanPham);
            header('Location: http://localhost/nguyencongpc/GioHang');                        
        }
    }
    public function tangSoLuong($maSanPham){
        $this->cartModel->tangSoLuong($maSanPham);
        header('Location: http://localhost/nguyencongpc/GioHang');                        

    }
    public function giamSoLuong($maSanPham){
        $this->cartModel->giamSoLuong($maSanPham);
        header('Location: http://localhost/nguyencongpc/GioHang');                        

    }
    public function Delete($maSanPham){
        $this->cartModel->Delete($maSanPham);
        header('Location: http://localhost/nguyencongpc/GioHang');   

    }
}
?>