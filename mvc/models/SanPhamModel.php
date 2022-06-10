<?php
class SanPhamModel extends DB{
    public function GetList(){
        $qr = "SELECT sanpham.id, tenSanPham, maNSX, tenNSX, hinhAnh, soLuong, gia FROM `sanpham` INNER JOIN `khohang` ON `sanpham`.id = `khohang`.id
        INNER JOIN `hangsanxuat` ON `sanpham`.maNSX = `hangsanxuat`.id";
        $row =  mysqli_query($this->con, $qr);
        $result = array();
        while($item = mysqli_fetch_assoc($row)){
            array_push($result, $item);
        }
        return json_encode($result);
    }
    public function GetListByNSX($idNSX){
        $qr = "SELECT sanpham.id, tenSanPham, tenNSX, hinhAnh, soLuong, gia FROM `sanpham` INNER JOIN `khohang` ON `sanpham`.id = `khohang`.id
        INNER JOIN `hangsanxuat` ON `sanpham`.maNSX = `hangsanxuat`.id WHERE maNSX = $idNSX";
        $row =  mysqli_query($this->con, $qr);
        $result = array();
        while($item = mysqli_fetch_assoc($row)){
            array_push($result,$item);
        }
        return json_encode($result);
    }

    public function GetListByName($name){
        $qr = "SELECT sanpham.id, tenSanPham, maNSX, tenNSX, hinhAnh, soLuong, gia FROM `sanpham` INNER JOIN `khohang` ON `sanpham`.id = `khohang`.id
        INNER JOIN `hangsanxuat` ON `sanpham`.maNSX = `hangsanxuat`.id WHERE `sanpham`.`tenSanPham` LIKE '%$name%'";
        $row =  mysqli_query($this->con, $qr);
        $result = array();
        while($item = mysqli_fetch_assoc($row)){
            array_push($result,$item);
        }
        return json_encode($result);

    }

    public function getLastId(){
        $qr = "SELECT `id` FROM `sanpham` ORDER BY `id` DESC LIMIT 1";
        $row =  mysqli_query($this->con, $qr);
        $result = mysqli_fetch_assoc($row);
        return $result["id"];
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