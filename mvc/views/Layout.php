<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ADMIN - NHÓM 1</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/2304/2304226.png" type="image/x-icon" />
    <base href="http://localhost/nguyencongpc/">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="./mvc/views/assets/css/styles.css" rel="stylesheet"/>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="Layout.html">NGUYỄN CÔNG PC</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="http://localhost/nguyencongpc/KhachHang/Logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="http://localhost/nguyencongpc/Home">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house-user"></i></i></div>
                            HOME
                        </a>
                        <a class="nav-link" href="http://localhost/nguyencongpc/NSX">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-bandage"></i></div>
                            NHÀ SẢN XUẤT
                        </a>
                        <a class="nav-link" href="http://localhost/nguyencongpc/KhachHang">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></i></div>
                            TÀI KHOẢN
                        </a>
                        <a class="nav-link" href="http://localhost/nguyencongpc/DonHang">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-cart-arrow-down"></i></i></div>
                            ĐƠN HÀNG
                        </a>

                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            NGƯỜI DÙNG
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="http://localhost/nguyencongpc/NhanVien">Nhân viên</a>
                                <a class="nav-link" href="http://localhost/nguyencongpc/KhachHang">Khách hàng</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            SẢN PHẨM
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    HÃNG
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <?php
                                        for ($i = 0; $i < count($data["nsx"]); $i++) {
                                            $item = $data["nsx"][$i];
                                            echo '
                                                <a class="nav-link" href="http://localhost/nguyencongpc/SanPham/ShowByNSX/' . $item->id . '">' . $item->tenNSX . '</a>
                                            ';
                                        }
                                        ?>
                                        <!-- <a class="nav-link" href="Layout.html"></a> -->
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    GIÁ
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="http://localhost/nguyencongpc/SanPham/ShowByCost1/0/10">0 - 10 triệu</a>
                                        <a class="nav-link" href="http://localhost/nguyencongpc/SanPham/ShowByCost1/10/20">10 - 20 triệu</a>
                                        <a class="nav-link" href="http://localhost/nguyencongpc/SanPham/ShowByCost1/20/30">20 - 30 triệu</a>
                                        <a class="nav-link" href="http://localhost/nguyencongpc/SanPham/ShowByCost2/30">30 triệu trở lên</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <?php
                require_once "./mvc/views/pages/" . $data["page"] . ".php";

                ?>
                
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Designed by NHOM 1</div>
                        <div>
                            <a href="#">Privacy Policy</a> &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="./mvc/views/assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="./mvc/views/assets/js/datatables-simple-demo.js"></script>

</body>

</html>