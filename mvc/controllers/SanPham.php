<?php
class SanPham extends Controller{

    private $ct, $sp, $kh, $nsxModel;
    private $nsx = array();

    function __construct()
    {
        $this->ct = $this->model("ChiTietSanPhamModel");
        $this->nsxModel = $this->model("NSXModel");
        $this->sp = $this->model("SanPhamModel");
        $this->kh = $this->model("KhoHangModel");

        // NSX
        $list = $this->nsxModel->GetList();
        while($item = mysqli_fetch_assoc($list)){
            array_push($this->nsx, $item);
        }

        if(empty($_SESSION["loaiTaiKhoan"]))
            $_SESSION["loaiTaiKhoan"] = 1;
    }

    public function Show(){
        $id = 2;
        //chi tiet san pham
        $data = $this->ct->ChiTietSanPham($id);
        $des = mysqli_fetch_assoc($data);


        $this->view("admin","Layout", [
            "page"=>"ChiTietSanPham",
            "des"=>$des,
            "nsx"=>$this->nsx
        ]);
    }



    public function ChiTietSanPham($id){
        $ct = $this->model("ChiTietSanPhamModel");

        $data = $ct->ChiTietSanPham($id);
        $des = mysqli_fetch_assoc($data);

        

        if($_SESSION["loaiTaiKhoan"] == 0){             
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
                "nsx"=>$this->nsx
            ]);
        }
    }

    

    public function ShowByNSX($id){
        $sp = $this->model("SanPhamModel");
        $arrsp =[];
        $listSP = $sp->GetListByNSX($id);
        while($item = mysqli_fetch_assoc($listSP)){
            array_push($arrsp, $item);
        }

        if($_SESSION["loaiTaiKhoan"] == 0){             
            
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
                "nsx"=>$this->nsx
            ]);
        }
        
    }


    public function ThemMoi(){

        //VIEW
        $this->view("admin", "Layout", [
            "page"=>"ThemMoiSanPham",
            "nsx"=>$this->nsx
        ]);
    }

    public function Insert(){
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
                $data = $this->sp->getLastId();
                $data = mysqli_fetch_assoc($data);
                $id = $data['id'];

                $this->kh->Insert($id, $sl);
                $this->ct->Insert($id, $cpu, $vga, $ram, $dl, $tl, $mau);
                header('Location: http://localhost/nguyencongpc/Home');

            }
            
            header('Location: http://localhost/nguyencongpc/Home');
            
        }
    }

    public function UpdateById(){
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
                header('Location: http://localhost/nguyencongpc/Layout');

            }
            
            header('Location: http://localhost/nguyencongpc/Layout');
            
        }
    }
    public function DeleteById($id){
        $this->ct->DeleteById($id);
        $this->sp->DeleteById($id);
        header('Location: http://localhost/nguyencongpc/Layout');
    }
    
}
?>