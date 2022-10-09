<main>
    <article>
            <div class="box-row">
                <div class="box-title">GIỎ HÀNG</div>
                <div class="box-content">
                    <table border="1">

                        <?php view_cart(1) ?>
                    </table>
                </div>
                <input type="button" value="TIẾP TỤC ĐẶT HÀNG" onclick="location.href='index.php?act=bill'">
                <input type="button" value="XÓA TOÀN BỘ GIỎ HÀNG" onclick="confirm('Bạn có muốn xóa toàn bộ giỏ hàng hay không!') == true ? location.href='index.php?act=delete_cart' : '' ">
            </div><br>

    </article>
    <?php include 'boxright.php'?>
</main>


