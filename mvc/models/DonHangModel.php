<?php
class DonHangModel extends DB{

    public function Insert($email, $hoTen, $SDT, $ngayMua, $diaChi, $ghiChu ){
        $qr = "INSERT INTO `donhang` (`id`, `email`, `ngayMua`, `hoTen`, `SDT`, `diaChi`, `ghiChu`) VALUES (NULL, '$email', '$ngayMua', '$hoTen', '$SDT', '$diaChi', '$ghiChu');";
        return mysqli_query($this->con, $qr);
    }
    public function GetLastID(){
        $qr = "SELECT id FROM donhang  ORDER BY id DESC LIMIT 1";
        return mysqli_query($this->con, $qr);
    }
    
}

?>