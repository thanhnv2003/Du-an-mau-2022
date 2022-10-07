<?php
//Them moi san pham
function insert_sp($tenSanPham, $giasp, $image, $desc, $id_dm){
    $sql = "INSERT INTO sanpham VALUES (null, '$tenSanPham', '$giasp', '$image', '$desc',null, '$id_dm')";
    pdo_execute($sql);
}
//Xoa san pham
function delete_sp($id){
    $sql = "delete from sanpham where id=".$id;
    pdo_execute($sql);
}
//Load all san pham
function loadall_sp($kyw, $iddm){
    $sql = "select * from sanpham where 1";
    if ($kyw != ''){
        $sql .= " AND `name` LIKE '%" . $kyw . "%'";
    }
    if ($iddm > 0){
        $sql .= " and id_danhmuc ='".$iddm."'";
    }
    $sql .= " order by id desc";
    $listSanPham = pdo_query($sql);
    return $listSanPham;
}
//load all san pham trang chu
function loadall_sp_home(){
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $listSanPham = pdo_query($sql);
    return $listSanPham;
}
//load san pham top 10
function loadall_sp_top10(){
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listSanPham = pdo_query($sql);
    return $listSanPham;
}
//Load one san pham
function loadone_sp($id){
    $sql = "select * from sanpham where id=".$id;
    $sp = pdo_query($sql);
    return $sp;
}

//load ten danh muc
function load_ten_dm($id){
    if ($id > 0){
        $sql = "select * from danhmuc where id=".$id;
        $dm = pdo_query($sql);
        foreach ($dm as $key => $value){
            $name = $value['name'];
        }
        return $name;
    }else{
        return '';
    }

}

//Load san pham cung loai
function load_sanpham_cungloai($id, $id_dm){
    $sql = "select * from sanpham where id_danhmuc = '$id_dm' and id <> ".$id;
    $listSanPham = pdo_query($sql);
    return $listSanPham;
}
//Cap nhat san pham
function update_sp($tenSanPham,$gia, $image, $desc, $id_danhmuc, $id){
    if ($image != ''){
        $sql = "update sanpham set name = '$tenSanPham', price = '$gia', image = '$image', description = '$desc', id_danhmuc = '$id_danhmuc' where id = '$id'";
    }else{
        $sql = "update sanpham set name = '$tenSanPham', price = '$gia', description = '$desc', id_danhmuc = '$id_danhmuc' where id = '$id'";
    }
    pdo_execute($sql);
}




?>
