<?php
include('../../Model/Product.php');

    function index(){
        header('location:page/admin/dashdoard.php?products');
    }

    function save(){
        $item = new Product;
        $item->name = $_POST['tieude'];
        $item->idType = 1;
        $item->price = $_POST['gia'];
        $item->description = $_POST['mota'];
        $item->image = "chuaco";
        if($item->save())
            header('location:dashdoard.php?products');
    }

?>