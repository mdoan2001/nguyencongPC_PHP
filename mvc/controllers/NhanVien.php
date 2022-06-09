<?php
class NhanVien extends Controller{

    private  $nsx = array();
    private  $nv = array();
    private $nvModel, $nsxModel;

    function __construct()
    {
        //Kiem tra dang nhap
        if($_SESSION["isLogin"]== 0 ){
            header('Location: http://localhost/nguyencongpc/');                                   
        }

        $this->nsxModel = $this->model("NSXModel");
        $this->nvModel = $this->model("NhanVienModel");

        // NSX
        $this->nsx = json_decode($this->nsxModel->GetList());
        // NV
        $this->nv = json_decode($this->nvModel->GetList());
    }

    public function Show(){
           
        $this->view("admin", "Layout", [
            "page"=>"NhanVien",
            "nsx"=>$this->nsx,
            "nv"=>$this->nv
        ]);
    }
    public function ShowById($id){

        $nv = json_decode($this->nvModel->GetNhanVienById($id));
           
        $this->view("admin", "Layout", [
            "page"=>"ChiTietNhanVien",
            "nsx"=>$this->nsx,
            "nv"=>$nv
        ]);
    }
    public function ThemMoi(){        
        $this->view("admin","Layout", [
            "page"=>"ThemMoiNhanVien",
            "nsx"=>$this->nsx
        ]);
    }

    public function Insert(){
        if(isset($_POST["hoTen"]) && isset($_POST["gioiTinh"]) && isset($_POST["email"]) && isset($_POST["diaChi"])
        && isset($_POST["SDT"]) && isset($_POST["hinhAnh"])){
            $hoTen = $_POST["hoTen"];
            $gioiTinh = $_POST["gioiTinh"];
            $email = $_POST["email"];
            $diaChi = $_POST["diaChi"];
            $SDT = $_POST["SDT"];
            $hinhAnh = $_POST["hinhAnh"];
            $check = $this->nvModel->Insert($hoTen, $email, $diaChi, $SDT, $hinhAnh, $gioiTinh);
            if($check == true){
                echo "alert('Thêm thành công')";
            }
            else{
                echo "alert('Thêm thất bại')";
            }
            header('Location: http://localhost/nguyencongpc/NhanVien');
        }
        header('Location: http://localhost/nguyencongpc/NhanVien');

    }
    public function UpdateById(){

        if(isset($_POST["id"]) && isset($_POST["hoTen"]) && isset($_POST["gioiTinh"]) && isset($_POST["email"])
        && isset($_POST["diaChi"]) && isset($_POST["SDT"]) && isset($_POST["hinhAnh"])){
            $id = $_POST["id"];
            $hoTen = $_POST["hoTen"];
            $gioiTinh = $_POST["gioiTinh"];
            $email = $_POST["email"];
            $diaChi = $_POST["diaChi"];
            $SDT = $_POST["SDT"];
            $hinhAnh = $_POST["hinhAnh"];
            $check = $this->nvModel->UpdateById($id, $hoTen, $email, $diaChi, $SDT, $hinhAnh, $gioiTinh);
            if($check == true){
                echo "alert('Update thành công')";
            }
            else{
                echo "alert('Update thất bại)";
            }
            header('Location: http://localhost/nguyencongpc/NhanVien');

        }

        header('Location: http://localhost/nguyencongpc/NhanVien');
    }
    public function DeleteById($id){
        $check = $this->nvModel->DeleteById($id);
        if($check == true){
            echo "alert('Xóa thành công')";
        }
        else{
            echo "alert('Xóa thất bại)";
        }
        header('Location: http://localhost/nguyencongpc/NhanVien');
    }


}
?>