<?php

    class C_sach{
        function Hien_sach_moi(){
            if(!isset($_GET['page'])){
                $page = 1;
            }
            else{
               $page = $_GET['page']; 
            }
            $hien_sach_moi = new M_database();
            $url = '?cn=sach&method=Hien_sach_moi';
            $row = $hien_sach_moi->GetAll_Sachpt(12, $page);
            include_once 'site/view/v_ds_sach_theo_loai.php';
            $hien_sach_moi->PhanTrangsachmoi($url, 12, $page);
        }
        function Hien_ds_sach_theo_loai(){
            if(!isset($_GET['page'])){
                $page = 1;
            }
            else{
               $page = $_GET['page']; 
            }
            $hien_ds_sach_theo_loai = new M_database();
            $id_loai = $_GET['id_loai'];
            $where = 'id_loai = '.$id_loai;
            $url = '?cn=sach&method=Hien_ds_sach_theo_loai&id_loai='.$id_loai;
            $row = $hien_ds_sach_theo_loai->GetAll_Sach_IdLoai($id_loai,12,$page);
            $row1 = $hien_ds_sach_theo_loai->GetRow('loaisach', $where);
            //header('location:http://freetuts.net/hoc-php');
            include_once 'site/view/v_ds_sach_theo_loai.php';
            $hien_ds_sach_theo_loai->PhanTrangLoai($url, 12, $page,$where);
        }
        function Hien_sach_theo_tac_gia(){
            if(!isset($_GET['page'])){
                $page = 1;
            }
            else{
               $page = $_GET['page']; 
            }
            $id_tac_gia = $_GET['id_tac_gia'];
            $hien_sach_theo_tac_gia = new M_database();
            $where = 'id_tg = '.$id_tac_gia;
            $url = '?cn=sach&method=Hien_sach_theo_tac_gia&id_tac_gia='.$id_tac_gia;
            $row = $hien_sach_theo_tac_gia->GetAll_Sach_IdTacGia($id_tac_gia,12,$page);
            $row1 = $hien_sach_theo_tac_gia->GetRow('tacgia', $where);
            include_once 'site/view/v_sach_theo_tac_gia.php';
            $hien_sach_theo_tac_gia->PhanTrangLoai($url, 12, $page,$where);
      
        }
        function Hien_sach_theo_nha_xuat_ban(){
            if(!isset($_GET['page'])){
                $page = 1;
            }
            else{
               $page = $_GET['page']; 
            }
            $id_nha_xuat_ban = $_GET['id_nha_xuat_ban'];
            $hien_sach_theo_nha_xuat_ban = new M_database();
            $where = 'id_nxb = '.$id_nha_xuat_ban;
            $url = '?cn=sach&method=Hien_sach_theo_nha_xuat_ban&id_nha_xuat_ban='.$id_nha_xuat_ban;
            $row = $hien_sach_theo_nha_xuat_ban->GetAll_Sach_IdNhaXuatBan($id_nha_xuat_ban,12,$page);
            $row1 = $hien_sach_theo_nha_xuat_ban->GetRow('nhaxuatban', $where);
            include_once 'site/view/v_sach_theo_nha_xuat_ban.php';
             $hien_sach_theo_nha_xuat_ban->PhanTrangLoai($url, 12, $page,$where);
      
        }
        function Chi_tiet_sach(){
            $id_sach = $_GET['id_sach'];
            include_once '../../site/model/m_database.php';
            $chi_tiet_sach = new M_database();
            $row = $chi_tiet_sach->Get_Sach_Idsach($id_sach);
            include_once("../../site/view/v_chi_tiet_sach.php");
        }
        function Hien_trang_chu(){
            $hien_trang_chu = new M_database();
            $row_loai = $hien_trang_chu->GetAll('loaisach');
            $id_loai1 = $row_loai[0]['id_loai'];
            $id_loai2 = $row_loai[1]['id_loai'];
            $row1 = $hien_trang_chu->Get_4sach_moi();
            $row2 = $hien_trang_chu->GetAll_4Sach_IdLoai($id_loai1);
            $row3 = $hien_trang_chu->GetAll_4Sach_IdLoai($id_loai2);
            include_once 'site/view/v_trang_chu.php';
        }
    }
    $method = isset($_GET['method'])?$_GET['method']:'Hien_trang_chu';
    $ds_sach_theo_loai = new C_sach();
    $ds_sach_theo_loai->$method();
    
?>