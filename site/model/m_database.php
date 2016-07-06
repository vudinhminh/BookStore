<?php
    class M_database{
        private $__conn;
        function __construct() {
            if (!isset($this->__conn)){
            $this->__conn = mysqli_connect("localhost", "root", "", "bansach");
            mysqli_query($this->__conn, "set names utf8");
            }
        }
        function GetAll($table){
            $sql = "select * from ".$table;
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
        function GetAllDESC($table){
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
	function GetRow($table,$where){
            $sql = "select * from ".$table." where ".$where;
            $query =  mysqli_query($this->__conn, $sql);
            $row =  mysqli_fetch_assoc($query);
            return $row;
        }
        
        function GetAll_Sachpt($limit,$page){
            $sql = 'select id,HinhAnh,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                    . 'GiaMoi,round(100-GiaMoi/GiaCu*100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                    . ' sach.id_tg=tacgia.id_tg  order by id DESC limit '.$limit*($page-1).','.$limit;
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
        function Get_Sach_Idsach($id){
            $sql = 'select id,HinhAnh,sach.id_tg,sach.id_nxb,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                    . 'GiaMoi,round(100-GiaMoi/GiaCu*100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                    . ' sach.id_tg=tacgia.id_tg and id='.$id.' order by id DESC';
            $query =  mysqli_query($this->__conn, $sql);
            
            $row =  mysqli_fetch_assoc($query);
            return $row;
        }
        function GetAll_Sach_IdLoai($id_loai,$limit,$page){
            $sql = 'select id,HinhAnh,sach.id_tg,sach.id_nxb,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                    . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                    . ' sach.id_tg=tacgia.id_tg and loaisach.id_loai='.$id_loai.' order by id DESC limit '.$limit*($page-1).','.$limit;
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
        function GetAll_Sach_IdTacGia($id_tg,$limit,$page){
            $sql = 'select id,HinhAnh,TenSach,sach.id_tg,sach.id_nxb,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                    . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                    . ' sach.id_tg=tacgia.id_tg and tacgia.id_tg='.$id_tg.' order by id DESC limit '.$limit*($page-1).','.$limit;
          
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
        function GetAll_Sach_IdNhaXuatBan($id_nxb,$limit,$page){
            $sql = 'select id,HinhAnh,TenSach,tacgia.TenTG,sach.id_tg,sach.id_nxb,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                    . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                    . ' sach.id_tg=tacgia.id_tg and nhaxuatban.id_nxb='.$id_nxb.' order by id DESC limit '.$limit*($page-1).','.$limit;
          
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
        function Get_4sach_moi(){
            $sql = 'select id,HinhAnh,TenSach,sach.id_tg,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                    . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                    . ' sach.id_tg=tacgia.id_tg  order by id DESC limit 0,4';
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
        function GetAll_4Sach_IdLoai($id_loai){
            $sql = 'select id,HinhAnh,TenSach,sach.id_tg,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                    . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                    . ' sach.id_tg=tacgia.id_tg and loaisach.id_loai='.$id_loai.' order by id DESC limit 0,4';
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
        function PhanTrangLoai($url,$limit,$page,$where){
            $sql1 = 'select * from sach where '.$where;
            $query1 = mysqli_query($this->__conn, $sql1);
            $tongdong = mysqli_num_rows($query1);
            $sotrang = ceil($tongdong/$limit);
            $trangtruoc = $page - 1;
            $trangsau = $page + 1;
            $hientrang ="<div class='phantrang' style='clear: both;'><ul class='pagination'>";
            if($page>1){
            $hientrang.="<li><a href='".$url."&page=".$trangtruoc."'  data-id='".$trangtruoc."' ><</a></li>";
            }
            for($i=1; $i <= $sotrang;$i++)
            {
                if($i==$page) $phantrang2 = 'active';
                else $phantrang2 = '';
                $hientrang .= " <li class='".$phantrang2."'><a href='".$url."&page=".$i."' data-id='".$i."'>".$i."</a></li> ";
            }
            if($page<$sotrang){
            $hientrang.="<li><a href='".$url."&page=".$trangsau."' data-id='".$trangsau."' >></a></li>";
            }
            $hientrang .="</ul></div>";
            echo $hientrang;
        }
        function PhanTrangsachmoi($url,$limit,$page){
            $sql1 = 'select * from sach ';
            $query1 = mysqli_query($this->__conn, $sql1);
            $tongdong = mysqli_num_rows($query1);
            $sotrang = ceil($tongdong/$limit);
            $trangtruoc = $page - 1;
            $trangsau = $page + 1;
            $hientrang ="<div class='phantrang' style='clear: both;'><ul class='pagination'>";
            if($page>1){
            $hientrang.="<li><a href='".$url."&page=".$trangtruoc."'  data-id='".$trangtruoc."' ><</a></li>";
            }
            for($i=1; $i <= $sotrang;$i++)
            {
                if($i==$page) $phantrang2 = 'active';
                else $phantrang2 = '';
                $hientrang .= " <li class='".$phantrang2."'><a href='".$url."&page=".$i."' data-id='".$i."'>".$i."</a></li> ";
            }
            if($page<$sotrang){
            $hientrang.="<li><a href='".$url."&page=".$trangsau."' data-id='".$trangsau."' >></a></li>";
            }
            $hientrang .="</ul></div>";
            echo $hientrang;
        }
        
    }

?>
