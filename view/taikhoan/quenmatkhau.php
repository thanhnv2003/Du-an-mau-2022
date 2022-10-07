<main>
    <article>
        <div class="box-row">
            <div class="box-title">QUÊN MẬT KHẨU</div>
            <div class="box-content">
                <form action="index.php?act=quen-mat-khau" method="post">
                    <strong>Email: </strong>
                    <input type="email" name="email"><br>
                    <input type="submit" name="send" value="Gửi">
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
    <?php include 'boxright.php'?>
</main>



