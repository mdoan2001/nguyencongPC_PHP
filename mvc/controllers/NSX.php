<?php
class NSX extends Controller{
    private $nsxModel;
    private $nsx = array();

    function __construct()
    {
        if(!isset($_SESSION["isLogin"])){
            $_SESSION["isLogin"] = 0;
        }
        
        //Kiem tra dang nhap
        if($_SESSION["isLogin"]== 0){
            header('Location: http://localhost/nguyencongpc/');                                   
        }
        
        // NSX
        $this->nsxModel = $this->model("NSXModel");
        $this->nsx = json_decode($this->nsxModel->GetList());
    }

    public function Show(){
      //VIEW
        $this->view("admin","Layout", [
            "page"=>"NSX",
            "nsx"=>$this->nsx
        ]);
    }


    public function ShowById($id){

        //CHI TIET NSX
        $des = json_decode($this->nsxModel->GetNSXById($id));

        //VIEW
        $this->view("admin","Layout", [
            "page"=>"ChiTietNSX",
            "nsx"=>$this->nsx,
            "des"=>$des
        ]);


    }

    public function ThemMoi(){
        //VIEW
        $this->view("admin","Layout", [
            "page"=>"ThemMoiNSX",
            "nsx"=>$this->nsx
        ]);
    }

    public function Insert(){
        if(isset($_POST['ten'])){
            $ten = $_POST['ten'];
            $this->nsxModel->Insert($ten);
             header('Location: http://localhost/nguyencongpc/NSX');
        }
         header('Location: http://localhost/nguyencongpc/NSX');
    }

    public function UpdateById(){
        if(isset($_POST['id']) && isset($_POST['ten'])){
            $id = $_POST['id'];
            $ten = $_POST['ten'];          

            $this->nsxModel->UpdateById($id, $ten);
            header('Location: http://localhost/nguyencongpc/NSX');

                 
        }
    }

    public function DeleteById($id){
        $this->nsxModel->DeleteById($id);
        header('Location: http://localhost/nguyencongpc/NSX');
    }


}
?>