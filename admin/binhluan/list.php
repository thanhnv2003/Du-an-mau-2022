<main>
    <div class="header">
        <h3>DANH SÁCH BÌNH LUẬN</h3>
    </div>
    <div class="import-dm">
        <form action="" method="post">
            <div class="ds-lh">
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NỘI DUNG</th>
                        <th>ID USER</th>
                        <th>ID PRODUCT</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th></th>
                    </tr>
                    <?php foreach ($listBinhLuan as $key => $value){
//                        foreach ($User as $index => $nameUser){
                        ?>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['noidung'] ?></td>
                            <td><?php echo $value['id_user']?></td>
                            <td><?php echo $value['id_pro'] ?></td>
                            <td><?php echo $value['ngaybinhluan'] ?></td>
                            <td>
                                <input type="button" value="Xóa" onclick="confirm('Bạn có muốn xóa bình luận có nội dung: \( <?php echo $value['noidung']?> \) hay không!') == true ? location.href='index.php?act=delete_binh_luan&id=<?php echo $value['id']?>' : '' ">
                            </td>
                        </tr>
                    <?php
//                        }
                        }?>
                </table>
            </div>
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act="><input type="button" value="Thêm mới"></a>
        </form>
    </div>
</main>
