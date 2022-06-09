<?php

class DonHangModel extends DB{

    public function GetListByEmail($email){
        $qr = " SELECT donhang.id, email, ngayMua, hoTen, SDT, diaChi, ghiChu, SUM(tongTien) as 'tongTien'
                FROM donhang INNER JOIN chitietdonhang
                ON donhang.id = chitietdonhang.maDonHang
                WHERE email = '$email'
                GROUP BY donhang.id";
        $row =  mysqli_query($this->con, $qr);
        $result = array();
        while($item = mysqli_fetch_assoc($row)){
            array_push($result, $item);
        }
        return json_encode($result);
    }

    public function Insert($email, $hoTen, $SDT, $ngayMua, $diaChi, $ghiChu ){
        $qr = "INSERT INTO `donhang` (`id`, `email`, `ngayMua`, `hoTen`, `SDT`, `diaChi`, `ghiChu`) VALUES (NULL, '$email', '$ngayMua', '$hoTen', '$SDT', '$diaChi', '$ghiChu');";
        return mysqli_query($this->con, $qr);
    }
    public function GetLastID(){
        $qr = "SELECT id FROM donhang  ORDER BY id DESC LIMIT 1";
        $row =  mysqli_query($this->con, $qr);
        $result = mysqli_fetch_assoc($row);
        return $result["id"];
    }

    function GetDonHangByID($id){
        $qr = "SELECT * FROM donhang WHERE id = '$id'";
        $row =  mysqli_query($this->con, $qr);
        $result = mysqli_fetch_assoc($row);
        return json_encode($result);
    }

    public function DeleteDHByMaDonHang($maDonHang){
        $qr = "DELETE FROM `donhang` WHERE `id` = '$maDonHang'";
        return mysqli_query($this->con, $qr);

    }
    
    public function getSoLuongDonHang($email){
        $qr = "SELECT count(id) AS 'soLuong' FROM donhang WHERE email = '$email'";
        $row =  mysqli_query($this->con, $qr);
        $result = mysqli_fetch_assoc($row);
        return $result["soLuong"];
    }
}

?>