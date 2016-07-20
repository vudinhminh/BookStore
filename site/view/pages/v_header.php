<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Minh Vũ</title>
        <meta http-equiv="cache-control" content="no-cache"/>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1"/>
        <meta name="viewport" content="width=device-width"/>
        <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/style1.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bs.css" rel="stylesheet" type="text/css"/> 
        <link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="wrapper">
            <header id="main-header">
                <section class="container-fluid container">
                    <section class="row-fluid">
                        <section class="span4">
                            <h1 id="logo"> <a href="?cn=home"><img src="public/images/logo.png"/></a> </h1>
                        </section>
                        <section class="span8">
                            <ul class="top-nav2">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    echo "<li class'dangnhap2'><a>Xin chào " . $_SESSION['user']['name'] . "</a></li><li><a href='login.php?dn=XLDangXuat'>Đăng xuất</a></li>";
                                } else {
                                    ?>
                                    <li><a href="login.html">Đăng nhập</a></li>
                                    <li><a href="login.html?dn=register">Đăng kí</a></li>
                                    <?php
                                }
                                ?>
                                <li><a href="?cn=giohang">Giỏ hàng <i class="fa fa-shopping-cart" aria-hidden="true"></i><span style="color: red">(<?php echo $so_luong_hang = isset($_SESSION['giohang']) ? count($_SESSION['giohang']) : 0; ?>)</span></a></li>
                            </ul>
                            <div class="col-xs-12 ">

                                <input class="col-md-6 col-xs-10" name="" type="text" style="" placeholder="Tìm kiếm" />
                                <button class="btn btn-info" type="submit" style="height: 35px;"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </section>
                    </section>
                </section>
                <button id="menu1" style="font-size: 23px;background-color: #E5E5E5;height: 40px;line-height: 40px; width: 40px; text-align: center  " class="navbar-toggler pull-xs-right hidden-sm-up collapsed" type="button" data-toggle="collapse" data-target=".menu1" aria-expanded="false">
                    ☰
                </button>
                <nav id="nav">
                    <nav class="navbar menu1">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav">
                                <li> <a href="?cn=home">Trang chủ</a> </li>
                                <li><a href="?cn=home&method=gioithieu">Giới thiệu</a></li>
                                <li><a href="?cn=khuyenmai">Khuyến mãi</a></li>
                                <li><a href="?cn=hotro">Hỗ trợ khách hàng</a></li>
                                <li><a href="?cn=home&method=lienhe">Liên hệ & Địa chỉ</a></li>
                            </ul>

                        </div>
                    </nav>
                </nav>
            </header>
            <section id="content-holder" class="container-fluid container">
                <section class="row-fluid">
