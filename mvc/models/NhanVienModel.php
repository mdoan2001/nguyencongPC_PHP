<?php
class NhanVienModel extends DB{
    public function GetList(){
        $qr = "SELECT * FROM `nhanvien`;";
        return mysqli_query($this->con, $qr);
    }
    public function GetNhanVienById($id){
        $qr = "SELECT * FROM `nhanvien` WHERE `nhanvien`.`id` = $id;";
        return mysqli_query($this->con, $qr);
    }
    public function Insert($hoTen, $email, $diaChi, $SDT, $hinhAnh, $gioiTinh){
        $qr = "INSERT INTO `nhanvien` (`id`, `hoTen`, `email`, `diaChi`, `SDT`, `hinhAnh`, `gioiTinh`) VALUES (NULL, '$hoTen', '$email', '$diaChi', '$SDT', '$hinhAnh', '$gioiTinh');";
        return mysqli_query($this->con, $qr);
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