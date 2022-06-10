<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/nguyencongpc/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="./public/assets/img/favion_NC.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/assets/icon/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./public/assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./public/assets/css/grid.css">
    <!-- base -->
    <link rel="stylesheet" href="./public/assets/css/base.css">
    <link rel="stylesheet" href="./public/assets/css/<?php echo $data["page"] ?>.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./public/assets/css/reponsive_model.css">
    <link rel="stylesheet" href="./public/toast messages/toast-mess.css">
    <title><?php echo $data["title"]; ?></title>
    
</head>

<body onload="<?php echo isset($data["function"])?$data["function"]:null?>();">
    <div id="toast"></div>
    <div id="main">

        <!-- Header -->
        <header class="header">
            <div class="header__top">
                <div class="grid wide">
                    <div class="header__top-container">
                        <nav class="header__top-list">
                            <li class="header__top-item js-display-showroom">
                                <div class="header__top-link " >
                                    <div class="header__top-link-item">
                                        <i class="header__top-link-icon fa-solid fa-location-dot"></i>
                                        <div class="header__top-link-text">Hệ thống showroom</div>
                                    </div>
                                </div>
                            </li>
                            <li class="header__top-item js-display-hotline">
                                <div class="header__top-link header__top-link--discoloration" >
                                    <div class="header__top-link-item">
                                        <i class="header__top-link-icon fa-solid fa-headset"></i>
                                        <div class="header__top-link-text">Khách Cá Nhân</div>
                                    </div>
                                </div>
                            </li>
                            <li class="header__top-item js-display-company">
                                <div class="header__top-link header__top-link--discoloration" >
                                    <div class="header__top-link-item">
                                        <i class="header__top-link-icon fa-solid fa-headset"></i>
                                        <div class="header__top-link-text">Khách Doanh Nghiệp</div>
                                    </div>
                                </div>
                            </li>
                            <li class="header__top-item">
                                <div class="header__top-link " >
                                    <div class="header__top-link-item">
                                        <i class="header__top-link-icon fa-solid fa-newspaper"></i>
                                        <div class="header__top-link-text">Tin Công Nghệ</div>
                                    </div>
                                </div>
                            </li>
                        </nav>
                        <div class="header__top-account">
                            <?php
                            if (isset($_SESSION["isLogin"])) {
                                if ($_SESSION["isLogin"] == 0) {
                                    echo '
                                        <i class="header__top-account-icon fa-solid fa-circle-user"></i>
                                        <a href="http://localhost/nguyencongpc/KhachHang/registration" class="header__top-account-link">Đăng ký/</a><a href="http://localhost/nguyencongpc/KhachHang/login" class="header__top-account-link">Đăng nhập</a> 
                                    ';
                                } else {
                                    echo '                                       
                                        <i class="header__top-account-icon fa-solid fa-circle-user"></i>
                                        <a href="registration.html" class="header__top-account-link header__top-account-link--uppercase">HI '.$_SESSION["hoTen"].'</a>
                                        <ul class="header__top-account-list">
                                            <li class="header__top-account-item">
                                                <a href="http://localhost/nguyencongpc/KhachHang/ThongTinCaNhan" class="header__top-account-item-link">Cá nhân</a>
                                            </li>
                                            <li class="header__top-account-item">
                                                <a href="http://localhost/nguyencongpc/KhachHang/logout" class="header__top-account-item-link">Đăng suất</a>
                                            </li>
                                        </ul>                                      
                                    ';
                                }
                            } else {
                                echo '                                        
                                        <i class="header__top-account-icon fa-solid fa-circle-user"></i>
                                        <a href="http://localhost/nguyencongpc/KhachHang/registration" class="header__top-account-link">Đăng ký/</a><a href="http://localhost/nguyencongpc/KhachHang/login" class="header__top-account-link">Đăng nhập</a>                                      
                                    ';
                            }

                            ?>

                        </div>

                        <!-- <div class="header__top-account">
                            <i class="header__top-account-icon fa-solid fa-circle-user"></i>
                            <a href="http://localhost/nguyencongpc/KhachHang/registration" class="header__top-account-link">Đăng ký/</a><a href="http://localhost/nguyencongpc/KhachHang/login" class="header__top-account-link">Đăng nhập</a>
                        </div> -->

                    </div>
                </div>
            </div>
            <div class="header__main-container">
                <div class="grid wide">
                    <div class="header__main">
                        <a href="http://localhost/nguyencongpc/">
                            <img src="./public/assets/img/logo.png" alt="" class="header__main-img">
                        </a>
                        <div class="header__main-search">
                            <form id="form-search" action="http://localhost/nguyencongpc/SanPham/SearchByName" method="POST" class="header__main-search-group">
                                <input name="name" class="header__main-search-input" type="text" placeholder="Nhập tên sản phẩm, từ khóa cần tìm...">
                                <div class="header__main-search-icon" id="btn-search">
                                    <i class=" fa-solid fa-magnifying-glass"></i>
                                </div>
                                <script>
                                    document.getElementById("btn-search").onclick = function(e){
                                        document.getElementById("form-search").submit();
                                    }
                                </script>
                            </form>
                            <div class="header__main-search-tag">
                                <a class="header__main-search-tag-item">
                                    PC Gaming
                                </a>
                                <a class="header__main-search-tag-item">
                                    Laptop Gaming
                                </a>
                                <a class="header__main-search-tag-item">
                                    Laptop Dell
                                </a>
                                <a class="header__main-search-tag-item">
                                    CPU Intel
                                </a>
                                <a class="header__main-search-tag-item">
                                    Card màn hình
                                </a>
                                <a class="header__main-search-tag-item">
                                    Build PC
                                </a>
                            </div>
                        </div>
                        <div class="header__main-options">
                            <div class="header__main-options-item" onclick="showInfoToast();">
                                <i class="header__main-options-icon fa-solid fa-gift"></i>
                                <p class="header__main-options-text">Khuyến mại</p>
                            </div>
                            <a href="http://localhost/nguyencongpc/DonHang/ShowByEmail" class="header__main-options-item header__cart">
                                <i class="header__main-options-icon fa-solid fa-money-bill-1-wave"></i>
                                <p class="header__main-options-text">Đơn hàng đã đặt</p>                                                        
                                <span class="header__cart-count" style="top: -7px; right: 40px;">
                                    <?php echo $data["SLDH"]?>
                                </span>
                            </a>
                            <a href="http://localhost/nguyencongpc/GioHang" class="header__main-options-item header__cart">
                                <i class="header__main-options-icon fa-solid fa-cart-arrow-down"></i>
                                <p class="header__main-options-text">Giỏ hàng</p>
                                <span class="header__cart-count">
                                    <?php echo $data["SLSP"]?>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="header-fix">
                <div class="grid wide">
                    <div class="header__main">
                        <div class="header__main-list ">
                            <div class="header__main-list-title">
                                <i class="header__main-list-icon fa-solid fa-bars"></i>
                                <div class="header__main-list-text">DANH MỤC SẢN PHẨM</div>
                                <i class="header__main-down-icon ti-angle-down"></i>
                            </div>
                            <div class="header-fix__navbar">
                                <nav class="navbar">
                                    <ul class="navbar__list">
                                    <?php
                                        for($i=0; $i<count($data["nsx"]); $i++){
                                            $item = $data["nsx"][$i];
                                            echo '
                                                <li class="navbar__item">
                                                    <a href="http://localhost/nguyencongpc/SanPham/ShowByNSX/'.$item->id.'" class="navbar__link">
                                                        <i class="navbar__icon fa-solid fa-laptop"></i>
                                                        <p class="navbar__name">LAPTOP - '.$item->tenNSX.'</p>
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
                                        </li>                                       -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header__main-search">
                            <div class="header__main-search-group">
                                <input class="header__main-search-input" type="text" placeholder="Nhập tên sản phẩm, từ khóa cần tìm...">
                                <div class="header__main-search-icon">
                                    <i class=" fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                        <div class="header__main-options">
                            <div href="" class="header__main-options-item" onclick="showInfoToast();">
                                <i class="header__main-options-icon fa-solid fa-gift"></i>
                                <p class="header__main-options-text">Khuyến mại</p>
                            </div>
                            <a href="http://localhost/nguyencongpc/DonHang/ShowByEmail" class="header__main-options-item header__cart">
                                <i class="header__main-options-icon fa-solid fa-money-bill-1-wave"></i>
                                <p class="header__main-options-text">Đơn hàng đã đặt</p>
                                <span class="header__cart-count" style="top: -7px; right: 40px;">
                                    <?php echo $data["SLDH"]?>
                                </span>
                            </a>
                            <a href="http://localhost/nguyencongpc/GioHang" class="header__main-options-item header__cart">
                                <i class="header__main-options-icon fa-solid fa-cart-arrow-down"></i>
                                <p class="header__main-options-text">Giỏ hàng</p>
                                <span class="header__cart-count">
                                    <?php echo $data["SLSP"]?>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </header>

        <!-- Content -->

        <?php
        require_once "./public/pages/" . $data["page"] . ".php";
        ?>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer__policy">
                <div class="footer__policy-group">
                    <div class="footer__policy-item">
                        <i class="footer__policy-icon fa-solid fa-truck"></i>
                        <div class="footer__policy-content">
                            <div class="footer__policy-title">
                                CHÍNH SÁCH GIAO HÀNG
                            </div>
                            <div class="footer__policy-des">
                                Nhận hàng và thanh toán tại nhà
                            </div>
                        </div>
                    </div>
                    <div class="footer__policy-item">
                        <i class="footer__policy-icon fa-solid fa-arrows-rotate"></i>
                        <div class="footer__policy-content">
                            <div class="footer__policy-title">
                                ĐỔI TRẢ DỄ DÀNG
                            </div>
                            <div class="footer__policy-des"></div>
                        </div>
                    </div>
                    <div class="footer__policy-item">
                        <i class="footer__policy-icon fa-solid fa-money-check"></i>
                        <div class="footer__policy-content">
                            <div class="footer__policy-title">
                                THANH TOÁN TIỆN LỢI
                            </div>
                            <div class="footer__policy-des">
                                Trả tiền mặt, CK, trả góp 0%
                            </div>
                        </div>
                    </div>
                    <div class="footer__policy-item">
                        <i class="footer__policy-icon fa-solid fa-circle-question"></i>
                        <div class="footer__policy-content">
                            <div class="footer__policy-title">
                                HỖ TRỢ NHIỆT TÌNH
                            </div>
                            <div class="footer__policy-des">
                                Tư vấn, giải đáp mọi thắc mắc
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__menu">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-3 m-4 c-12">
                            <div class="footer__menu-item">
                                <div class="footer__menu-title">GIỚI THIỆU NGUYỄN CÔNG</div>
                                <a href="#" class="footer__menu-link">Giới thiệu công ty</a>
                                <a href="#" class="footer__menu-link">Thông tin liên hệ</a>
                                <a href="#" class="footer__menu-link">Tin tức</a>
                                <div class="footer__menu-socials">
                                    <a href="#" class="footer__menu-social" style="background-color: #4267b2;">
                                        <i class="footer__menu-social-icon fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="footer__menu-social" style="background-color: red;">
                                        <i class="footer__menu-social-icon fa-brands fa-youtube"></i>
                                    </a>
                                    <a href="#" class="footer__menu-social" style="background: linear-gradient(45deg, #f09433 0, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);">
                                        <i class="footer__menu-social-icon fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="footer__menu-item">
                                <div class="footer__menu-title">HỖ TRỢ KHÁCH HÀNG</div>
                                <a href="#" class="footer__menu-link">Hướng dẫn mua hàng trực tuyến</a>
                                <a href="#" class="footer__menu-link">Hướng dẫn thanh toán</a>
                                <a href="#" class="footer__menu-link">Gứi yêu cầu bảo hành</a>
                                <a href="#" class="footer__menu-link">Góp ý, Khiếu nại</a>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="footer__menu-item">
                                <div class="footer__menu-title">GIỚI THIỆU NGUYỄN CÔNG</div>
                                <a href="#" class="footer__menu-link">Chính sách, quy định chung</a>
                                <a href="#" class="footer__menu-link">Chính sách vận chuyển</a>
                                <a href="#" class="footer__menu-link">Chính sách bảo hành</a>
                                <a href="#" class="footer__menu-link">Chính sách đổi trả và hoàn tiền</a>
                                <a href="#" class="footer__menu-link">Chính sách xử lý khiếu nại</a>
                                <a href="#" class="footer__menu-link">Bảo mật thông tin khách hàng</a>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="footer__menu-item">
                                <div class="footer__menu-title">THÔNG TIN KHUYẾN MẠI</div>
                                <a href="#" class="footer__menu-link">Thông tin khuyến mại</a>
                                <a href="#" class="footer__menu-link">Sản phẩm khuyến mại</a>
                                <a href="#" class="footer__menu-link">Sản phẩm bán chạy</a>
                                <a href="#" class="footer__menu-link">Sản phẩm mới</a>
                                <img src="./public/assets/img/khuyenmai/01.png" width="143px" height="54px" alt=""> <br>
                                <img src="./public/assets/img/khuyenmai/02.png" width="100px" height="20px" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer__showroom grid wide">
                <h1 class="footer__showroom-header">
                    HỆ THỐNG CÁC SHOWROOM CỦA NGUYỄN CÔNG
                </h1>
                <div class="row">
                    <div class="col l-4 m-6 c-12">
                        <div class="footer__showroom-item">
                            <div class="footer__showroom-title">
                                <div class="footer__showroom-num">1</div>
                                <div class="footer__showroom-name">SHOWROOM - HOÀNG MAI</div>
                            </div>
                            <img src="./public/assets/img/showroom/showroom-map1.jpg" alt="" class="footer__showroom-img">
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-location-dot"></i>
                                <p> Số 377 - 379 Trương Định, Tương Mai, Hoàng Mai, Hà Nội</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p style="color: #007bff;"> Bấm gọi tư vấn bán hàng</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p>Tư vấn Gaming Gear: 0866666166 Mr Huy</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p>Tư vấn Laptop: 0866.666.266 - Mr Việt Anh</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p> Hỗ trợ kỹ thuật: 0765666668 - 0705666668</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-envelope"></i>
                                <p> Email: info@nguyencongpc.vn</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4 m-6 c-12">
                        <div class="footer__showroom-item">
                            <div class="footer__showroom-title">
                                <div class="footer__showroom-num">2</div>
                                <div class="footer__showroom-name">SHOWROOM - HÀ ĐÔNG</div>
                            </div>
                            <img src="./public/assets/img/showroom/showroom-map2.jpg" alt="" class="footer__showroom-img">
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-location-dot"></i>
                                <p>Số 52 Trần Phú, Mộ Lao, Hà Đông, Hà Nội</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p style="color: #007bff;"> Bấm gọi tư vấn bán hàng</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p>Tư vấn Gaming Gear: 0866666166 Mr Huy</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p>Tư vấn Laptop: 0866.666.266 - Mr Việt Anh</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p> Hỗ trợ kỹ thuật: 0765666668 - 0705666668</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-envelope"></i>
                                <p> Email: info@nguyencongpc.vn</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4 m-6 c-12">
                        <div class="footer__showroom-item">
                            <div class="footer__showroom-title">
                                <div class="footer__showroom-num">3</div>
                                <div class="footer__showroom-name">SHOWROOM - QUẬN 10</div>
                            </div>
                            <img src="./public/assets/img/showroom/showroom-map3.jpg" alt="" class="footer__showroom-img">
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-location-dot"></i>
                                <p>176 Tân Phước - Quận 10- TP Hồ Chí Minh</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p style="color: #007bff;"> Bấm gọi tư vấn bán hàng</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p>Tư vấn Gaming Gear: 0866666166 Mr Huy</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p>Tư vấn Laptop: 0866.666.266 - Mr Việt Anh </p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p> Hỗ trợ kỹ thuật: 0765666668 - 0705666668</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-envelope"></i>
                                <p> Email: info@nguyencongpc.vn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__contact ">
                <div class="grid wide">
                    <div class="footer__contact-text">WEBSITE ĐƯỢC SỞ HỮU VÀ QUẢN LÝ BỞI NGUYỄN VIẾT CÔNG</div>
                    <h1 class="footer__contact-head">CÔNG TY TNHH MÁY TÍNH NGUYỄN CÔNG </h1>
                    <div class="footer__contact-text">Địa chỉ: Số 377-379 Trương Định, tổ 41 - Phường Tương Mai - Quận Hoàng Mai - Hà Nội.</div>
                    <div class="footer__contact-text">Mã số thuế: 0107568451 do Sở Kế Hoạch và Đầu Tư TP.Hà Nội (22/12/2015)</div>
                    <div class="footer__contact-text">Mua hàng: <span>0989336366</span></div>
                    <div class="footer__contact-text">GÓP Ý : 0971113333. Email: info@nguyencongpc.vn. Website: nguyencongpc.vn. Fanpage: www.facebook.com/MAY.TINH.NGUYEN.CONG</div>
                </div>
            </div>
        </footer>
    </div>


    <!-- Social fix -->
    <div class="social-fix">
        <a href="#" class="social-fix__link" style="background-color: #4167b2;">
            <i class="social-fix-icon fa-brands fa-facebook-f"></i>
        </a>
        <a href="#" class="social-fix__link" style="background-color: #fe0100;">
            <i class="social-fix-icon fa-brands fa-youtube"></i>
        </a>
        <a href="#" class="social-fix__link" style="background-color: #4167b2;">
            <i class="social-fix-icon fa-brands fa-facebook-messenger"></i>
        </a>
        <a href="#" class="social-fix__link" style="background-color: #1890ff;">
            <i class="social-fix-icon fa-brands fa-twitter"></i>
        </a>
        <a href="#" class="social-fix__link social-fix__link--hidden js-scroll-arrow" style="background-color: #ed1b24;">
            <i class="social-fix-icon fa-solid fa-arrow-up"></i>
        </a>
    </div>

    <!-- Model -->

    <!-- Model showroom -->
    <div class="model" id="model-showroom">
        <div class="model__container">
            <div class="model__header model__header--boder">
                <h1 class="model__header-head">HỆ THỐNG SHOWROOM</h1>
                <div class="model__header-close js-close-showroom">
                    <i class="model__header-icon fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="grid model__content">
                <div class="row ">
                    <div class="col l-6 m-6 c-12">
                        <div class="model__item">
                            <p class="model__item-content">
                                Địa chỉ: <span class="blue">Số 377 - 379 Trương Định, Tân Mai, Hoàng Mai, Hà Nội</span>
                            </p>
                            <p class="model__item-content">
                                Bán hàng: <span class="red">0812666665 - 0962662287</span>
                            </p>
                            <p class="model__item-content">
                                Hỗ trợ kỹ thuật: <span class="red">0765 666 668</span>
                            </p>
                            <p class="model__item-content">
                                Giờ làm việc: <span class="red">08:30 - 18:30</span>
                            </p>
                            <div class="model-item-map" style="background-image: url(assets/img/showroom/showroom-map1.jpg);"></div>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="model__item">
                            <p class="model__item-content">
                                Địa chỉ: <span class="blue">52 Trần Phú - Hà Đông - Hà Nội</span>
                            </p>
                            <p class="model__item-content">
                                Bán hàng: <span class="red">0812666665 - 0962662287</span>
                            </p>
                            <p class="model__item-content">
                                Hỗ trợ kỹ thuật: <span class="red">0765 666 668</span>
                            </p>
                            <p class="model__item-content">
                                Giờ làm việc: <span class="red">08:30 - 18:30</span>
                            </p>
                            <div class="model-item-map" style="background-image: url(assets/img/showroom/showroom-map2.jpg);"></div>
                        </div>

                    </div>

                    <div class="col l-6 m-6 c-12" style="margin-top: 30px;">
                        <div class="model__item">
                            <p class="model__item-content">
                                Địa chỉ: <span class="blue">176 Tân Phước - Quận 10 - TP Hồ Chí Minh</span>
                            </p>
                            <p class="model__item-content">
                                Bán hàng: <span class="red">0812666665 - 0962662287</span>
                            </p>
                            <p class="model__item-content">
                                Hỗ trợ kỹ thuật: <span class="red">0765 666 668</span>
                            </p>
                            <p class="model__item-content">
                                Giờ làm việc: <span class="red">08:30 - 18:30</span>
                            </p>
                            <div class="model-item-map" style="background-image: url(assets/img/showroom/showroom-map3.jpg);"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Model hotline -->
    <div class="model" id="model-hotline">
        <div class="model__container model__container--min">
            <div class="model__header ">
                <h1 class="model__header-head">HOTLINE</h1>
                <div class="model__header-close js-close-hotline">
                    <i class="model__header-icon fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="model__content">
                <div class="model__content-item">
                    <div class="model__title">
                        Tư vấn - Bán hàng online
                    </div>
                    <div class="grid">
                        <div class="row">
                            <div class="col l-6 m-6 c-6">
                                <div class="model__item">
                                    <div class="model__item-title">
                                        Chi nhánh Hoàng Mai - HN:
                                    </div>
                                    <p class="model__item-content">
                                        <span class="orange">0979999191</span> Mr Huy Phùng
                                    </p>
                                    <p class="model__item-content">
                                        <span class="orange">0866666166</span> Mr Huy Lưu
                                    </p>
                                    <p class="model__item-content">
                                        <span class="orange">0989336366</span> Mr Kiên
                                    </p>
                                </div>
                            </div>

                            <div class="col l-6 m-6 c-6">
                                <div class="model__item">
                                    <div class="model__item-title">
                                        Chi nhánh quận 10 - HCM:
                                    </div>
                                    <p class="model__item-content">
                                        <span class="orange">0707086666</span> Mr Tuấn
                                    </p>
                                    <p class="model__item-content">
                                        <span class="orange">0988882838</span> Mr Phong
                                    </p>
                                    <p class="model__item-content">
                                        <span class="orange">0899299991</span> Mr Đăng Vũ
                                    </p>
                                </div>
                            </div>

                            <div class="col l-6 m-6 c-6">
                                <div class="model__item">
                                    <div class="model__item-title">
                                        Chi nhánh Hà Đông - HN:
                                        <p class="model__item-content">
                                            <span class="orange">0866666366</span> Mr Tùng
                                        </p>
                                        <p class="model__item-content">
                                            <span class="orange">0812666665</span> Mr Hòa
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        Kinh doanh Laptop
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Mr Việt Anh
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0989336366</span> Mr Hòa
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        Bảo hành - Hỗ trọ kỹ thuật
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> 377-379 Trương Định, HN
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0989336366</span> 52 Trần Phú, Hà Đông, HN
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0989336366</span> 176 Tân Phước, P.6, Q10, HCM
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        Kế toán
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Ms Lanh
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Ms Thúy
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        Kế toán công nợ
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Ms Tươi
                    </p>
                </div>
                <div class="model__content-item">
                    <p class="model__item-content">
                        GÓP Ý <span class="orange">0971113333</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Model Doanh nghiệp -->
    <div class="model" id="model-company">
        <div class="model__container model__container--min">
            <div class="model__header ">
                <h1 class="model__header-head">DOANH NGHIỆP</h1>
                <div class="model__header-close js-close-company">
                    <i class="model__header-icon fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="model__content">
                <div class="model__content-item">
                    <div class="model__title">
                        Khách hàng doanh nghiệp
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Mr Huy Phùng
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0989336366</span> Mr Tùng
                    </p>
                    <div class="model__title">
                        Khách hàng doanh nghiệp
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Mr Hòa
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0989336366</span> Mr Việt Anh
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        Khách hàng đại lý - MUA, BÁN LUÔN
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Mr Tuyết
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0989336366</span> Mr Hải Đăng
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        Bảo hành - Hỗ trợ kỹ thuật
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> 377-379 Trương Định - Hà Nội
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> 52 Trần Phú, Hà Đông, Hà Nội
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> 176 Tân Phước, P.6, Q10, HCM
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        Kế toán
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Ms Lanh
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Ms Thúy
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        Kế toán công nợ
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Ms Tươi
                    </p>
                </div>
                <div class="model__content-item">
                    <p class="model__item-content">
                        GÓP Ý <span class="orange">0971113333</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./public/assets/js/model.js"></script>
<script src="./public/assets/js/scroll.js"></script>
<script src="./public/assets/js/navbar.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./public/assets/js/slider.js"></script>
<script>
    function DangNhapThanhCong() {
        toast({
            title: "Thành công!",
            message: "Bạn đã đăng nhập thành công!",
            type: "success",
            duration: 4000
        });
    }

    function DangKyThanhCong() {
        toast({
            title: "Thành công!",
            message: "Bạn đã đăng ký TK thành công!",
            type: "success",
            duration: 4000
        });
    }

    function DatHangThanhCong() {
        toast({
            title: "Thành công!",
            message: "Bạn đã đặt hàng thành công!",
            type: "success",
            duration: 4000
        });
    }

    function ThemGioHang() {
        toast({
            title: "Thành công!",
            message: "Đã thêm vào giỏ hàng!",
            type: "success",
            duration: 4000
        });
    }

    function ChuaDangNhap() {
        toast({
            title: "Lưu ý!",
            message: "Bạn cần phải đăng nhập!",
            type: "error",
            duration: 2000
        });
    }
    
    function HetHang() {
        toast({
            title: "Lưu ý!",
            message: "Hết hàng. Không thể thêm vào giỏ!",
            type: "error",
            duration: 2000
        });
    }

    function showInfoToast() {
        toast({
            title: "Lưu ý!",
            message: "Chức năng này chưa được cập nhật!",
            type: "info",
            duration: 2000
        });
    }
</script>
<script src="./public/toast messages/toast-mess.js"></script>

</html>