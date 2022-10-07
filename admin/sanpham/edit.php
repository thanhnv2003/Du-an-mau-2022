<?php
    foreach ($sp as $key => $value){

?>
<main>
    <div class="header">
        <h3>CẬP NHẬT SẢN PHẨM</h3>
    </div>
    <div class="import-dm">
        <form action="index.php?act=update_sp" method="post" enctype="multipart/form-data">
            <div class="maloai">
                <h5>Mã sản phẩm</h5>
                <input type="text" name="masp" value="<?php echo $value['id']?>" disabled>
            </div>
            <div class="maloai">
                <h5>Danh mục sản phẩm</h5>
                <select name="id_dm">
                    <option hidden>Chọn danh mục</option>
                    <?php foreach ($listdanhmuc as $index => $info){ ?>
                        <option value="<?php echo $info['id'] ?>" <?php echo $value['id_danhmuc'] == $info['id'] ? 'selected' : ''?>><?php echo $info['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="tenloai">
                <h5>Tên sản phẩm</h5>
                <input type="text" name="tensp" value="<?php echo $value['name']?>">
            </div>
            <div class="tenloai">
                <h5>Giá</h5>
                <input type="number" min="0" name="giasp" value="<?php echo $value['price']?>">
            </div>
            <div class="tenloai">
                <h5>Hình sản phẩm</h5>
                <input type="file" name="imgsp" value="">
                <h5>Ảnh cũ</h5>
                <img src="../upload/<?php echo $value['image']?>" alt="Lỗi tải ảnh" width="300px">
            </div>
            <div class="tenloai">
                <h5>Mô tả</h5>
                <input type="text" name="descsp" value="<?php echo $value['description']?>">
            </div>
            <input type="hidden" name="id" value="<?php if (isset($value['id']) && ($value['id'] != '')) echo $value['id']?>">
            <input type="submit" value="CẬP NHẬT" name="cn_sp">
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
<?php } ?>