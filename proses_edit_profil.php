<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$_SESSION['error'] = array();

// validasi input
if (empty($_POST['full_name'])) {
    $_SESSION['error']['full_name'] = "Nama lengkap tidak boleh kosong.";
} else {
    $namaKosan = $_POST['full_name'];
}

if (empty($_POST['alamat_kosan'])) {
    $_SESSION['error']['alamat_kosan'] = "Alamat kosan tidak boleh kosong.";
} else {
    $alamatKosan = $_POST['alamat_kosan'];
}

$user = new App\User;

$user->update();

$_SESSION['success_message'] = "Data profil berhasil diperbarui.";
