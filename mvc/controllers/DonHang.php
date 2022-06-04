<?php
class DonHang extends Controller{

    private $nsxModel;
    private $nsx = array();
    private $cartModel;
    private $orderModel;
    private $soLuongSanPham;
    private $loaiTaiKhoan;

    public function __construct()
    {
        $this->cartModel = $this->model("GioHangModel");
        $this->orderModel = $this->model("DonHangModel");
        
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
            //get loai tai khoan
            $modelUser = $this->model("UsersModel");
            $modelUser = $modelUser->GetLoaiTaiKhoan($_SESSION["email"]);
            $this->loaiTaiKhoan = mysqli_fetch_assoc($modelUser);
            $this->loaiTaiKhoan = $this->loaiTaiKhoan["loaiTaiKhoan"];

            $cartModel = $this->model("GioHangModel");      
            $soLuongSanPham = $cartModel->getSoLuongSanPham($_SESSION["email"]);
            $this->soLuongSanPham = mysqli_fetch_assoc($soLuongSanPham);
            $this->soLuongSanPham = $this->soLuongSanPham["soLuong"];
        }
        else{
            $this->soLuongSanPham = 0;
            $this->loaiTaiKhoan = 1;
        }
        
    }

    public function Show(){    
        
        // CART
        $cart = $this->cartModel->ShowbyEmail($_SESSION["email"]);
        $array = array();
        while($item = mysqli_fetch_assoc($cart)){
            array_push($array, $item);
        }
        $tongTien =0;

        for($i=0; $i<count($array); $i++){
            $tongTien += $array[$i]["gia"] * $array[$i]["soLuong"];
        }

        

        if(isset($_POST["ngayMua"]) && isset($_POST["hoTen"]) && isset($_POST["SDT"]) && isset($_POST["email"]) &&
        isset($_POST["diaChi"]) && isset($_POST["ghiChu"])){

            $ngayMua = $_POST["ngayMua"];
            $hoTen = $_POST["hoTen"];
            $SDT = $_POST["SDT"];
            $email = $_POST["email"];
            $diaChi = $_POST["diaChi"];
            $ghiChu = $_POST["ghiChu"];

            $chiTietDonHangModel = $this->model("ChiTietDonHangModel");

            // Thêm đơn hàng
            $this->orderModel->Insert($email, $hoTen, $SDT, $ngayMua, $diaChi, $ghiChu);

            // Lấy ID đơn hàng
            $order = $this->orderModel->GetLastID();
            $lastID = mysqli_fetch_assoc($order);
            $maDonHang = $lastID["id"];

            // Thêm chi tiết đơn hàng
            for($i=0; $i<count($array); $i++){
                $maSanPham = $array[$i]["maSanPham"];
                $soLuong = $array[$i]["soLuong"];
                $gia = $array[$i]["gia"];
                $tien = $gia * $soLuong;

                $chiTietDonHangModel->Insert($maDonHang, $maSanPham, $soLuong, $tien);
            }

            $this->view("user", "Layout",[
                "page"=>"order",
                "nsx"=>$this->nsx,
                "tongSl"=>$this->soLuongSanPham,
                "tongTien"=>$tongTien,
                "title"=>"Thông tin giỏ hàng",
                "array"=>$array,
                "data"=>$_POST,
                "lastID"=>$lastID
            ]);
        }
        
        

        
                
    }
   
}
?>