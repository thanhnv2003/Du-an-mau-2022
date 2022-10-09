<?php
session_start();
$idpro = $_REQUEST['idpro'];
include '../../model/pdo.php';
include '../../model/binhluan.php';

$dsbl = loadall_binhluan($idpro);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../src/css/style.css">
    <style>
        .binhluan table{
            width: 90%;
            margin-left: 5%;
            background-color: white;
        }
        .binhluan table td:nth-child(1){
            width: 50%;
        }
        .binhluan table td:nth-child(2){
            width: 20%;
        }
        .binhluan table td:nth-child(3){
             width: 30%;
         }



    </style>
</head>
<body>
<div class="box-cate">
    <div class="box-title"><p>BÌNH LUẬN</p></div>
    <div class="box-content2 binhluan">
        <table>
            <?php foreach ($dsbl as $key => $value){ ?>
                <tr><td><?php echo $value['noidung']?></td>
                <td><?php echo $value['id_user']?></td>
                <td><?php echo $value['ngaybinhluan']?></td></tr>
            <?php } ?>
        </table>
    </div>
    <div class="box-footer searchbox">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <input type="hidden" name="idpro" value="<?php echo $idpro?>">
            <input type="hidden" name="idpro" value="<?php echo $idpro?>">
            <?php if (isset($_SESSION['user'])){?>
                <input type="text" name="message" id="" placeholder="NHẬP BÌNH LUẬN SẢN PHẨM">
                <input type="submit" name="send" value="BÌNH LUẬN">
            <?php }else{ ?>
            <h4 style="color: red">Bạn cần đăng nhập để sử dụng tính năng bình luận này</h4>
            <?php } ?>
        </form>
    </div>
    <?php
    if (isset($_POST['send']) && ($_POST['send'])) {
        $noidung = $_POST['message'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user'][0]['id'];
        $ngaybl = date('h:i:sa d/m/Y');

//        var_dump($_SESSION['user'][0]['id']);
        insert_binhluan($noidung, $iduser, $idpro, $ngaybl);
        header("location: ".$_SERVER['HTTP_REFERER']);
    }
    ?>
</div>

</body>
</html>
