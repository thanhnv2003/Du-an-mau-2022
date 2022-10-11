




<table border="1">
    <tr>
        <th>MÃ DANH MỤC</th>
        <th>TÊN DANH MỤC</th>
        <th>SỐ LƯỢNG</th>
        <th>GIÁ CAO NHẤT</th>
        <th>GIÁ THẤP NHẤT</th>
        <th>GIÁ TRUNG BÌNH</th>

    </tr>
<?php
foreach ($listtk as $key => $value){

?>
    <tr>
        <td><?php echo $value['madm']?></td>
        <td><?php echo $value['tendm']?></td>
        <td><?php echo $value['countsp']?></td>
        <td><?php echo $value['minprice']?></td>
        <td><?php echo $value['maxprice']?></td>
        <td><?php echo $value['trungbinh']?></td>
    </tr>

<?php } ?>
    <a href="index.php?act=bieudo">Biểu đồ</a>
</table>
