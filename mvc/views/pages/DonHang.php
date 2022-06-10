<div class="container-fluid px-4">
    <h1 class="mt-4">QUẢN LÝ ĐƠN HÀNG</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i> DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Mã Đơn hàng</th>
                        <th>Email</th>
                        <th>Họ Tên KH</th>
                        <th>Ngày Mua</th>
                        <th>SDT</th>
                        <th>Địa Chỉ</th>
                        <th>Tổng tiền</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Mã Đơn hàng</th>
                        <th>Email</th>
                        <th>Họ Tên KH</th>
                        <th>Ngày Mua</th>
                        <th>SDT</th>
                        <th>Địa Chỉ</th>
                        <th>Tổng tiền</th>
                        <th>Chức năng</th>
                    </tr>
                </tfoot>
                <tbody>   
                    <?php foreach($data["orders"] as $key=>$value) {?>                
                        <tr>
                            <td>DH<?php echo $value->id?></td>
                            <td><?php echo $value->email?></td>
                            <td><?php echo $value->hoTen?></td>
                            <td><?php echo $value->ngayMua?></td>
                            <td><?php echo $value->SDT?></td>
                            <td><?php echo $value->diaChi?></td>
                            <td><?php echo $value->tongTien?></td>
                            <td><a href="http://localhost/nguyencongpc/DonHang/ChiTietDonHang/<?php echo $value->id?>">Xem chi tiết</a></td>
                        </tr>

                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>