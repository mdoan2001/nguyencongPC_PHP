<div class="content">
    <div class="grid wide">
        <!-- ĐẶT HÀNG -->

        <?php  for($i=0; $i<count($data["content"]); $i++) {?>
        <div  class="content__order">
            <div class="content__order-col">
                <div class="content__order-tittle">THÔNG TIN NGƯỜI MUA</div>
                <div class="content__order-item">
                    <label class="content__order-label">Mã đơn hàng</label>
                    <input type="text" class="content__order-input" value="DH0<?php echo $data['content'][$i]['id'] ?>" disabled>
                </div>

                <div class="content__order-item">
                    <label class="content__order-label">Ngày đặt hàng</label>
                    <input type="text" class="content__order-input" value="<?php echo $data['content'][$i]['ngayMua'] ?>" disabled>
                </div>

                <div class="content__order-item">
                    <label class="content__order-label">Họ tên*</label>
                    <input type="text" class="content__order-input" value="<?php echo $data['content'][$i]['hoTen'] ?>" disabled>
                </div>

                <div class="content__order-item">
                    <label class="content__order-label">SĐT*</label>
                    <input type="text" class="content__order-input" value="<?php echo $data['content'][$i]['SDT'] ?>" disabled>
                </div>

                <div class="content__order-item">
                    <label class="content__order-label">Email*</label>
                    <input class="content__order-input" value="<?php echo $data['content'][$i]['email'] ?>" disabled>
                </div>

                
            </div>
            <div class="content__order-col">
                <div class="content__order-tittle">ĐỊA CHỈ NHẬN HÀNG</div>
                <div class="content__order-item">
                    <label class="content__order-label">Địa chỉ*</label>
                    <input type="text" class="content__order-input" value="<?php echo $data['content'][$i]['diaChi'] ?>" disabled>
                </div>

                <div class="content__order-item">
                    <label class="content__order-label">Ghi chú</label>
                    <textarea id="" disabled cols="30" rows="10" class="content__order-tarea"><?php echo $data['content'][$i]['ghiChu'] ?></textarea>
                </div>
            </div>
            <div class="content__order-col">
                <div class="content__order-tittle">TỔNG TIỀN</div>
                <div class="content__order-money">
                    <div class="content__order-text">Tổng cộng</div>
                    <div class="content__order-num"><?php echo number_format($data['content'][$i]["tongTien"])?>đ</div>
                </div>
                <div class="content__order-money">
                    <div class="content__order-text content__order-text--bold">Thành tiền</div>
                    <div class="content__order-num content__order-num--red"><?php echo number_format($data['content'][$i]["tongTien"])?>đ</div>
                </div>
                <div class="content__order-money">
                    <div class="content__order-text"></div>
                    <div class="content__order-num">(Giá đã bao gồm VAT)</div>
                </div>

                <div class="content__order-click">
                    <a href="http://localhost/nguyencongpc/DonHang/ChiTietDonHang/<?php echo $data['content'][$i]['id']?>" id="submit" class="content__order-btn content__order-btn--100 content__order-btn--orange ">
                        <i class="fa-solid fa-check content__order-btn-icon"></i>CHI TIẾT ĐƠN HÀNG
                    </a>
                    <a href="http://localhost/nguyencongpc/DonHang/HuyDonHangById/<?php echo $data['content'][$i]['id']?>" id="submit" class="content__order-btn content__order-btn--100 content__order-btn--red">
                        <i class="fa-solid fa-check content__order-btn-icon"></i>HỦY ĐƠN HÀNG
                    </a>
                </div>
            </div>

        </div>
        <?php }?>

    </div>
</div>