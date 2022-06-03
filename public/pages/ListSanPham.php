
<div class="content">
    <div class="grid wide">
        <div class="content__container">
            <div class="content__filter">


                <!-- HÃNG SẢN XUẨT -->
                <h1 class="content__filter-titile">HÃNG SẢN XUẤT</h1>
                <?php foreach($data["nsx"] as $key=>$value) {?>

                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link"><?php  echo $value["tenNSX"]?> (10) </a>
                </div>

                <?php }?>
                

                <div class="margin-14"></div>

                <!-- KHOẢNG GIÁ -->
                <h1 class="content__filter-titile">KHOẢNG GIÁ</h1>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">Dưới 10 triệu (3)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">10 triệu - 15 triệu (45)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">15 triệu - 20 triệu (152)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">20 triệu - 30 triệu (152)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">30 triệu - 50 triệu (84)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">50 triệu - 100 triệu (26)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">Trên 100 triệu (3)</a>
                </div>

                <div class="margin-14"></div>

                <!-- BỘ XỬ LÝ (CPU) -->
                <h1 class="content__filter-titile">BỘ XỬ LÝ (CPU)</h1>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">Apple M1 (16)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">AMD Ryzen 9 (10)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">AMD Ryzen 7 (53)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">AMD Ryzen 5 (38)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">AMD Ryzen 3 (5)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">Intel Core i9 (7)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">Intel Core i7 (84)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">Intel Core i5 (136)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">Intel Core i3 (30)</a>
                </div>

                <div class="margin-14"></div>

                <!-- DUNG LƯỢNG RAM (CPU) -->
                <h1 class="content__filter-titile">DUNG LƯỢNG RAM</h1>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">64GB (3)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">32GB (14)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">16GB (116)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">8GB (124)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">4GB (32)</a>
                </div>

                <div class="margin-14"></div>

                <!-- DUNG LƯỢNG RAM (CPU) -->
                <h1 class="content__filter-titile">CARD ĐỒ HỌA (VGA)</h1>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">Card rời AMD (15)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">Card rời nVidia (193)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">Onboard (175)</a>
                </div>

                <div class="margin-14"></div>

                <!-- TRỌNG LƯỢNG -->
                <h1 class="content__filter-titile">TRỌNG LƯỢNG</h1>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">Trên 2kg (110)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">Dưới 2kg (270)</a>
                </div>

                <div class="margin-14"></div>

                <!-- DUNG LƯỢNG Ổ CỨNG -->
                <h1 class="content__filter-titile">DUNG LƯỢNG Ổ CỨNG</h1>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">2TB (7)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">1TB (39)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">512GB(254)</a>
                </div>
                <div class="content__filter-item">
                    <input type="checkbox" name="" class="content__filter-checkbox">
                    <a href="" class="content__filter-link">256GB (77)</a>
                </div>
            </div>
            <div class="content__right">
                <div class="content__banner">
                    <div>
                        <img src="./public/assets/img/banner1.jpg" alt="" class="content__banner-img">
                    </div>
                    <div>
                        <img src="./public/assets/img/banner2.png" alt="" class="content__banner-img">
                    </div>
                </div>
                <div class="content__search">
                    <div class="content__search-tittle">Tìm hiểu thêm</div>
                    <div class="content__search-filter">
                        <div class="content__search-item">
                            <img src="./public/assets/img/brand2/logo-asus.png" alt="" class="content__search-item-img">
                        </div>
                        <div class="content__search-item">
                            <img src="./public/assets/img/brand2/logo-msi.png" alt="" class="content__search-item-img">
                        </div>
                        <div class="content__search-item">
                            <img src="./public/assets/img/brand2/logo-lenovo.png" alt="" class="content__search-item-img">
                        </div>
                        <div class="content__search-item">
                            <p class="content__search-item-text">Laptop từ 10 - 15 triệu</p>
                        </div>
                        <div class="content__search-item">
                            <p class="content__search-item-text">Laptop từ 20 - 30 triệu</p>
                        </div>
                        <div class="content__search-item">
                            <p class="content__search-item-text">Laptop Core i5</p>
                        </div>
                        <div class="content__search-item">
                            <p class="content__search-item-text">Laptop card Nvidia RTX</p>
                        </div>
                    </div>
                </div>
                <div class="content__with-paging">
                    <select name="" id="" class="content__paging-select">
                        <option value="" class="content__paging-select" selected>Sắp xếp</option>
                        <option value="" class="content__paging-select">Mới nhất</option>
                        <option value="" class="content__paging-select">Giá tăng dần</option>
                        <option value="" class="content__paging-select">Giá giảm dần</option>
                        <option value="" class="content__paging-select">Lượt xem</option>
                        <option value="" class="content__paging-select">Trao đổi</option>
                        <option value="" class="content__paging-select">Đánh giá</option>
                        <option value="" class="content__paging-select">Tên A->Z</option>
                    </select>
                    <div class="content__paging">
                        <a href="" class="content__paying-link content__paying-link--active">1</a>
                        <a href="" class="content__paying-link">2</a>
                        <a href="" class="content__paying-link">3</a>
                        <a href="" class="content__paying-link">4</a>
                        <a href="" class="content__paying-link">5</a>
                        <a href="" class="content__paying-link">6</a>
                        <a href="" class="content__paying-link">7</a>
                    </div>
                </div>

                <div class="content__list ">

                    <!-- DANH SACH SAN PHAM -->
                    <?php 
                    foreach($data["array"] as $key=>$value){

                    ?>

                    <a href="http://localhost/nguyencongpc/SanPham/ChiTietSanPham/<?php  echo $value["id"]?>" class="content__product">
                        <img src="<?php echo $value["hinhAnh"]?>" alt="" class="content__product-img">
                        <div class="content__product-sale">
                            <p class="content__product-sale-tittle">Tiết kiệm: </p>
                            <span class="content__product-sale-price"><?php echo number_format($value["gia"] * 0.1)?>đ</span>
                        </div>
                        <div class="content__product-name"><?php echo $value["tenSanPham"]?></div>
                        <div class="content__product-bot">
                            <div class="content__product-bot-left">
                                <div class="content__product-price"><?php echo number_format($value["gia"])?>đ</div>
                                <div class="content__product-del"><?php echo number_format($value["gia"] + $value["gia"] * 0.1 )?>đ</div>
                            </div>
                            <div class="content__product-cart">
                                <i class="fa-solid fa-cart-arrow-down content__product-cart-icon"></i>
                            </div>
                        </div>
                    </a>

                    <?php }?>
                    

                </div>

                <div class="content__with-paging">
                    <div></div>
                    <div class="content__paging">
                        <a href="" class="content__paying-link content__paying-link--active">1</a>
                        <a href="" class="content__paying-link">2</a>
                        <a href="" class="content__paying-link">3</a>
                        <a href="" class="content__paying-link">4</a>
                        <a href="" class="content__paying-link">5</a>
                        <a href="" class="content__paying-link">6</a>
                        <a href="" class="content__paying-link">7</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>