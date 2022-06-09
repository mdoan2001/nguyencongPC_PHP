<?php
class NSXModel extends DB{
    public function GetList(){
        $qr = "SELECT * FROM `hangsanxuat`;";
        $row =  mysqli_query($this->con, $qr);
        $result = array();
        while($item = mysqli_fetch_assoc($row)){
            array_push($result, $item);
        }
        return json_encode($result);
    }

    public function GetNSXById($id){
        $qr = "SELECT * FROM `hangsanxuat` WHERE `hangsanxuat`.`id` = $id;";
        $row =  mysqli_query($this->con, $qr);
        return json_encode(mysqli_fetch_assoc($row));
    }

    public function Insert($ten){
        $qr = "INSERT INTO `hangsanxuat` (`id`, `tenNSX`) VALUES (NULL, '$ten');";
        return  mysqli_query($this->con, $qr);

    }

    public function UpDateById($id, $ten){
        $qr = "UPDATE `hangsanxuat` SET `tenNSX` = '$ten' WHERE `hangsanxuat`.`id` = $id;";
        return mysqli_query($this->con, $qr);

    }
    public function DeleteById($id){
        $qr = "DELETE FROM `hangsanxuat` WHERE `hangsanxuat`.`id` = $id";
        return  mysqli_query($this->con, $qr);

    }

}

?>