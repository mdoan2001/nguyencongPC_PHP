
<form action="http://localhost/nguyencongpc/KhachHang/Insert" method="POST" class="product">
    <h1 class="product_head">THÊM MỚI KHÁCH HÀNG</h1>
    <div class="content">

        <div class="content-left">
            <div class="product-item">
                <label for="" class="product-label">Email</label>
                <input type="email" name="email" class="product__item-text" value="" required/>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Tên khách hàng</label>
                <textarea name="hoTen" id="" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>
            
            <div class="product-item">
                <label for="" class="product-label">Mật khẩu</label>
                <input type="password" name="matKhau" class="product__item-text" value="" required/>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Loại tài khoản</label>
                <select name="loaiTaiKhoan" id="">
                    <option  value="0">Admin</option>
                    <option  value="1" selected>User</option>
                </select>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Địa chỉ</label>
                <textarea name="diaChi" id="dc" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Số điện thoại</label>
                <textarea name="SDT" id="" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>         
            <input type="submit" value="Thêm mới" name="submit" class="btn-submit">

        </div>
        <div class="content-right">

        </div>
    </div>
</form>
