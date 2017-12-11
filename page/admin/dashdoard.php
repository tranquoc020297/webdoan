<html>
    <head>
        <title>Quản Lý Bán Hàng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">     
        <link rel="stylesheet" href="../../source/css/dashdoard/style.css">
    </head>
   <body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('admin')}}"> HỆ THỐNG QUẢN TRỊ</a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Xin chào:&nbsp;Trần Ngọc Quốc<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;Danh sách tài khoản</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i>&nbsp;Hồ sơ cá nhân</a></li>
                        <li><a href="{{route('add-user')}}"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;Thêm tài khoản</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('logout')}}"><i class="glyphicon glyphicon-off"></i>&nbsp;Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">     
                <ul class="nav navbar-nav side-nav">
                    <li style="background:#52bc89;color:#fff;">
                        <a href="javascript:;" style="color:#fff;">&nbsp;&nbsp;MENU</a>
                    </li> 
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#sanpham">Sản Phẩm
                        <i class="glyphicon glyphicon-chevron-down"></i>
                        </a>
                        <ul id="sanpham" class="collapse">
                            <li><a href="?products">Danh sách</a></li>
                            <li><a href="?add">Thêm</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#khachhang">Khách Hàng
                        <i class="glyphicon glyphicon-chevron-down"></i>
                        </a>
                        <ul id="khachhang" class="collapse">
                            <li><a href="#">Danh sách</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#hoadon">Hóa Đơn
                        <i class="glyphicon glyphicon-chevron-down"></i>
                        </a>
                        <ul id="hoadon" class="collapse">
                            <li><a href="#">Danh sách</a></li>
                        </ul>
                    </li>
                </ul>
            </div> 
        </nav>
        <div id="page-wrapper">
            <div class="container">
                <?php
                    if(isset($_GET['products']))
                        include('products.php');
                    if(isset($_GET['add']))
                        include('add_product.php');
                    if(isset($_GET['show_product']))
                        include('show_product.php');
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!--viewBox-->
    <script type="text/javascript">
    $(document).ready(function(){

        var imagesPreviews = function(input) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<img width="150">')).prop('src', event.target.result).appendTo('#previewImages');
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        var imagesPreview = function(input) {
            if (input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $('#previewImage').prop('src', event.target.result);
                        $('#previewImage').prop('width', 150);
                    }
                    reader.readAsDataURL(input.files[0]);
            }
        };
            
        $('#hinhanh').on('change', function() {
            imagesPreview(this);
        });

        $('#images').on('change', function() {
            imagesPreviews(this);
        });

        $('.delete-product').on('click',function(){
            if(!confirm('Bạn có chắc muốn xóa'))
                return;
        });
            
    });
    </script>
   </body>
</html>