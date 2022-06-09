<?php
class NhanVienModel extends DB{
    public function GetList(){
        $qr = "SELECT * FROM `nhanvien`;";
        $row =  mysqli_query($this->con, $qr);
        $result = array();
        while($item = mysqli_fetch_assoc($row)){
            array_push($result, $item);
        }
        return json_encode($result);
    }
    public function GetNhanVienById($id){
        $qr = "SELECT * FROM `nhanvien` WHERE `nhanvien`.`id` = $id;";
        $row =  mysqli_query($this->con, $qr);
        $result =  mysqli_fetch_assoc($row);
        return json_encode($result);
    }
    public function Insert($hoTen, $email, $diaChi, $SDT, $hinhAnh, $gioiTinh){
        $qr = "INSERT INTO `nhanvien` (`id`, `hoTen`, `email`, `diaChi`, `SDT`, `hinhAnh`, `gioiTinh`) VALUES (NULL, '$hoTen', '$email', '$diaChi', '$SDT', '$hinhAnh', '$gioiTinh');";
        return  mysqli_query($this->con, $qr);
    }
    public function UpdateById($id, $hoTen, $email, $diaChi, $SDT, $hinhAnh, $gioiTinh){
        $qr = "UPDATE `nhanvien` SET `hoTen` = '$hoTen', `email` = '$email', `diaChi` = '$diaChi', `SDT` = '$SDT', `hinhAnh` = '$hinhAnh', `gioiTinh` = '$gioiTinh' WHERE `nhanvien`.`id` = $id;";
        return mysqli_query($this->con, $qr);
    }

    public function DeleteById($id){
        $qr = "DELETE FROM `nhanvien` WHERE `nhanvien`.`id` = $id";
        return mysqli_query($this->con, $qr);
    }



}

?>