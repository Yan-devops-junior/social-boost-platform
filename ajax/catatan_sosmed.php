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
		?>
		<div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>    
			<i class="mdi mdi-alert-box"></i>
			<b>Deskripsi</b><br />
			• Akun / Channel / Subscribe / Post Jangan di Private (Wajib Publik).<br />
			• Baca <a href="#informasiorder"><font color="FFFFFF"><b><u>Informasi Order</u></b></font></a>.<br /><br />

			<span><?= nl2br($data_layanan['catatan']); ?></span><hr>

			<b>Min. Order:</b> <?php echo($data_layanan['min']); ?><br />
			<b>Max. Order:</b> <?php echo($data_layanan['max']); ?><br />
			<b>Harga/1000:</b> Rp <?php echo($data_layanan['harga']); ?>
		</div>

		<?php
	} else {
		?>
		<div class="alert alert-icon alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<i class="mdi mdi-block-helper"></i>
			<b>Gagal :</b> Service Tidak Ditemukan
		</div>
		<?php
	}
} else {
	?>
	<div class="alert alert-icon alert-danger alert-dismissible fade in" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<i class="mdi mdi-block-helper"></i>
		<b>Gagal : </b> Terjadi Kesalahan.
	</div>
	<?php
}