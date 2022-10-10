<main>
<!--    --><?php //var_dump($listBill); ?>
    <div class="header">
        <h3>DANH SÁCH ĐƠN HÀNG</h3>
    </div>
    <div class="import-dm">
        <form action="index.php?act=ds_donhang" method="post">
            <input type="text" name="kyw">
            <input type="submit" name="search" value="SEARCH">
        </form>
        <form action="" method="post">
            <div class="ds-lh">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>SỐ LƯỢNG HÀNG</th>
                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php foreach ($listBill as $key => $value){
                        $countsp = loadall_cart_count($value['id']);
                        $ttdh = get_ttdh($value['bill_status']);
                        ?>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>DAM-<?php echo $value['id'] ?></td>
                            <td><?php echo $value['bill_name']?>, <?php echo $value['bill_address']?>, <?php echo $value['bill_tel']?></td>
                            <td><?php echo $countsp?></td>
                            <td><?php echo $value['total'] ?></td>
                            <td><?php echo $ttdh ?></td>
                            <td><?php echo $value['ngaydathang']?></td>
                            <td>
                                <input type="button" value="Sửa" onclick="location.href='index.php?act=edit_sp&id=<?php echo $value['id']?>'">
                                <input type="button" value="Xóa" onclick="confirm('Bạn có muốn xóa sản phẩm \( <?php echo $value['name']?> \) hay không!') == true ? location.href='index.php?act=delete_sp&id=<?php echo $value['id']?>' : '' ">
                            </td>
                        </tr>
                    <?php }?>
                </table>
            </div>
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=add_sp"><input type="button" value="Thêm mới"></a>
        </form>
    </div>
</main>
