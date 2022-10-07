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
    <?php include 'boxright.php'?>
</main>
