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
        
        //Kiem tra dang nhap
        if($_SESSION["isLogin"] == 0){
            header('Location: http://localhost/nguyencongpc/');                                   
        }

        $this->cartModel = $this->model("GioHangModel");
        
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
            if($this->soLuongDonHang == null )
                $this->soLuongDonHang = 0;
        }
        else{
            $this->soLuongDonHang =0;
            $this->soLuongSanPham = 0 ;
            $this->loaiTaiKhoan = 1;
        }
        

        
        
    }

    public function Show(){
        
        $array = json_decode($this->cartModel->ShowbyEmail($_SESSION["email"]));
        
        $tongTien =0;

        for($i=0; $i<count($array); $i++){
            $tongTien += $array[$i]->gia* $array[$i]->soLuong;
        }
        

        if($this->loaiTaiKhoan == 1){
            $this->view("user", "Layout",[
                "page"=>"cart",
                "nsx"=>$this->nsx,
                "array"=>$array,
                "SLSP"=>$this->soLuongSanPham,
                "SLDH"=>$this->soLuongDonHang,
                "tongTien"=>$tongTien,
                "title"=>"Thông tin giỏ hàng"
            ]);  
        }        
        else{
            header('Location: http://localhost/nguyencongpc/GioHang');                        

        }   
        
        

    }

   

    public function themGioHang($maSanPham){

        $maSanPham = is_numeric($maSanPham)?$maSanPham:2;
        
        if($this->loaiTaiKhoan == 1){
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
        else{
            header('Location: http://localhost/nguyencongpc/GioHang');                        
        }

    }
    public function tangSoLuong($maSanPham){
        if($this->loaiTaiKhoan == 1 ){
            $maSanPham = is_numeric($maSanPham)?$maSanPham:2;
            $this->cartModel->tangSoLuong($_SESSION["email"],$maSanPham);
            header('Location: http://localhost/nguyencongpc/GioHang');
        }        
        else{
            header('Location: http://localhost/nguyencongpc/GioHang');                        
        }                

    }
    public function giamSoLuong($maSanPham){

        $maSanPham = is_numeric($maSanPham)?$maSanPham:2;

        if($this->loaiTaiKhoan ==1 ){
            //Kiểm tra số lượng có phải 0 
            //Nếu là 0 thì xóa khỏi giỏ hàng
            $soLuong = $this->cartModel->getSoLuongByMaSanPham($maSanPham);
            if($soLuong >1){
                $this->cartModel->giamSoLuong($_SESSION["email"],$maSanPham);
                header('Location: http://localhost/nguyencongpc/GioHang'); 
            }
            else{
                $this->Delete($maSanPham); 
            }
        }
        else{
            header('Location: http://localhost/nguyencongpc/GioHang');                        

        }                              
    }

    
    public function Delete($maSanPham){
        if($this->loaiTaiKhoan == 1){
            $maSanPham = is_numeric($maSanPham)?$maSanPham:2;
            $this->cartModel->Delete($maSanPham);
            header('Location: http://localhost/nguyencongpc/GioHang');  
        } 
        else{
            header('Location: http://localhost/nguyencongpc/GioHang');  
        }
    }
}
?>