<?php
class NSXModel extends DB{
    public function GetList(){
        $qr = "SELECT * FROM `hangsanxuat`;";
        return mysqli_query($this->con, $qr);
    }

    public function GetNSXById($id){
        $qr = "SELECT * FROM `hangsanxuat` WHERE `hangsanxuat`.`id` = $id;";
        return mysqli_query($this->con, $qr);
    }

    public function Insert($ten){
        $qr = "INSERT INTO `hangsanxuat` (`id`, `tenNSX`) VALUES (NULL, '$ten');";
        return mysqli_query($this->con, $qr);

    }

    public function UpDateById($id, $ten){
        $qr = "UPDATE `hangsanxuat` SET `tenNSX` = '$ten' WHERE `hangsanxuat`.`id` = $id;";
        return mysqli_query($this->con, $qr);
    }
    public function DeleteById($id){
        $qr = "DELETE FROM `hangsanxuat` WHERE `hangsanxuat`.`id` = $id";
        return mysqli_query($this->con, $qr);
    }

}

?>