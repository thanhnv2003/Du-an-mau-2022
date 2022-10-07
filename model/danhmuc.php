<?php
//Them moi danh muc
function insert_dm($tenloai){
    $sql = "INSERT INTO danhmuc(name) VALUES ('$tenloai')";
    pdo_execute($sql);
}
//Xoa danh muc
function delete_dm($id){
    $sql = "delete from danhmuc where id=".$id;
    pdo_execute($sql);
}
//Load all danh muc
function loadall_dm(){
    $sql = "select * from danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
//Load one danh muc
function loadone_dm($id){
    $sql = "select * from danhmuc where id=".$id;
    $dm = pdo_query($sql);
    return $dm;
}
//Cap nhat danh muc
function update_dm($tenloai, $id){
    $sql = "update danhmuc set name = '$tenloai' where id = '$id'";
    pdo_execute($sql);
}
?>
