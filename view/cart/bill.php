<main>
    <article>
            <div class="box-row">
                <div class="box-title">THÔNG TIN ĐẶT HÀNG</div>
                <div class="box-content">
                    <form action="index.php?act=bill_confirm" method="post">
                        <table>
                            <?php if (isset($_SESSION['user'])){
//                                var_dump($_SESSION['user']);
                                $name = $_SESSION['user']['username'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = $_SESSION['user']['tel'];
                            }else{
                                $name = '';
                                $address = '';
                                $email = '';
                                $tel = '';
                            }  ?>
                            <tr>
                                <td>Người đặt hàng</td>
                                <td><input type="text" name="name" id="" value="<?php echo $name?>"></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address" id="" value="<?php echo $address?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" id="" value="<?php echo $email?>"></td>
                            </tr>
                            <tr>
                                <td>Điện thoại</td>
                                <td><input type="number" name="tel" id="" value="<?php echo $tel?>"></td>
                            </tr>
                        </table>

                </div>
            </div><br>
        <div class="box-row">
            <div class="box-title">PHƯƠNG THỨC THANH TOÁN</div>
            <div class="box-content">
                <table>
                    <tr>
                        <td><input type="radio" name="pttt" value="1" checked>Trả tiền khi nhận hàng</td>
                        <td><input type="radio" name="pttt" value="2" >Chuyển khoản ngân hàng</td>
                        <td><input type="radio" name="pttt" value="3" >Thanh toán online</td>
                    </tr>
                </table>
            </div>
        </div><br>
        <div class="box-row">
            <div class="box-title">THÔNG TIN GIỎ HÀNG</div>
            <div class="box-content">
                <table border="1">
                    <?php view_cart(0); ?>
                </table>
            </div>
        </div><br>
        <div class="box-row">
            <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongy">
        </div>
        </form>
    </article>
    <?php include 'boxright.php'?>
</main>

