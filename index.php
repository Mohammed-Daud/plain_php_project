<?php
//ENTRY 
//error_reporting(1);
error_reporting(E_ALL);

require __DIR__.'/vendor/autoload.php';


$app = require_once __DIR__.'/bootstrap/app.php';
require_once __DIR__.'/database/DB.php';

$db = DB::getInstance();

// $db->insert('mytable',
// 	[
// 		'first_name' => 'Marei',
// 		'last_name' => 'Morsy',
// 		'age'	=> 22
//     ]);
    
//     echo $db->getSQL();

$dbUser = env('APP_NAME');

var_dump($dbUser);


// sessions
// model class



 