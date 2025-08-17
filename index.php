<?php

if (!isset($_SESSION)) {
	session_start();
}
require("config.php");

if (!isset($_SESSION['user'])) {    
	exit(header("Location: ".$config['web']['url']."home"));

} else {
	require("lib/header.php");  
	$sess_username = $_SESSION['user']['username'];
	?>

<?php
include_once 'lib/SEOSecretIDN-meta-homepageonly.php';
?>

<div class="row" id="beranda">
	<div class="col-sm-12 col-lg-6">

		<div class="row">
			<div class="col-12">
				<div class="card text-center">
					<table class="table table-bordered mb-0">
						<tbody>
							<tr>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s1">
										<img src="/rebo/assets/images/produk/sosialmedia.png" height="60" width="60">
										<div>Semua Layanan</div>
									</a>
								</th>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s2">
										<img src="/rebo/assets/images/produk/facebook.png" height="60" width="60">
										<div>Facebook</div>
									</a>
								</th>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s3">
										<img src="/rebo/assets/images/produk/instagram.png" height="60" width="60">
										<div>Instagram</div>
									</a>
								</th>
							</tr>
							<tr>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s4">
										<img src="/rebo/assets/images/produk/tiktok.png" height="60" width="60">
										<div>Tiktok</div>
									</a>
								</th>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s5">
										<img src="/rebo/assets/images/produk/youtube.png" height="60" width="60">
										<div>Youtube</div>
									</a>
								</th>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s6">
										<img src="/rebo/assets/images/produk/sosialmedia.png" height="60" width="60">
										<div>Unggulan</div>
									</a>
								</th>
							</tr>
							<tr>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s7">
										<img src="/rebo/assets/images/produk/threads.png" height="60" width="60">
										<div>Threads</div>
									</a>
								</th>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s8">
										<img src="/rebo/assets/images/produk/linkedin.png" height="60" width="60">
										<div>LinkedIn</div>
									</a>
								</th>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s9">
										<img src="/rebo/assets/images/produk/twitter.png" height="60" width="60">
										<div>Twitter</div>
									</a>
								</th>
							</tr>
							<tr>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s10">
										<img src="/rebo/assets/images/produk/spotify.png" height="60" width="60">
										<div>Spotify</div>
									</a>
								</th>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s11">
										<img src="/rebo/assets/images/produk/telegram.png" height="60" width="60">
										<div>Telegram</div>
									</a>
								</th>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s12">
										<img src="/rebo/assets/images/produk/soundcloud.png" height="60" width="60">
										<div>Soundcloud</div>
									</a>
								</th>
							</tr>
							<tr>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s13">
										<img src="/rebo/assets/images/produk/twitch.png" height="60" width="60">
										<div>Twitch</div>
									</a>
								</th>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s14">
										<img src="/rebo/assets/images/produk/vimeo.png" height="60" width="60">
										<div>Vimeo</div>
									</a>
								</th>
								<th>
									<a href="/rebo/pemesanan/sosial-media-s15">
										<img src="/rebo/assets/images/produk/vk.com.png" height="60" width="60">
										<div>VK.Com</div>
									</a>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-lg-6">
		<div class="row">
			<div class="col-12">
				<div class="card card-body">
					<div class="row">
						<div class="col-6">
							<h5 class="mb-0 text-primary"><i class="ti-android"></i> Android App</h5>
						</div>
						<div class="col-6 text-right">
							<a href="/rebo/halaman/platform-aplikasi" class="btn btn-xs btn-primary"> <i class="fa fa-download"></i> Download </a>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-6">
							<h5 class="mb-0 text-primary" style="margin-top: -10px !important; margin-bottom: -10px !important;"><i class="ti-wallet"></i> Rp.<?php echo number_format($data_user['saldo'],0,',','.'); ?> </h5>
						</div>
						<div class="col-6 text-right" style="margin-top: -10px !important; margin-bottom: -10px !important;">
							<a style="margin-top:2.5px; margin-bottom:2.5px;" href="/pay" class="btn btn-xs btn-primary"> <i class="fas fa-plus-circle"></i> Deposit </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card-box">
					<center><h4 class="header-title text-dark"><i class=" mdi mdi-newspaper "></i><b> BERITA & INFORMASI</h4></b></center>
					<div class="table-responsive" style="display: inline-grid;">
						<table class="able table-striped table-hovered nowrap mb-0">
							<tbody>
								<?php $check_news = $conn->query("SELECT * FROM berita ORDER BY id DESC LIMIT 9"); ?>
								<?php while ($data_news = $check_news->fetch_assoc()) { ?>
									<?php
									if ($data_news['tipe'] == "INFORMASI") $btn = "info";
									if ($data_news['tipe'] == "PERINGATAN") $btn = "warning";
									if ($data_news['tipe'] == "PENTING") $btn = "danger";
									if ($data_news['tipe'] == "LAYANAN") $btn = "success";
									if ($data_news['tipe'] == "PERBAIKAN") $btn = "primary";
									?>
									<tr>
										<td width="20">
											<a href="<?= $config['web']['url']; ?>user/news?id=<?= $data_news['id']; ?>" class="btn btn-xs btn-<?= $btn; ?>"Ganti Password Akun ><i class="fas fa-info-circle"></i>
											</a>
										</td>
										<td style="padding-left: 5px;">
											<a href="<?= $config['web']['url']; ?>user/news?id=<?= $data_news['id']; ?>" class="text-dark"><?= $data_news['subjek']; ?>
											</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="text-center">
							<a href="<?= $config['web']['url']; ?>user/news" class="btn btn-xs btn-primary"Ganti Password Akun > <i class="fa fa-info-circle"></i> Lihat semua</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end row -->
	</div>
</div>

<div class="row" id="monitoring">
    <div class="col-sm-12 col-lg-6">
    	<div class="row">
    		<div class="col-sm-12">
		        <div class="card-box">
		        	<center><h4 class="header-title text-dark"><i class="fa fa-spinner fa-spin text-dark"></i><b> MONITORING SOSMED</h4></b></center>
	                <div class="table-responsive">
	                    <table class="table table-striped table-bordered nowrap m-0">
	                        <thead>
	                            <tr>
	                            	<th>Status <a href="/rebo/halaman/status-order" target="_blank"><b><i class="fa fa-question-circle"></i></b></a></th>
	                                <th>Layanan</th>
	                                <th>Harga</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php 
	                                // start paging config
	                                if (isset($_GET['cari'])) {
	                                    $cari_oid = $conn->real_escape_string(filter($_GET['cari']));
	                                    $cari_status = $conn->real_escape_string(filter($_GET['status']));
	                                    $cek_pesanan = "SELECT * FROM pembelian_sosmed WHERE oid LIKE '%$cari_oid%' AND status LIKE '%$cari_status%' ORDER BY id DESC"; // edit
	                                } else {
	                                    $cek_pesanan = "SELECT * FROM pembelian_sosmed ORDER BY id DESC"; // edit
	                                    }
	                                if (isset($_GET['cari'])) {
	                                    $cari_urut = $conn->real_escape_string(filter($_GET['tampil']));
	                                    $records_per_page = $cari_urut; // edit
	                                } else {
	                                    $records_per_page = 5; // edit
	                                    }

	                                $starting_position = 0;
	                                if(isset($_GET["halaman"])) {
	                                    $starting_position = ($conn->real_escape_string(filter($_GET["halaman"]))-1) * $records_per_page;
	                                    }
	                                    $new_query = $cek_pesanan." LIMIT $starting_position, $records_per_page";
	                                    $new_query = $conn->query($new_query);
	                                // end paging config
	                                while ($data_pesanan = $new_query->fetch_assoc()) {
	                                if ($data_pesanan['status'] == "Pending") {
	                                    $badge = "warning";
	                                } else if ($data_pesanan['status'] == "Partial") {
	                                    $badge = "danger";
	                                } else if ($data_pesanan['status'] == "Error") {
	                                    $badge = "danger";    
	                                } else if ($data_pesanan['status'] == "Processing") {
	                                    $badge = "info";    
	                                } else if ($data_pesanan['status'] == "Success") {
	                                    $badge = "success";    
	                                }
	                            ?>
	                            <tr>
	                                <td><badge class="badge badge-<?php echo $badge; ?>"><?php echo $data_pesanan['status']; ?></badge>
	                                </td>
	                                <td><?php echo $data_pesanan['layanan']; ?></td>
	                                <td>Rp. <?php echo number_format($data_pesanan['harga'],0,',','.'); ?></td>
	                            </tr>
	                            <?php } ?>
	                        </tbody>
	                    </table>
	                </div>
	                <div class="text-center">
	                	<a href="/rebo/panel/monitoring-sosmed" class="btn btn-xs btn-primary"Ganti Password Akun > <i class="fa fa-info-circle"></i> Lainnya </a>
	                </div>
		        </div>
	        </div>
    	</div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="row">
        	<div class="col-sm-12">
	            <div class="card-box">
					<center><h4 class="header-title text-dark"><i class="mdi mdi-cart"></i><b> RIWAYAT PESANAN</h4></b></center>
					<div class="table-responsive">
						<table class="table table-striped table-hovered nowrap mb-0">
							<thead>
								<tr>
									<th>Status</th>
									<th>Layanan</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<?php $cek_pesanan = $conn->query("SELECT * FROM pembelian_sosmed WHERE user = '$sess_username' ORDER BY id DESC LIMIT 5"); ?>
								<?php while ($data_pesanan = $cek_pesanan->fetch_assoc()) { ?>
									<?php if ($data_pesanan['status'] == "Success"){ $color = "success"; }
									else if ($data_pesanan['status'] == "Pending"){ $color = "warning"; }
									else if ($data_pesanan['status'] == "Error"){ $color = "danger"; }
									else if ($data_pesanan['status'] == "Partial"){ $color = "danger"; }
									else if ($data_pesanan['status'] == "Processing"){ $color = "info";
								} ?>
								<tr>
									<td><label class="badge badge-<?= $color; ?>"><?= $data_pesanan['status']; ?></label></td>
									<td><?= $data_pesanan['layanan']; ?></td>
									<td><?= $data_pesanan['harga']; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="text-center">
							<a href="<?= $config['web']['url']; ?>riwayat/pemesanan-sosmed" class="btn btn-xs btn-primary"Ganti Password Akun > <i class="fa fa-info-circle"></i> Lihat semua</a>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

<?php 
}
require 'lib/footer.php';
?>