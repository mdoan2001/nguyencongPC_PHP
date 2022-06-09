<div class="content">
    <div class="grid wide">
        <div class="content__head">
            <div class="content__head-row content__head-row--border">
                <div class="content__head-tittle">THÔNG TIN GIỎ HÀNG</div>
                <div>
                    <div class="content__head-tittle">CHỌN SẢN PHẨM KHÁC</div>
                    <div class="content__head-tittle">XÓA GIỎ HÀNG</div>
                </div>
            </div>

            <div class="content__head-row">
                <div class="content__head-name">Sản phẩm</div>
                <div>
                    <div class="content__head-name">Đơn giá</div>
                    <div class="content__head-name">Số lượng</div>
                    <div class="content__head-name">Số tiền</div>
                    <div class="content__head-name">Thao tác</div>
                </div>
            </div>
        </div>

        <!-- Danh sach san pham -->
        <?php foreach($data["array"] as $key =>$value){?>

        <div class="content__product">
            <img src="<?php echo $value->hinhAnh?>" alt="" class="content__product-img">
            <div class="content__product-des">
                <div class="content__product-name">
                    <?php echo $value->tenSanPham?>
                </div>
                <p class="content__product-text content__product-text--red">
                    Khuyến mại
                </p>
                <p class="content__product-text"> + Túi/Balo laptop trị giá : 390.000đ </p>
                <p class="content__product-text"> + Chuột không dây trị giá: 150.000đ </p>
                <p class="content__product-text"> + Bàn di chuột trị giá: 50.000đ </p>
                <p class="content__product-text"> + Bộ vệ sinh Laptop trị giá: 40.000đ </p>
                <p class="content__product-text"> + Vệ sinh bảo dưỡng Laptop miễn phí trọn đời trị giá: 1 triệu đồng </p>
                <p class="content__product-text"> + Giảm 10% khi mua thêm RAM, HDD laptop </p>
                <p class="content__product-text"> + Giảm 5% khi mua kèm Gear, Đế tản nhiệt Laptop </p>
            </div>
            <div class="content__product-price"><?php echo number_format($value->gia)?>đ</div>
            <div class="content__product-quantity">
                <a href="http://localhost/nguyencongpc/GioHang/giamSoLuong/<?php echo $value->maSanPham?>" class="content__product-btn">-</a>
                <div class="content__product-quantity-text"><?php echo $value->soLuong?></div>
                <a href="http://localhost/nguyencongpc/GioHang/tangSoLuong/<?php echo $value->maSanPham?>" class="content__product-btn">+</a>
            </div>
            <div class="content__product-money"><?php echo  number_format($value->gia * $value->soLuong)?>đ</div>
            <div class="content__product-remove">
                <a href="http://localhost/nguyencongpc/GioHang/Delete/<?php echo $value->maSanPham?>" class="fa-solid fa-trash-can content__product-remove-icon"></a>
            </div>
        </div>

        <?php  }?>


        <!-- ĐẶT HÀNG -->
        <form action="http://localhost/nguyencongpc/DonHang/DatHang" method="POST" class="content__order">
            <input name="ngayMua" type="hidden" value="<?php echo  date("Y-m-d "); ?>">
            <div class="content__order-col">
                <div class="content__order-tittle">THÔNG TIN NGƯỜI MUA</div>
                <p class="content__order-text">Để tiếp tục đặt hàng, quý khách xin vui lòng nhập thông tin bên dưới</p>
                <div class="content__order-item">
                    <label class="content__order-label">Họ tên*</label>
                    <input name="hoTen" type="text" class="content__order-input" required>
                </div>

                <div class="content__order-item">
                    <label class="content__order-label">SĐT*</label>
                    <input name="SDT" type="text" class="content__order-input" required>
                </div>

                <div class="content__order-item">
                    <label class="content__order-label">Email*</label>
                    <input type="email" class="content__order-input" value="<?php echo $_SESSION["email"] ?>" disabled>
                    <input name="email" type="hidden" class="content__order-input" value="<?php echo $_SESSION["email"] ?>">
                </div>

                <div class="content__order-item">
                    <label class="content__order-label">Địa chỉ*</label>
                    <input name="diaChi" type="text" class="content__order-input" required>
                </div>

                <div class="content__order-item">
                    <label class="content__order-label">Ghi chú</label>
                    <textarea name="ghiChu" id="" cols="30" rows="10" class="content__order-tarea"></textarea>
                </div>
            </div>
            <div class="content__order-col">
                <div class="content__order-tittle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="content__order-pay">
                    <input name="pay" id="01" type="radio" class="content__order-pay-radio" checked>
                    <label for="01" class="content__order-pay-label">Thanh toán khi nhận hàng</label>
                </div>
                <div class="content__order-pay">
                    <input name="pay" id="02" type="radio" class="content__order-pay-radio">
                    <label for="02" class="content__order-pay-label">Thanh toán bằng thẻ </label>
                </div>
            </div>
            <div class="content__order-col">
                <div class="content__order-tittle">TỔNG TIỀN</div>
                <div class="content__order-money">
                    <div class="content__order-text">Tổng cộng</div>
                    <div class="content__order-num"><?php echo number_format($data["tongTien"])?>đ</div>
                </div>
                <div class="content__order-money">
                    <div class="content__order-text content__order-text--bold">Thành tiền</div>
                    <div class="content__order-num content__order-num--red"><?php echo number_format($data["tongTien"])?>đ</div>
                </div>
                <div class="content__order-money">
                    <div class="content__order-text"></div>
                    <div class="content__order-num">(Giá đã bao gồm VAT)</div>
                </div>

                <div class="content__order-click">
                    <button id="submit" class="content__order-btn content__order-btn--100 content__order-btn--red">
                        <i class="fa-solid fa-check content__order-btn-icon"></i>ĐẶT HÀNG
                    </button>
                    <script>
                        document.getElementById("submit").submit();
                    </script>
                </div>
            </div>

        </form>

    </div>
</div>