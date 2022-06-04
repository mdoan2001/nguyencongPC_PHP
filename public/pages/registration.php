<div class="content">
    <div class="grid wide">
        <div class="registration__container">
            <h3 class="registration__tittle">Tạo tài khoản khách hàng cá nhân</h3>
            <input type="hidden" name="loaiTaiKhoan" value="1">
            <form action="http://localhost/nguyencongpc/KhachHang/Insert" class="registration__form" method="POST">
                <input type="hidden" name="loaiTaiKhoan" value="1">

                <div class="registration__form-item">
                    <label class="registration__form-label">Email đăng ký*</label>
                    <input name="email" type="text" class="registration__form-input" required>
                    <span class="registration__form-span">Email đã tồn tại</span>              
                </div>
                <div class="registration__form-item">
                    <label class="registration__form-label">Tên*</label>
                    <input name="hoTen" type="text" class="registration__form-input" required>
                </div>
                <div class="registration__form-item">
                    <label class="registration__form-label">Số di động*</label>
                    <input name="SDT" type="text" class="registration__form-input" required>
                </div>
                <div class="registration__form-item">
                    <label class="registration__form-label">Mật khẩu*</label>
                    <input name="matKhau" id="matKhau" type="password" class="registration__form-input" required>
                </div>
                <div class="registration__form-item">
                    <label class="registration__form-label">Nhập lại mật khẩu*</label>
                    <input id="nhapLaiMatKhau" type="password" class="registration__form-input" required>    
                    <span class="registration__form-span">Mật khẩu nhập lại chưa khớp</span>              
                </div>
                
                <div class="registration__form-item">
                    <label class="registration__form-label">Địa chỉ</label>
                    <input name="diaChi" type="text" class="registration__form-input" required>
                </div>               
                <div class="registration__form-item">
                    <label class="registration__form-label"></label>
                    <input name="submit" id="submit" type="submit" value="ĐĂNG KÝ" class="registration__form--submit">
                </div>

            </form>
        </div>
    </div>
</div>

<script src="./public/assets/js/registration.js"></script>