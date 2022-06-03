<?php
class KhoHangModel extends DB{

    public function Insert($id, $sl){
        $qr = "INSERT INTO `khohang` (`id`, `soLuong`) VALUES ('$id', '$sl');";
        return mysqli_query($this->con, $qr);
    }

    public function UpdateById($id, $sl){
        $qr = "UPDATE `khohang` SET `soLuong` = '$sl' WHERE `khohang`.`id` = $id;";
        return mysqli_query($this->con, $qr);
    }
    
}

?>