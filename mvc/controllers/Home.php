<?php
class Home extends Controller{
    // NGUYEN MINH DOAN HIHI
    private $nsx = array();
    private $soLuongSanPham;
    private $soLuongDonHang;
    private $loaiTaiKhoan;
    public function __construct()
    {
        
        //Kiem tra dang nhap
        // if($_POST["login"]==false){
        //     header('Location: http://localhost/nguyencongpc/');                                   
        // }

        // NSX
        $nsxModel = $this->model("NSXModel");
        $this->nsx = json_decode($nsxModel->GetList());


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
        
    }

    public function Show(){
        $spModel = $this->model("SanPhamModel");
        $sp = json_decode($spModel->GetList());

        $arr = array();
        foreach($sp as $key=>$value){
            $arr[$value->tenNSX][] = $sp[$key]; 
        }

        if($this->loaiTaiKhoan == 0){      
            $this->view("admin","Layout", [
                "page"=>"SanPham",
                "array"=>$sp,
                "nsx"=>$this->nsx
            ]);            
        }
        else{
            $this->view("user","Layout", [
                "page"=>"Home",
                "array"=>$arr,
                "nsx"=>$this->nsx,
                "title"=>"Máy tính Nguyễn Công",
                "SLSP"=>$this->soLuongSanPham,
                "SLDH"=>$this->soLuongDonHang
            ]);
        }

        // for($i=0; $i<count($this->nsx); $i++){
        //     $item = $this->nsx[$i];
        //     echo  $item->id . " - " . $item->tenNSX . '<br />';
        // }

        // echo '<pre>';
        // print_r($arr);
        // echo '</pre>';

    }
    
}
?>