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
//Dilarang mengubah/menghapus copyright ini!
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
<title>Deposit Saldo</title>
<meta name="description" content="Platform Layanan Digital All in One, Berkualitas, Cepat & Aman. Menyediakan Produk & Layanan Pemasaran Sosial Media, Payment Point Online Bank, Layanan Pembayaran Elektronik, Optimalisasi Toko Online, Voucher Game dan Produk Digital."/>

<div class="row">
	<div class="col-12">
		<div class="card card-body">
			<center>
				<h1 class="m-t-0 text-uppercase text-center header-title"><b>Pilih Metode Deposit</b></h1>
			</center>

			<div class="row">
				<div class="col-lg-4 col-sm-12">
					<a class="card card-box text-center text-primary" href="bank-manual" style="height:200px;">
						<center>
							<img src="<?= $config['web']['url'];?>assets/images/pembayaran/kincaimedia-deposit-bank.png" class="img-responsive" width="200"/>
						</center>
						<h4>BANK LOKAL</h4>
					</a>
				</div>
				<div class="col-lg-4 col-sm-12">
					<a class="card card-box text-center text-primary" href="emoney-manual" style="height:200px;">
						<center>
							<img src="<?= $config['web']['url'];?>assets/images/pembayaran/kincaimedia-deposit-emoney.png" class="img-responsive" width="200"/>
						</center>
						<h4>E-MONEY LOKAL</h4>
					</a>
				</div>
				<div class="col-lg-4 col-sm-12">
					<a class="card card-box text-center text-primary" href="pulsa" style="height:200px;">
						<center>
							<img src="<?= $config['web']['url'];?>assets/images/pembayaran/kincaimedia-deposit-pulsa.png" class="img-responsive" width="200"/>
						</center>
						<h4>PULSA TRANSFER</h4>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-12">
					<a class="card card-body text-center text-success" href="epayment-manual" style="height:200px;">
						<center>
							<img src="/assets/images/pembayaran/kincaimedia-deposit-epayment.png" class="img-responsive" width="200"/>
						</center>
						<h4>E-PAYMENT GLOBAL</h4>
					</a>
				</div>
				<div class="col-lg-4 col-sm-12">
					<a class="card card-box text-center text-primary" href="redeem" style="height:200px;">
						<center>
							<img src="<?= $config['web']['url'];?>assets/images/pembayaran/kincaimedia-deposit-voucher.png" class="img-responsive" width="200"/>
						</center>
						<h4>REDEEM VOUCHER</h4>
					</a>
				</div>
			</div>

		</div>
	</div>
</div>

<?php
require ("../lib/footer.php");
?>