<!--<button type="button" class="sua_tac_gia btn btn-info btn-lg " data-toggle="modal" data-target="#myModal">Thêm tác giả</button>-->
<input type="button" class="sua_tac_gia btn btn-info" data-page="<?php echo $page ?>" data-toggle="modal" data-target="#myModal1" value="Thêm Tác Giả">
<div  class="col-md-12">
    <form action="" method="POST" name="frm2">
        <table style="text-align: center" class="table table-hover table-bordered table-striped" >
        <tr><td colspan="6"><h3>Danh Sách tác giả</h3></td></tr>
        <tr >
            <th style="text-align: center">Mã tác giả</th>
            <th style="text-align: center">Tên tác giả</th>
            <th style="text-align: center">Số điện thoại tác giả</th>
            <th style="text-align: center">Địa chỉ tác giả</th>
            <th style="text-align: center">Sửa </th>
            <th style="text-align: center">Xóa</th>
        </tr>
        <?php
        foreach ($row1 as $values){
        ?>
        <tr>
            <td><?php echo $values['id_tg'] ?></td>
            <td><?php echo $values['TenTG'] ?></td>
            <td><?php echo $values['SDTTG'] ?></td>
            <td><?php echo $values['DiaChiTG'] ?></td>
            <td>
                <input data-page="<?php echo $page ?>" type="button" class="sua_tac_gia btn btn-default" data-id_sua="<?php echo $values['id_tg'] ?>" name="" data-toggle="modal" data-target="#myModal1" value="Sửa">
            </td>
            <td>
                <input type="button" class="xoa_tac_gia btn btn-default" data-id_xoa="<?php echo $values['id_tg'] ?>" value="Xóa">
            </td>
        </tr>
        <?php 
           }
        ?>
    </table>
    </form>
</div>
<div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Nhà xuất bản</h4>
            </div>
            <div class="modal-body hien_sua_tac_gia">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Hủy</button>
            </div>
        </div>
    </div>
</div>