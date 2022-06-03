<?php
class Home extends Controller{

    private $nsxModel;
    private $nsx = array();
    public function __construct()
    {
        
        //Kiem tra dang nhap
        // if($_POST["login"]==false){
        //     header('Location: http://localhost/nguyencongpc/');                                   
        // }

        $this->nsxModel = $this->model("NSXModel");
        // NSX
        $list = $this->nsxModel->GetList();
        while($item = mysqli_fetch_assoc($list)){
            array_push($this->nsx, $item);
        }

        if(!isset($_SESSION["loaiTaiKhoan"]))
            $_SESSION["loaiTaiKhoan"] = 1;
    }

    public function Show(){
        $sp = $this->model("SanPhamModel");
        $arr1 = array();
        $arr = array();
        $list = $sp->GetList();
        while($item = mysqli_fetch_assoc($list)){
            array_push($arr, $item);
            $arr1[$item["tenNSX"]][] = $item;
        }


        if($_SESSION["loaiTaiKhoan"] == 1){             
            $this->view("user","Layout", [
                "page"=>"Home",
                "array"=>$arr1,
                "nsx"=>$this->nsx,
            ]);
        }
        else{
            $this->view("admin","Layout", [
                "page"=>"SanPham",
                "array"=>$arr,
                "nsx"=>$this->nsx
            ]);
        }
                
    }

    public function ChiTietSanPham($id){
        $ct = $this->model("ChiTietSanPhamModel");

        $data = $ct->ChiTietSanPham($id);
        $des = mysqli_fetch_assoc($data);

        $this->view("Layout", [
            "page"=>"ChiTietSanPham",
            "des"=>$des,
            "nsx"=>$this->nsx
        ]);
    }

    

    public function ShowByNSX($id){
        $sp = $this->model("SanPhamModel");
        $arrsp =[];
        $listSP = $sp->GetListByNSX($id);
        while($item = mysqli_fetch_assoc($listSP)){
            array_push($arrsp, $item);
        }

        if($_SESSION["loaiTaiKhoan"] == 1){             
            $this->view("user", "Layout", [
                "page"=>"Home",
                "array"=>$arrsp,
                "nsx"=>$this->nsx
            ]);
        }
        else{
            $this->view("admin", "Layout", [
                "page"=>"SanPham",
                "array"=>$arrsp,
                "nsx"=>$this->nsx
            ]);
        }
        
    }



}
?>