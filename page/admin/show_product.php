<?php
include_once('../../Model/Product.php');
$item = Product::Find($_GET['id']);
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <p>
                <h1><?= $item->name ?></h1>
            </p>
            <p>
                <h2>Giá: <?= $item->price ?></h2>
            </p>
            <p>
                <h3>Loại: <?= $item->idType ?> </h3>
            </p>
            <p>
                <h3>Mô tả: <?= $item->description ?></h3>
            </p>
            <p>
                <h3></h3>
            </p>
            <p>
                <h3>Hình ảnh:<?= $item->image ?> </h3>
            </p>
                <a href="#" class="image-link">
                    <img src="#" alt="" height="250px">
                </a>
                <br><br>
        </div>
        <div class="col-md-4"   style="padding:15% 5%;">
            <aside class="profile-card">
                <header>
                    <a target="_blank" href="#">
                    <img src="#" width="200px" class="hoverZoomLink">
                    </a>
                    <h3>Tổng lượt xem: </h3>
                    <h3>Lần xem cuối cùng: </h3>
                    <h4>Tạo Ngày: <p></p></h1>
                    <h4>Lần cập nhật cuối cùng: <p></p></h2>
                </header>
                <div class="profile-bio row">
                    <a class="col-md-6 col-sm-6" href="#"><button class="btn btn-primary">Sửa</button></a>
                    <a class="col-md-6 col-sm-6" href="#"><button class="btn btn-primary">Xóa</button></a>
                </div>
            </aside>
        </div>
    </div>
</div>