<?php

require_once('../User/UserRepository.php');

$usermane = $_POST['username'];
$pass = $_POST['pass'];

if (!is_null($usermane) && !is_null($pass)) {
    $userRepo = new UserRepository();
    $check = $userRepo -> getUserByUsernameAndPassword($usermane, $pass);
    if($check) {
        echo "success";
    }
}

?>