<main>
    <div class="header">
        <h3>DANH SÁCH TÀI KHOẢN</h3>
    </div>
    <div class="import-dm">
        <form action="" method="post">
            <div class="ds-lh">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TK</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>EMAIL</th>
                        <th>ADDRESS</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th></th>
                    </tr>
                    <?php foreach ($loadallUser as $key => $value){?>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['username'] ?></td>
                            <td><?php echo $value['password'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                            <td><?php echo $value['address'] ?></td>
                            <td><?php echo $value['tel'] ?></td>
                            <td><?php echo $value['role'] ?></td>
                            <td>
                                <input type="button" value="Sửa" onclick="location.href='index.php?act=edit_user&id=<?php echo $value['id']?>'">
                                <input type="button" value="Xóa" onclick="confirm('Bạn có muốn xóa danh mục \( <?php echo $value['username']?> \) hay không!') == true ? location.href='index.php?act=delete_user&id=<?php echo $value['id']?>' : '' ">
                            </td>
                        </tr>
                    <?php }?>
                </table>
            </div>
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act="><input type="button" value="Thêm mới"></a>
        </form>
    </div>
</main>
