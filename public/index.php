<?php

require_once ('../vendor/autoload.php');

use App\Components\DB;


$database = new DB();
$db = $database->getConnection();
