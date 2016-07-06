<div>
    <h3 class="tieude">Sách mới</h3>
    <a href="?cn=sach&method=Hien_sach_moi" class="xemtatca">Xem Tất cả </a>
</div>
<hr>
<?php
    foreach ($row1 as $vlaues1){
?>
<div class="left col-lg-3">
    <div class="chitietsach" data-idchitietsach='<?php echo $vlaues1['id']; ?>'><img src="upload/<?php echo $vlaues1['HinhAnh'] ?>" alt="" class="anhchitiet"/></div>
    <a class="tensach chitietsach" data-idchitietsach='<?php echo $vlaues1['id']; ?>'>
        <?php 
            if(strlen($vlaues1['TenSach']) < 20) 
                echo $vlaues1['TenSach'];  
            else 
                echo substr($vlaues1['TenSach'],0,19).'...';
        ?>
    </a><br>
    <a class="nxb" href="?cn=sach&method=Hien_sach_theo_tac_gia&id_tac_gia=<?php echo $vlaues1['id_tg'] ?> ">Tác giả: <?php echo $vlaues1['TenTG'] ?></a>
    <p class="giamoi">Giá bán: <?php echo number_format($vlaues1['GiaMoi'],0,'.',',') ?>đ</p>
    <p class="giacu">Giá bìa: <?php echo number_format($vlaues1['GiaCu'],0,'.',',') ?>đ</p>
    <button type="button" class="btn btn-info btn-sm themvaogiohang">Thêm vào giỏ hàng</button>
    <?php if($vlaues1['gia']<0){ ?>
    <input type="button" value="<?php echo $vlaues1['gia'].'%' ?>" class="giamgia">
    <?php } ?>
</div>
    <?php } ?>
<div style="clear: both;"></div>
<hr>
<div>
    <h3 class="tieude">Sách văn học</h3>
    <a href="?cn=sach&method=Hien_ds_sach_theo_loai&id_loai=11" class="xemtatca">Xem Tất cả </a>
</div>
<hr>
<?php
    foreach ($row2 as $vlaues1){
?>
<div class="left col-lg-3">
    <div class="chitietsach" data-idchitietsach='<?php echo $vlaues1['id']; ?>'><img src="upload/<?php echo $vlaues1['HinhAnh'] ?>" alt="" class="anhchitiet"/></div>
    <a class="tensach chitietsach" data-idchitietsach='<?php echo $vlaues1['id']; ?>'>
        <?php 
            if(strlen($vlaues1['TenSach']) < 20) 
                echo $vlaues1['TenSach'];  
            else 
                echo substr($vlaues1['TenSach'],0,19).'...';
        ?>
    </a><br>
    <a class="nxb" href="?cn=sach&method=Hien_sach_theo_tac_gia&id_tac_gia=<?php echo $vlaues1['id_tg'] ?> ">Tác giả: <?php echo $vlaues1['TenTG'] ?></a>
    <p class="giamoi">Giá bán: <?php echo number_format($vlaues1['GiaMoi'],0,'.',',') ?>đ</p>
    <p class="giacu">Giá bìa: <?php echo number_format($vlaues1['GiaCu'],0,'.',',') ?>đ</p>
    <button type="button" class="btn btn-info btn-sm themvaogiohang">Thêm vào giỏ hàng</button>
    <?php if($vlaues1['gia']<0){ ?>
    <input type="button" value="<?php echo $vlaues1['gia'].'%' ?>" class="giamgia">
    <?php } ?>
</div>
    <?php } ?>

<div style="clear: both;"></div>
    <hr>
   <div>
        <h3 class="tieude">Sách Kinh Tế</h3>
        <a href="?cn=sach&method=Hien_ds_sach_theo_loai&id_loai=17" class="xemtatca">Xem Tất cả </a>
    </div>
<hr>
<?php
    foreach ($row3 as $vlaues1){
?>
<div class="left col-lg-3">
    <div class="chitietsach" data-idchitietsach='<?php echo $vlaues1['id']; ?>'><img src="upload/<?php echo $vlaues1['HinhAnh'] ?>" alt="" class="anhchitiet"/></div>
    <a class="tensach chitietsach" data-idchitietsach='<?php echo $vlaues1['id']; ?>'>
        <?php 
            if(strlen($vlaues1['TenSach']) < 20) 
                echo $vlaues1['TenSach'];  
            else 
                echo substr($vlaues1['TenSach'],0,19).'...';
        ?>
    </a><br>
    <a class="nxb" href="?cn=sach&method=Hien_sach_theo_tac_gia&id_tac_gia=<?php echo $vlaues1['id_tg'] ?> ">Tác giả: <?php echo $vlaues1['TenTG'] ?></a>
    <p class="giamoi">Giá bán: <?php echo number_format($vlaues1['GiaMoi'],0,'.',',') ?>đ</p>
    <p class="giacu">Giá bìa: <?php echo number_format($vlaues1['GiaCu'],0,'.',',') ?>đ</p>
    <button type="button" class="btn btn-info btn-sm themvaogiohang">Thêm vào giỏ hàng</button>
    <?php if($vlaues1['gia']<0){ ?>
    <input type="button" value="<?php echo $vlaues1['gia'].'%' ?>" class="giamgia">
    <?php } ?>
</div>
    <?php } ?>