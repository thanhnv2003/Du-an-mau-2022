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
    <aside>
        <div class="box-account">
            <div class="box-title"><p>TÀI KHOẢN</p></div>
            <div class="box-content formtk">
                <form action="" method="POST">
                    <span>Tên đăng nhập</span><br>
                    <input type="text" name="user"><br>
                    <span>Mật khẩu</span><br>
                    <input type="text" name="password" id=""><br>
                    <input type="checkbox" name="" id=""><span>Ghi nhớ tài khoản?</span><br>
                    <input type="submit" value="Đăng nhập"><br>
                </form>
                <li><a href="">Quên mật khẩu</a></li>
                <li><a href="">Đăng ký thành viên</a></li>
            </div>
        </div>
        <div class="box-cate">
            <div class="box-title"><p>DANH MỤC</p></div>
            <div class="box-content2 danhmuc">
                <ul>
                    <?php foreach ($dm_new as $key => $value){ ?>
                        <li><a href="index.php?act=sanpham&id_dm=<?php echo $value['id']?>"><?php echo $value['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="box-footer searchbox">
                <form action="" method="post">
                    <input type="text" name="" id="" placeholder="TÌM KIẾM">
                </form>
            </div>
        </div>
        <div class="box-favourite">
            <div class="box-title"><p>YÊU THÍCH</p></div>
            <div class="box-content">
                <?php foreach ($ds_top10 as $key => $value){ ?>
                    <div class="fa-info top10">
                        <img src="../upload/<?php echo $value['image']?>" alt="">
                        <a href="index.php?act=sanphamct&id_sp=<?php echo $value['id']?>"><?php echo $value['name']?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </aside>
</main>



