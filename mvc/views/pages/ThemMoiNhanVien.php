
<form action="http://localhost/nguyencongpc/NhanVien/Insert" method="POST" class="product">
    <h1 class="product_head">THÊM MỚI NHÂN VIÊN</h1>
    <div class="content">

        <div class="content-left">
            <div class="product-item">
                <label for="" class="product-label">Mã nhân viên</label>
                <input name="id" class="product__item-text" value="" disabled />
            </div>
            <div class="product-item">
                <label for="" class="product-label">Tên nhân viên</label>
                <textarea name="hoTen" id="" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Giới tính</label>
                <input type="radio" checked name="gioiTinh" value="0">Nam&nbsp;<input type="radio" name="gioiTinh" value="1">Nữ
            </div>

            <div class="product-item">
                <label for="" class="product-label">Email</label>
                <input type="email" name="email" class="product__item-text" value="" required/>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Địa chỉ</label>
                <textarea name="diaChi" id="dc" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>
            <div class="product-item">
                <label for="" class="product-label">Số điện thoại</label>
                <textarea name="SDT" id="" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>   
                    
            <div class="product-item">
                <label for="" class="product-label">Hình ảnh</label>
                <textarea name="hinhAnh" id="" cols="100" rows="2" class="product-tarea" required></textarea>
            </div>       
            <input type="submit" value="Thêm mới" name="submit" class="btn-submit">

        </div>
        <div class="content-right">

        </div>
    </div>
</form>
