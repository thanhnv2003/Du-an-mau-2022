<?php
require "../model/danhmuc.php";
require "../model/sanpham.php";
include "../model/pdo.php";
    include 'header.php';
    //controller

    if (isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            //Controller DANH MUC
            case 'add_dm':
//                code...
                //Kiểm tra  xem người dùng có click vào nút add hay không
                if (isset($_POST['tm_dm'])&&($_POST['tm_dm'])){
                    $tenloai = $_POST['tenloai'];
                    insert_dm($tenloai);
                    $thongbao =  'Thêm thành công';
                }
                include "danhmuc/add.php";
                break;
            case 'list_dm':
                $listdanhmuc = loadall_dm();
                include "danhmuc/list.php";
                break;
            case 'delete_dm':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_dm($_GET['id']);
                }
                $listdanhmuc = loadall_dm();
                include "danhmuc/list.php";
                break;
            case 'edit_dm':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $dm = loadone_dm($_GET['id']);
                }
                include "danhmuc/edit.php";
                break;
            case 'update_dm':
                if (isset($_POST['update'])&&($_POST['update'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_dm($tenloai, $id);
                    $thongbao =  'Cập nhật thành công';
                }
                $listdanhmuc = loadall_dm();
                include "danhmuc/list.php";
                break;
            //Controller SAN PHAM
            case 'add_sp':
//                code...
                //Kiểm tra  xem người dùng có click vào nút add hay không
                if (isset($_POST['tm_sp'])&&($_POST['tm_sp'])){
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $desc = $_POST['descsp'];
                    $iddm = $_POST['id_dm'];
                    $fileName = $_FILES['imgsp']['name'];
                    $target_dir = '../upload/';
                    $target_file = $target_dir.$fileName;
                    if (move_uploaded_file($_FILES["imgsp"]["tmp_name"], $target_file)) {
//                        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    insert_sp($tensp, $giasp, $fileName, $desc, $iddm);
                    $thongbao =  'Thêm thành công';
                }
                $listdanhmuc = loadall_dm();
                include "sanpham/add.php";
                break;
            case 'list_sp':
                if (isset($_POST['search']) && ($_POST['search'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['id_dm'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }
                $listdanhmuc = loadall_dm();
                $listSanPham = loadall_sp($kyw, $iddm);
                include "sanpham/list.php";
                break;
            case 'delete_sp':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_sp($_GET['id']);
                }
                $kyw = '';
                $iddm = 0;
                $listSanPham = loadall_sp($kyw, $iddm);
                include "sanpham/list.php";
                break;
            case 'edit_sp':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $sp = loadone_sp($_GET['id']);
                }
                $listdanhmuc = loadall_dm();
                include "sanpham/edit.php";
                break;
            case 'update_sp':
                if (isset($_POST['cn_sp'])&&($_POST['cn_sp'])){
                    //
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $desc = $_POST['descsp'];
                    $iddm = $_POST['id_dm'];
                    $masp = $_POST['id'];
                    $fileName = $_FILES['imgsp']['name'];
                    $target_dir = '../upload/';
                    $target_file = $target_dir.$fileName;
                    if (move_uploaded_file($_FILES["imgsp"]["tmp_name"], $target_file)) {
//                        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    update_sp($tensp,$giasp,$fileName,$desc,$iddm,$masp);
                    $thongbao = 'Cập nhật thành công';
                }
                $kyw = '';
                $iddm = 0;
                $listSanPham = loadall_sp($kyw, $iddm);
                include "sanpham/list.php";
                break;
            default:
                include 'home.php';
                break;
        }
    }else{
        include 'home.php';
    }



//    include 'home.php';


    include 'footer.php';
?>
