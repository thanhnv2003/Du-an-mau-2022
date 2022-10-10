
    <main>
        <div class="header">
            <h3>CẬP NHẬT ĐƠN HÀNG</h3>
        </div>
        <div class="import-dm">
            <form action="index.php?act=update_don_hang" method="post">
                <table >
                    <tr>
                        <td>MÃ ĐƠN HÀNG</td>
                        <td>DAM-<?php echo $donhang['id']?></td>
                    </tr>
                    <tr>
                        <td>NGƯỜI ĐẶT HÀNG</td>
                        <td><?php echo $donhang['bill_name']?></td>
                    </tr>
                    <tr>
                        <td>ĐỊA CHỈ NHẬN HÀNG</td>
                        <td><?php echo $donhang['bill_address']?></td>
                    </tr>
                    <tr>
                        <td>SỐ ĐIỆN THOẠI</td>
                        <td><?php echo $donhang['bill_tel']?></td>
                    </tr>
                    <tr>
                        <td>PHƯƠNG THỨC THANH TOÁN</td>
                        <td><?php
                            $pttt = get_pttt($donhang['bill_pttt']);
                            echo $pttt ?></td>
                    </tr>
                    <tr>
                        <td>TỔNG GIÁ TRỊ ĐƠN HÀNG</td>
                        <td><?php echo $donhang['total']?></td>
                    </tr>
                    <tr>
                        <b>CẬP NHẬT TRẠNG THÁI ĐƠN HÀNG</b>
                        <select name="id_ttdh">
                            <option value="0" >Đơn hàng mới</option>
                            <option value="1" >Đang xử lý</option>
                            <option value="2" >Đang giao hàng</option>
                            <option value="3" >Đã giao hàng</option>
                        </select>
                    </tr>

                </table>
                <input type="hidden" name="id" value="<?php if (isset($donhang['id']) && ($donhang['id'] != '')) echo $donhang['id']?>">
                <input type="submit" value="CẬP NHẬT" name="update">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=ds_donhang"><input type="button" value="DANH SÁCH"></a><br>
                <?php
                if (isset($thongbao) && ($thongbao != '')){
                    echo $thongbao;
                }
                ?>
            </form>
        </div>
    </main>
