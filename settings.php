<?php
require_once 'db.class.php';

//error_reporting(-1);

$production = false;

// default values
DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'pgi';

// set values for production if ENV is defined

if ($production == true) {
    DB::$password = 'newleaf123';
    DB::$user = 'limoscan_newleaf';
    DB::$dbName = 'limoscan_newleaf';
    DB::$host = 'localhost';
}

?>