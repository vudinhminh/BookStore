<div class="col-lg-5">
    <img src="upload/<?php echo $row['HinhAnh'] ?>" alt="" class="anhchitiet1"/>
</div>
<div class="info">
    <div class="ptitle">
        <span><h2><?php echo $row['TenSach'] ?></h2></span>
    </div>
    <div>
        <p class="text_chi_tiet">Nhà xuất bản: <a href="?cn=sach&method=Hien_sach_theo_nha_xuat_ban&id_nha_xuat_ban=<?php echo $row['id_nxb'] ?> "><?php echo $row['TenNXB'] ?></a></p>
        <p class="text_chi_tiet">Tác giả: <a href="?cn=sach&method=Hien_sach_theo_tac_gia&id_tac_gia=<?php echo $row['id_tg'] ?> "><?php echo $row['TenTG'] ?></a></p>
        <p class="text_chi_tiet">Giá bìa: <?php echo number_format($row['GiaCu'],0,'.',',') ?>₫</p>
        <p class="text_chi_tiet">Giá bán: <span class="giamoi_chitiet"><?php echo number_format($row['GiaMoi'],0,'.',',') ?> ₫</span></p>
        <p class="text_chi_tiet">Số trang: <?php echo $row['SoTrang'] ?> trang</p>
         <a type="button" class="btn btn-primary">Thêm vào giỏ hàng</a>

    </div>
</div>