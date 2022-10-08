<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngaybl){
    $sql = "INSERT INTO binhluan VALUES (null, '$noidung', '$iduser', '$idpro', '$ngaybl')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql = "select * from binhluan where 1";
    if ($idpro > 0){
        $sql .= " and id_pro='".$idpro."'";
    }
    $sql .= ' order by id desc';
    $listBinhLuan = pdo_query($sql);
    return $listBinhLuan;
}
function delete_binhluan($id){
    $sql = "delete from binhluan where id=".$id;
    pdo_execute($sql);
}


?>