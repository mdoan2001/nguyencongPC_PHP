<div class="container-fluid px-4">
    <h1 class="mt-4">SẢN PHẨM</h1>
    <a href="http://localhost/nguyencongpc/SanPham/ThemMoi">Thêm mới</a>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i> DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Mã Sản phẩm</th>
                        <th width="470px">Tên Sản Phẩm</th>
                        <th>NSX</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Mã Sản phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>NSX</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Chức năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    for($i=0; $i<count($data["array"]); $i++){
                        $item = $data["array"][$i];
                        echo '
                        <tr>
                            <td>SP0'.$item->id.'</td>
                            <td>'.$item->tenSanPham.'</td>
                            <td>'.$item->tenNSX.'</td>
                            <td><img src="'.$item->hinhAnh.'" alt="" width="100px"></td>
                            <td>'.$item->soLuong.'</td>
                            <td>'.number_format($item->gia).'đ</td>
                            <td><a href="http://localhost/nguyencongpc/SanPham/ChiTietSanPham/'.$item->id.'">Sửa</a>&nbsp;<a href="http://localhost/nguyencongpc/SanPham/DeleteById/'.$item->id.'">Xóa</a></td>
                        </tr>
                        ';
                        
                    }
                    
                    ?>
                    <!-- <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr> -->

                </tbody>
            </table>
        </div>
    </div>
</div>