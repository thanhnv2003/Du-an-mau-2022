<main>
    <article>
        <div class="box-row">
            <div class="box-title">CẬP NHẬT TÀI KHOẢN</div>
            <div class="box-content">
                <?php
                    if (isset($_SESSION['user']) && is_array($_SESSION['user'])){
                        foreach ($_SESSION['user'] as $key => $value){

                ?>
                <form action="index.php?act=edit-taikhoan" method="post">
                    <strong>Username: </strong>
                    <input type="text" name="username" value="<?php echo $value['username']?>"><br>
                    <strong>Email: </strong>
                    <input type="email" name="email" value="<?php echo $value['email']?>"><br>
                    <strong>Password: </strong>
                    <input type="password" name="password" value="<?php echo $value['password']?>"><br>
                    <strong>Địa chỉ: </strong>
                    <input type="text" name="address" value="<?php echo $value['address']?>"><br>
                    <strong>Điện thoại: </strong>
                    <input type="number" name="tel" value="<?php echo $value['tel']?>"><br>
                    <input type="hidden" name="id_user" value="<?php echo $value['id']?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                </form>
                <?php }
                        }?>
                <h2 style="color: red"><?php
                    if (isset($thongbao) && ($thongbao != '')){
                        echo $thongbao;
                    }
                    ?></h2>
            </div>
        </div><br>
    </article>
    <?php include 'boxright.php'?>
</main>



