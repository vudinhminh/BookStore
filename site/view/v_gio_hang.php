                    <div class="heading-bar">
                        <a class="more-btn">Tiến hành kiểm tra</a>
                    </div>
                    <form method="POST" action="" id="form_gio_hang">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>&nbsp;</th>
                                <th>Tên sách</th>
                                <th class="center1">Giá</th>
                                <th class="center1">Số lượng</th>
                                <th class="center1" >Thành tiền</th>
                                <th>Xóa</th>
                            </tr>
                            <?php
                                foreach ($_SESSION['giohang'] as $val){
                            ?>
                            <tr>
                                <td class="center1"><img src="upload/<?php echo $val['hinhanh'] ?>"/></td>
                                <td><?php echo $val['tensach'] ?></td>
                                <td class="center1"><?php echo $val['dongia'] ?></td>
                                <td class="center1" ><input class="soluong1" name="" size="2" type="text" value="1"/></td>
                                <td  class="center1"><?php echo $val['dongia']*$val['soluong'] ?></td>
                                <td ><a href="#"> <i class="icon-trash"></i></a></td>
                            </tr>
                            <?php 
                                }
                            ?>
                            <tr>
                                <td colspan="6" style="text-align: right">
                                    <button type="submit" style="" class="btn btn-info">Cập nhật giỏ hàng</button>
                                </td>
                                
                            </tr>
                        </table>
                        
                    </form>
                    <div class="heading-bar">
                        <a class="more-btn">Tiến hành đặt hàng</a>
                    </div>
                    <figure class="span12 first">
                        <div class="cart-option-box">
                            a
                        </div>
                    </figure>
                </section>