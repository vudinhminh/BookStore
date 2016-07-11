<section class="span9 first">
<?php
    include_once 'site/view/pages/v_banner.php'; 
?>
<div id="right">
    <h2><?php echo $ten = isset($row1['TenLoai'])?$row1['TenLoai']:'Sách mới'; ?></h2>
    <section class="grid-holder features-books">
        <?php
        foreach ($row as $val){
        ?>
        <figure class="span4 slide first chinh1">
            <a href="?cn=home&method=chitiet&id=<?php echo $val['id']?>"><img src="upload/<?php echo $val['HinhAnh'] ?>" alt="" class="pro-img"/></a>
            <P><span class="title"><a href="?cn=home&method=chitiet&id=<?php echo $val['id']?>" style="font-weight: bold">
                <?php 
                    if(strlen($val['TenSach']) < 35) 
                        echo $val['TenSach'];  
                    else 
                        echo substr($val['TenSach'],0,34).'...';
                ?>
                    </a></span></p>
                    <p>Tác giả:
                    <a class="nxb" href="? "> <?php echo $val['TenTG'] ?></a>
                    </p>
            <div class="cart-price">
                <a class="cart-btn2" href="?cn=giohang&method=XL_gio_hang&id_them=<?php echo $val['id']?>">Thêm vào giỏ hàng</a>
                <span class="price"><?php echo number_format($val['GiaMoi'],0,'.',',') ?>đ</span>
            </div>
        </figure>
        <?php } ?>
        
    </section>
</div>
    <?php
    echo $phan_trang;
    ?>
</section>
<?php
include_once 'site/view/pages/v_left.php'; ?>