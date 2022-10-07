<main>
    <article>
            <div class="box-row">
                <div class="box-title">ĐĂNG KÝ THÀNH VIÊN</div>
                <div class="box-content">
                    <form action="index.php?act=dang-ky" method="post">
                        <strong>Username: </strong>
                        <input type="text" name="username"><br>
                        <strong>Email: </strong>
                        <input type="email" name="email"><br>
                        <strong>Password: </strong>
                        <input type="password" name="password"><br>
                        <input type="submit" name="dangky" value="Đăng ký">
                        <input type="reset" value="Nhập lại">
                    </form>
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


