<?php
class GioHangModel extends DB{

    public function Insert($email, $maSanPham, $soLuong){
        $qr = "INSERT INTO `giohang` VALUES ( '$maSanPham', '$email', $soLuong);";
        return mysqli_query($this->con, $qr);
    }
    public function tangSoLuong($maSanPham){
        $qr = "UPDATE `giohang` SET `soLuong` = `soLuong` + 1 WHERE `maSanPham` = $maSanPham";
        return mysqli_query($this->con, $qr);
    }
    public function giamSoLuong($maSanPham){
        $qr = "UPDATE `giohang` SET `soLuong` = `soLuong` - 1 WHERE `maSanPham` = $maSanPham";
        return mysqli_query($this->con, $qr);
    }

    public function ShowbyEmail($email){
        $qr = "SELECT giohang.maSanPham, tenSanPham, gia, hinhAnh, SUM(soLuong) as 'soLuong'
                FROM sanpham INNER JOIN giohang
                ON sanpham.id = giohang.maSanPham
                WHERE email = '$email'
                GROUP BY giohang.maSanPham, tenSanPham";

        return mysqli_query($this->con, $qr);
        
    }
    public function checkMaSanPham($maSanPham){
        $qr = "SELECT maSanPham FROM giohang WHERE masanpham = $maSanPham";
        $result = mysqli_query($this->con, $qr);
        return mysqli_num_rows($result);
    }
    public function Delete($maSanPham){
        $qr = "DELETE FROM `giohang` WHERE `giohang`.`maSanPham` = $maSanPham";
        return mysqli_query($this->con, $qr);

    }
    public function getSoLuongSanPham($email){
        $qr = "SELECT SUM(soLuong) as 'soLuong'FROM giohang WHERE email = '$email'";
        return mysqli_query($this->con, $qr);
    }
    
}

?>