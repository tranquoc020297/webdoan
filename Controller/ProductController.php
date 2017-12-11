<?php
include('../../Model/Product.php');

  

    function save(){
        if(isset($_POST['submit-add']))
        {
            $item = new Product;
            $item->name = $_POST['tieude'];
            $item->idType = $_POST['loai'];
            $item->price = $_POST['gia'];   
            $item->description = $_POST['mota'];
            $item->image ="khong co";
            if($item->save())
                header('location:dashdoard.php?products');
        }
    }

?>