<?php

class User {

    private $username;
    private $password;

    function __construct() {

    }

    function setUsername($username) {
        $this -> username = $username;
    }

    function getUsername() {
        return $this -> username;
    }

    function setPassword($password) {
        $this -> password = $password;
    }

    function getPassword() {
        return $this -> password;
    }

}

?>