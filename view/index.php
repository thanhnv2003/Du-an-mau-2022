<?php
session_start();
include '../model/pdo.php';
include '../model/sanpham.php';
include '../model/danhmuc.php';
include '../model/taikhoan.php';
include '../model/cart.php';


include 'header.php';


if (!isset($_SESSION['mycard'])) $_SESSION['mycard'] = [];

$sp_new = loadall_sp_home();
$dm_new = loadall_dm();
$ds_top10 = loadall_sp_top10();

if (isset($_GET['act']) && ($_GET['act']) != ''){
    $act = $_GET['act'];
    switch ($act){
        case 'gioi-thieu':
            include './gioithieu.php';
            break;
        case 'lien-he':
            include './lienhe.php';
            break;
        case 'gop-y':
            include './gopy.php';
            break;
        case 'giai-dap':
            include './giaidap.php';
            break;
        case 'dang-ky':
            if (isset($_POST['dangky'])){
                $email = $_POST['email'];
                $user = $_POST['username'];
                $pass = $_POST['password'];
                insert_account($user, $pass, $email);
                $thongbao = 'Đã đăng ký thành công';
            }
            include './taikhoan/dangky.php';
            break;
        case 'dang-nhap':
            if (isset($_POST['dangnhap'])){
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $check_user = check_user($user,$pass);
                if (is_array($check_user)){
                    $_SESSION['user'] = $check_user;
//                    $thongbao = 'Đã đăng nhập thành công';
                    header('location: index.php');
                }elseif(!is_array($check_user)){
                    $thongbao = 'Tài khoản không tồn tại';

                }
            }
            include './taikhoan/dangky.php';
            break;
        case 'edit-taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $id = $_POST['id_user'];
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                update_user($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = check_user($user, $pass);
                $thongbao = 'Cập nhật thành công';
                header('location: index.php?act=edit-taikhoan');

            }
            include './taikhoan/edit_taikhoan.php';
            break;
        case 'quen-mat-khau':
            if (isset($_POST['send']) && ($_POST['send'])){
                $email = $_POST['email'];

                $check_email = check_email($email);
                if (is_array($check_email)){
                    $thongbao = 'Mật khẩu của bạn là: '.$check_email[0]['password'];
                }else{
                    $thongbao = 'Email này không tồn tại!';
                }

            }
            include './taikhoan/quenmatkhau.php';
            break;
            //
        case 'logout':
            session_unset();
            header('location: index.php');
            break;
        case 'sanphamct':
            if (isset($_GET['id_sp']) && ($_GET['id_sp']>0)){
                $id = $_GET['id_sp'];
                $onesp = loadone_sp($id);
                foreach ($onesp as $key => $value){
                    $id_dm = $value['id_danhmuc'];
                }
                $spcungloai = load_sanpham_cungloai($id, $id_dm);
            }else{
                include 'home.php';
            }

            include './sanphamct.php';
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw']!='')){
                $kyw = $_POST['kyw'];
            }else{
                $kyw = '';
            }

            if (isset($_GET['id_dm']) && ($_GET['id_dm']>0)){
                $iddm = $_GET['id_dm'];

            }else{
                $iddm = 0;
            }
            $ds_sanpham = loadall_sp($kyw, $iddm);
            $ten_dm = load_ten_dm($iddm);
            include './sanpham.php';
            break;
        case 'add_tocard':
            //add thông tin sp từ form add to card đến session
            if (isset($_POST['addtocard']) && ($_POST['addtocard'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $soluong = 1;
                $thanhtien = $soluong * $price;
                $sp_add = [$id, $name, $image, $price, $soluong, $thanhtien];
                array_push($_SESSION['mycard'], $sp_add);
            }
            include './cart/viewcart.php';
            break;
        case 'delete_cart':
            echo $_GET['id_cart'];
            if (isset($_GET['id_cart'])){
                array_splice($_SESSION['mycard'],$_GET['id_cart'],1);
//                unset($_SESSION['mycard'][$_GET['id_cart']]);
            }else{
                $_SESSION['mycard'] = [];
            }
            header('location: index.php?act=view_cart');
            break;
        case 'view_cart':
            include './cart/viewcart.php';
            break;
        case 'bill':

            include './cart/bill.php';
            break;
        case 'bill_confirm':
            if (isset($_POST['dongy']) && ($_POST['dongy'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();

                $id_bill = insert_bill($name, $email, $address, $tel,$pttt, $ngaydathang, $tongdonhang);

                //insert into cart : $_SESSION['mycard] & id_bill;
                foreach ($_SESSION['mycard'] as $cart){
                    insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$id_bill);
                }

            }
            $listbill=loadone_bill($id_bill);
            include './cart/billconfirm.php';
            break;
        case 'my_bill':

            include './cart/mybill.php';
            break;
        default:
            include './home.php';
            break;
    }

}else{
    include 'home.php';
}
include 'footer.php';
?>
