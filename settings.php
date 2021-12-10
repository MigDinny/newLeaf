<?php
require_once 'db.class.php';

<<<<<<< Updated upstream
=======
$production = true;

// default values
>>>>>>> Stashed changes
DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'pgi';

<<<<<<< Updated upstream
=======
// set values for production if ENV is defined

if ($production == true) {
    DB::$password = '9rwPhb8{[LoO@x68';
    DB::$user = 'id18100393_root';
    DB::$dbName = 'id18100393_pgi';
}


>>>>>>> Stashed changes
?>