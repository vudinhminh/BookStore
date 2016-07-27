<?php
include_once 'config.php';
include_once 'site/model/m_database.php';
class C_login{
    function Login(){
        include_once 'site/view/v_login.php';
    }
    function XLLogin(){
        session_start();
        $tendangnhap = $_POST['txtTenDangNhap'];
        $matkhau = $_POST['txtMatKhau'];
        $login = new M_database();
        $err = $login->Login($tendangnhap,$matkhau);
        include_once 'site/view/v_login.php';
    }
    function XLDangXuat(){
        session_start();
        unset($_SESSION['user']);
        header('location:login.php');
    }
    function Register(){
        include_once 'site/view/v_register.php';
    }
    function XLRegister(){
        $hoten = $_POST['txtHoTen'];
        $tendangnhap = $_POST['txtTenDangNhap'];
        $matkhau1 = $_POST['password'];
        $matkhau2 = $_POST['confirm_password'];
        $matkhau = md5($matkhau1);
        $email = $_POST['txtEmail'];
        $sdt = $_POST['txtSoDienThoai'];
        $diachi = $_POST['txtDiaChi'];
        $them = new M_database();
        $row = $them->GetAll('taikhoan');
        $kt = FALSE;
        foreach ($row as $val){
            if($val['TenDangNhap'] == $tendangnhap){
                $kt = true;
                $err1 = 'Tên đăng nhập đã tồn tại';
            }
        }
        if($kt == TRUE){
        include_once 'site/view/v_register.php';
        }
        if($kt == FALSE){
            $arr =array('TenHienThi'=>$hoten,'TenDangNhap'=>$tendangnhap,'MatKhau'=>$matkhau,'Email'=>$email,'SDT'=>$sdt,'DiaChi'=>$diachi,'Quyen'=>2);
            $them->Insert('taikhoan', $arr);
            header('location:login.php?dn=login');
        }
        
    }
    
}
$method = isset($_GET['dn'])?$_GET['dn']:'login';
$home = new C_login();
$home->$method();
