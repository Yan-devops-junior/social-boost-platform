<?php
//
//SC    :   Blackexpo SMM
//Dev	:	BlackRose
//By	:	401XD Group Indonesia
//Email	:	401xdssh@gmail.com
//
//▪ http://mycoding.id
//▪ http://youtube.com/c/MyCodingXD
//▪ http://instagram.com/MyCodingXD
//▪ http://facebook.com/MyCodingXD
//
//Hak cipta 2022
//Syarat dan ketentuan berlaku
//Dilarang menjual/membagikan script Blackexpo SMM. Serta mengubah/menghapus copyright ini!
//

if (!isset($_SESSION)) {
	session_start();
}
require_once '../config.php';

if (!isset($_SESSION['user'])) {
	die("Anda Tidak Memiliki Akses!");
}

if (isset($_POST['layanan'])) {
	$post_layanan = $conn->real_escape_string($_POST['layanan']);
	$cek_layanan = $conn->query("SELECT * FROM layanan_sosmed WHERE service_id = '$post_layanan' AND status = 'Aktif'");
	if (mysqli_num_rows($cek_layanan) == 1) {
		$data_layanan = mysqli_fetch_assoc($cek_layanan);
		$result = $data_layanan['harga'] / 1000;
		echo $result;
	} else {
		die("0");
	}
} else {
	die("0");
}