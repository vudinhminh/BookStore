<?php
    include_once 'site/model/m_database.php';
    class C_loai_sach{
        function Hien_danh_sach_theo_loai(){
            //$id_loai = $_GET['id_loai'];
            $hien_danh_sach_theo_loai = new M_database();
            $row = $hien_danh_sach_theo_loai->GetAll('loaisach');
            include_once("site/view/v_ds_loai.php");
        }
        
    }
    $hien_loai = new C_loai_sach();
    $hien_loai->Hien_danh_sach_theo_loai();
?>
