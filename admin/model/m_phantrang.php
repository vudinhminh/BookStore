<style>
    .phantrang1 {
		padding:2px 5px 2px 5px;
		margin:2px;
		border:1px solid #999;
		text-decoration:none;
		color: #666;
	}
    .phantrang2 {
       
        background-color: #999;
        
    }
    .phantrang{
        margin: 40px auto;
        width: 1000px;
        text-align: center;
    }
</style>
   
<?php

class M_phantrang{
    private $__conn;
    function M_phantrang(){
        $this->__conn = mysqli_connect('localhost', 'root', '', 'bansach');
        mysqli_query($this->__conn, 'set names utf8');
    }
    function GetAll($table,$limit,$page){
            $sql = 'select * from '.$table.' limit '.$limit*($page-1).','.$limit;
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
    function PhanTrang($table,$limit,$page){
        $sql1 = 'select * from '.$table;
        $query1 = mysqli_query($this->__conn, $sql1);
        $tongdong = mysqli_num_rows($query1);
        $sotrang = ceil($tongdong/$limit);
        $trangtruoc = $page - 1;
        $trangsau = $page + 1;
        $hientrang ="<div class='phantrang'>";
        echo $page;
        if($page>1){
        $hientrang.="<a href='?page=".$trangtruoc."' class='phantrang1'><</a>";
        }
        for($i=1; $i <= $sotrang;$i++)
        {
            if($i==$page) $phantrang2 = 'phantrang2';
            else $phantrang2 = '';
            $hientrang .= " <a href='?page=".$i."' class='phantrang1 ".$phantrang2."'>".$i."</a> ";
        }
        if($page<$sotrang){
        $hientrang.="<a href='?page=".$trangsau."' class='phantrang1'>></a>";
        }
        $hientrang .="</div>";
        echo $hientrang;
    }
}
if(!isset($_GET['page'])){
    $page = 1;
}
 else {
     $page = $_GET['page'];
}
$a = new M_phantrang();
$row = $a->GetAll('loaisach', 1, $page);
foreach ($row as $vlaues){
    echo $vlaues['TenLoai'].'<br>';
}
    $a->PhanTrang('loaisach', 1, $page);
?>
 