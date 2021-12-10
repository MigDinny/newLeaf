<?php
require_once 'db.class.php';

error_reporting(-1);

// default values
DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'pgi';

// set values for production if ENV is defined
if (getenv('DATABASE_URL') != false) {

    $dbopts = parse_url(getenv('DATABASE_URL'));

    DB::$user = $dbopts["user"];
    DB::$password = $dbopts["pass"];
    DB::$dbName = ltrim($dbopts["path"],'/');
    DB::$host = $dbopts["host"];
    DB::$port = $dbopts["port"];
    DB::$encoding = 'utf8';

    

}


?>