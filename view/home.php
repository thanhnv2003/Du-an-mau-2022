<main>
    <article>
        <div class="slider-banner">
<!--            SLIDER BANNER-->

<!--            END SLIDER-->
        </div>
        <div class="item">
            <?php foreach ($sp_new as $key => $value){ ?>
                            <div class="item-sp">
                                <div class="img-item">
                                    <a href="index.php?act=sanphamct&id_sp=<?php echo $value['id']?>"><img src="../upload/<?php echo $value['image']?>" alt=""></a>
                                </div>
                                <div class="info-item">
                                    <div class="price-item">
                                        <p><?php echo $value['price']?></p>
                                    </div>
                                    <div class="desc-item">
                                        <a href="index.php?act=sanphamct&id_sp=<?php echo $value['id']?>"><?php echo $value['name']?></a>
                                    </div>
                                </div>
                            </div>
            <?php }?>
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
                <li><a href="index.php?act=dang-ky">Đăng ký thành viên</a></li>
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
                <form action="index.php?act=sanpham" method="post">
                    <input type="text" name="kyw" id="" placeholder="TÌM KIẾM">
                    <input type="submit" name="search" value="SEARCH">
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
