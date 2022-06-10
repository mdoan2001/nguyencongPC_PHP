<?php
class SanPham extends Controller{

    private $ct, $sp, $kh, $nsxModel;
    private $nsx = array();
    private $soLuongSanPham;
    private $soLuongDonHang;
    private $loaiTaiKhoan;
    
    function __construct()
    {
        $this->ct = $this->model("ChiTietSanPhamModel");
        $this->nsxModel = $this->model("NSXModel");
        $this->sp = $this->model("SanPhamModel");
        $this->kh = $this->model("KhoHangModel");

        // NSX
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
    }

    public function Show(){
        $id = 2;
        //chi tiet san pham
        $des = json_decode($this->ct->ChiTietSanPham($id));

        if($this->loaiTaiKhoan == 0){
            $this->view("admin","Layout", [
                "page"=>"ChiTietSanPham",
                "des"=>$des,
                "nsx"=>$this->nsx
            ]);
        }
        else{
            header('Location: http://localhost/nguyencongpc/Home');  
        }

        
    }



    public function ChiTietSanPham($id){

        $des = json_decode($this->ct->ChiTietSanPham($id)); 
        $soLuongTrongKho = $this->model("KhoHangModel")->GetSoLuong($id);     

        if($this->loaiTaiKhoan == 0){             
            $this->view("admin","Layout", [
                "page"=>"ChiTietSanPham",
                "des"=>$des,
                "nsx"=>$this->nsx
            ]);
        }
        else{
            $this->view("user","Layout", [
                "page"=>"product-detail",
                "array"=>$des,
                "nsx"=>$this->nsx,
                "title"=>"Chi tiết sản phẩm",
                "SLSP"=>$this->soLuongSanPham,
                "SLDH"=>$this->soLuongDonHang,
                "slKho"=>$soLuongTrongKho
            ]);
        }

    }

    public function ChiTietSanPham2($id, $function){

        $des = json_decode($this->ct->ChiTietSanPham($id)); 
        $soLuongTrongKho = $this->model("KhoHangModel")->GetSoLuong($id);     

        if($this->loaiTaiKhoan == 0){             
            $this->view("admin","Layout", [
                "page"=>"ChiTietSanPham",
                "des"=>$des,
                "nsx"=>$this->nsx
            ]);
        }
        else{
            $this->view("user","Layout", [
                "page"=>"product-detail",
                "array"=>$des,
                "nsx"=>$this->nsx,
                "title"=>"Chi tiết sản phẩm",
                "SLSP"=>$this->soLuongSanPham,
                "SLDH"=>$this->soLuongDonHang,
                "slKho"=>$soLuongTrongKho,
                "function"=>$function
            ]);
        }

    }

    public function ShowByNSX($id){

        if(!is_numeric($id)){
            $id = 1;
        }

        $arrsp = json_decode($this->sp->GetListByNSX($id));

        if($this->loaiTaiKhoan == 0){             
            
            $this->view("admin", "Layout", [
                "page"=>"SanPham",
                "array"=>$arrsp,
                "nsx"=>$this->nsx
            ]);
        }
        else{
            $this->view("user", "Layout", [
                "page"=>"ListSanPham",
                "array"=>$arrsp,
                "nsx"=>$this->nsx,
                "title"=>"Danh sách sản phẩm",
                "SLSP"=>$this->soLuongSanPham,
                "SLDH"=>$this->soLuongDonHang
            ]);
        }
        
    }

    public function SearchByName(){
        if(isset($_POST["name"])){
            $name = $_POST["name"];

            $arrsp = json_decode($this->sp->GetListByName($name));

            if($this->loaiTaiKhoan == 0){             
                
                $this->view("admin", "Layout", [
                    "page"=>"SanPham",
                    "array"=>$arrsp,
                    "nsx"=>$this->nsx
                ]);
            }
            else{
                $this->view("user", "Layout", [
                    "page"=>"ListSanPham",
                    "array"=>$arrsp,
                    "nsx"=>$this->nsx,
                    "title"=>"Danh sách sản phẩm",
                    "SLSP"=>$this->soLuongSanPham,
                    "SLDH"=>$this->soLuongDonHang
                ]);
            }
        }
        else{
            header('Location: http://localhost/nguyencongpc/');  
        }

        
        
    }


