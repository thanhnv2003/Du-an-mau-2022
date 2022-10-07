<main>
    <article>
        <?php foreach ($onesp as $key => $value){ ?>
        <div class="box-row">
            <div class="box-title">CHI TIẾT SẢN PHẨM</div>
            <div class="box-content">
                <div style="text-align: center">
                    <img src="../upload/<?php echo $value['image']?>" alt="Loi tai anh" width="300px">
                </div>
                <ul>
                    <li>MÃ HH: <?php echo $value['id']?></li>
                    <li>TÊN HH: <?php echo $value['name']?></li>
                    <li>ĐƠN GIÁ: <?php echo $value['price']?></li>
                    <li>MÔ TẢ: <?php echo $value['description']?></li>
                </ul>
            </div>
        </div><br>
        <?php } ?>
        <div class="box-row">
            <div class="box-title">BÌNH LUẬN</div>
            <div class="box-content">

            </div>
        </div><br>
        <div class="box-row">
            <div class="box-title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box-content">
                <?php foreach ($spcungloai as $key => $value){ ?>
                    <ul>
                        <li><a href="index.php?act=sanphamct&id_sp=<?php echo $value['id']?>"><?php echo $value['name']?></a></li>
                    </ul>
                <?php } ?>
            </div>
        </div>
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

