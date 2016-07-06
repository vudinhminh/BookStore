<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Bán Sách</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="public/js/jquery-1.12.0.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="header" class="container">
            <div class="logo col-md-2">
                <img src="public/images/logo.png" alt="" height="150px"/>
            </div>
            <div class="timkiem col-lg-7">
                <input type="text" name="txtTimKiem" size="70" placeholder="Tìm kiếm sản phẩm" class="txttimkiem">
                <input type="image" src="public/images/timkiem.jpg" name="btnTimKiem" class="ImageTimKiem" >
                
            </div>
            <div class="timkiem col-lg-2">
                <input type="button" value="Đăng nhập" class="dangnhap btn btn-primary btn-lg" >
                
            </div>
            <div class="timkiem col-lg-1">
                
                <img src="public/images/rohang.jpg" alt="" class="giohang"/>
            </div>
        </div>
        <!-- end header -->
        <div id="nav" class="container">
            <div class=" col-lg-3">
                <p class="danhmucsp"> Danh Mục Sản Phẩm</p>
            </div>
            <div class="menu col-lg-9">
                <ul>
                    <li><a href="index.php" >Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Hướng dẫn</a></li>
                </ul>
            </div>
        </div>
        <div id="than" class="container">
            <div class="left col-lg-3">
                <?php
                    include_once 'site/controller/c_loai_sach.php';
                ?>
            </div>
            <div class="right col-lg-9" id="right1">
                <?php
                    if(!isset($_GET["cn"])){
                        include_once 'site/view/v_trang_chu.php';
                    }
                    else {
                        $cn=$_GET["cn"];
                        switch($cn)
                        {
                            case "ds_sach_theo_loai":
                                include_once 'site/controller/c_ds_sach_theo_loai.php';
                                break;
                        } 
                    }
                ?>
                
            </div>
        </div>
        <!-- end than -->
        <div style="clear: both;"></div>
        <div id="footer" class="container">
            <p> Bản quyền © Công ty Cổ phần Văn Hóa Phương Nam</p>
            <p>Lầu 1, 940 Đường 3/2, Phường 15, Quận 11, Tp. Hồ Chí Minh</p>
            <p>Điện thoại: 1900 6656</p>
                
        </div>
        <!-- end footer -->
        <script src="public/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>


