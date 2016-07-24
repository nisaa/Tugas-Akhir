<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$user = new App\User;

$user->update();

$_SESSION['success_message'] = "Data profil berhasil diperbarui.";
