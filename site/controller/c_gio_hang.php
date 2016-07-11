<?php

class C_gio_hang{
    function Hien_gio_hang(){
        include_once 'site/view/v_gio_hang.php';
    }
    function XL_gio_hang(){
        $id = $_GET['id_them'];
        $soluong = isset($_POST['txtSoLuong'])?$_POST['txtSoLuong']:1;
        $home = new M_database();
        $row = $home->Get_Sach_Idsach($id);
        if(isset($_SESSION['giohang']) && is_array(($_SESSION['giohang']))){
            if($_SESSION['giohang'][$id]['id'] == $id){
                $_SESSION['giohang'][$id]['soluong'] +=$soluong;
            }
            else{
                $_SESSION['giohang'][$id]['id'] = $id;
                $_SESSION['giohang'][$id]['soluong'] = $soluong;
                $_SESSION['giohang'][$id]['dongia'] = $row['GiaMoi'];
                $_SESSION['giohang'][$id]['hinhanh'] = $row['HinhAnh'];
                $_SESSION['giohang'][$id]['tensach'] = $row['TenSach'];
            }
        }
        
        else {
            $_SESSION['giohang'] = array();
            $_SESSION['giohang'][$id]['id'] = $id;
            $_SESSION['giohang'][$id]['soluong'] = $soluong;
            $_SESSION['giohang'][$id]['dongia'] = $row['GiaMoi'];
            $_SESSION['giohang'][$id]['hinhanh'] = $row['HinhAnh'];
            $_SESSION['giohang'][$id]['tensach'] = $row['TenSach'];
        }
        header('location:?cn=giohang&method=Hien_gio_hang');
    }
    function Xoa(){
        //session_destroy();
        $id_xoa = $_GET['id_xoa'];
        unset($_SESSION['giohang'][$id_xoa]);
        header('location:?cn=giohang&method=Hien_gio_hang');
            
    }
    function Sua(){
        $soluong = $_POST['txtSoLuong'];
        foreach ($soluong as $key => $val){
            if($val<=0){
                unset($_SESSION['giohang'][$key]);
            }
            else{
                $_SESSION['giohang'][$key]['soluong']=$val;
            }
        }
         header('location:?cn=giohang&method=Hien_gio_hang');   
    }
    function XL_Dat_Hang(){
        $hoten = $_POST['txtHoTen'];
        $email = $_POST['txtEmail'];
        $sdt = $_POST['txtSoDienThoai'];
        $diachi = $_POST['txtDiaChi'];
        $ghichu = isset($_POST['txtGhiChu'])?$_POST['txtGhiChu']:'';
        $arr =array('TenKH'=>$hoten,'Email'=>$email,'SDT'=>$sdt,'DiaChi'=>$diachi,'GhiChu'=>$ghichu,'ThanhTien'=>'10','TrangThai'=>1);
        $home = new M_database();
        $home->Dat_Hang($arr,$_SESSION['giohang']);
        unset($_SESSION['giohang']);
        Echo "<h2>Đặt hàng thành công</h2>";
        
    }
}
$method = isset($_GET['method'])?$_GET['method']:'Hien_gio_hang';
$home = new C_gio_hang();
$home->$method();