<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$kost = new App\Kost;
$kosts = $kost->fetchKost($num_result);

$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

include "views/frontend/semua_kosan.php";
