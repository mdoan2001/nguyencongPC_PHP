<div class="container-fluid px-4">
    <h1 class="mt-4">NHÀ SẢN XUẤT</h1>
    <a href="http://localhost/nguyencongpc/NSX/ThemMoi">Thêm mới</a>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i> DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Mã nhà sản xuất</th>
                        <th>Tên nhà sản xuất</th>                       
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Mã nhà sản xuất</th>
                        <th>Tên nhà sản xuất</th>                       
                        <th>Chức năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    for($i=0; $i<count($data["nsx"]); $i++){
                        $item = $data["nsx"][$i];
                        echo '                           
                             <tr>
                                <td>NSX0'.$item->id.'</td>
                                <td>'.$item->tenNSX.'</td>
                                <td><a href="http://localhost/nguyencongpc/NSX/ShowById/'.$item->id.'">Sửa</a>&nbsp;<a href="http://localhost/nguyencongpc/NSX/DeleteById/'.$item->id.'">Xóa</a></td>                        
                            </tr>
                        ';
                    }

                    ?>
                    <!-- <tr>
                        <td>01</td>
                        <td>DELL</td>
                        <td><a href="">Sửa</a>&nbsp;<a href="">Xóa</a></td>                        
                   </tr>                    -->
                </tbody>
            </table>
        </div>
    </div>
</div>

