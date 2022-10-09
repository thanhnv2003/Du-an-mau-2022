<?php
function insert_account($username, $password, $email){
    $sql = "INSERT INTO `account` (`id`, `username`, `password`, `email`, `address`, `tel`, `role`) VALUES (NULL, '$username', '$password', '$email', '', NULL, '0')";
    pdo_execute($sql);
}
function check_user($user,$pass){
    $sql = "select * from account where username = '$user' and password = '$pass'";
    $sp = pdo_query_one($sql);
//    foreach ($sp as $key => $value){
//        if ($user == $value['username'] && $pass == $value['password']){
//            $mang = $value;
//        }else{
//            $mang = '';
//        }
//    }
    return $sp;
}
function check_email($email){
    $sql = "select * from account where email = '$email'";
    $sp = pdo_query($sql);
    return $sp;
}
function update_user($id, $user, $pass, $email, $address, $tel){
    $sql = "UPDATE account SET username = '$user', password = '$pass', email = '$email', address = '$address', tel = '$tel' WHERE id = '$id'";
    pdo_execute($sql);
}
function loadall_user(){
    $sql = "select * from account order by id asc";
    $listUser = pdo_query($sql);
    return $listUser;
}
function loadone_user($id){
    $sql = "select * from account where id=".$id;
    $user = pdo_query($sql);
    return $user;
}
function delete_user($id){
    $sql = "delete from account where id=".$id;
    pdo_execute($sql);
}

?>