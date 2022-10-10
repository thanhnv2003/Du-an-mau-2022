<?php
//if(isset($bill) && (is_array($bill))){
//    var_dump($bill);
//}
//var_dump($bill_ct);
?>
<main>
    <article>
        <div class="box-row">
            <div class="box-title">ĐƠN HÀNG CỦA BẠN</div>
            <div class="box-content">
                <table border="1">
                    <tr>
<!--                        <th>STT</th>-->
                        <th>MÃ ĐẶT HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>SỐ LƯỢNG MH</th>
                        <th>TỔNG GIÁ TRỊ</th>
                        <th>TÌNH TRẠNG</th>
                    </tr>
                    <?php if (is_array($listBill)){
                        foreach ($listBill as $key => $value){
                            $ttdh = get_ttdh($value['bill_status']);
                            $countsp = loadall_cart_count($value['id'])?>
                    <tr>
                        <td>DAM-<?php echo $value['id']?></td>
                        <td><?php echo $value['ngaydathang']?></td>
                        <td><?php echo $countsp?></td>
                        <td><?php echo $value['total']?></td>
                        <td><?php echo $ttdh ?></td>
                    </tr>
                    <?php }
                        } ?>
                </table>
            </div>
        </div><br>
    </article>
    <?php include 'boxright.php'?>
</main>



