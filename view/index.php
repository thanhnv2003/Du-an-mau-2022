<?php
session_start();
include '../model/pdo.php';
include '../model/sanpham.php';
include '../model/danhmuc.php';
include '../model/taikhoan.php';
include 'header.php';

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
        default:
            include './home.php';
            break;
    }

}else{
    include 'home.php';
}
include 'footer.php';
?>
