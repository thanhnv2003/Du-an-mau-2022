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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#binhluan").load("../view/binhluan/binhluanform.php", {idpro: <?php echo $value['id']?>});
                });
            </script>
        <div class="box-row" id="binhluan">
<!--            <div class="box-title">BÌNH LUẬN</div>-->
<!--            <div class="box-content">-->
<!--                <iframe src="../view/binhluan/binhluanform.php?id_bl=--><?php //echo $value['id'] ?><!--" frameborder="0" width="100%" height="300px"></iframe>-->
<!--            </div>-->
        </div><br>
        <?php } ?>
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
    <?php include 'boxright.php'?>
</main>

