<?php
class NhanVien extends Controller{

    private  $nsx = array();
    private  $nv = array();
    private $nvModel, $nsxModel;

    function __construct()
    {
        $this->nsxModel= $this->model("NSXModel");
        $this->nvModel = $this->model("NhanVienModel");

        // NSX
        $list = $this->nsxModel->GetList();
        while($item = mysqli_fetch_assoc($list)){
            array_push($this->nsx, $item);
        }
        // NV
        $list = $this->nvModel->GetList();
        while($item = mysqli_fetch_assoc($list)){
            array_push($this->nv, $item);
        }
    }

    public function Show(){
           
        $this->view("admin", "Layout", [
            "page"=>"NhanVien",
            "nsx"=>$this->nsx,
            "nv"=>$this->nv
        ]);
    }
    public function ShowById($id){

        $data = $this->nvModel->GetNhanVienById($id);
        $nv = mysqli_fetch_assoc($data);
           
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
            $this->nvModel->Insert($hoTen, $email, $diaChi, $SDT, $hinhAnh, $gioiTinh);
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
            $this->nvModel->UpdateById($id, $hoTen, $email, $diaChi, $SDT, $hinhAnh, $gioiTinh);
            header('Location: http://localhost/nguyencongpc/NhanVien');

        }

        header('Location: http://localhost/nguyencongpc/NhanVien');
    }
    public function DeleteById($id){
        $this->nvModel->DeleteById($id);
        header('Location: http://localhost/nguyencongpc/NhanVien');
    }


}
?>