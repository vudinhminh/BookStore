<div>
    <h3 class="tieude"><?php if(isset($row1['TenLoai']))echo $row1['TenLoai']; else echo 'Sách mới' ?></h3>
</div>
<hr>
<?php
    foreach ($row as $values){
?>
<div class="left col-lg-3">
    <div class="chitietsach" data-idchitietsach='<?php echo $values['id']; ?>'><img src="upload/<?php echo $values['HinhAnh'] ?>" alt="" class="anhchitiet"/></div>
    <a class="tensach chitietsach" data-idchitietsach='<?php echo $values['id']; ?>'>
        <?php 
            if(strlen($values['TenSach']) < 20) 
                echo $values['TenSach'];  
            else 
                echo substr($values['TenSach'],0,19).'...';
        ?>
    </a><br>
    <a class="nxb" href="?cn=sach&method=Hien_sach_theo_tac_gia&id_tac_gia=<?php echo $values['id_tg'] ?> ">Tác giả: <?php echo $values['TenTG'] ?></a>
    <p class="giamoi">Giá bán: <?php echo number_format($values['GiaMoi'],0,'.',',') ?>đ</p>
    <p class="giacu">Giá bìa: <?php echo number_format($values['GiaCu'],0,'.',',') ?>đ</p>
    <button type="button" class="btn btn-info btn-sm themvaogiohang">Thêm vào giỏ hàng</button>
    <?php if($values['gia']<0) echo "<input type='button' value='".$values['gia']."%' class='giamgia'>";
     ?>
</div>
    <?php } ?>