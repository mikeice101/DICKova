<?php

require_once ('../vendor/autoload.php');

use App\Components\DB;
use App\Routes\Route;


$database = new DB();
$db = $database->getConnection();
Route::index();