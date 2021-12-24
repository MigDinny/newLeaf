<?php
require_once 'db.class.php';

error_reporting(0); // -1 all

$production = true;

// default values
DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'pgi';
DB:: $encoding = 'utf8';


// set values for production if ENV is defined

if ($production == true) {
    error_reporting(0); // -1 all
    DB::$password = 'newleaf123';
    DB::$user = 'limoscan_newleaf';
    DB::$dbName = 'limoscan_newleaf';
    DB::$host = 'localhost';
}

?>