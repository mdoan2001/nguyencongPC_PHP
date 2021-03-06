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
                                        <div class="header__top-link-text">H??? th???ng showroom</div>
                                    </div>
                                </div>
                            </li>
                            <li class="header__top-item js-display-hotline">
                                <div class="header__top-link header__top-link--discoloration" >
                                    <div class="header__top-link-item">
                                        <i class="header__top-link-icon fa-solid fa-headset"></i>
                                        <div class="header__top-link-text">Kh??ch C?? Nh??n</div>
                                    </div>
                                </div>
                            </li>
                            <li class="header__top-item js-display-company">
                                <div class="header__top-link header__top-link--discoloration" >
                                    <div class="header__top-link-item">
                                        <i class="header__top-link-icon fa-solid fa-headset"></i>
                                        <div class="header__top-link-text">Kh??ch Doanh Nghi???p</div>
                                    </div>
                                </div>
                            </li>
                            <li class="header__top-item">
                                <div class="header__top-link " >
                                    <div class="header__top-link-item">
                                        <i class="header__top-link-icon fa-solid fa-newspaper"></i>
                                        <div class="header__top-link-text">Tin C??ng Ngh???</div>
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
                                        <a href="http://localhost/nguyencongpc/KhachHang/registration" class="header__top-account-link">????ng k??/</a><a href="http://localhost/nguyencongpc/KhachHang/login" class="header__top-account-link">????ng nh???p</a> 
                                    ';
                                } else {
                                    echo '                                       
                                        <i class="header__top-account-icon fa-solid fa-circle-user"></i>
                                        <a href="registration.html" class="header__top-account-link header__top-account-link--uppercase">HI '.$_SESSION["hoTen"].'</a>
                                        <ul class="header__top-account-list">
                                            <li class="header__top-account-item">
                                                <a href="http://localhost/nguyencongpc/KhachHang/ThongTinCaNhan" class="header__top-account-item-link">C?? nh??n</a>
                                            </li>
                                            <li class="header__top-account-item">
                                                <a href="http://localhost/nguyencongpc/KhachHang/logout" class="header__top-account-item-link">????ng su???t</a>
                                            </li>
                                        </ul>                                      
                                    ';
                                }
                            } else {
                                echo '                                        
                                        <i class="header__top-account-icon fa-solid fa-circle-user"></i>
                                        <a href="http://localhost/nguyencongpc/KhachHang/registration" class="header__top-account-link">????ng k??/</a><a href="http://localhost/nguyencongpc/KhachHang/login" class="header__top-account-link">????ng nh???p</a>                                      
                                    ';
                            }

                            ?>

                        </div>

                        <!-- <div class="header__top-account">
                            <i class="header__top-account-icon fa-solid fa-circle-user"></i>
                            <a href="http://localhost/nguyencongpc/KhachHang/registration" class="header__top-account-link">????ng k??/</a><a href="http://localhost/nguyencongpc/KhachHang/login" class="header__top-account-link">????ng nh???p</a>
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
                                <input name="name" class="header__main-search-input" type="text" placeholder="Nh???p t??n s???n ph???m, t??? kh??a c???n t??m...">
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
                                    Card m??n h??nh
                                </a>
                                <a class="header__main-search-tag-item">
                                    Build PC
                                </a>
                            </div>
                        </div>
                        <div class="header__main-options">
                            <div class="header__main-options-item" onclick="showInfoToast();">
                                <i class="header__main-options-icon fa-solid fa-gift"></i>
                                <p class="header__main-options-text">Khuy???n m???i</p>
                            </div>
                            <a href="http://localhost/nguyencongpc/DonHang/ShowByEmail" class="header__main-options-item header__cart">
                                <i class="header__main-options-icon fa-solid fa-money-bill-1-wave"></i>
                                <p class="header__main-options-text">????n h??ng ???? ?????t</p>                                                        
                                <span class="header__cart-count" style="top: -7px; right: 40px;">
                                    <?php echo $data["SLDH"]?>
                                </span>
                            </a>
                            <a href="http://localhost/nguyencongpc/GioHang" class="header__main-options-item header__cart">
                                <i class="header__main-options-icon fa-solid fa-cart-arrow-down"></i>
                                <p class="header__main-options-text">Gi??? h??ng</p>
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
                                <div class="header__main-list-text">DANH M???C S???N PH???M</div>
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
                                                <p class="navbar__name">LAPTOP - PH??? KI???N</p>
                                            </a>
                                        </li>                                       -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header__main-search">
                            <div class="header__main-search-group">
                                <input class="header__main-search-input" type="text" placeholder="Nh???p t??n s???n ph???m, t??? kh??a c???n t??m...">
                                <div class="header__main-search-icon">
                                    <i class=" fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                        <div class="header__main-options">
                            <div href="" class="header__main-options-item" onclick="showInfoToast();">
                                <i class="header__main-options-icon fa-solid fa-gift"></i>
                                <p class="header__main-options-text">Khuy???n m???i</p>
                            </div>
                            <a href="http://localhost/nguyencongpc/DonHang/ShowByEmail" class="header__main-options-item header__cart">
                                <i class="header__main-options-icon fa-solid fa-money-bill-1-wave"></i>
                                <p class="header__main-options-text">????n h??ng ???? ?????t</p>
                                <span class="header__cart-count" style="top: -7px; right: 40px;">
                                    <?php echo $data["SLDH"]?>
                                </span>
                            </a>
                            <a href="http://localhost/nguyencongpc/GioHang" class="header__main-options-item header__cart">
                                <i class="header__main-options-icon fa-solid fa-cart-arrow-down"></i>
                                <p class="header__main-options-text">Gi??? h??ng</p>
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
                                CH??NH S??CH GIAO H??NG
                            </div>
                            <div class="footer__policy-des">
                                Nh???n h??ng v?? thanh to??n t???i nh??
                            </div>
                        </div>
                    </div>
                    <div class="footer__policy-item">
                        <i class="footer__policy-icon fa-solid fa-arrows-rotate"></i>
                        <div class="footer__policy-content">
                            <div class="footer__policy-title">
                                ?????I TR??? D??? D??NG
                            </div>
                            <div class="footer__policy-des"></div>
                        </div>
                    </div>
                    <div class="footer__policy-item">
                        <i class="footer__policy-icon fa-solid fa-money-check"></i>
                        <div class="footer__policy-content">
                            <div class="footer__policy-title">
                                THANH TO??N TI???N L???I
                            </div>
                            <div class="footer__policy-des">
                                Tr??? ti???n m???t, CK, tr??? g??p 0%
                            </div>
                        </div>
                    </div>
                    <div class="footer__policy-item">
                        <i class="footer__policy-icon fa-solid fa-circle-question"></i>
                        <div class="footer__policy-content">
                            <div class="footer__policy-title">
                                H??? TR??? NHI???T T??NH
                            </div>
                            <div class="footer__policy-des">
                                T?? v???n, gi???i ????p m???i th???c m???c
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
                                <div class="footer__menu-title">GI???I THI???U NGUY???N C??NG</div>
                                <a href="#" class="footer__menu-link">Gi???i thi???u c??ng ty</a>
                                <a href="#" class="footer__menu-link">Th??ng tin li??n h???</a>
                                <a href="#" class="footer__menu-link">Tin t???c</a>
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
                                <div class="footer__menu-title">H??? TR??? KH??CH H??NG</div>
                                <a href="#" class="footer__menu-link">H?????ng d???n mua h??ng tr???c tuy???n</a>
                                <a href="#" class="footer__menu-link">H?????ng d???n thanh to??n</a>
                                <a href="#" class="footer__menu-link">G???i y??u c???u b???o h??nh</a>
                                <a href="#" class="footer__menu-link">G??p ??, Khi???u n???i</a>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="footer__menu-item">
                                <div class="footer__menu-title">GI???I THI???U NGUY???N C??NG</div>
                                <a href="#" class="footer__menu-link">Ch??nh s??ch, quy ?????nh chung</a>
                                <a href="#" class="footer__menu-link">Ch??nh s??ch v???n chuy???n</a>
                                <a href="#" class="footer__menu-link">Ch??nh s??ch b???o h??nh</a>
                                <a href="#" class="footer__menu-link">Ch??nh s??ch ?????i tr??? v?? ho??n ti???n</a>
                                <a href="#" class="footer__menu-link">Ch??nh s??ch x??? l?? khi???u n???i</a>
                                <a href="#" class="footer__menu-link">B???o m???t th??ng tin kh??ch h??ng</a>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="footer__menu-item">
                                <div class="footer__menu-title">TH??NG TIN KHUY???N M???I</div>
                                <a href="#" class="footer__menu-link">Th??ng tin khuy???n m???i</a>
                                <a href="#" class="footer__menu-link">S???n ph???m khuy???n m???i</a>
                                <a href="#" class="footer__menu-link">S???n ph???m b??n ch???y</a>
                                <a href="#" class="footer__menu-link">S???n ph???m m???i</a>
                                <img src="./public/assets/img/khuyenmai/01.png" width="143px" height="54px" alt=""> <br>
                                <img src="./public/assets/img/khuyenmai/02.png" width="100px" height="20px" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer__showroom grid wide">
                <h1 class="footer__showroom-header">
                    H??? TH???NG C??C SHOWROOM C???A NGUY???N C??NG
                </h1>
                <div class="row">
                    <div class="col l-4 m-6 c-12">
                        <div class="footer__showroom-item">
                            <div class="footer__showroom-title">
                                <div class="footer__showroom-num">1</div>
                                <div class="footer__showroom-name">SHOWROOM - HO??NG MAI</div>
                            </div>
                            <img src="./public/assets/img/showroom/showroom-map1.jpg" alt="" class="footer__showroom-img">
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-location-dot"></i>
                                <p> S??? 377 - 379 Tr????ng ?????nh, T????ng Mai, Ho??ng Mai, H?? N???i</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p style="color: #007bff;"> B???m g???i t?? v???n b??n h??ng</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p>T?? v???n Gaming Gear: 0866666166 Mr Huy</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p>T?? v???n Laptop: 0866.666.266 - Mr Vi???t Anh</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p> H??? tr??? k??? thu???t: 0765666668 - 0705666668</p>
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
                                <div class="footer__showroom-name">SHOWROOM - H?? ????NG</div>
                            </div>
                            <img src="./public/assets/img/showroom/showroom-map2.jpg" alt="" class="footer__showroom-img">
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-location-dot"></i>
                                <p>S??? 52 Tr???n Ph??, M??? Lao, H?? ????ng, H?? N???i</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p style="color: #007bff;"> B???m g???i t?? v???n b??n h??ng</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p>T?? v???n Gaming Gear: 0866666166 Mr Huy</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p>T?? v???n Laptop: 0866.666.266 - Mr Vi???t Anh</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p> H??? tr??? k??? thu???t: 0765666668 - 0705666668</p>
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
                                <div class="footer__showroom-name">SHOWROOM - QU???N 10</div>
                            </div>
                            <img src="./public/assets/img/showroom/showroom-map3.jpg" alt="" class="footer__showroom-img">
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-location-dot"></i>
                                <p>176 T??n Ph?????c - Qu???n 10- TP H??? Ch?? Minh</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p style="color: #007bff;"> B???m g???i t?? v???n b??n h??ng</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p>T?? v???n Gaming Gear: 0866666166 Mr Huy</p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p>T?? v???n Laptop: 0866.666.266 - Mr Vi???t Anh </p>
                            </div>
                            <div class="footer__showroom-content">
                                <i class="footer__showroom-content-icon fa-solid fa-phone-flip"></i>
                                <p> H??? tr??? k??? thu???t: 0765666668 - 0705666668</p>
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
                    <div class="footer__contact-text">WEBSITE ???????C S??? H???U V?? QU???N L?? B???I NGUY???N VI???T C??NG</div>
                    <h1 class="footer__contact-head">C??NG TY TNHH M??Y T??NH NGUY???N C??NG </h1>
                    <div class="footer__contact-text">?????a ch???: S??? 377-379 Tr????ng ?????nh, t??? 41 - Ph?????ng T????ng Mai - Qu???n Ho??ng Mai - H?? N???i.</div>
                    <div class="footer__contact-text">M?? s??? thu???: 0107568451 do S??? K??? Ho???ch v?? ?????u T?? TP.H?? N???i (22/12/2015)</div>
                    <div class="footer__contact-text">Mua h??ng: <span>0989336366</span></div>
                    <div class="footer__contact-text">G??P ?? : 0971113333. Email: info@nguyencongpc.vn. Website: nguyencongpc.vn. Fanpage: www.facebook.com/MAY.TINH.NGUYEN.CONG</div>
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
                <h1 class="model__header-head">H??? TH???NG SHOWROOM</h1>
                <div class="model__header-close js-close-showroom">
                    <i class="model__header-icon fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="grid model__content">
                <div class="row ">
                    <div class="col l-6 m-6 c-12">
                        <div class="model__item">
                            <p class="model__item-content">
                                ?????a ch???: <span class="blue">S??? 377 - 379 Tr????ng ?????nh, T??n Mai, Ho??ng Mai, H?? N???i</span>
                            </p>
                            <p class="model__item-content">
                                B??n h??ng: <span class="red">0812666665 - 0962662287</span>
                            </p>
                            <p class="model__item-content">
                                H??? tr??? k??? thu???t: <span class="red">0765 666 668</span>
                            </p>
                            <p class="model__item-content">
                                Gi??? l??m vi???c: <span class="red">08:30 - 18:30</span>
                            </p>
                            <div class="model-item-map" style="background-image: url(./public/assets/img/showroom/showroom-map1.jpg);"></div>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="model__item">
                            <p class="model__item-content">
                                ?????a ch???: <span class="blue">52 Tr???n Ph?? - H?? ????ng - H?? N???i</span>
                            </p>
                            <p class="model__item-content">
                                B??n h??ng: <span class="red">0812666665 - 0962662287</span>
                            </p>
                            <p class="model__item-content">
                                H??? tr??? k??? thu???t: <span class="red">0765 666 668</span>
                            </p>
                            <p class="model__item-content">
                                Gi??? l??m vi???c: <span class="red">08:30 - 18:30</span>
                            </p>
                            <div class="model-item-map" style="background-image: url(./public/assets/img/showroom/showroom-map2.jpg);"></div>
                        </div>

                    </div>

                    <div class="col l-6 m-6 c-12" style="margin-top: 30px;">
                        <div class="model__item">
                            <p class="model__item-content">
                                ?????a ch???: <span class="blue">176 T??n Ph?????c - Qu???n 10 - TP H??? Ch?? Minh</span>
                            </p>
                            <p class="model__item-content">
                                B??n h??ng: <span class="red">0812666665 - 0962662287</span>
                            </p>
                            <p class="model__item-content">
                                H??? tr??? k??? thu???t: <span class="red">0765 666 668</span>
                            </p>
                            <p class="model__item-content">
                                Gi??? l??m vi???c: <span class="red">08:30 - 18:30</span>
                            </p>
                            <div class="model-item-map" style="background-image: url(./public/assets/img/showroom/showroom-map3.jpg);"></div>
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
                        T?? v???n - B??n h??ng online
                    </div>
                    <div class="grid">
                        <div class="row">
                            <div class="col l-6 m-6 c-6">
                                <div class="model__item">
                                    <div class="model__item-title">
                                        Chi nh??nh Ho??ng Mai - HN:
                                    </div>
                                    <p class="model__item-content">
                                        <span class="orange">0979999191</span> Mr Huy Ph??ng
                                    </p>
                                    <p class="model__item-content">
                                        <span class="orange">0866666166</span> Mr Huy L??u
                                    </p>
                                    <p class="model__item-content">
                                        <span class="orange">0989336366</span> Mr Ki??n
                                    </p>
                                </div>
                            </div>

                            <div class="col l-6 m-6 c-6">
                                <div class="model__item">
                                    <div class="model__item-title">
                                        Chi nh??nh qu???n 10 - HCM:
                                    </div>
                                    <p class="model__item-content">
                                        <span class="orange">0707086666</span> Mr Tu???n
                                    </p>
                                    <p class="model__item-content">
                                        <span class="orange">0988882838</span> Mr Phong
                                    </p>
                                    <p class="model__item-content">
                                        <span class="orange">0899299991</span> Mr ????ng V??
                                    </p>
                                </div>
                            </div>

                            <div class="col l-6 m-6 c-6">
                                <div class="model__item">
                                    <div class="model__item-title">
                                        Chi nh??nh H?? ????ng - HN:
                                        <p class="model__item-content">
                                            <span class="orange">0866666366</span> Mr T??ng
                                        </p>
                                        <p class="model__item-content">
                                            <span class="orange">0812666665</span> Mr H??a
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
                        <span class="orange">0866666166</span> Mr Vi???t Anh
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0989336366</span> Mr H??a
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        B???o h??nh - H??? tr??? k??? thu???t
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> 377-379 Tr????ng ?????nh, HN
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0989336366</span> 52 Tr???n Ph??, H?? ????ng, HN
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0989336366</span> 176 T??n Ph?????c, P.6, Q10, HCM
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        K??? to??n
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Ms Lanh
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Ms Th??y
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        K??? to??n c??ng n???
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Ms T????i
                    </p>
                </div>
                <div class="model__content-item">
                    <p class="model__item-content">
                        G??P ?? <span class="orange">0971113333</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Model Doanh nghi???p -->
    <div class="model" id="model-company">
        <div class="model__container model__container--min">
            <div class="model__header ">
                <h1 class="model__header-head">DOANH NGHI???P</h1>
                <div class="model__header-close js-close-company">
                    <i class="model__header-icon fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="model__content">
                <div class="model__content-item">
                    <div class="model__title">
                        Kh??ch h??ng doanh nghi???p
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Mr Huy Ph??ng
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0989336366</span> Mr T??ng
                    </p>
                    <div class="model__title">
                        Kh??ch h??ng doanh nghi???p
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Mr H??a
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0989336366</span> Mr Vi???t Anh
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        Kh??ch h??ng ?????i l?? - MUA, B??N LU??N
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Mr Tuy???t
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0989336366</span> Mr H???i ????ng
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        B???o h??nh - H??? tr??? k??? thu???t
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> 377-379 Tr????ng ?????nh - H?? N???i
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> 52 Tr???n Ph??, H?? ????ng, H?? N???i
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> 176 T??n Ph?????c, P.6, Q10, HCM
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        K??? to??n
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Ms Lanh
                    </p>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Ms Th??y
                    </p>
                </div>
                <div class="model__content-item">
                    <div class="model__title">
                        K??? to??n c??ng n???
                    </div>
                    <p class="model__item-content">
                        <span class="orange">0866666166</span> Ms T????i
                    </p>
                </div>
                <div class="model__content-item">
                    <p class="model__item-content">
                        G??P ?? <span class="orange">0971113333</span>
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
            title: "Th??nh c??ng!",
            message: "B???n ???? ????ng nh???p th??nh c??ng!",
            type: "success",
            duration: 4000
        });
    }

    function DangKyThanhCong() {
        toast({
            title: "Th??nh c??ng!",
            message: "B???n ???? ????ng k?? TK th??nh c??ng!",
            type: "success",
            duration: 4000
        });
    }

    function DatHangThanhCong() {
        toast({
            title: "Th??nh c??ng!",
            message: "B???n ???? ?????t h??ng th??nh c??ng!",
            type: "success",
            duration: 4000
        });
    }

    function ThemGioHang() {
        toast({
            title: "Th??nh c??ng!",
            message: "???? th??m v??o gi??? h??ng!",
            type: "success",
            duration: 4000
        });
    }

    function ChuaDangNhap() {
        toast({
            title: "L??u ??!",
            message: "B???n c???n ph???i ????ng nh???p!",
            type: "error",
            duration: 2000
        });
    }
    
    function HetHang() {
        toast({
            title: "L??u ??!",
            message: "H???t h??ng. Kh??ng th??? th??m v??o gi???!",
            type: "error",
            duration: 2000
        });
    }

    function showInfoToast() {
        toast({
            title: "L??u ??!",
            message: "Ch???c n??ng n??y ch??a ???????c c???p nh???t!",
            type: "info",
            duration: 2000
        });
    }
</script>
<script src="./public/toast messages/toast-mess.js"></script>

</html>