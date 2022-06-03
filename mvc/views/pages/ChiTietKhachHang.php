<?php
$hoTen = $data["user"]["hoTen"];
$email = $data["user"]["email"];
$diaChi = $data["user"]["diaChi"];
$loaiTaiKhoan = $data["user"]["loaiTaiKhoan"];
$SDT = $data["user"]["SDT"];
$matKhau = $data["user"]["matKhau"];

?>



<form action="http://localhost/nguyencongpc/KhachHang/UpdateByEmail" method="POST" class="product">
    <h1 class="product_head">CHI TIẾT KHÁCH HÀNG</h1>
    <div class="content">

        <div class="content-left">
            <div class="product-item">
                <label for="" class="product-label">Email</label>
                <input type="email"  class="product__item-text" value="<?php echo $email?>" disabled/>
                <input type="hidden" name="email" class="product__item-text" value="<?php echo $email?>"/>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Tên khách hàng</label>
                <textarea name="hoTen" id="" cols="100" rows="2" class="product-tarea" required><?php echo $hoTen?></textarea>
            </div>           
            <div class="product-item">
                <label for="" class="product-label">Mật khẩu</label>
                <input type="password" name="matKhau" class="product__item-text" value="<?php echo $matKhau?>" required/>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Loại tài khoản</label>
                <select name="loaiTaiKhoan" id="">
                    <option <?php echo ($loaiTaiKhoan == 0)?"selected":"" ?> value="0">Admin</option>
                    <option <?php echo ($loaiTaiKhoan == 1)?"selected":"" ?> value="1">User</option>
                </select>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Địa chỉ</label>
                <textarea name="diaChi" id="dc" cols="100" rows="2" class="product-tarea" required><?php echo $diaChi?></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Số điện thoại</label>
                <textarea name="SDT" id="" cols="100" rows="2" class="product-tarea" required><?php echo $SDT?></textarea>
            </div>         
            <input type="submit" value="Cập nhật" name="submit" class="btn-submit">

        </div>
        <div class="content-right">

        </div>
    </div>
</form>
