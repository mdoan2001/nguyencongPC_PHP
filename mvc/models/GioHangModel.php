<?php
class GioHangModel extends DB{

    public function Insert($email, $maSanPham, $soLuong){
        $qr = "INSERT INTO `giohang` VALUES (  '$email','$maSanPham', $soLuong);";
        return mysqli_query($this->con, $qr);
    }
    public function tangSoLuong($email, $maSanPham){
        $qr = "UPDATE `giohang` SET `soLuong` = `soLuong` + 1 WHERE `giohang`.`email` = '$email' AND `giohang`.`maSanPham` = $maSanPham;";
        return mysqli_query($this->con, $qr);
    }
    public function giamSoLuong($email, $maSanPham){
        $qr = "UPDATE `giohang` SET `soLuong` = `soLuong` - 1 WHERE `giohang`.`email` = '$email' AND `giohang`.`maSanPham` = $maSanPham;";
        return mysqli_query($this->con, $qr);
    }

    public function ShowbyEmail($email){
        $qr = "SELECT giohang.maSanPham, tenSanPham, gia, hinhAnh, SUM(soLuong) as 'soLuong'
                FROM sanpham INNER JOIN giohang
                ON sanpham.id = giohang.maSanPham
                WHERE email = '$email'
                GROUP BY giohang.maSanPham, tenSanPham";


        $row =  mysqli_query($this->con, $qr);
        $result = array();
        while($item = mysqli_fetch_assoc($row)){
            array_push($result, $item);
        }
        return json_encode($result);
        
    }
    public function checkMaSanPham($maSanPham){
        $qr = "SELECT maSanPham FROM giohang WHERE masanpham = '$maSanPham'";
        $result = mysqli_query($this->con, $qr);
        return mysqli_num_rows($result);
    }
    public function checkEmail($email){
        $qr = "SELECT email FROM giohang WHERE email = '$email'";
        $result = mysqli_query($this->con, $qr);
        return mysqli_num_rows($result);
    }
    public function Delete($maSanPham){
        $qr = "DELETE FROM `giohang` WHERE `giohang`.`maSanPham` = $maSanPham";
        return mysqli_query($this->con, $qr);

    }
    public function getSoLuongSanPham($email){
        $qr = "SELECT SUM(soLuong) AS 'soLuong' FROM giohang WHERE email = '$email'";
        $row =  mysqli_query($this->con, $qr);
        $result = mysqli_fetch_assoc($row);
        return $result["soLuong"];
    }
    public function getSoLuongByMaSanPham($maSanPham){
        $qr = "SELECT soLuong FROM giohang WHERE maSanPham = $maSanPham";
        $row =  mysqli_query($this->con, $qr);
        $result = mysqli_fetch_assoc($row);
        return $result["soLuong"];
    }
    
}

?>