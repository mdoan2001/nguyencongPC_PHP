<?php
$gia = $sl = 0;
$id= $ten = $anh = $cpu = $ram = $vga = $dl = $tl = $mau = "";

if(isset($data["des"]["id"]) && isset($data["des"]["tenSanPham"]) && isset($data["des"]["gia"]) && isset($data["des"]["hinhAnh"]) &&
 isset($data["des"]["CPU"]) && isset($data["des"]["RAM"]) && isset($data["des"]["VGA"]) && isset($data["des"]["dungLuong"]) &&
 isset($data["des"]["trongLuong"]) && isset($data["des"]["mauSac"]) && isset($data["des"]["soLuong"])){

    $id = $data["des"]["id"];
    $ten = $data["des"]["tenSanPham"];
    $gia = $data["des"]["gia"];
    $anh = $data["des"]["hinhAnh"];
    $cpu = $data["des"]["CPU"];
    $ram = $data["des"]["RAM"];
    $vga = $data["des"]["VGA"];
    $dl = $data["des"]["dungLuong"];
    $tl = $data["des"]["trongLuong"];
    $mau = $data["des"]["mauSac"];
    $sl = $data["des"]["soLuong"];
 }

?>


<form action="http://localhost/nguyencongpc/SanPham/UpdatebyId" method="POST" class="product">
    <h1 class="product_head">CHI TIẾT SẢN PHẨM</h1>
    <div class="content">

        <div class="content-left">
            <div class="product-item">
                <label for="" class="product-label">Mã Sản Phẩm</label>
                <input class="product__item-text" value="SP0<?php echo $id?>" disabled />
                <input type="hidden" name="id" value="<?php echo $id?>" />
            </div>
            <div class="product-item">
                <label for="" class="product-label">Tên sản phẩm</label>
                <textarea name="ten" id="" cols="100" rows="3" class="product-tarea"><?php echo $ten?></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Hãng sản xuất</label>
                <select name="nsx" id="">
                    <?php
                    $idNSXofSP = $data["des"]["maNSX"];
                    for($i=0; $i<count($data["nsx"]); $i++){
                        $idNSX = $data["nsx"][$i]["id"];
                        $tenNSX = $data["nsx"][$i]["tenNSX"];
                        if($idNSXofSP == $idNSX){
                            echo '<option selected value="'.$idNSX.'">'.$idNSX.' - '.$tenNSX.'</option>';
                        }
                        else{
                            echo '<option value="'.$idNSX.'">'.$idNSX.' - '.$tenNSX.'</option>';
                        }
                    }

                    ?>


                    <!-- <option value="">01 - DELL</option>
                    <option value="">02 - ASUS</option>
                    <option value="">03 - HP</option> -->
                </select>
            </div>
            <div class="product-item">
                <label for="" class="product-label">SỐ LƯỢNG</label>
                <input name="sl" type="number" class="product-input" value="<?php echo $sl?>">
            </div>
            <div class="product-item">
                <label for="" class="product-label">GIÁ</label>
                <textarea name="gia" id="" cols="100" rows="3" class="product-tarea"><?php echo $gia?></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">HÌNH ẢNH</label>
                <textarea name="anh" id="" cols="100" rows="3" class="product-tarea"><?php echo $anh?></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">CPU</label>
                <textarea name="cpu" id="" cols="100" rows="3" class="product-tarea"><?php echo $cpu?></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">VGA</label>
                <textarea name="vga" id="" cols="100" rows="3" class="product-tarea"><?php echo $vga?></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">RAM</label>
                <textarea name="ram" id="" cols="100" rows="3" class="product-tarea"><?php echo $ram?></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">DUNG LƯỢNG</label>
                <textarea name="dl" id="" cols="100" rows="3" class="product-tarea"><?php echo $dl?></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">TRỌNG LƯỢNG</label>
                <textarea name="tl" id="" cols="100" rows="3" class="product-tarea"><?php echo $tl?></textarea>               
            </div>
            <div class="product-item">
                <label for="" class="product-label">MÀU SẮC</label>
                <input name="mau" type="text" class="product-input" value="<?php echo $mau?>">
            </div>
            
            <input type="submit" value="Cập nhật" name="submit" class="btn-submit">
        </div>
        <div class="content-right">
            <img src="<?php echo $data["des"]["hinhAnh"]?>" alt="hinh anh" class="product-img">
        </div>
    </div>
</form>
