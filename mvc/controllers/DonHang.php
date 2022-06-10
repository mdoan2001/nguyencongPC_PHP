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
        if(!isset($_SESSION["isLogin"])){
            $_SESSION["isLogin"] = 0;
        }
        //Kiem tra dang nhap
        if($_SESSION["isLogin"] == 0){
            header('Location: http://localhost/nguyencongpc/Home/Show2/ChuaDangNhap');                                                                     
        }

        
        

        $this->cartModel = $this->model("GioHangModel");
        $this->orderModel = $this->model("DonHangModel");
        
        

        // NSX
        $this->nsxModel = $this->model("NSXModel");
        $this->nsx = json_decode($this->nsxModel->GetList());


        if(!empty($_SESSION["email"])){
            //get loai tai khoan
            $modelUser = $this->model("UsersModel");
            $this->loaiTaiKhoan = $modelUser->GetLoaiTaiKhoan($_SESSION["email"]);

            //Lấy số lượng sản phẩm trong giỏ hàng
            $cartModel = $this->model("GioHangModel");      
            $this->soLuongSanPham= $cartModel->getSoLuongSanPham($_SESSION["email"]);
            if($this->soLuongSanPham == null)
                $this->soLuongSanPham = 0;

            //Lấy số lượng đơn hàng đã đặt
            $orderModel = $this->model("DonHangModel");      
            $this->soLuongDonHang = $orderModel->getSoLuongDonHang($_SESSION["email"]);
            if($this->soLuongDonHang == null)
                $this->soLuongDonHang = 0;
        }
        else{
            $this->soLuongDonHang =0;
            $this->soLuongSanPham = 0 ;
            $this->loaiTaiKhoan = 1;
        }

        $this->array = json_decode($this->cartModel->ShowbyEmail($_SESSION["email"]));
        $this->tongTien =0;

        for($i=0; $i<count($this->array); $i++){
            $this->tongTien += $this->array[$i]->gia * $this->array[$i]->soLuong;
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
                $maDonHang = $this->orderModel->GetLastID();
    
                // Thêm chi tiết đơn hàng
                for($i=0; $i<count($this->array); $i++){
                    $maSanPham = $this->array[$i]->maSanPham;
                    $soLuong = $this->array[$i]->soLuong;
                    $gia = $this->array[$i]->gia;
                    $tien = $gia * $soLuong;
                    
                    //giam số lượng trong kho
                    $this->model("KhoHangModel")->UpdateSoLuong($maSanPham, $soLuong);
                    $chiTietDonHangModel->Insert($maDonHang, $maSanPham, $soLuong, $tien);
                }   
                $this->cartModel->DeleteByEmail($_SESSION["email"]);
                header('Location: http://localhost/nguyencongpc/DonHang/Show2/DatHangThanhCong');              
            }  
            
        }
        else{
            header('Location: http://localhost/nguyencongpc/DonHang');
        }
    
    }

    public function Show(){    
        
        if($this->loaiTaiKhoan == 1){
            // Lấy ID đơn hàng
            $maDonHang = $this->orderModel->GetLastID();
            $array = json_decode($this->orderModel->GetDonHangByID($maDonHang));

            $ctdh = $this->model("ChiTietDonHangModel");
            $array1 = json_decode($ctdh->GetCTDHByMaDonHang($maDonHang));
                 
            // CART

                $this->view("user", "Layout",[
                    "page"=>"order-detail",
                    "nsx"=>$this->nsx,
                    "SLSP"=>$this->soLuongSanPham,
                    "SLDH"=>$this->soLuongDonHang,
                    "tongTien"=>$this->tongTien,
                    "title"=>"Chi tiết đơn hàng",
                    "array"=>$array1,
                    "content"=>$array,
                    "lastID"=>$maDonHang
                ]);                
        }
        else{
            $this->view("admin", "Layout", [
                "page"=>"DonHang",
                "nsx"=>$this->nsx,
                "orders"=>json_decode($this->orderModel->GetList())
            ]);

        }                        
    }

    public function Show2($function){    
        if($this->loaiTaiKhoan == 1){
            // Lấy ID đơn hàng
            $maDonHang = $this->orderModel->GetLastID();
            $array = json_decode($this->orderModel->GetDonHangByID($maDonHang));

            $ctdh = $this->model("ChiTietDonHangModel");
            $array1 = json_decode($ctdh->GetCTDHByMaDonHang($maDonHang));
                 
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
                    "content"=>$array,
                    "lastID"=>$maDonHang,
                    "function"=>$function
                ]);
            }
        
        }
        else{
            header('Location: http://localhost/nguyencongpc/Donhang');

        }                          
    }

    public function ChiTietDonHang($maDonHang){    
        $maDonHang = is_numeric($maDonHang)?$maDonHang:1;

        $ctdh = $this->model("ChiTietDonHangModel");

        if($this->loaiTaiKhoan == 1){
            
            $array = json_decode($this->orderModel->GetDonHangByID($maDonHang));


            $array1 = json_decode($ctdh->GetCTDHByMaDonHang($maDonHang));
            // CART

                $this->view("user", "Layout",[
                    "page"=>"order-detail",
                    "nsx"=>$this->nsx,
                    "SLSP"=>$this->soLuongSanPham,
                    "SLDH"=>$this->soLuongDonHang,
                    "tongTien"=>$this->tongTien,
                    "title"=>"Chi tiết đơn hàng",
                    "array"=>$array1,
                    "content"=>$array,
                    "lastID"=>$maDonHang
                ]);          
        }
        else{
            $this->view("admin", "Layout", [
                "page"=>"ChiTietDonHang",
                "nsx"=>$this->nsx,
                "order"=>json_decode($this->orderModel->GetDonHangByID($maDonHang)),
                "detail"=>json_decode($ctdh->GetCTDHByMaDonHang($maDonHang))
            ]);

        }                   
    }
    public function ShowByEmail(){

        $array = json_decode($this->orderModel->GetListByEmail($_SESSION["email"]));

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

    }

    public function HuyDonHang(){
        if($_SESSION["isLogin"]==1 &&  $this->loaiTaiKhoan == 1){

            // Lấy ID đơn hàng
            $maDonHang = $this->orderModel->GetLastID();
    
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