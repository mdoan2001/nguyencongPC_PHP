<div class="container-fluid px-4">
    <h1 class="mt-4">NHÂN VIÊN</h1>
    <a href="http://localhost/nguyencongpc/NhanVien/ThemMoi">Thêm mới</a>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i> DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Mã Nhân viên</th>
                        <th>Tên Nhân viên</th>
                        <th>Ảnh</th>
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Mã Nhân viên</th>
                        <th>Tên Nhân viên</th>
                        <th>Ảnh</th>
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Chức năng</th>
                    </tr>
                </tfoot>
                <tbody>

                    <?php
                    for($i=0; $i<count($data["nv"]); $i++){
                        $id = $data["nv"][$i]["id"];
                        $hoTen = $data["nv"][$i]["hoTen"];
                        $hinhAnh = $data["nv"][$i]["hinhAnh"];
                        $gioiTinh = $data["nv"][$i]["gioiTinh"]=="0"?"Nam":"Nữ";
                        $email = $data["nv"][$i]["email"];
                        $diaChi = $data["nv"][$i]["diaChi"];
                        $SDT = $data["nv"][$i]["SDT"];
                        
                    ?>
                        <td>NV0<?php echo $id?></td>
                        <td><?php echo $hoTen?></td>
                        <td style="text-align: center;"><img src="<?php echo $hinhAnh?>" alt="" width="80px" height="90px"></td>
                        <td><?php echo $gioiTinh?></td>
                        <td><?php echo $email?></td>
                        <td><?php echo $diaChi?></td>
                        <td><?php echo $SDT?></td>
                        <td><a href="http://localhost/nguyencongpc/NhanVien/ShowById/<?php echo $id?>">Sửa</a>&nbsp;<a href="http://localhost/nguyencongpc/NhanVien/DeleteById/<?php echo $id?>">Xóa</a></td>
                    </tr>
                    
                    <?php
                    }
                    ?>
                    <!-- <tr>
                        <td>NV01</td>
                        <td>Nguyễn Bích Ngọc</td>
                        <td><img src="https://vnn-imgs-a1.vgcloud.vn/icdn.dantri.com.vn/2021/05/26/ngo-ngang-voi-ve-dep-cua-hot-girl-anh-the-chua-tron-18-docx-1622043349706.jpeg" alt="" width="80px" height="100xp"></td>
                        <td>Nữ</td>
                        <td>ngoc@gmail.com</td>
                        <td>Thanh Xuân - Hà Nội</td>
                        <td>0987654321</td>
                        <td><a href="#">Sửa</a>&nbsp;<a href="#">Xóa</a></td>
                    </tr> -->
                    

                </tbody>
            </table>
        </div>
    </div>
</div>