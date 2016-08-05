<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$kost = new App\Kost;
$kosts = $kost->fetch();

$kos = new App\Kost;
$kosan = $kos->fetchNewDataKost();

include "views/frontend/index.php";
