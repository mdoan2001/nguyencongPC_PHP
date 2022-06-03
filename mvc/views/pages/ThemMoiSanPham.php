
<form action="http://localhost/nguyencongpc/SanPham/Insert" method="POST" class="product">
    <h1 class="product_head">THÊM MỚI SẢN PHẨM</h1>
    <div class="content">

        <div class="content-left">
            <div class="product-item">
                <label for="" class="product-label">Mã Sản Phẩm</label>
                <input name="id" class="product__item-text" value="" disabled />
            </div>
            <div class="product-item">
                <label for="" class="product-label">Tên sản phẩm</label>
                <textarea name="ten" id="" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Hãng sản xuất</label>
                <select name="nsx" id="">
                    <?php
                    for($i=0; $i<count($data["nsx"]); $i++){
                        $idNSX = $data["nsx"][$i]["id"];
                        $tenNSX = $data["nsx"][$i]["tenNSX"];                      
                        echo '<option value="'.$idNSX.'">'.$idNSX.' - '.$tenNSX.'</option>';                       
                    }

                    ?>


                    <!-- <option value="">01 - DELL</option>
                    <option value="">02 - ASUS</option>
                    <option value="">03 - HP</option> -->
                </select>
            </div>
            <div class="product-item">
                <label for="" class="product-label">SỐ LƯỢNG</label>
                <input name="sl" type="number" min="0" required class="product-input" value="<?php echo $sl?>">
            </div>
            <div class="product-item">
                <label for="" class="product-label">GIÁ</label>
                <textarea name="gia" id="" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">HÌNH ẢNH</label>
                <textarea name="anh" id="" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">CPU</label>
                <textarea name="cpu" id="" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">VGA</label>
                <textarea name="vga" id="" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">RAM</label>
                <textarea name="ram" id="" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">DUNG LƯỢNG</label>
                <textarea name="dl" id="" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">TRỌNG LƯỢNG</label>
                <textarea name="tl" id="" cols="100" rows="2" class="product-tarea" required></textarea>               
            </div>
            <div class="product-item">
                <label for="" class="product-label">MÀU SẮC</label>
                <input name="mau" type="text" class="product-input" value="" required>
            </div>
            <input type="submit" value="Thêm mới" name="submit" class="btn-submit">

        </div>
        <div class="content-right">

        </div>
    </div>
</form>
