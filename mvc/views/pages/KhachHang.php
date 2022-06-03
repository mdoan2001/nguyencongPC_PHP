<div class="container-fluid px-4">
    <h1 class="mt-4">KHÁCH HÀNG</h1>
    <a href="http://localhost/nguyencongpc/KhachHang/ThemMoi">Thêm mới</a>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i> DataTable
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Họ Tên</th>
                        <th>Mật khẩu</th>
                        <th>Loại Tài Khoản</th>
                        <th>Địa chỉ</th>
                        <th>SĐT</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Email</th>
                        <th>Họ Tên</th>
                        <th >Mật khẩu</th>
                        <th>Loại Tài Khoản</th>
                        <th>Địa chỉ</th>
                        <th>SĐT</th>
                        <th>Chức năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    for($i=0;$i<count($data["users"]); $i++){
                        $email = $data["users"][$i]["email"];
                        $hoTen = $data["users"][$i]["hoTen"];
                        $matKhau = $data["users"][$i]["matKhau"];
                        $loaiTaiKhoan = $data["users"][$i]["loaiTaiKhoan"];
                        $diaChi = $data["users"][$i]["diaChi"];
                        $SDT = $data["users"][$i]["SDT"];
                    ?>

                        <tr>
                            <td><?php echo $email;?></td>
                            <td><?php echo $hoTen;?></td>
                            <td ><?php echo $matKhau;?></td>
                            <td><?php echo ($loaiTaiKhoan==0)?"Admin":"User";?></td>
                            <td><?php echo $diaChi;?></td>
                            <td><?php echo $SDT;?></td>
                            <td><a href="http://localhost/nguyencongpc/KhachHang/ShowByEmail/<?php echo $email; ?>">Sửa</a>&nbsp;<a href="http://localhost/nguyencongpc/KhachHang/DeleteByEmail/<?php echo $email ?>">Xóa</a></td>
                        </tr>

                    <?php
                    }

                    ?>

                    <!-- <tr>
                        <td>KH01</td>
                        <td>Nguyễn Minh Đoàn</td>
                        <td>mdoan2001@gmail.com</td>
                        <td>12345678</td>
                        <td>ADMIN</td>
                        <td>Văn Giang - Hưng Yên</td>
                        <td>0962662287</td>
                        <td><a href="#">Sửa</a>&nbsp;<a href="#">Xóa</a></td>
                    </tr> -->
                
                </tbody>
            </table>
        </div>
    </div>
</div>