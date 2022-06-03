<div class="content">
    <div class="grid wide">
        <div class="login__container">
            <form action="http://localhost/nguyencongpc/KhachHang/checkPassword" method="POST" class="login__form">
                <div class="login__title">Thông tin khách hàng đăng nhập hệ thống</div>
                <div class="login__form-item">
                    <div class="login__form-label">Email đăng nhập</div>
                    <input name="email" type="email" class="login__form-input" placeholder="admin@gmail.com" required>
                </div>
                <div class="login__form-item">
                    <div class="login__form-label">Mật khẩu</div>
                    <input name="password" type="password" class="login__form-input" placeholder="123" required>
                </div>
                <div class="login__form-item">
                    <div class="login__form-label"></div>
                    <div class="login__form-submit">
                        <button id="submit" class="login__form-submit-btn">Đăng nhập</button>
                        <script>
                            document.getElementById("submit").submit();
                        </script>
                        <a href="" class="login__form-submit-link">Quên mật khẩu</a>
                    </div>
                </div>
                <div class="login__form-social">
                    <a href="#" class="login__form-social-item login__form-social-item--gg" onclick="showInfoToast();">
                        <div class="login__form-social-icon">
                            <i class="fa-brands fa-google"></i>
                        </div>
                        <div class="login__form-social-text">Đăng nhập bằng Google</div>
                    </a>
                    <a href="#" class="login__form-social-item login__form-social-item--fb" onclick="showInfoToast();">
                        <div class="login__form-social-icon">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                        <div class="login__form-social-text">Đăng nhập bằng Facebook</div>
                    </a>
                </div>
            </form>
            <div class="login__right">
                <div class="login__title">Bạn chưa là thành viên?</div>
                <p class="login__right-text">Đăng ký là thành viên để hưởng nhiều lợi ích và đặt mua hàng dễ dàng hơn.</p>
                <a href="" class="login__right-link">Quên mật khẩu</a>
            </div>
        </div>
    </div>
</div>

