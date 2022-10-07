<main>
    <div class="header">
        <h3>DANH SÁCH SẢN PHẨM</h3>
    </div>
    <div class="import-dm">
        <form action="index.php?act=list_sp" method="post">
            <input type="text" name="kyw">
            <select name="id_dm">
                <option value="0" selected>Chọn tất cả</option>
                <?php foreach ($listdanhmuc as $key => $value){ ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
            </select>
            <input type="submit" name="search" value="SEARCH">
        </form>
        <form action="" method="post">
            <div class="ds-lh">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                    <?php foreach ($listSanPham as $key => $value){?>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['name'] ?></td>
                            <td><img src="../upload/<?php echo $value['image'] ?>" alt="Lỗi tải ảnh" width="200px"></td>
                            <td><?php echo $value['price'] ?></td>
                            <td><?php echo $value['luotxem'] ?></td>
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