<?php
require_once('../../Model/Product.php');
$products = Product::all();
?>

<div class="container">
    <h2 style="text-align:center">Danh sách Nhà Đất</h2>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table table-bordered table-hover table-responsive">
                <tr>
                    <th>ID</th>
                    <th>Tiêu Đề</th>
                    <th>Loại</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>
                </tr>
                <?php foreach($products as $item) { ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><?= $item->name ?></td>
                    <td><?= $item->idType ?></td>
                    <td><?= $item->price ?></td>
                    <td><?= $item->image ?></td>
                    <td><a href="dashdoard.php?show_product&id=<?= $item->id ?>">Xem</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
