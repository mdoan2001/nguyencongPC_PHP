<?php
class DonHang extends Controller{

    private $nsxModel;
    private $nsx = array();
    private $cartModel;
    private $orderModel;
    private $soLuongSanPham;
    private $soLuongDonHang;
    private $loaiTaiKhoan;
    private $tongTien;
    private $array = array();

    public function __construct()
    {
        //Kiem tra dang nhap
        if($_SESSION["isLogin"]== 0){
            header('Location: http://localhost/nguyencongpc/');                                   
        }

        $this->cartModel = $this->model("GioHangModel");
        $this->orderModel = $this->model("DonHangModel");
        
        

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
            $this->soLuongDonHang =0;
            $this->soLuongSanPham = 0 ;
            $this->loaiTaiKhoan = 1;
        }

        $cart = $this->cartModel->ShowbyEmail($_SESSION["email"]);
        while($item = mysqli_fetch_assoc($cart)){
            array_push($this->array, $item);
        }
        $this->tongTien =0;

        for($i=0; $i<count($this->array); $i++){
            $this->tongTien += $this->array[$i]["gia"] * $this->array[$i]["soLuong"];
        }
        
    }
    public function DatHang(){

        if($_SESSION["isLogin"] == 1 && $this->loaiTaiKhoan == 1){

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
                for($i=0; $i<count($this->array); $i++){
                    $maSanPham = $this->array[$i]["maSanPham"];
                    $soLuong = $this->array[$i]["soLuong"];
                    $gia = $this->array[$i]["gia"];
                    $tien = $gia * $soLuong;
    
                    $chiTietDonHangModel->Insert($maDonHang, $maSanPham, $soLuong, $tien);
                }   
                header('Location: http://localhost/nguyencongpc/Donhang');              
            }  
            
        }
        else{
            header('Location: http://localhost/nguyencongpc/Donhang');
        }
    
    }

    public function Show(){    
        if($_SESSION["isLogin"] == 1 && $this->loaiTaiKhoan == 1){
            // Lấy ID đơn hàng
            $order = $this->orderModel->GetLastID();
            $lastID = mysqli_fetch_assoc($order);
            $maDonHang = $lastID["id"];

            $array = array();

            $result = $this->orderModel->GetDonHangByID($maDonHang);
            while($item = mysqli_fetch_assoc($result)){
                array_push($array, $item);
            }


            $array1 = array();
            $ctdh = $this->model("ChiTietDonHangModel");
            $result = $ctdh->GetCTDHByMaDonHang($maDonHang);
            while($item = mysqli_fetch_assoc($result)){
                array_push($array1, $item);
            }      
            // CART

            if($this->loaiTaiKhoan == 1){
                $this->view("user", "Layout",[
                    "page"=>"order-detail",
                    "nsx"=>$this->nsx,
                    "SLSP"=>$this->soLuongSanPham,
                    "SLDH"=>$this->soLuongDonHang,
                    "tongTien"=>$this->tongTien,
                    "title"=>"Chi tiết đơn hàng",
                    "array"=>$array1,
                    "content"=>$array[0],
                    "lastID"=>$maDonHang
                ]);
            }
        
        }
        else{
            header('Location: http://localhost/nguyencongpc/Donhang');

        }

        
                    
    }

    public function ChiTietDonHang($maDonHang){    
        $maDonHang = is_numeric($maDonHang)?$maDonHang:1;


        if($_SESSION["isLogin"] == 1 && $this->loaiTaiKhoan == 1){
            $array = array();

            $result = $this->orderModel->GetDonHangByID($maDonHang);
            while($item = mysqli_fetch_assoc($result)){
                array_push($array, $item);
            }


            $array1 = array();
            $ctdh = $this->model("ChiTietDonHangModel");
            $result = $ctdh->GetCTDHByMaDonHang($maDonHang);
            while($item = mysqli_fetch_assoc($result)){
                array_push($array1, $item);
            }      
            // CART

            if($this->loaiTaiKhoan == 1){
                $this->view("user", "Layout",[
                    "page"=>"order-detail",
                    "nsx"=>$this->nsx,
                    "SLSP"=>$this->soLuongSanPham,
                    "SLDH"=>$this->soLuongDonHang,
                    "tongTien"=>$this->tongTien,
                    "title"=>"Chi tiết đơn hàng",
                    "array"=>$array1,
                    "content"=>$array[0],
                    "lastID"=>$maDonHang
                ]);
            }

        }
        else{
            header('Location: http://localhost/nguyencongpc/Donhang');
        }


        
                    
    }
    public function ShowByEmail(){
        $array = array();
        $result =  $this->orderModel->getListByEmail($_SESSION["email"]);

        while($item = mysqli_fetch_assoc(($result))){
            array_push($array, $item);
        }

        if($_SESSION["isLogin"]==1 &&  $this->loaiTaiKhoan == 1){
            $this->view("user", "Layout",[
                "page"=>"order",
                "nsx"=>$this->nsx,
                "SLSP"=>$this->soLuongSanPham,
                "SLDH"=>$this->soLuongDonHang,
                "title"=>"Đơn hàng đã đặt",
                "content"=>$array
            ]);
        }
        else{
            header('Location: http://localhost/nguyencongpc/Donhang');
        }


        // echo '<pre>';
        //     print_r($array);
        // echo '</pre>';



    }

    public function HuyDonHang(){
        if($_SESSION["isLogin"]==1 &&  $this->loaiTaiKhoan == 1){

            // Lấy ID đơn hàng
            $order = $this->orderModel->GetLastID();
            $lastID = mysqli_fetch_assoc($order);
            $maDonHang = $lastID["id"];
    
            $this->model("ChiTietDonHangModel")->DeleteCTDHByMaDonHang($maDonHang);
            $this->orderModel->DeleteDHByMaDonHang($maDonHang);
            header('Location: http://localhost/nguyencongpc/DonHang/ShowByEmail');
        }
        else{
            header('Location: http://localhost/nguyencongpc/Donhang');
        }

    }
    public function HuyDonHangById($maDonHang){

        $maDonHang = is_numeric($maDonHang)?$maDonHang:1;

        if($_SESSION["isLogin"]==1 &&  $this->loaiTaiKhoan == 1){
            $this->model("ChiTietDonHangModel")->DeleteCTDHByMaDonHang($maDonHang);
            $this->orderModel->DeleteDHByMaDonHang($maDonHang);
            header('Location: http://localhost/nguyencongpc/DonHang/ShowByEmail');
        }
        else{
            header('Location: http://localhost/nguyencongpc/GioHang');
        }

    }
   
}
?>