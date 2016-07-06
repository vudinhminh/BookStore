<ul class="sub-menu-ngang">
    <li ><a href="index.php?cn=sach&method=Hien_sach_moi">Sách mới</a></li>
    <?php
    foreach ($row as $values){
    ?>
    <li>
        <a href="index.php?cn=sach&method=Hien_ds_sach_theo_loai&id_loai=<?php echo $values['id_loai'] ?>"> 
            <?php echo $values['TenLoai'] ?>
        </a>
    </li>
    <?php  } ?>
</ul>
