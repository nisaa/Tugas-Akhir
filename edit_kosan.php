<?php
session_start();

include "vendor/autoload.php";
include "config/app.php";
include "config/database.php";

$kode_kosan = $_GET['id'];

$kost = App\Kost;
$kos = $kost->fetchDetail($kode_kosan);

$fasilitas_umum = App\PublicFacility;
$f_umum = $fasilitas_umum->fetchDetail($kos->getId());

$fasilitas_terdekat = App\NearbyFacility;
$f_terdekat = $fasilitas_terdekat->fetchDetail($kos->getId());

$fasilitas_kamar = App\RoomFacility;
$f_kamar = $fasilitas_kamar->fetchDetail($kos->getId());

$lokasi = App\Location;
$lok = $lokasi->fetchDetail($kos->getId());

$mayoritas_penghuni = App\Dweller;
$m_penghuni = $mayoritas_penghuni->fetchDetail($kos->getId());

include "views/frontend/edit_kosan.php";
