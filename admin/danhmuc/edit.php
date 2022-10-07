<?php
    foreach ($dm as $key => $value){
?>
<main>
    <div class="header">
        <h3>CẬP NHẬT LOẠI HÀNG HÓA</h3>
    </div>
    <div class="import-dm">
        <form action="index.php?act=update_dm" method="post">
            <div class="maloai">
                <h5>Mã loại</h5>
                <input type="text" name="maloai" value="<?php if (isset($value['id']) && ($value['id'] != '')) echo $value['id']?>" disabled>
            </div>
            <div class="tenloai">
                <h5>Tên loại</h5>
                <input type="text" name="tenloai" value="<?php if (isset($value['name']) && ($value['name'] != '')) echo $value['name']?>">
            </div>
            <input type="hidden" name="id" value="<?php if (isset($value['id']) && ($value['id'] != '')) echo $value['id']?>">
            <input type="submit" value="CẬP NHẬT" name="update">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=list_dm"><input type="button" value="DANH SÁCH"></a><br>
            <?php
            if (isset($thongbao) && ($thongbao != '')){
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</main>
<?php } ?>