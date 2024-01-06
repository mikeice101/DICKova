<?php
require_once ('../vendor/autoload.php');

use App\Developer;

$database = new Database();
$db = $database->getConnection();
