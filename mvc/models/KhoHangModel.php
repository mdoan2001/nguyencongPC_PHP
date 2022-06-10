<?php
class KhoHangModel extends DB{

    public function Insert($id, $sl){
        $qr = "INSERT INTO `khohang` (`id`, `soLuong`) VALUES ('$id', '$sl');";
        return mysqli_query($this->con, $qr);
    }

    public function UpdateById($id, $sl){
        $qr = "UPDATE `khohang` SET `soLuong` = $sl WHERE `khohang`.`id` = $id;";
        return mysqli_query($this->con, $qr);
    
    }
    public function UpdateSoLuong($id, $sl){
        $qr = "UPDATE `khohang` SET `soLuong` = `soLuong` - $sl WHERE `khohang`.`id` = $id;";
        return mysqli_query($this->con, $qr);
    }

    public function DeleteById($id){
        $qr = "DELETE FROM `khohang` WHERE `khohang`.`id` = $id;";
        return mysqli_query($this->con, $qr);
    }
    public function GetSoLuong($id){
        $qr = "SELECT soLuong FROM `khohang` WHERE `khohang`.`id` = $id;";
        $row =  mysqli_query($this->con, $qr);
        $result = mysqli_fetch_assoc($row);
        return $result["soLuong"];
    }
    
}

?>