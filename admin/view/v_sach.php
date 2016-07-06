<input type="button" data-page="<?php echo $page ?>" class="sua_sach btn btn-info" data-toggle="modal" data-target="#myModal" value="Thêm Sách">

<div  class="col-md-12">
    <form action="" method="POST" name="frm2">
        <table style="text-align: center" class="table table-hover table-bordered table-striped" >
        <tr><td colspan="12"><h3>Danh Sách sách</h3></td></tr>
        <tr >
            <th style="text-align: center">Mã sách</th>
            <th style="text-align: center">Tên sách</th>
            <th style="text-align: center">Nhà xuất bản</th>
            <th style="text-align: center">Tác giả</th>
            <th style="text-align: center">Loại</th>
            <th style="text-align: center">Hình ảnh</th>
            <th style="text-align: center">Giá bìa</th>
            <th style="text-align: center">Giá bán</th>
            <th style="text-align: center">Số lượng</th>
            <th style="text-align: center">Số trang</th>
            <th style="text-align: center">Sửa </th>
            <th style="text-align: center">Xóa</th>
        </tr>
        <?php
        foreach ($row1 as $values){
        ?>
        <tr>
            <td><?php echo $values['id'] ?></td>
            <td><?php echo $values['TenSach'] ?></td>
            <td><?php echo $values['TenNXB'] ?></td>
            <td><?php echo $values['TenTG'] ?></td>
            <td><?php echo $values['TenLoai'] ?></td>
            <td><img src="../upload/<?php echo $values['HinhAnh'] ?>" height="60px" width="40px"></td>
            <td><?php echo number_format($values['GiaCu'], 0,'.',',') ?></td>
            <td><?php echo number_format($values['GiaMoi'],0,'.',',') ?></td>
            <td><?php echo $values['SoLuong'] ?></td>
            <td><?php echo $values['SoTrang'] ?></td>
            <td>
                <input type="button" data-page="<?php echo $page ?>" class="sua_sach btn btn-default" data-id_sua="<?php echo $values['id'] ?>" name="" data-toggle="modal" data-target="#myModal" value="Sửa">
            </td>
            <td>
                <input type="button" class="xoa_sach btn btn-default" data-id_xoa="<?php echo $values['id'] ?>" value="Xóa">
            </td>
        </tr>
        <?php 
           }
        ?>
    </table>
    </form>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thêm Sách</h4>
            </div>
            <div class="modal-body" id="hien_sua_sach">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Hủy</button>
            </div>
        </div>
    </div>
</div>
