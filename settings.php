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
    DB::$password = '9rwPhb8{[LoO@x68';
    DB::$user = 'id18100393_root';
    DB::$dbName = 'id18100393_pgi';
    DB::$host = 'localhost';
}

?>