<?php
include_once 'model/m_database.php';
class C_login{
    function Login(){
        include_once 'view/v_login.php';
    }
    function XLLogin(){
        session_start();
        $tendangnhap = $_POST['txtTenDangNhap'];
        $matkhau = $_POST['txtMatKhau'];
        $login = new M_database();
        $err = $login->Login($tendangnhap,$matkhau);
        include_once 'view/v_login.php';
    }
    function XLDangXuat(){
        session_start();
        session_destroy();
        header('location:login.php');
    }
}
$method = isset($_GET['dn'])?$_GET['dn']:'login';
$home = new C_login();
$home->$method();
