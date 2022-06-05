<?php
class DonHangModel extends DB{

    public function GetListByEmail($email){
        $qr = " SELECT donhang.id, email, ngayMua, hoTen, SDT, diaChi, ghiChu, SUM(tongTien) as 'tongTien'
                FROM donhang INNER JOIN chitietdonhang
                ON donhang.id = chitietdonhang.maDonHang
                WHERE email = '$email'
                GROUP BY donhang.id";
        return mysqli_query($this->con, $qr);

    }

    public function Insert($email, $hoTen, $SDT, $ngayMua, $diaChi, $ghiChu ){
        $qr = "INSERT INTO `donhang` (`id`, `email`, `ngayMua`, `hoTen`, `SDT`, `diaChi`, `ghiChu`) VALUES (NULL, '$email', '$ngayMua', '$hoTen', '$SDT', '$diaChi', '$ghiChu');";
        return mysqli_query($this->con, $qr);
    }
    public function GetLastID(){
        $qr = "SELECT id FROM donhang  ORDER BY id DESC LIMIT 1";
        return mysqli_query($this->con, $qr);
    }

    function GetDonHangByID($id){
        $qr = "SELECT * FROM donhang WHERE id = '$id'";
        return mysqli_query($this->con, $qr);
    }
    public function DeleteDHByMaDonHang($maDonHang){
        $qr = "DELETE FROM `donhang` WHERE `id` = '$maDonHang'";
        return mysqli_query($this->con, $qr);
    }
    public function getSoLuongDonHang($email){
        $qr = "SELECT count(id) AS 'soLuong' FROM donhang WHERE email = '$email'";
        return mysqli_query($this->con, $qr);
    }
}

?>