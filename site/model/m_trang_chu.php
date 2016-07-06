<?php
//    class M_database{
//        private $__conn;
//        function __construct() {
//            if (!isset($this->__conn)){
//            $this->__conn = mysqli_connect("localhost", "root", "", "bansach");
//            mysqli_query($this->__conn, "set names utf8");
//            }
//        }
//        function GetAll($table){
//            $sql = "select * from ".$table;
//            $query =  mysqli_query($this->__conn, $sql);
//            $result = array();
//            while ($row =  mysqli_fetch_assoc($query)){
//                $result[] = $row;
//            }
//            return $result;
//        }
//	function GetRow($table,$where){
//            $sql = "select * from ".$table." where ".$where;
//            $query =  mysqli_query($this->__conn, $sql);
//            $row =  mysqli_fetch_assoc($query);
//            return $row;
//        }
//	
//        function GetAll_Sach(){
//            $sql = 'select id,HinhAnh,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
//                    . 'GiaMoi,round(100-GiaMoi/GiaCu*100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
//                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
//                    . ' sach.id_tg=tacgia.id_tg  order by id DESC';
//            $query =  mysqli_query($this->__conn, $sql);
//            $result = array();
//            while ($row =  mysqli_fetch_assoc($query)){
//                $result[] = $row;
//            }
//            return $result;
//        }
//        function Get_Sach_Idsach($id){
//            $sql = 'select id,HinhAnh,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
//                    . 'GiaMoi,round(100-GiaMoi/GiaCu*100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
//                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
//                    . ' sach.id_tg=tacgia.id_tg and id='.$id.' order by id DESC';
//            $query =  mysqli_query($this->__conn, $sql);
//            $result = array();
//            while ($row =  mysqli_fetch_assoc($query)){
//                $result[] = $row;
//            }
//            return $result;
//        }
//        function GetAll_Sach_IdLoai($id_loai){
//            $sql = 'select id,HinhAnh,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
//                    . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
//                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
//                    . ' sach.id_tg=tacgia.id_tg and loaisach.id_loai='.$id_loai.' order by id DESC';
//            $query =  mysqli_query($this->__conn, $sql);
//            $result = array();
//            while ($row =  mysqli_fetch_assoc($query)){
//                $result[] = $row;
//            }
//            return $result;
//        }
//    }
//?>
