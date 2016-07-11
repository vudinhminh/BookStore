<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location:login.php');
    }
    include_once 'view/v_head.php';
    include_once 'model/m_database.php';
    if(!isset($_GET['sk'])){
        include_once 'controller/c_sach.php';
    }
    else {
        $sk=$_GET['sk'];
        switch ($sk)
        {
            case 'loaisach':
                include_once 'controller/c_loai_sach.php';
                break;
            case 'tacgia':
                include_once 'controller/c_tac_gia.php';
                break;
            case 'sach':
                include_once 'controller/c_sach.php';
                break;
            case 'nhaxuatban':
                include_once 'controller/c_nha_xuat_ban.php';
                break;
        }
    }
    include_once 'view/v_footer.php';
?>