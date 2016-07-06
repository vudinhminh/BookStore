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
        function GetAllpt($table,$limit,$page){
            $sql = 'select * from '.$table.' limit '.$limit*($page-1).','.$limit;
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
	function Insert($table,$data){
            $list_key="";
            $list_values="";
            foreach($data as $keys => $values){
                $list_key .= $keys.","; 
                $list_values .= "'".$values."',";                 
            }	
            $sql="insert into ".$table." (".rtrim($list_key,',').") values(".  rtrim($list_values,',').")";
            //echo $sql;
            mysqli_query($this->__conn, $sql);
            return TRUE;
	}	
        function Update($table,$data,$id_table,$id){
            $sql = "";
            foreach($data as $keys => $values){
                $sql .= $keys."='".$values."',";                 
            }	
            $sql="update ".$table." set ".rtrim($sql,',')." where ".$id_table."=".$id;
            //echo $sql;
            mysqli_query($this->__conn, $sql);
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
            $sql = 'select id,HinhAnh,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                    . 'GiaMoi,round(100-GiaMoi/GiaCu*100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                    . ' sach.id_tg=tacgia.id_tg and id='.$id.' order by id DESC';
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
        function Delete($table,$id_table,$id){
            $sql = "delete from ".$table." where ".$id_table."=".$id;
            //echo $sql;
            mysqli_query($this->__conn, $sql);
            
        }
        function PhanTrangLoai($table,$limit,$page){
            $sql1 = 'select * from '.$table;
            $query1 = mysqli_query($this->__conn, $sql1);
            $tongdong = mysqli_num_rows($query1);
            $sotrang = ceil($tongdong/$limit);
            $trangtruoc = $page - 1;
            $trangsau = $page + 1;
            $hientrang ="<div class='phantrang'><ul class='pagination'>";
            if($page>1){
            $hientrang.="<li><a href='?sk=".$table."&method=Hien&page=".$trangtruoc."'  data-id='".$trangtruoc."' class='  pt".$table."'><</a></li>";
            }
            for($i=1; $i <= $sotrang;$i++)
            {
                if($i==$page) $phantrang2 = 'active';
                else $phantrang2 = '';
                $hientrang .= " <li class='".$phantrang2."'><a href='?sk=".$table."&method=Hien&page=".$i."' data-id='".$i."' class=' pt".$table."'>".$i."</a></li> ";
            }
            if($page<$sotrang){
            $hientrang.="<li><a href='?sk=".$table."&method=Hien&page=".$trangsau."' data-id='".$trangsau."' class=' pt".$table."'>></a></li>";
            }
            $hientrang .="</ul></div>";
            echo $hientrang;
        }
        
    }
       // $tenloai='minh';
	//$them_loai_sach = new M_database();
       // $them_loai_sach->Insert('loaisach', array('TenLoai'=>$tenloai));
    
//    $a=new M_database();
//    $result=$a->GetAll_Sach_Idsach('3');
//    echo '<pre>';
//    print_r($result);
//    echo "</pre>";

