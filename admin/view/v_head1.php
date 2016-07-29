<?php  ob_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Book Store Đình Minh</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="<?php echo FULL_SITE_ROOT ?>public/images/icon.png" type="image/x-icon" />
        <link href="<?php echo FULL_SITE_ROOT ?>public/css/styleadmin.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/_all-skins.min.css">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="?sk=sach" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo FULL_SITE_ROOT ?>public/images/admin.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $_SESSION['admin']['tenhienthi'] ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo FULL_SITE_ROOT ?>public/images/admin.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            Vũ Đình Minh - Web Developer
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="login_admin-doimk" class="btn btn-default btn-flat">Đổi mật khẩu</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="login_admin-xldangxuat" class="btn btn-default btn-flat">Đăng xuất</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo FULL_SITE_ROOT ?>public/images/admin.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $_SESSION['admin']['tenhienthi'] ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li><a href="admin-sach"><i class="fa fa-book"></i><span>Quản lý sách</span></a></li>
                        <li><a href="admin-nhaxuatban"><i class="fa fa-user-plus"></i><span>Nhà xuất bản</span></a></li>
                        <li><a href="admin-loaisach"><i class="fa fa-th"></i><span>Loại sách</span></a></li>
                        <li><a href="admin-tacgia"><i class="fa fa-users"></i><span>Tác giả</span></a></li>
                        <li><a href="admin-donhang"><i class="fa fa-shopping-basket"></i><span>Đơn hàng</span></a></li>
                        <li><a href=""><i class="fa fa-shopping-cart"></i><span>Chi tiết đơn hàng</span></a></li>
                        <li><a href="admin-taikhoan"><i class="fa fa-user "></i><span>Thành viên</span></a></li>
                        <li><a href=""><i class="fa fa-bar-chart"></i><span>Thống kê</span></a></li>
                        <li><a href=""><i class="fa fa-area-chart"></i><span>Báo cáo</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper right_col" id="right1">