    public function ThemMoi(){

        if($this->loaiTaiKhoan == 0){
            //VIEW
            $this->view("admin", "Layout", [
                "page"=>"ThemMoiSanPham",
                "nsx"=>$this->nsx
            ]);
        }
        else{
            header('Location: http://localhost/nguyencongpc/Home');  
        }

        
    }

    public function Insert(){

        if($this->loaiTaiKhoan == 0){
            if(isset($_POST['ten']) && isset($_POST['nsx']) && isset($_POST['gia']) && isset($_POST['anh']) &&
            isset($_POST['cpu']) && isset($_POST['vga']) && isset($_POST['ram']) && isset($_POST['dl']) &&
            isset($_POST['tl']) && isset($_POST['mau']) && isset($_POST['sl'])){
                $ten = $_POST['ten'];
                $nsx = $_POST['nsx'];
                $gia = $_POST['gia'];
                $anh = $_POST['anh'];
                $cpu = $_POST['cpu'];
                $vga = $_POST['vga'];
                $ram = $_POST['ram'];
                $dl = $_POST['dl'];
                $tl = $_POST['tl'];
                $mau = $_POST['mau'];
                $sl = $_POST['sl'];

                if($gia>0 && is_numeric($gia)){
                    $this->sp->Insert($ten, $nsx, $anh, $gia);

                    //GET LAST ID
                    $id = $this->sp->getLastId();;

                    $this->kh->Insert($id, $sl);
                    $this->ct->Insert($id, $cpu, $vga, $ram, $dl, $tl, $mau);
                    header('Location: http://localhost/nguyencongpc/Home');

                }
                
                header('Location: http://localhost/nguyencongpc/Home');
                
            }
        }
        else{
            header('Location: http://localhost/nguyencongpc/Home');  

        }

        
    }

    public function UpdateById(){

        if($this->loaiTaiKhoan == 0){
            if(isset($_POST['id']) && isset($_POST['ten']) && isset($_POST['nsx']) && isset($_POST['gia']) && isset($_POST['anh']) &&
            isset($_POST['cpu']) && isset($_POST['vga']) && isset($_POST['ram']) && isset($_POST['dl']) &&
            isset($_POST['tl']) && isset($_POST['mau']) && isset($_POST['sl'])){
                $id = $_POST['id'];
                $ten = $_POST['ten'];
                $nsx = $_POST['nsx'];
                $gia = $_POST['gia'];
                $anh = $_POST['anh'];
                $cpu = $_POST['cpu'];
                $vga = $_POST['vga'];
                $ram = $_POST['ram'];
                $dl = $_POST['dl'];
                $tl = $_POST['tl'];
                $mau = $_POST['mau'];
                $sl = $_POST['sl'];

                if($gia>0 && is_numeric($gia)){
                    $this->sp->UpdateById($id, $ten, $nsx, $anh, $gia);
                    $this->ct->UpdateById($id, $cpu, $vga, $ram, $dl, $tl, $mau);
                    $this->kh->UpdateById($id, $sl);
                    header('Location: http://localhost/nguyencongpc/Home');
                }     
                header('Location: http://localhost/nguyencongpc/Home');              
            }
        }
        else{
            header('Location: http://localhost/nguyencongpc/Home');  
        }

        
    }
    public function DeleteById($id){
        if($this->loaiTaiKhoan ==0){

            $this->model("KhoHangModel")->DeleteById($id);
            $this->ct->DeleteById($id);
            $this->sp->DeleteById($id);
        }
        header('Location: http://localhost/nguyencongpc/Home');
    }

    public function ShowByCost1($min, $max){
        if($this->loaiTaiKhoan == 0){
            $min *= 1000000;
            $max *= 1000000;
            $this->view("admin","Layout", [
                "page"=>"SanPham",
                "array"=>json_decode($this->sp->GetListByCost1($min, $max)),
                "nsx"=>$this->nsx
            ]);
        }
        else{
             header('Location: http://localhost/nguyencongpc/Home');

        }


    }

    public function ShowByCost2($min){
        if($this->loaiTaiKhoan == 0){
            $min *= 1000000;
            $this->view("admin","Layout", [
                "page"=>"SanPham",
                "array"=>json_decode($this->sp->GetListByCost2($min)),
                "nsx"=>$this->nsx
            ]);
        }
        else{
             header('Location: http://localhost/nguyencongpc/Home');

        }
    }
    
}
?>