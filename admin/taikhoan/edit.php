<?php
foreach ($user as $key => $value){
    ?>
    <main>
        <div class="header">
            <h3>CẬP NHẬT TÀI KHOẢN</h3>
        </div>
        <div class="import-dm">
            <form action="index.php?act=update_user" method="post">
                <div class="maloai">
                    <h5>ID TK</h5>
                    <input type="text" name="id" value="<?php if (isset($value['id']) && ($value['id'] != '')) echo $value['id']?>" disabled>
                </div>
                <div class="tenloai">
                    <h5>USERNAME</h5>
                    <input type="text" name="username" value="<?php if (isset($value['username']) && ($value['username'] != '')) echo $value['username']?>">
                </div>
                <div class="maloai">
                    <h5>PASSWORD</h5>
                    <input type="text" name="password" value="<?php if (isset($value['password']) && ($value['password'] != '')) echo $value['password']?>">
                </div>
                <div class="tenloai">
                    <h5>EMAIL</h5>
                    <input type="text" name="email" value="<?php if (isset($value['email']) && ($value['email'] != '')) echo $value['email']?>">
                </div>
                <div class="maloai">
                    <h5>ADDRESS</h5>
                    <input type="text" name="address" value="<?php if (isset($value['address']) && ($value['address'] != '')) echo $value['address']?>" >
                </div>
                <div class="tenloai">
                    <h5>ĐIỆN THOẠI</h5>
                    <input type="text" name="tel" value="<?php if (isset($value['tel']) && ($value['tel'] != '')) echo $value['tel']?>">
                </div>
                <div class="maloai">
                    <h5>VAI TRÒ</h5>
                    <input type="text" name="role" value="<?php if (isset($value['role']) && ($value['role'] != '')) echo $value['role']?>" disabled>
                </div>
                <input type="hidden" name="id_user" value="<?php if (isset($value['id']) && ($value['id'] != '')) echo $value['id']?>">
                <input type="submit" value="CẬP NHẬT" name="update">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=list_user"><input type="button" value="DANH SÁCH"></a><br>
                <?php
                if (isset($thongbao) && ($thongbao != '')){
                    echo $thongbao;
                }
                ?>
            </form>
        </div>
    </main>
<?php } ?>
