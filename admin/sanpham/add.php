<main>
    <div class="header">
        <h3>THÊM MỚI SẢN PHẨM</h3>
    </div>
    <div class="import-dm">
        <form action="index.php?act=add_sp" method="post" enctype="multipart/form-data">
            <div class="maloai">
                <h5>Mã sản phẩm</h5>
                <input type="text" name="masp" value="Tạo tự động" disabled>
            </div>
            <div class="maloai">
                <h5>Danh mục sản phẩm</h5>
                <select name="id_dm">
                    <option hidden>Chọn danh mục</option>
                    <?php foreach ($listdanhmuc as $key => $value){ ?>
                        <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="tenloai">
                <h5>Tên sản phẩm</h5>
                <input type="text" name="tensp" value="">
            </div>
            <div class="tenloai">
                <h5>Giá</h5>
                <input type="text" name="giasp" value="">
            </div>
            <div class="tenloai">
                <h5>Hình sản phẩm</h5>
                <input type="file" name="imgsp" value="">
            </div>
            <div class="tenloai">
                <h5>Mô tả</h5>
                <textarea name="descsp" value="" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="THÊM MỚI" name="tm_sp">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=list_sp"><input type="button" value="DANH SÁCH"></a><br>
            <?php
                if (isset($thongbao) && ($thongbao != '')){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</main>
