
<style>
    .detail{
        display: flex;
        margin: 10px 0;
    }
    .detail__col{
        flex-basis: 30%;
    }
    .detail__col+.detail__col{
        margin-right: 20px;
    }
    .detail__item{
        display: flex;
        margin: 10px 0;
    }
    .detail__item-label{
        min-width: 120px;
    }

</style>
<div class="container-fluid px-4">
    <h1 class="mt-4">CHI TIẾT ĐƠN HÀNG</h1>
    <div class="detail">
        <div class="detail__col">
            <div class="detail__item">
                <div class="detail__item-label">Mã Đơn hàng</div>
                <input type="text" class="detail__item-input" value="<?php echo $data["order"]->id ?>" disabled>
            </div>
            <div class="detail__item">
                <div class="detail__item-label">Email</div>
                <input type="text" class="detail__item-input" value="<?php echo $data["order"]->email?>" disabled>
            </div>
            <div class="detail__item">
                <div class="detail__item-label">Họ Tên KH</div>
                <input type="text" class="detail__item-input" value="<?php echo $data["order"]->hoTen ?>" disabled>
            </div>
            <div class="detail__item">
                <div class="detail__item-label">Số điện thoại</div>
                <input type="text" class="detail__item-input" value="<?php echo $data["order"]->SDT ?>" disabled>
            </div>
            <div class="detail__item">
                <div class="detail__item-label">Ngày Đặt</div>
                <input type="text" class="detail__item-input" value="<?php echo $data["order"]->ngayMua ?>" disabled>
            </div>
            
        </div>
        <div class="detail__col">
            
            <div class="detail__item">
                <div class="detail__item-label">Địa chỉ</div>
                <textarea name="" id="" cols="30" rows="3" disabled><?php echo $data["order"]->diaChi ?></textarea>
            </div>
            <div class="detail__item">
                <div class="detail__item-label">Ghi chú</div>
                <textarea name="" id="" cols="30" rows="3" disabled><?php echo $data["order"]->ghiChu ?></textarea>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i> DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Mã CTDH</th>
                        <th>Mã sản phẩm</th>
                        <th width = "400px">Tên sản phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>
                        <th>Thành Tiền</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Mã CTDH</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>
                        <th>Thành Tiền</th>
                    </tr>
                </tfoot>
                <tbody>   
                    <?php 
                    $tongTien =0;
                    foreach($data["detail"] as $key=>$value){
                        $tongTien += $value->tongTien;    ?>     
                               
                        <tr>
                            <td>CTDH<?php echo $value->id ?></td>
                            <td>SP<?php echo $value->maSanPham ?></td>
                            <td><?php echo $value->tenSanPham ?></td>
                            <td><?php echo $value->soLuong ?></td>
                            <td><?php echo number_format($value->gia) ?>đ</td>
                            <td><?php echo number_format($value->tongTien)?>đ</td>
                        </tr>
                    <?php }?>

                    <tr>
                            <td colspan="5" style="font-weight: bold;">Tổng Tiền</td>
                            <td style="font-weight: bold;"><?php echo number_format($tongTien)?>đ</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>