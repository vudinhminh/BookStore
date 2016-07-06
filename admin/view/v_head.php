<?php  ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bán sách</title>
        <link href="../public/css/styleadmin.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap -->
        <link href="../public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- Font Awesome -->
        <link href="../public/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Custom Theme Style -->
        <link href="../public/css/custom.min.css" rel="stylesheet" type="text/css"/>
        <!-- jQuery -->
        <script src="../public/js/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="../public/js/admin1.js" type="text/javascript"></script>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="admin.php" class="site_title"><i class="fa fa-book"></i> <span>BÁN SÁCH</span></a>
                        </div>
                        <div class="clearfix"></div>
                        <!-- menu profile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="../public/images/admin.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Xin chào,</span>
                                <h2>Admin</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->
                        <br />
                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            
                            <div class="menu_section">
                                <h3>Danh mục</h3>
                                <ul class="nav side-menu">
                                    <li><a href="#"><i class="fa fa-home"></i> Trang chủ</a></li>
                                    <li><a href="admin.php?sk=sach"><i class="fa "></i> Quản lý sách </a></li>
                                    <li><a href="admin.php?sk=nhaxuatban"><i class="fa "></i>Nhà xuất bản </a></li>
                                    <li><a href="admin.php?sk=loaisach"><i class="fa "></i> Loại sách</a></li>
                                    <li><a href="admin.php?sk=tacgia"><i class="fa "></i> Tác giả</a></li>
                                    <li><a><i class="fa "></i>Đơn hàng</a></li>
                                    <li><a><i class="fa "></i>Thành viên</a></li>
                                    <li><a><i class="fa "></i>Thống kê</a></li>
                                    <li><a><i class="fa "></i>Báo cáo</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->
                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>
                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="../public/images/admin.jpg" alt="">Admin
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="#"><i class=" pull-right fa "></i> Đổi mật khẩu</a></li>
                                        <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
                <!-- page content -->
                <div class="right_col"  id="right1">