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

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	if (!isset($_POST['kategori'])) {
		exit("Anda Tidak Memiliki Akses!");
	}
	if (isset($_POST['kategori'])) {
		$post_kategori = $conn->real_escape_string($_POST['kategori']);
		$cek_layanan = $conn->query("SELECT * FROM layanan_sosmed WHERE kategori = '$post_kategori' AND provider = 'KMPANEL' AND status = 'Aktif' ORDER BY harga DESC");
		?>
		<option value="0">Pilih Salah Satu</option>
		<?php
		while ($data_layanan = mysqli_fetch_assoc($cek_layanan)) {
			?>
			<option value="<?php echo $data_layanan['service_id'];?>"><?php echo $data_layanan['layanan'];?></option>
			<?php
		}
	} else {
		?>
		<option value="0">Layanan Tidak Tersedia</option>
		<?php
	}
} else {
	exit("Anda Tidak Memiliki Akses!");
}