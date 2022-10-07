<?php
function insert_account($username, $password, $email){
    $sql = "INSERT INTO `account` (`id`, `username`, `password`, `email`, `address`, `tel`, `role`) VALUES (NULL, '$username', '$password', '$email', '', NULL, '1')";
    pdo_execute($sql);
}
function check_user($user,$pass){
    $sql = "select * from account where username = '$user' and password = '$pass'";
    $sp = pdo_query($sql);
    return $sp;
}

?>