<?php
class KhachHang extends Controller{
    
    private $nsxModel;
    private $nsx = array();
    private $soLuongSanPham;
    private $soLuongDonhang;
    private $loaiTaiKhoan;

    function __construct()
    {
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
        $UsersModel = $this->model("UsersModel");
        $list = $UsersModel->GetList();
        $users = array();

        while($item = mysqli_fetch_assoc($list)){
            array_push($users, $item);
        }
        if($this->loaiTaiKhoan == 0 ){
            $this->view("admin", "Layout", [
                "page"=>"KhachHang",
                "nsx"=>$this->nsx,
                "users"=>$users
            ]);
        }
            
    }
    

    public function ShowByEmail($email){
        $UsersModel = $this->model("UsersModel");
        $list = $UsersModel->GetUserByEmail($email);
        $user = mysqli_fetch_assoc($list);

        $this->view("admin","Layout", [
            "page"=>"ChiTietKhachHang",
            "nsx"=>$this->nsx,
            "user"=>$user
        ]);
    }
    public function ThemMoi(){
        $this->view("admin", "Layout", [
            "page"=>"ThemMoiKhachHang",
            "nsx"=>$this->nsx
        ]);
    }
    public function Insert(){
        if(isset($_POST["hoTen"]) && isset($_POST["email"]) && isset($_POST["matKhau"])
        && isset($_POST["loaiTaiKhoan"]) && isset($_POST["diaChi"]) && isset($_POST["SDT"])){
            $hoTen = $_POST["hoTen"];
            $email = $_POST["email"];
            $matKhau = $_POST["matKhau"];
            $loaiTaiKhoan = $_POST["loaiTaiKhoan"];
            $diaChi = $_POST["diaChi"];
            $SDT = $_POST["SDT"];

            $UsersModel = $this->model("UsersModel");
            $UsersModel->Insert($email, $hoTen, $matKhau, $loaiTaiKhoan, $diaChi, $SDT);
            
            if($this->loaiTaiKhoan == 0 ){
                header('Location: http://localhost/nguyencongpc/KhachHang');
            }
            else{
                header('Location: http://localhost/nguyencongpc/Home');
            }
            
        }
        
        if($this->loaiTaiKhoan == 0 ){
            header('Location: http://localhost/nguyencongpc/KhachHang');
        }
        else{
            header('Location: http://localhost/nguyencongpc/Home');
        }
    }
    public function UpdateByEmail(){
        if(isset($_POST["hoTen"]) && isset($_POST["email"]) && isset($_POST["matKhau"])
        && isset($_POST["loaiTaiKhoan"]) && isset($_POST["diaChi"]) && isset($_POST["SDT"])){
            $hoTen = $_POST["hoTen"];
            $email = $_POST["email"];
            $matKhau = $_POST["matKhau"];
            $loaiTaiKhoan = $_POST["loaiTaiKhoan"];
            $diaChi = $_POST["diaChi"];
            $SDT = $_POST["SDT"];

            $UsersModel = $this->model("UsersModel");
            $UsersModel->UpdateByEmail($email, $hoTen, $matKhau, $loaiTaiKhoan, $diaChi, $SDT);
            header('Location: http://localhost/nguyencongpc/KhachHang');
            
        }
        header('Location: http://localhost/nguyencongpc/KhachHang');
    }
    public function DeleteByEmail($id){
        $UsersModel = $this->model("UsersModel");
        $UsersModel->DeleteByEmail($id);
        header('Location: http://localhost/nguyencongpc/KhachHang');
    }

    // Dang nhap, dang ky, dang xuat

    public function login(){

        $this->view("user", "Layout", [
            "page"=>"login",
            "nsx"=>$this->nsx,
            "title"=>"Đăng nhập tài khoản",
            "SLSP"=>$this->soLuongSanPham,
            "SLDH"=>$this->soLuongDonhang
        ]);
            
    }
    public function registration(){
        $this->view("user", "Layout", [
            "page"=>"registration",
            "nsx"=>$this->nsx,
            "title"=>"Đăng ký tài khoản thành viên",
            "SLSP"=>$this->soLuongSanPham,
            "SLDH"=>$this->soLuongDonhang


        ]);
    }
    public function Logout(){
        $_SESSION["isLogin"] = 0;
        $_SESSION["loaiTaiKhoan"] = 1;
        $_SESSION["email"] = "";
        $_SESSION["hoTen"] = "";
        header('Location: http://localhost/nguyencongpc/Home');

    }


    
    public function checkPassword(){
        if(isset($_POST["email"]) && isset($_POST["password"])){
           $email = $_POST["email"];
           $password = $_POST["password"];

           $UsersModel = $this->model("UsersModel");
           $list = $UsersModel->GetUserByEmail($email);
           $user = mysqli_fetch_assoc($list);

           if(password_verify($password, $user["matKhau"])==true){
                $_SESSION["isLogin"] = 1;
                $_SESSION["loaiTaiKhoan"] = $user["loaiTaiKhoan"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["hoTen"] = $user["hoTen"];
                header('Location: http://localhost/nguyencongpc/Home');   
       
           }
           else{
            $_SESSION["isLogin"] = 0;
            $_SESSION["loaiTaiKhoan"] = 1;
            
            header('Location: http://localhost/nguyencongpc/Home');                        
           }          

        }
   }

    


}
?>