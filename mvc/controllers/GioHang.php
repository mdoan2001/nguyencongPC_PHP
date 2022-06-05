<?php
class GioHang extends Controller{

    private $nsxModel;
    private $nsx = array();
    private $cartModel;
    private $soLuongSanPham;
    private $soLuongDonhang;
    private $loaiTaiKhoan;

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

        if(!empty($_SESSION["email"])){
            //get loai tai khoan
            $modelUser = $this->model("UsersModel");
            $modelUser = $modelUser->GetLoaiTaiKhoan($_SESSION["email"]);
            $this->loaiTaiKhoan = mysqli_fetch_assoc($modelUser);
            $this->loaiTaiKhoan = $this->loaiTaiKhoan["loaiTaiKhoan"];

            //Lấy số lượng sản phẩm trong giỏ hàng
            $cartModel = $this->model("GioHangModel");      
            $soLuongSanPham = $cartModel->getSoLuongSanPham($_SESSION["email"]);
            $sl = mysqli_fetch_assoc($soLuongSanPham);
            $this->soLuongSanPham = ($sl["soLuong"]!=NULL)?$sl["soLuong"]:0;

            //Lấy số lượng đơn hàng đã đặt
            $orderModel = $this->model("DonHangModel");      
            $soLuongDonHang = $orderModel->getSoLuongDonHang($_SESSION["email"]);
            $sl = mysqli_fetch_assoc($soLuongDonHang);
            $this->soLuongDonHang = ($sl["soLuong"]!=NULL)?$sl["soLuong"]:0; 
        }
        else{
            $this->soLuongSanPham = 0 ;
            $this->loaiTaiKhoan = 1;
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
            "SLSP"=>$this->soLuongSanPham,
            "SLDH"=>$this->soLuongDonhang,
            "tongTien"=>$tongTien,
            "title"=>"Thông tin giỏ hàng"
        ]);                
    }

   

    public function themGioHang($maSanPham){
        $num1 = $this->cartModel->checkMaSanPham($maSanPham);
        $num2 = $this->cartModel->checkEmail($_SESSION["email"]);
        if(($num1 == 0 && $num2 == 0) || ($num1 == 0 && $num2 > 0)){
            $this->cartModel->Insert($_SESSION["email"], $maSanPham, 1);
            header('Location: http://localhost/nguyencongpc/GioHang');                        
        }
        else{
            $this->cartModel->tangSoLuong($_SESSION["email"],$maSanPham);
            header('Location: http://localhost/nguyencongpc/GioHang');                        
        }

    }
    public function tangSoLuong($maSanPham){
        $this->cartModel->tangSoLuong($_SESSION["email"],$maSanPham);
        header('Location: http://localhost/nguyencongpc/GioHang');                        

    }
    public function giamSoLuong($maSanPham){
        //Kiểm tra số lượng có phải 0 
        //Nếu là 0 thì xóa khỏi giỏ hàng
        $soLuong = $this->cartModel->getSoLuongByMaSanPham($maSanPham);
        $soLuong = mysqli_fetch_assoc($soLuong);
        $soLuong = $soLuong["soLuong"];
        if($soLuong >1){
            $this->cartModel->giamSoLuong($_SESSION["email"],$maSanPham);
            header('Location: http://localhost/nguyencongpc/GioHang'); 
        }
        else{
            $this->Delete($maSanPham); 
        }

                               

    }
    public function Delete($maSanPham){
        $this->cartModel->Delete($maSanPham);
        header('Location: http://localhost/nguyencongpc/GioHang');   
    }
}
?>