<?php

class ChiTietDonHangModel extends DB{

    public function Insert($maDonHang, $maSanPham, $soLuong, $tongTien){
        $qr = "INSERT INTO `chitietdonhang` (`id`, `maDonHang`, `maSanPham`, `soLuong`, `tongTien`) VALUES (NULL, '$maDonHang', '$maSanPham', '$soLuong', '$tongTien');";
        return mysqli_query($this->con, $qr);
    }
    public function GetCTDHByMaDonHang($maDonHang){
        $qr = "SELECT * FROM `chitietdonhang` INNER JOIN `sanpham` ON `chitietdonhang`.`maSanPham` = `sanpham`.`id` WHERE maDonHang = $maDonHang;";
        $row =  mysqli_query($this->con, $qr);
        $result = array();
        while($item = mysqli_fetch_assoc($row)){
            array_push($result, $item);
        }
        return json_encode($result);
    }
    public function DeleteCTDHByMaDonHang($maDonHang){
        $qr = "DELETE FROM `chitietdonhang` WHERE `maDonHang` = '$maDonHang'";
        return mysqli_query($this->con, $qr);
    }
}

?>
