<?php

include('../config/DBConfig.php');

class DBConnection {
    
    private static $instance;

    private $user = DBUSER;
    private $pass = DBPWD;
    private $dbName = DBNAME;
    private $dbHost = DBHOST;
    private $dbPort = DBPORT;

    private function __construct() {

    }

    public static function getInstance() {

        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO("mysql:host=".$dbHost.';port='.$dbPort.';dbname='.$dbName, $user, $pass);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
				self::$instance->query('SET NAMES utf8');
				self::$instance->query('SET CHARACTER SET utf8');
            } catch(PDOException $error) {
                echo $error->getMessage();
            }
        }
        return self::$instance;

    }



}

?>