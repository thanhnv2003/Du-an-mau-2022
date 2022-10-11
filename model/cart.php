<?php
function view_cart($del)
{
    $tong = 0;
    $i = 0;
    if ($del == 1){
        $xoasp_th ='<th>THAO TÁC</th>';
        $xoasp_td2 = '<td></td>';
    }else{
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo '<tr>
                           <th>HÌNH</th>
                           <th>SẢN PHẨM</th>
                           <th>ĐƠN GIÁ</th>
                           <th>SỐ LƯỢNG</th>
                           <th>THÀNH TIỀN</th>
                           '.$xoasp_th.'
                        </tr>';

    foreach ($_SESSION['mycard'] as $cart) {
        $hinh = "../../upload/" . $cart[2];

        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1){
            $xoasp_td = '<td><a href="index.php?act=delete_cart&id_cart='.$i.'"><input type="button" value="Xóa"></a></td>';
        }else{
            $xoasp_td = '';
        }
        echo '

                    <tr>
                            <td><img src="' . $hinh . '" alt=""></td>
                            <td>' . $cart[1] . '</td>
                            <td>' . $cart[3] . '</td>
                            <td>' . $cart[4] . '</td>
                            <td>' . $ttien . '</td>
                           '.$xoasp_td.'
                            </tr>';
        $i += 1;
    }
    echo '<tr>
                            <td colspan="4">TỔNG ĐƠN HÀNG</td>
                            <td>'.$tong.'</td>
                                '.$xoasp_td2.'
                        </tr>';
}
function bill_chi_tiet($listbill)
{
//    echo '<pre>';
//    print_r($listbill);
    $tong = 0;
    $i = 0;
    echo '<tr>
                           <th>HÌNH</th>
                           <th>SẢN PHẨM</th>
                           <th>ĐƠN GIÁ</th>
                           <th>SỐ LƯỢNG</th>
                           <th>THÀNH TIỀN</th>
                        </tr>';

    foreach ($listbill as $cart => $value) {
//       echo '<pre>';
//       print_r($value);
        $hinh = "../../upload/" . $value['img'];
        $tong += $value['thanhtien'];
        echo '

                    <tr>
                            <td><img src="' . $hinh . '" alt="Lỗi tải ảnh"></td>
                            <td>'.$value['name'].'</td>
                            <td>' . $value['price'] . '</td>
                            <td>' . $value['soluong'] . '</td>
                            <td>' . $value['thanhtien'] . '</td>
                    </tr>';
        $i += 1;
    }
    echo '<tr>
                            <td colspan="4">TỔNG ĐƠN HÀNG</td>
                            <td>'.$tong.'</td>
                        </tr>';
}

function tongdonhang(){
    $tong = 0;
    foreach ($_SESSION['mycard'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($id_user,$name, $email, $address, $tel,$pttt, $ngaydathang, $tongdonhang){
    $sql = "INSERT INTO bill(id_user,bill_name,bill_email,bill_address,bill_tel,bill_pttt, ngaydathang, total) VALUES ('$id_user','$name', '$email', '$address', '$tel','$pttt', '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill){
    $sql = "INSERT INTO cart VALUES (null, '$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id){
    $sql = "select * from bill where id=".$id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadone_cart($idbill){
    $sql = "select * from cart where id_bill=".$idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill){
    $sql = "select * from cart where id_bill=".$idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($kyw='',$idUser=0){
    $sql = "select * from bill where 1";
    if ($idUser>0){
        $sql .= " and id_user=".$idUser;
    }
    if ($kyw!=''){
        $sql .= " and id like '%".$kyw."%'";
    }
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function get_ttdh($n){
    switch ($n){
        case '0':
            $tt = 'Đơn hàng mới';
            break;
        case '1':
            $tt = 'Đang xử lý';
            break;
        case '2':
            $tt = 'Đang giao hàng';
            break;
        case '3':
            $tt = 'Hoàn tất';
            break;
        default:
            $tt = 'Đơn hàng mới';
            break;
    }
    return $tt;
}
function get_pttt($n){
    switch ($n){
        case '1':
            $tt = 'Thanh toán trực tiếp';
            break;
        case '2':
            $tt = 'Chuyển khoản ngân hàng';
            break;
        case '3':
            $tt = 'Thanh toán online';
            break;
        default:
            $tt = 'Thanh toán trực tiếp';
            break;
    }
    return $tt;
}
function update_donhang($id_ttdh, $id){
    $sql = "update bill set bill_status = '$id_ttdh' where id = '$id'";
    pdo_execute($sql);
}
function delete_donhang($id){
    $sql = "delete from bill where id=".$id;
    pdo_execute($sql);
    $pdo = "delete from cart where id_bill=".$id;
    pdo_execute($pdo);
}
function loadall_thongke(){
    $sql = "select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as trungbinh from sanpham left join danhmuc on danhmuc.id=sanpham.id_danhmuc group by danhmuc.id order by danhmuc.id desc";
    $dstk = pdo_query($sql);
    return $dstk;
}

?>
