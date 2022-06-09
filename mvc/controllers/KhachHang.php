<?php
class KhachHang extends Controller{
    
    private $nsxModel, $UsersModel;
    private $nsx = array();
    private $soLuongSanPham;
    private $soLuongDonhang;
    private $loaiTaiKhoan;

    function __construct()
    {
        // NSX
        $this->nsxModel = $this->model("NSXModel");
        $this->nsx = json_decode($this->nsxModel->GetList());
        $this->UsersModel = $this->model("UsersModel");
        

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

        $users = json_decode($this->UsersModel->GetList());

        if($this->loaiTaiKhoan == 0 ){
            $this->view("admin", "Layout", [
                "page"=>"KhachHang",
                "nsx"=>$this->nsx,
                "users"=>$users
            ]);
        }
        else{
            header('Location: http://localhost/nguyencongpc/Home');  
        }
            
    }
    

    public function ShowByEmail($email){

        $user = json_decode($this->UsersModel->GetUserByEmail($email));

        if($this->loaiTaiKhoan == 0 && $_SESSION["isLogin"] == 1){
            $this->view("admin","Layout", [
                "page"=>"ChiTietKhachHang",
                "nsx"=>$this->nsx,
                "user"=>$user
            ]);
        }
        else{
            header('Location: http://localhost/nguyencongpc/Home');  
            
        }

        
    }
    public function ThemMoi(){
        if($this->loaiTaiKhoan == 0 && $_SESSION["isLogin"] == 1){
            $this->view("admin", "Layout", [
                "page"=>"ThemMoiKhachHang",
                "nsx"=>$this->nsx
            ]);
        }
        else{
            header('Location: http://localhost/nguyencongpc/Home');  
        }
    }
    public function Insert(){
        if($_SESSION["isLogin"] == 1){
            if(isset($_POST["hoTen"]) && isset($_POST["email"]) && isset($_POST["matKhau"])
            && isset($_POST["loaiTaiKhoan"]) && isset($_POST["diaChi"]) && isset($_POST["SDT"])){
                $hoTen = $_POST["hoTen"];
                $email = $_POST["email"];
                $matKhau = $_POST["matKhau"];
                $loaiTaiKhoan = $_POST["loaiTaiKhoan"];
                $diaChi = $_POST["diaChi"];
                $SDT = $_POST["SDT"];

                $check = $this->UsersModel->Insert($email, $hoTen, $matKhau, $loaiTaiKhoan, $diaChi, $SDT);
                if($check == true){
                    echo "alert('Thêm thành công')";
                }
                else{
                    echo "alert('Thêm thất bại')";
                }


                if($this->loaiTaiKhoan == 0 ){
                    header('Location: http://localhost/nguyencongpc/KhachHang');
                }
                else{
                    header('Location: http://localhost/nguyencongpc/Home');
                }
                
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
        if($_SESSION["isLogin"] == 1){
                if(isset($_POST["hoTen"]) && isset($_POST["email"]) && isset($_POST["matKhau"])
            && isset($_POST["loaiTaiKhoan"]) && isset($_POST["diaChi"]) && isset($_POST["SDT"])){
                $hoTen = $_POST["hoTen"];
                $email = $_POST["email"];
                $matKhau = $_POST["matKhau"];
                $loaiTaiKhoan = $_POST["loaiTaiKhoan"];
                $diaChi = $_POST["diaChi"];
                $SDT = $_POST["SDT"];

                $check = $this->UsersModel->UpdateByEmail($email, $hoTen, $matKhau, $loaiTaiKhoan, $diaChi, $SDT);
                if($check == true){
                    echo "alert('Sửa thành công')";
                }
                else{
                    echo "alert('Sửa thất bại')";
                }

                header('Location: http://localhost/nguyencongpc/KhachHang');
                
            }
            else{
                header('Location: http://localhost/nguyencongpc/KhachHang');
            }
        }
        else{
            header('Location: http://localhost/nguyencongpc/Home');

        }
    }
    public function DeleteByEmail($id){
        if($_SESSION["isLogin"] == 1){
            if($this->loaiTaiKhoan == 0){
                
                $check = $this->UsersModel->DeleteByEmail($id);
                if($check == true){
                    echo "alert('Xóa thành công')";
                }
                else{
                    echo "alert('Xóa thất bại')";
                }
                header('Location: http://localhost/nguyencongpc/KhachHang');
            }
            else{
                header('Location: http://localhost/nguyencongpc/Home');
            }
        }
        else{
            header('Location: http://localhost/nguyencongpc/Home');

        }
    }

    // Dang nhap, dang ky, dang xuat

    public function login(){
        $this->view("user", "Layout", [
            "page"=>"login",
            "nsx"=>$this->nsx,
            "title"=>"Đăng nhập tài khoản",
            "SLSP"=>$this->soLuongSanPham,
            "SLDH"=>$this->soLuongDonHang
        ]);
            
    }
    public function registration(){
        $this->view("user", "Layout", [
            "page"=>"registration",
            "nsx"=>$this->nsx,
            "title"=>"Đăng ký tài khoản thành viên",
            "SLSP"=>$this->soLuongSanPham,
            "SLDH"=>$this->soLuongDonHang


        ]);
    }
    public function Logout(){
        if($_SESSION["isLogin"] == 1){
            $_SESSION["isLogin"] = 0;
            $_SESSION["loaiTaiKhoan"] = 1;
            $_SESSION["email"] = "";
            $_SESSION["hoTen"] = "";
            header('Location: http://localhost/nguyencongpc/Home');
        }
        else{
            header('Location: http://localhost/nguyencongpc/Home');
        }
    }


    
    public function checkPassword(){
        if(isset($_POST["email"]) && isset($_POST["password"])){
           $email = $_POST["email"];
           $password = $_POST["password"];
           $user = json_decode($this->UsersModel->GetUserByEmail($email));

           if(password_verify($password, $user->matKhau)==true){
                $_SESSION["isLogin"] = 1;
                $_SESSION["loaiTaiKhoan"] = $user->loaiTaiKhoan;
                $_SESSION["email"] = $user->email;
                $_SESSION["hoTen"] = $user->hoTen;
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