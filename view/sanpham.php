<main>
    <article>
            <div class="box-row">
                <div class="box-title">CÁC SẢN PHẨM TRONG DANH MỤC: <strong><?php echo $ten_dm ?></strong></div>
                <div class="box-content">
                    <div class="item">
                        <?php foreach ($ds_sanpham as $key => $value){ ?>
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
                </div>
            </div><br>
    </article>
    <?php include 'boxright.php'?>
</main>


