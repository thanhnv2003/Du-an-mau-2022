<?php
function insert_account($username, $password, $email){
    $sql = "INSERT INTO `account` (`id`, `username`, `password`, `email`, `address`, `tel`, `role`) VALUES (NULL, '$username', '$password', '$email', '', NULL, '1')";
    pdo_execute($sql);
}

?>