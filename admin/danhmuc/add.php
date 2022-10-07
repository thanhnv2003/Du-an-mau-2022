<main>
    <div class="header">
        <h3>THÊM MỚI LOẠI HÀNG HÓA</h3>
    </div>
    <div class="import-dm">
        <form action="index.php?act=add_dm" method="post">
            <div class="maloai">
                <h5>Mã loại</h5>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="tenloai">
                <h5>Tên loại</h5>
                <input type="text" name="tenloai" value="">
            </div>
            <input type="submit" value="THÊM MỚI" name="tm_dm">
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
