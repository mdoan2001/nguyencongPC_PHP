<?php
$id = $data["nv"]->id;
$hoTen = $data["nv"]->hoTen;
$email = $data["nv"]->email;
$diaChi = $data["nv"]->diaChi;
$gioiTinh = $data["nv"]->gioiTinh;
$SDT = $data["nv"]->SDT;
$hinhAnh = $data["nv"]->hinhAnh;

?>



<form action="http://localhost/nguyencongpc/NhanVien/UpdateById" method="POST" class="product">
    <h1 class="product_head">CHI TIẾT NHÂN VIÊN</h1>
    <div class="content">

        <div class="content-left">
            <div class="product-item">
                <label for="" class="product-label">Mã nhân viên</label>
                <input class="product__item-text" value="NV<?php echo $id?>" disabled />
                <input type="hidden" name="id" value="<?php echo $id?>" />
            </div>
            <div class="product-item">
                <label for="" class="product-label">Tên nhân viên</label>
                <textarea name="hoTen" id="" cols="100" rows="2" class="product-tarea" required><?php echo $hoTen?></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Giới tính</label>
                <input type="radio" <?php echo ($gioiTinh == 0)?"checked":""  ?> name="gioiTinh" value="0">Nam&nbsp;<input type="radio" <?php echo ($gioiTinh == 1)?"checked":""  ?> name="gioiTinh" value="1">Nữ
            </div>

            <div class="product-item">
                <label for="" class="product-label">Email</label>
                <input type="email" name="email" class="product__item-text" value="<?php echo $email?>" required/>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Địa chỉ</label>
                <textarea name="diaChi" id="dc" cols="100" rows="2" class="product-tarea" required><?php echo $diaChi?></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Số điện thoại</label>
                <textarea name="SDT" id="" cols="100" rows="2" class="product-tarea" required><?php echo $SDT?></textarea>
            </div>   
                    
            <div class="product-item">
                <label for="" class="product-label">Hình ảnh</label>
                <textarea name="hinhAnh" id="" cols="100" rows="2" class="product-tarea" required><?php echo $hinhAnh?></textarea>
            </div>       
            <input type="submit" value="Cập nhật" name="submit" class="btn-submit">

        </div>
        <div class="content-right">
            <img src="<?php echo $hinhAnh ?>" alt="hinh anh" class="product-img">
        </div>
    </div>
</form>
