<?php

class ChiTietDonHangModel extends DB{

    public function Insert($maDonHang, $maSanPham, $soLuong, $tongTien){
        $qr = "INSERT INTO `chitietdonhang` (`id`, `maDonHang`, `maSanPham`, `soLuong`, `tongTien`) VALUES (NULL, '$maDonHang', '$maSanPham', '$soLuong', '$tongTien');";
        return mysqli_query($this->con, $qr);
    }
}

?>
