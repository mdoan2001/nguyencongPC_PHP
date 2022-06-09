<?php
class ChiTietSanPhamModel extends DB{
 
    public function ChiTietSanPham($id){
        $qr = "SELECT sanpham.id, tenSanPham, maNSX, hinhAnh, gia, CPU, VGA, RAM, dungLuong, trongLuong, mauSac, soLuong FROM `sanpham` INNER JOIN `chitietsanpham` ON `sanpham`.id = `chitietsanpham`.id 
        INNER JOIN `khohang` ON `sanpham`.`id` = `khohang`.`id` WHERE `sanpham`.`id` = $id";
        $row =  mysqli_query($this->con, $qr);
        $result = mysqli_fetch_assoc($row);
        return json_encode($result);
    }

    public function Insert($id, $cpu, $vga, $ram, $dl, $tl, $mau){
        $qr = "INSERT INTO `chitietsanpham` (`id`, `CPU`, `VGA`, `RAM`, `dungLuong`, `trongLuong`, `mauSac`) VALUES ('$id', '$cpu', '$vga', '$ram', '$dl', '$tl', '$mau');";
        return  mysqli_query($this->con, $qr);
    }

    public function UpdateById($id, $cpu, $vga, $ram, $dl, $tl, $mau){
        $qr = "UPDATE `chitietsanpham` SET `CPU` = '$cpu', `VGA` = '$vga', `RAM`='$ram', `dungLuong`='$dl', `trongLuong`='$tl', `mauSac` = '$mau' WHERE id = $id;";
        return mysqli_query($this->con, $qr);
    }
    public function DeleteById($id){
        $qr = "DELETE from `chitietsanpham` WHERE `chitietsanpham`.`id` = $id";
        return mysqli_query($this->con, $qr);
 
    }
}

?>