<?php
class C_home{
    function Danh_sach_loai(){
        $danh_sach_loai = new M_database();
        $row = $danh_sach_loai->GetLimit('loaisach',5);
        return $row;
    } 
    function Danh_sach_tac_gia(){
        $danh_sach_tac_gia = new M_database();
        $row = $danh_sach_tac_gia->GetLimit('tacgia',5);
        return $row;
    } 
    function Danh_sach_sach_xem_nhieu(){
        $danh_sach_sach_xem_nhieu = new M_database();
        $row = $danh_sach_sach_xem_nhieu->Get_Sach_xem_nhieu();
        return $row;
    }
    function Home(){
        $ds_loai = $this->Danh_sach_loai();
        $ds_tac_gia = $this->Danh_sach_tac_gia();
        $ds_xem_nhieu = $this->Danh_sach_sach_xem_nhieu();
        $url = 'book-store-home-0';
        $page = isset($_GET['page'])?$_GET['page']:1;
        $home = new M_database();
        $row = $home->GetAll_Sachpt(9, $page);
        //print_r($row);
        $phan_trang = $home->PhanTrangsachmoi($url, 9, $page);
        include_once 'site/view/v_home.php';
    }
    function GioiThieu(){
        $ds_loai = $this->Danh_sach_loai();
        $ds_tac_gia = $this->Danh_sach_tac_gia();
        $ds_xem_nhieu = $this->Danh_sach_sach_xem_nhieu();
        include_once 'site/view/v_gioi_thieu.php';
    }
    function LienHe(){
        $ds_loai = $this->Danh_sach_loai();
        $ds_tac_gia = $this->Danh_sach_tac_gia();
        $ds_xem_nhieu = $this->Danh_sach_sach_xem_nhieu();
        include_once 'site/view/v_lien_he.php';
    } 
    function ChiTiet(){
        $ds_loai = $this->Danh_sach_loai();
        $ds_tac_gia = $this->Danh_sach_tac_gia();
        $ds_xem_nhieu = $this->Danh_sach_sach_xem_nhieu();
        $id = $_GET['id'];
        $home = new M_database();
        $row = $home->Get_Sach_Idsach($id);
        $row2 = $home->GetAll_Sachpt(8, 1);
        $home->LuotXem($id);
        include_once 'site/view/v_chi_tiet.php';
    } 
    function Sach_theo_loai(){
        $id_loai = $_GET['id'];
        $where = ' id_loai='.$id_loai;
        $ds_loai = $this->Danh_sach_loai();
        $ds_tac_gia = $this->Danh_sach_tac_gia();
        $ds_xem_nhieu = $this->Danh_sach_sach_xem_nhieu();
        $url = 'book-store-Sach_theo_loai-'.$id_loai;
        $page = isset($_GET['page'])?$_GET['page']:1;
        $home = new M_database();
        $row = $home->GetAll_Sach_IdLoai($id_loai,9, $page);
        $row1 = $home->GetRow('loaisach', $where);
        $phan_trang = $home->PhanTrangLoai($url, 9, $page,$where);
        include_once 'site/view/v_home.php';
    }
    function Sach_theo_tac_gia(){
        $id = $_GET['id'];
        $where = ' id_tg='.$id;
        $ds_loai = $this->Danh_sach_loai();
        $ds_tac_gia = $this->Danh_sach_tac_gia();
        $ds_xem_nhieu = $this->Danh_sach_sach_xem_nhieu();
        $url = 'book-store-Sach_theo_tac_gia-'.$id;
        $page = isset($_GET['page'])?$_GET['page']:1;
        $home = new M_database();
        $row = $home->GetAll_Sach_IdTacGia($id,9, $page);
        $row1 = $home->GetRow('tacgia', $where);
        $phan_trang = $home->PhanTrangLoai($url, 9, $page,$where);
        include_once 'site/view/v_home.php';
    }
    function Sach_theo_gia(){
        $id = $_GET['id'];
        if($id == 1){
            $where ='GiaMoi <= 500000 ';
        }
        elseif($id == 2) {
            $where ='GiaMoi > 500000 and  GiaMoi <= 1000000 '; 
        }
        else {
            $where ='GiaMoi >1000000 ';
        }
        $ds_loai = $this->Danh_sach_loai();
        $ds_tac_gia = $this->Danh_sach_tac_gia();
        $ds_xem_nhieu = $this->Danh_sach_sach_xem_nhieu();
        $url = 'book-store-Sach_theo_gia-'.$id;
        $page = isset($_GET['page'])?$_GET['page']:1;
        $home = new M_database();
        $row = $home->GetAll_Sach_gia($where,9, $page);
        $row1 = $where;
        $phan_trang = $home->PhanTrangLoai($url, 9, $page,$where);
        include_once 'site/view/v_home.php';
    }
    function Search(){
        $search = $_POST['txtsearch'];
        $ds_loai = $this->Danh_sach_loai();
        $ds_tac_gia = $this->Danh_sach_tac_gia();
        $ds_xem_nhieu = $this->Danh_sach_sach_xem_nhieu();
        $url = 'book-store-Search';
        $page = isset($_GET['page'])?$_GET['page']:1;
        $home = new M_database();
        $row = $home->GetAll_Seach($search,9, $page);
        //print_r($row);
        $phan_trang = $home->PhanTrangSeach($search,$url, 9, $page);
        $row1['TenLoai']="Tìm theo tên sách: ' $search '";
        include_once 'site/view/v_home.php';
        
    }
}
$method = isset($_GET['method'])?$_GET['method']:'Home';
$home = new C_home();
$home->$method();