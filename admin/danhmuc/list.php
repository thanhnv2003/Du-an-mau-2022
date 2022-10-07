<main>
    <div class="header">
        <h3>DANH SÁCH LOẠI HÀNG</h3>
    </div>
    <div class="import-dm">
        <form action="" method="post">
            <div class="ds-lh">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                    <?php foreach ($listdanhmuc as $key => $value){?>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['name'] ?></td>
                            <td>
                                <input type="button" value="Sửa" onclick="location.href='index.php?act=edit_dm&id=<?php echo $value['id']?>'">
                                <input type="button" value="Xóa" onclick="confirm('Bạn có muốn xóa danh mục \( <?php echo $value['name']?> \) hay không!') == true ? location.href='index.php?act=delete_dm&id=<?php echo $value['id']?>' : '' ">
                            </td>
                        </tr>
                    <?php }?>
                </table>
            </div>
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=add_dm"><input type="button" value="Thêm mới"></a>
        </form>
    </div>
</main>