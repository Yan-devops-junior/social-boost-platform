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

$pembayaran = $conn->real_escape_string($_POST['pembayaran']);
$nominal = $conn->real_escape_string($_POST['jumlah']);
$cek_rate = $conn->query("SELECT * FROM metode_depo WHERE id = '$pembayaran'");
$cek_hasil = $cek_rate->fetch_array();
$menghitung = $nominal * $cek_hasil['rate'];
echo $result;
?>