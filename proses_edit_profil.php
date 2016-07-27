<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$user_id = $_GET['id'];

$user = new App\User;

$data['status'] = $_SESSION['logged_in_user']['status'];
$data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
$data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
$data['address'] = isset($_POST['address']) ? $_POST['address'] : '';
$data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
$data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';

// upload image
if (isset($_POST['gambar'])) {
    $idUnik = sha1(uniqid(mt_rand(), true));
    $ekstensi = end((explode('.', $_FILES['gambar']['name'])));
    $namaFile = $_FILES['gambar']['name'];
    $foto = $namaFile;
    $data['picture'] = $_POST['fullname'] . '-' . $idUnik . '.' . $ekstensi;

    $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'resources/images/' . $data['picture']);
} else {
    $data['picture'] = '';
}
var_dump($data);

echo $user->update($user_id, $data);

$_SESSION['success_message'] = "Data profil berhasil diperbarui.";

header('Location: ' . $siteUrl . 'profil.php');
