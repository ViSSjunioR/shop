<?php

require_once('../common/DBConnection.php');

class UserRepository {

    function getUserByUsernameAndPassword($username, $password) {
        $conn = DBConnection::getInstance(); 
        $stmt = $conn -> prepare("SELECT username FROM user where username = :username and password = :password");
        $stmt -> bindParam(':username', $username);
        $stmt -> bindParam(':password', $password);
        $stmt->execute();
        $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() == 1){
            return true;
        } 
        return false;
    }

}

?>