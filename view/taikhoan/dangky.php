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
    <?php include 'boxright.php'?>
</main>


