<?php
class DonHang extends Controller{

    private $nsxModel;
    private $nsx = array();
    private $cartModel;
    private $soLuongSanPham;
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

        if(empty($_SESSION["loaiTaiKhoan"]) || !isset($_SESSION["loaiTaiKhoan"]))
            $_SESSION["loaiTaiKhoan"] = 1;

        if( !empty($_SESSION["email"])){
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
        
        $cart = $this->cartModel->ShowbyEmail($_SESSION["email"]);

        $array = array();
        while($item = mysqli_fetch_assoc($cart)){
            array_push($array, $item);
        }
        $tongTien =0;

        for($i=0; $i<count($array); $i++){
            $tongTien += $array[$i]["gia"] * $array[$i]["soLuong"];
        }
        

        $this->view("user", "Layout",[
            "page"=>"cart",
            "nsx"=>$this->nsx,
            "array"=>$array,
            "tongSl"=>$this->soLuongSanPham,
            "tongTien"=>$tongTien,
            "title"=>"Thông tin giỏ hàng"

        ]);
                
    }
   
}
?>