<?php
class UsersModel extends DB{

    public function GetList(){
        $qr = "SELECT * FROM `users` ";
        return mysqli_query($this->con, $qr);
    }
    public function GetUserByEmail($email){
        $qr = "SELECT * FROM `users` WHERE `users`.`email` = '$email';";
        return mysqli_query($this->con, $qr);
    }
    public function Insert($email, $hoTen, $matKhau, $loaiTaiKhoan, $diaChi, $SDT){
        $matKhau = password_hash($matKhau, PASSWORD_DEFAULT);
        $qr = "INSERT INTO `users` ( `email`, `hoTen`, `matKhau`, `loaiTaiKhoan`, `diaChi`, `SDT`) 
        VALUES ('$email', '$hoTen', '$matKhau', '$loaiTaiKhoan', '$diaChi', '$SDT');";
        return mysqli_query($this->con, $qr);
    }
    public function UpdateByEmail($email, $hoTen, $matKhau, $loaiTaiKhoan, $diaChi,$SDT){
        $matKhau = password_hash($matKhau, PASSWORD_DEFAULT);
        $qr = "UPDATE `users` SET `email` = '$email', `hoTen` = '$hoTen', `matKhau` = '$matKhau', `loaiTaiKhoan` = '$loaiTaiKhoan', `diaChi` = '$diaChi', `SDT` = '$SDT' WHERE `users`.`email` = '$email';";
        return mysqli_query($this->con, $qr);
    }
    public function DeleteByEmail($email){
        $qr = "DELETE FROM `users` WHERE `users`.`email` = '$email'";
        return mysqli_query($this->con, $qr);
    }
}

?>