<div class="content">
    <div class="grid wide">
        <div class="content__banner">
            <nav class="navbar">
                <ul class="navbar__list">
                    <?php
                    for ($i = 0; $i < count($data["nsx"]); $i++) {
                        echo '
                            <li class="navbar__item">
                                <a href="http://localhost/nguyencongpc/SanPham/ShowByNSX/'.$data["nsx"][$i]["id"].'" class="navbar__link">
                                    <i class="navbar__icon fa-solid fa-laptop"></i>
                                    <p class="navbar__name">LAPTOP - ' . $data["nsx"][$i]["tenNSX"] . '</p>
                                </a>
                            </li>
                        ';
                    }
                    ?>
                    <!-- <li class="navbar__item">
                        <a href="#" class="navbar__link">
                            <i class="navbar__icon fa-solid fa-laptop"></i>
                            <p class="navbar__name">LAPTOP - PHỤ KIỆN</p>
                        </a>
                    </li> -->

                </ul>
            </nav>
            <div class="content__banner-main">
                <div class="content__banner-main-top">
                    <div class="content__banner-slide">
                        <div class="content__banner-slide-item">
                            <img src="./public/assets/img/slider/01.jpg" alt="" class="content__banner-slide-img">
                        </div>
                        <div class="content__banner-slide-item">
                            <img src="./public/assets/img/slider/02.jpg" alt="" class="content__banner-slide-img">
                        </div>
                        <div class="content__banner-slide-item">
                            <img src="./public/assets/img/slider/03.jpg" alt="" class="content__banner-slide-img">
                        </div>
                        <div class="content__banner-slide-item">
                            <img src="./public/assets/img/slider/04.jpg" alt="" class="content__banner-slide-img">
                        </div>
                        <div class="content__banner-slide-item">
                            <img src="./public/assets/img/slider/05.png" alt="" class="content__banner-slide-img">
                        </div>
                        <div class="content__banner-slide-item">
                            <img src="./public/assets/img/slider/06.jpg" alt="" class="content__banner-slide-img">
                        </div>
                        <div class="content__banner-slide-item">
                            <img src="./public/assets/img/slider/07.jpg" alt="" class="content__banner-slide-img">
                        </div>
                    </div>
                    <div class="content__banner-card">
                        <div class="content__banner-card-item">
                            <img src="./public/assets/img/cards/01.jpg" alt="" class="content__banner-card-img">
                        </div>
                        <div class="content__banner-card-item">
                            <img src="./public/assets/img/cards/02.jpg" alt="" class="content__banner-card-img">
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="grid wide">
        <div class="content__list-card row">
            <div class="col l-3">
                <div class="content__list-card-item">
                    <img src="./public/assets/img/cards/06.jpg" alt="" class="content__list-card-img">
                </div>
            </div>
            <div class="col l-3">
                <div class="content__list-card-item">
                    <img src="./public/assets/img/cards/07.jpg" alt="" class="content__list-card-img">
                </div>
            </div>
            <div class="col l-3">
                <div class="content__list-card-item">
                    <img src="./public/assets/img/cards/08.jpg" alt="" class="content__list-card-img">
                </div>
            </div>
            <div class="col l-3">
                <div class="content__list-card-item">
                    <img src="./public/assets/img/cards/09.png" alt="" class="content__list-card-img">
                </div>
            </div>
        </div>
    </div>

    <!-- Sale -->
    <div class="grid wide">
        <div class="content__sale">
            <div class="content__sale-title">
                <img src="./public/assets/img/sale/san-pham-sale-title.png" alt="" class="content__sale-title-img">
            </div>

            <div class="content__sale-product">
                <div class="content__product">
                    <div class="content__product-list">
                        <?php
                        for($i=0; $i<count($data["array"]["DELL"]); $i++){      
                            $item = $data["array"]["DELL"][$i];           
                        ?>
                            <a href="product-detail.html" class="content__product-item">
                                <img src="<?php echo $item["hinhAnh"]?>" alt="" class="content__product-img">
                                <div class="content__product-save">
                                    Tiết kiệm <span><?php echo number_format($item["gia"]*0.1);?>đ</span>
                                </div>
                                <div class="content__product-name"><?php echo $item["tenSanPham"]?></div>
                                <div class="content__product-bot">
                                    <div class="content__product-price">
                                        <div class="content__product-price-new"><?php echo number_format($item["gia"]) ." đ"?></div>
                                        <div class="content__product-price-old"><del><?php echo number_format($item["gia"] + $item["gia"]*0.1) ." đ"?></del><span>-10%</span></div>
                                    </div>
                                    <div class="content__product-card">
                                        <i class="content__product-icon fa-solid fa-cart-arrow-down"></i>
                                    </div>
                                </div>
                            </a>
                        <?php
                        }
                        ?>                      
                    </div>
                </div>

            </div>
            <div class="content__sale-banner">
                <img src="./public/assets/img/sale/slae-banner.png" alt="" class="content__sale-banner-img">
                <img src="./public/assets/img/sale/img-trung.png" alt="" class="content__sale-banner-trung">
                <p class="content__sale-text">
                    <span class="orange">1000</span>quà tặng + <span class="orange">10.000</span>ưu đãi.
                    <a href="#" class="content__sale-link">Xem chi tiết></a>
                </p>
            </div>
        </div>
    </div>

    
    <?php 
    foreach($data["array"] as $key=>$value){
        if($key == "DELL") continue;
    ?>

    <!-- List sản phẩm -->
    <div class="grid wide">
        <div class="content__product content__product--white">
            <div class="content__product-head">
                <h1 class="content__product-title">
                    LAPTOP - <?php  echo $key?>
                </h1>
                <a href="http://localhost/nguyencongpc/SanPham/ShowByNSX/<?php echo $value[0]["maNSX"];?>" class="content__product-link">Xem tất cả>></a>
            </div>
            <div class="content__product-list">
                    <?php
                    $n = (count($data["array"][$key]) <=7)?count($data["array"][$key]):7;
                        for($i=0; $i<$n; $i++){    
                              
                            $item = $data["array"][$key][$i];           
                        ?>
                            <a href="http://localhost/nguyencongpc/SanPham/ChiTietSanPham/<?php echo $item["id"]?>" class="content__product-item">
                                <img src="<?php echo $item["hinhAnh"]?>" alt="" class="content__product-img">
                                <div class="content__product-save">
                                    Tiết kiệm <span><?php echo number_format($item["gia"]*0.1);?>đ</span>
                                </div>
                                <div class="content__product-name"><?php  echo $item["tenSanPham"]?></div>
                                <div class="content__product-bot">
                                    <div class="content__product-price">
                                        <div class="content__product-price-new"><?php echo number_format($item["gia"]) ." đ"?></div>
                                        <div class="content__product-price-old"><del><?php echo number_format($item["gia"] + $item["gia"]*0.1) ."đ"?></del><span>-10%</span></div>
                                    </div>
                                    <div class="content__product-card">
                                        <i class="content__product-icon fa-solid fa-cart-arrow-down"></i>
                                    </div>
                                </div>
                            </a>
                        <?php
                        }
                        ?>
                               
            </div>
        </div>
    </div>

    <?php }?>

   
    


    <!-- Tin công nghệ -->
    <div class="content__news">
        <div class="grid wide">
            <div class="content__news-head">
                <h2 class="content__news-title">Tin công nghệ</h2>
                <div class="content__news-right">
                    <a href="#" class="content__news-link">Xem tất cả>></a>
                </div>
            </div>
            <div class="content__news-main">
                <a href="" class="content__news-card" style="background-image: url(./public/assets/img/news/news-card.jpeg);">
                </a>
                <div class="content__news-list">
                    <a href="" class="content__news-item">
                        <div class="content__news-item-left" style="background-image: url(./public/assets/img/news/01.jpg);">
                        </div>
                        <div class="content__news-nd">
                            <h2 class="content__news-item-title">Top cấu hình PC theo ngân sách 2021</h2>
                            <p class="content__news-item-des">09-12-2021, 1:37 pm</p>
                        </div>
                    </a>
                    <a href="" class="content__news-item">
                        <div class="content__news-item-left" style="background-image: url(./public/assets/img/news/02.png);">
                        </div>
                        <div class="content__news-nd">
                            <h2 class="content__news-item-title">CPU Ryzen 7 5800x có thật sự là lựa chọn tuyệt vời cho các nhà sáng tạo nội dung không?</h2>
                            <p class="content__news-item-des">27-03-2022, 11:45 am</p>
                        </div>
                    </a>
                    <a href="" class="content__news-item">
                        <div class="content__news-item-left" style="background-image: url(./public/assets/img/news/03.png);">
                        </div>
                        <div class="content__news-nd">
                            <h2 class="content__news-item-title">Ryzen 9 5900X – CPU đa năng cho chơi game và công việc</h2>
                            <p class="content__news-item-des">22-03-2022, 9:48 am</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>