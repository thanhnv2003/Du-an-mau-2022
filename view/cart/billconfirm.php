<?php
//if(isset($bill) && (is_array($bill))){
//    var_dump($bill);
//}
//var_dump($bill_ct);
?>
<main>
    <article>
        <div class="box-row">
            <div class="box-title">CẢM ƠN</div>
            <div class="box-content">
                <h2>Cảm ơn quý khách đã đặt hàng!</h2>
            </div>
        </div><br>
        <?php
        if (isset($bill) && (is_array($bill))){

        ?>
        <div class="box-row">
            <div class="box-title">THÔNG TIN ĐƠN HÀNG</div>
            <div class="box-content">
                <li>Mã đơn hàng: DAM-<?php echo $bill['id']?></li>
                <li>Ngày đặt hàng: <?php echo $bill['ngaydathang']?></li>
                <li>Tổng đơn hàng: <?php echo $bill['total']?></li>
                <li>Phương thức thanh toán: <?php echo $bill['bill_pttt']?></li>
            </div>
        </div><br>
        <div class="box-row">
            <div class="box-title">THÔNG TIN ĐẶT HÀNG</div>
            <div class="box-content">
                <table>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?php echo $bill['bill_name']?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?php echo $bill['bill_address']?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $bill['bill_email']?></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><?php echo $bill['bill_tel']?></td>
                    </tr>
                </table>
            </div>
        </div><br>
        <?php } ?>
            <div class="box-row">
                <div class="box-title">CHI TIẾT GIỎ HÀNG</div>
                <div class="box-content">
                    <table border="1">
<!--                        <tr>-->
<!--                            <th>STT</th>-->
<!--                            <th>HÌNH</th>-->
<!--                            <th>SẢN PHẨM</th>-->
<!--                            <th>ĐƠN GIÁ</th>-->
<!--                            <th>SỐ LƯỢNG</th>-->
<!--                            <th>THÀNH TIỀN</th>-->
<!--                        </tr>-->

                        <?php bill_chi_tiet($bill_ct) ?>

                    </table>
                </div>
            </div><br>

    </article>
    <?php include 'boxright.php'?>
</main>


