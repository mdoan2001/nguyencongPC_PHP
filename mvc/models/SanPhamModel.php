<?php
class SanPhamModel extends DB{
    public function GetList(){
        $qr = "SELECT sanpham.id, tenSanPham, maNSX, tenNSX, hinhAnh, soLuong, gia FROM `sanpham` INNER JOIN `khohang` ON `sanpham`.id = `khohang`.id
        INNER JOIN `hangsanxuat` ON `sanpham`.maNSX = `hangsanxuat`.id";
        return mysqli_query($this->con, $qr);
    }
    public function GetListByNSX($idNSX){
        $qr = "SELECT sanpham.id, tenSanPham, tenNSX, hinhAnh, soLuong, gia FROM `sanpham` INNER JOIN `khohang` ON `sanpham`.id = `khohang`.id
        INNER JOIN `hangsanxuat` ON `sanpham`.maNSX = `hangsanxuat`.id WHERE maNSX = $idNSX";
        return mysqli_query($this->con, $qr);
    }
    public function getLastId(){
        $qr = "SELECT `id` FROM `sanpham` ORDER BY `id` DESC LIMIT 1";
        return mysqli_query($this->con, $qr);
    }
    public function Insert($ten, $nsx, $anh, $gia){
        $qr = "INSERT INTO `sanpham` (`id`, `tenSanPham`, `maNSX`, `hinhAnh`, `gia`) VALUES (NULL, '$ten', '$nsx', '$anh', '$gia');";
        return mysqli_query($this->con, $qr);
    }
    public function UpdateById($id, $ten, $maNSX, $anh, $gia){
        $qr = "UPDATE `sanpham` SET `tenSanPham` = '$ten', `gia` = '$gia', `maNSX`='$maNSX', `hinhAnh`='$anh' WHERE `sanpham`.`id` = $id;";
        return mysqli_query($this->con, $qr);
    }
    public function DeleteById($id){
        $qr = "DELETE from `sanpham` WHERE `sanpham`.`id` = $id";
        return mysqli_query($this->con, $qr);
    }
    public function GetGiaById($id){
        $qr = "SELECT gia FROM sanpham WHERE id = '$id'";
        return mysqli_query($this->con, $qr);
    }
}

?>