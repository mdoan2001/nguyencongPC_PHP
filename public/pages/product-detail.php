<style>
    .content__tittle{
        line-height: 30px;
    }
</style>

<?php  
$item = $data["array"];

?>

<div class="content ">
    <div class="grid wide">
        <div class="content__head">
            <h1 class="content__tittle">
                <?php echo $item["tenSanPham"]?>
            </h1>
            <div class="content__inf">

                <div class="content__inf-item content__inf-item--after">
                    Mã SP: <span class="content__inf-span">SP<?php echo $item["id"]?></span>
                </div>
                <div class="content__inf-item content__inf-item--after">
                    Đánh giá:&nbsp;
                    <i class="fa-solid fa-star content__inf-star content__inf-star--active"></i>
                    <i class="fa-solid fa-star content__inf-star content__inf-star--active"></i>
                    <i class="fa-solid fa-star content__inf-star content__inf-star--active"></i>
                    <i class="fa-solid fa-star content__inf-star content__inf-star--active"></i>
                    <i class="fa-solid fa-star content__inf-star content__inf-star--active"></i>
                    <i class="fa-solid fa-star content__inf-star content__inf-star--active"></i>
                    <i class="fa-solid fa-star content__inf-star content__inf-star--active"></i>
                    <i class="fa-solid fa-star content__inf-star"></i>
                    <i class="fa-solid fa-star content__inf-star"></i>
                    <i class="fa-solid fa-star content__inf-star"></i>
                    <span class="content__inf-span">5</span>
                </div>
                <div class="content__inf-item content__inf-item--after">
                    Bình luận: <span class="content__inf-span">0</span>
                </div>
                <div class="content__inf-item content__inf-item--after">
                    Lượt xem: <span class="content__inf-span">1626</span>
                </div>
                <div class="content__inf-item">
                    <a href="" class="content__inf-btn">
                        <i class="fa-solid fa-thumbs-up content__inf-like"></i> Thích
                    </a>
                    <a href="" class="content__inf-btn">
                        Chia sẻ
                    </a>
                </div>
            </div>
        </div>

        <div class="content__main">
            <div class="content__main-left">
                <img src="<?php echo $item["hinhAnh"]?>" alt="" class="content__main-bigimg">
                <div class="content__main-left-list">
                    <div class="content__main-left-item content__main-left-item--active">
                        <img src="./public/assets/img/product/3.jpg" alt="" class="content__main-left-smallimg">
                    </div>
                    <div class="content__main-left-item">
                        <img src="./public/assets/img/product/4.jpg" alt="" class="content__main-left-smallimg">
                    </div>
                    <div class="content__main-left-item">
                        <img src="./public/assets/img/product/5.jpg" alt="" class="content__main-left-smallimg">
                    </div>
                    <div class="content__main-left-item">
                        <img src="./public/assets/img/product/6.jpg" alt="" class="content__main-left-smallimg">
                    </div>
                    <div class="content__main-left-item">
                        <img src="./public/assets/img/product/7.jpg" alt="" class="content__main-left-smallimg">
                    </div>
                </div>
            </div>
            <div class="content__main-mid">
                <div class="content__main-inf">
                    <h3 class="content__main-inf-item content__main-inf-item--after">
                        Tình trạng: <span class="content__main-inf-span content__main-inf-span--green">Còn hàng</span>
                    </h3>
                    <h3 class="content__main-inf-item">
                        Bảo hành: <span class="content__main-inf-span content__main-inf-span--red">12 Tháng</span>
                    </h3>
                </div>
                <div class="content__main-price">
                    <div class="content__main-price-item">
                        <div class="content__main-price-label">Giá bán:</div>
                        <div class="content__main-price-del"><?php echo number_format($item["gia"] + $item["gia"]*0.1)?>đ</div>
                    </div>
                    <div class="content__main-price-item">
                        <div class="content__main-price-label">Giá khuyến mại:</div>
                        <div class="content__main-price-now">
                            <?php echo number_format($item["gia"])?>đ
                            <span class="content__main-price-sale">(Tiết kiệm <?php echo number_format($item["gia"] *0.1)?>đ)</span>
                        </div>
                    </div>
                </div>
                <div class="content__main-offer">
                    <div class="content__main-offer-tittle">
                        <i class="fa-solid fa-gift content__main-offer-gift"></i> Khuyến mại
                    </div>
                    <p class="content__main-offer-text">+ Túi/Balo trị giá: 390.000đ</p>
                    <p class="content__main-offer-text">+ Chuột không dây trị giá: 150.000đ</p>
                    <p class="content__main-offer-text">+ Bàn di chuột trị giá: 50.000đ</p>
                    <p class="content__main-offer-text">+ Bộ vệ sinh laptop trị giá: 40.000đ</p>
                    <p class="content__main-offer-text">+ Vệ sinh bảo dưỡng Laptop miễn phí trọn đời trị giá: 1 triệu đồng</p>
                    <p class="content__main-offer-text">+ Giảm 10% khi mua thêm RAM, HDD laptop</p>
                    <p class="content__main-offer-text">+ Giảm 5% khi mua kèm Gear, Đế tản nhiệt Laptop</p>
                </div>
                <div class="content__main-buy">
                    <a href="cart.html" class="content__main-buy-btn content__main-buy-btn--100 content__main-buy-btn--red">
                        <h1>ĐẶT MUA NGAY</h1>
                        <p>Giao hàng tận nơi nhanh chóng</p>
                    </a>
                    <button class="content__main-buy-btn content__main-buy-btn--50 content__main-buy-btn--blue" onclick="showInfoToast();">
                        <h1>TRẢ GÓP QUA HỒ SƠ</h1>
                        <p>Chỉ từ 1.915.000đ/tháng</p>
                    </button>
                    <button class="content__main-buy-btn content__main-buy-btn--50 content__main-buy-btn--blue" onclick="showInfoToast();">
                        <h1>TRẢ GÓP QUA THẺ</h1>
                        <p>Chỉ từ 957.500đ/tháng</p>
                    </button>
                </div>
            </div>
            <div class="content__main-right">
                <div class="content__main-right-item">
                    <h1 class="content__main-right-tittle">SẢN PHẨM CÒN HÀNG TẠI</h1>
                    <div class="content__main-right-address">
                        <div class="content__main-right-name">Showroom Miền Bắc:</div>
                        <div class="content__main-right-local">
                            <i class="fa-solid fa-location-dot content__main-right-icon"></i>
                            <p>377-379 Trương Định - HN</p>
                        </div>
                    </div>
                    <div class="content__main-right-address">
                        <div class="content__main-right-name">Showroom Miền Nam:</div>
                        <div class="content__main-right-local">
                            <i class="fa-solid fa-location-dot content__main-right-icon"></i>
                            <p>176 Tân Phước - Q.10 - HCM</p>
                        </div>
                    </div>
                    <div class="content__main-right-note">
                        Chú ý: Sản phẩm có thể điều chuyển kho theo yêu cầu của quý khách.
                    </div>
                </div>
                <div class="content__main-right-item">
                    <h1 class="content__main-right-tittle">YÊN TÂM MUA HÀNG</h1>
                    <ul class="content__main-right-ul">
                        <li class="content__main-right-li">Hỗ trợ tư vấn lắp đặt trong nội thành Hà Nội.</li>
                        <li class="content__main-right-li">Hỗ trợ mua hàng trả góp.</li>
                        <li class="content__main-right-li">Hỗ trợ cài đặt các phần mềm đồ họa.</li>
                        <li class="content__main-right-li">Được tham gia các chương trình giảm giá sốc.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content__des">
            <div class="content__des-left">
                <h1 class="content__des-tittle content__des-tittle--active">
                    ĐẶC ĐIỂM
                </h1>
                <h1 class="content__des-name"><?php echo $item["tenSanPham"]?></h1>
                <p class="content__des-text">
                    <b>Laptop Dell Latitude 3410 (70216823)</b> được thiết kế đơn giản, sang trọng với vỏ ngoài được phủ sơn màu đen và các cạnh bên được vát mỏng, các đường nét góc cạnh được bo tròn gọn gàng, mặt lưng trơn in nổi logo. Ngoài
                    tính thẩm mĩ, nó cũng đảm bảo độ bền bỉ, chắc chắn và tính di động để có thể đồng hành với bạn trong mọi hành trình lâu dài. Khung máy chắc chắn, bền bỉ giúp bảo vệ linh kiện tối đa trước tác động bên ngoài.
                </p>

                <div class="content__des-head">Hiệu năng</div>
                <img src="./public/assets/img/des-product/hieu-nang.jpg" alt="" class="content__des-img">
                <p class="content__des-text">
                    Để đảm bảo sẽ xử lý tốt các tác vụ công việc văn phòng, học tập mẫu laptop Dell này được trang bị một cấu hình ổn định, đủ sức cho các tác vụ hàng ngày. Với sự hiện diện của chip Intel Core i5 thế hệ thứ 10 mới nhất sở hữu tốc độ xử lý công việc lý tưởng,
                    đáp ứng được nhu cầu đồ họa cơ bản. Kết hợp với 4GB hoặc 8GB Ram DDR4 Non-ECC, với 2 khe RAM bạn có thể nâng cấp RAM theo nhu cầu của bản thân, đảm bảo xử lý các tác vụ đa nhiệm, cùng lúc làm nhiều tác vụ, mở nhiều ứng dụng
                    mà không sợ giật, lag. Ổ cứng SSD đem lại tốc độ truy cập file nhanh chóng.
                </p>
                <img src="./public/assets/img/des-product/hieu-nang2.jpg" alt="" class="content__des-img">

                <div class="content__des-head">Màn hình</div>
                <img src="./public/assets/img/des-product/man-hinh.jpg" alt="" class="content__des-img">
                <p class="content__des-text">
                    Trang bị màn hình kích thước 14 inch với độ phân giải HD, cung cấp hình ảnh sắc nét, hiển thị màu sắc chân thực nhờ độ tương phản cao. Kết hợp cùng viền màn hình được vát mỏng hơn so với các dòng sản phẩm trước đây, mang tới cảm giác đắm chìm trong tình
                    khung hình hơn. Đồng thời với lớp phủ chống chói Anti-Glare bảo vệ mắt của bạn, hỗ trợ làm việc thuận lợi hơn ở nơi có ánh sáng mạnh hoặc khi phải làm việc ngoài trời.
                </p>

                <div class="content__des-head">Bàn phím và touchpad</div>
                <p class="content__des-text">Bàn phím được thiết kế tiêu chuẩn, kích thước phím lớn, khoảng cách phím được bố trí hợp lý cho độ chính xác cao khi gõ mang tới cảm giác gõ phím khá êm tay và thoải mái.</p>
                <p class="content__des-text">Touchpad được thiết kế khá rộng rãi, nhanh nhạy. Bạn hoàn toàn có thể làm việc tốt mà không cần đến sự hỗ trợ của chuột rời. </p>


                <div class="content__des-head">Đầy đủ các cổng kết nối</div>
                <img src="./public/assets/img/des-product/cong1.jpg" alt="" class="content__des-img">
                <p class="content__des-text">Trang bị cổng kết nối như USB 2.0, USB 3.2 Gen 1 Type-A, Cổng HDMI 1.4, USB 3.2 Gen 1 Type-C, jack cắm tai nghe,...bạn có thể thỏa sức kết nối với các thiết bị ngoại vi khác.</p>
                <img src="./public/assets/img/des-product/cong2.jpg" alt="" class="content__des-img">


            </div>
            <div class="content__des-right">
                <h1 class="content__des-tittle">
                    THÔNG SỐ KỸ THUẬT
                </h1>
                <table class="content__des-table" border="1">
                    <tr>
                        <td>Loại sản phẩm</td>
                        <td class="content__des-td--blue">Laptop</td>
                    </tr>
                    <tr>
                        <td>CPU</td>
                        <td>
                            <?php echo $item["CPU"];?>
                        </td>
                    </tr>
                    <tr>
                        <td>VGA</td>
                        <td>
                            <?php echo $item["VGA"];?>
                        </td>
                    </tr>
                    <tr>
                        <td>Bộ nhớ</td>
                        <td>
                             <?php echo $item["RAM"];?>
                        </td>
                    </tr>
                    <tr>
                        <td>Ổ cứng</td>
                        <td>
                            <?php echo $item["dungLuong"];?>
                        </td>
                    </tr>>
                    <tr>
                        <td>Webcam</td>
                        <td>HD</td>
                    </tr>
                    <tr>
                        <td>Âm thanh</td>
                        <td>Realtek ALC3204</td>
                    </tr>
                    <tr>
                        <td>Hệ điều hành</td>
                        <td>Windows 11 PRO</td>
                    </tr>
                    <tr>
                        <td>Pin</td>
                        <td>3 Cell (40Whr) - ExpressCharge Capable Battery</td>
                    </tr>
                    <tr>
                        <td>Trọng lượng</td>
                        <td>
                            <?php echo $item["trongLuong"];?>
                        </td>
                    </tr>
                    <tr>
                        <td>Màu sắc</td>
                        <td>
                            <?php echo $item["mauSac"];?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>