<?php
$id = $ten = "";

if (isset($data["des"]->id) && isset($data["des"]->tenNSX)) {
    $id = $data["des"]->id;
    $ten = $data["des"]->tenNSX;
}

?>

<div class="container-fluid px-4">
    <form action="http://localhost/nguyencongpc/NSX/UpdatebyId" method="POST" class="product">
        <h1 class="product_head">CHI TIẾT NHÀ SẢN XUẤT</h1>
        <div class="content">

            <div class="content-left">
                <div class="product-item">
                    <label for="" class="product-label">Mã NSX</label>
                    <input class="product__item-text" value="NSX<?php echo $id ?>" disabled />
                    <input type="hidden" name="id" value="<?php echo $id ?>" />
                </div>
                <div class="product-item">
                    <label for="" class="product-label">Tên NSX</label>
                    <textarea name="ten" id="" cols="100" rows="3" class="product-tarea"><?php echo $ten ?></textarea>
                </div>

                <input type="submit" value="Cập nhật" name="submit" class="btn-submit">
            </div>
            <div class="content-right">

            </div>
        </div>
    </form>
</div>