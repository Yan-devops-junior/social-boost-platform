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
require("../config.php");
require '../lib/session_user.php';
require '../lib/session_login.php';

require("../lib/header.php");
?>

<!--Title-->
<title>Pemesanan Produk & Layanan</title>
<meta name="description" content="Platform Layanan Digital All in One, Berkualitas, Cepat & Aman. Menyediakan Produk & Layanan Pemasaran Sosial Media, Payment Point Online Bank, Layanan Pembayaran Elektronik, Optimalisasi Toko Online, Voucher Game dan Produk Digital."/>

<div class="row" id="pemesanan">
	<div class="col-sm-12 col-lg-12">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<center>
							<h1 class="m-t-0 text-uppercase text-center header-title"><i class="fa fa-shopping-cart"></i><b> Sosial Media</b></h1>
						</center>
						<table class="table table-bordered text-center mb-0">
							<tbody>
								<tr>
									<th>
										<a href="/pemesanan/sosial-media-s1">
											<img src="/assets/images/produk/sosialmedia.png" height="60" width="60">
											<div>Semua Layanan</div>
										</a>
									</th>
									<th>
										<a href="/pemesanan/sosial-media-s2">
											<img src="/assets/images/produk/facebook.png" height="60" width="60">
											<div>Facebook</div>
										</a>
									</th>
									<th>
										<a href="/pemesanan/sosial-media-s3">
											<img src="/assets/images/produk/instagram.png" height="60" width="60">
											<div>Instagram</div>
										</a>
									</th>
								</tr>
								<tr>
									<th>
										<a href="/pemesanan/sosial-media-s4">
											<img src="/assets/images/produk/tiktok.png" height="60" width="60">
											<div>Tiktok</div>
										</a>
									</th>
									<th>
										<a href="/pemesanan/sosial-media-s5">
											<img src="/assets/images/produk/youtube.png" height="60" width="60">
											<div>Youtube</div>
										</a>
									</th>
									<th>
										<a href="/pemesanan/sosial-media-s6">
											<img src="/assets/images/produk/sosialmedia.png" height="60" width="60">
											<div>Unggulan</div>
										</a>
									</th>
								</tr>
								<tr>
									<th>
										<a href="/pemesanan/sosial-media-s7">
											<img src="/assets/images/produk/threads.png" height="60" width="60">
											<div>Threads</div>
										</a>
									</th>
									<th>
										<a href="/pemesanan/sosial-media-s8">
											<img src="/assets/images/produk/linkedin.png" height="60" width="60">
											<div>LinkedIn</div>
										</a>
									</th>
									<th>
										<a href="/pemesanan/sosial-media-s9">
											<img src="/assets/images/produk/twitter.png" height="60" width="60">
											<div>Twitter</div>
										</a>
									</th>
								</tr>
								<tr>
									<th>
										<a href="/pemesanan/sosial-media-s10">
											<img src="/assets/images/produk/spotify.png" height="60" width="60">
											<div>Spotify</div>
										</a>
									</th>
									<th>
										<a href="/pemesanan/sosial-media-s11">
											<img src="/assets/images/produk/telegram.png" height="60" width="60">
											<div>Telegram</div>
										</a>
									</th>
									<th>
										<a href="/pemesanan/sosial-media-s12">
											<img src="/assets/images/produk/soundcloud.png" height="60" width="60">
											<div>Soundcloud</div>
										</a>
									</th>
								</tr>
								<tr>
									<th>
										<a href="/pemesanan/sosial-media-s13">
											<img src="/assets/images/produk/twitch.png" height="60" width="60">
											<div>Twitch</div>
										</a>
									</th>
									<th>
										<a href="/pemesanan/sosial-media-s14">
											<img src="/assets/images/produk/vimeo.png" height="60" width="60">
											<div>Vimeo</div>
										</a>
									</th>
									<th>
										<a href="/pemesanan/sosial-media-s15">
											<img src="/assets/images/produk/vk.com.png" height="60" width="60">
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
	</div>
</div>

<?php
require ("../lib/footer.php");
?>