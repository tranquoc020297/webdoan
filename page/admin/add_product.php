<?php
    require_once('../../Controller/ProductController.php');
    if(isset($_POST))
        save();
?>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="" method="post" enctype="multipart/form-data">
                <h2 style="text-align:center">Thêm bài viết</h2>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="tieude">Tiêu Đề</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="tieude" name="tieude">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="loai">Loại</label>
                    <div class="col-md-10">
                        <select class="form-control" id="loai" name="loai">
                            <option selected>Audi</option>
                            <option >Lamborghini</option>
                            <option >Lexus</option>
                            <option >Toyota</option>
                            <option >Ferrari</option>
                            <option >Porsche</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="gia">Giá</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="gia" name="gia">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="mota">Mô tả</label>
                    <div class="col-md-10 fr-view">
                        <textarea class="form-control" rows="5" id="mota" name="mota"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="feature_image">Hình ảnh đại diện</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" id="hinhanh" name="feature_image">
                        <img  id="previewImage" src="" alt="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="images">Hình ảnh khác</label>
                    <div class="col-md-10" id="previewImages">
                        <input type="file" class="form-control-file" id="images" name="images[]" multiple>
                    </div>
                </div>
                <input type="submit" style="text-align:center" class="btn btn-primary" value="Thêm" name="add">
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>