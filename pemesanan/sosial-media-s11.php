<?php
if (!isset($_SESSION)) {
	session_start();
}
require '../config.php';
require '../lib/session_user.php';
if (isset($_POST['pesan'])) {
	require '../lib/session_login.php';
	$post_kategori = $conn->real_escape_string(trim(filter($_POST['kategori'])));
	$post_layanan = $conn->real_escape_string(trim(filter($_POST['layanan'])));
	$post_jumlah = $conn->real_escape_string(trim(filter($_POST['jumlah'])));
	$post_target = $conn->real_escape_string(trim(filter($_POST['target'])));
	$post_comments = $_POST['comments'];

	$cek_layanan = $conn->query("SELECT * FROM layanan_sosmed WHERE service_id = '$post_layanan' AND status = 'Aktif'");
	$data_layanan = mysqli_fetch_assoc($cek_layanan);

	$cek_harga = $data_layanan['harga'] / 1000;
	$cek_profit = $data_layanan['profit'] / 1000;
	$hitung = count(explode(PHP_EOL, $post_comments));
	$replace = str_replace("\r\n",'\r\n', $post_comments);
	if (!empty($post_comments)) {
		$post_jumlah = $hitung;
	} else {
		$post_jumlah = $post_jumlah;
	}
	
	if (!empty($post_comments)) {
		$harga = $cek_harga*$hitung;
		$profit = $cek_profit*$hitung;
	} else {
		$harga = $cek_harga*$post_jumlah;
		$profit = $cek_profit*$post_jumlah;
	}

	$order_id = acak_nomor(3).acak_nomor(4);
	$provider = $data_layanan['provider'];

	$cek_provider = $conn->query("SELECT * FROM provider WHERE code = '$provider'");
	$data_provider = mysqli_fetch_assoc($cek_provider);

	$cek_pesanan = $conn->query("SELECT * FROM pembelian_sosmed WHERE user = '$sess_username' AND target = '$post_target' AND status = 'Pending' AND provider = '$provider'");
	$data_pesanan = mysqli_fetch_assoc($cek_pesanan);

	$start_count = 0;

	if (!$post_target || !$post_layanan || !$post_kategori) {
		$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Order Gagal', 'pesan' => 'Lengkapi Bidang Berikut:<br/> - Kategori <br /> - Layanan <br /> - Target');

	} else if (mysqli_num_rows($cek_layanan) == 0) {
		$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Order Gagal', 'pesan' => 'Layanan Tidak Tersedia');

	} else if (mysqli_num_rows($cek_provider) == 0) {
		$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Order Gagal', 'pesan' => 'Server Sedang Maintenance');

	} else if ($post_jumlah < $data_layanan['min']) {
		$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Order Gagal', 'pesan' => 'Jumlah Minimal Order '.number_format($data_layanan['min'],0,',','.').'.');

	} else if ($post_jumlah > $data_layanan['max']) {
		$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Order Gagal', 'pesan' => 'Jumlah Maksimal Order '.number_format($data_layanan['max'],0,',','.').'.');

	} else if ($data_user['saldo'] < $harga) {
		$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Order Gagal', 'pesan' => 'Saldo Tidak Mencukupi');

	//Post pesanan
	} else {

		if ($provider == "MANUAL") {
			$api_postdata = "";
		} else if ($provider == "KMPANEL") {
			if ($post_comments == false) {
				$postdata = "key=".$apiprovider."&action=add&service=".$data_layanan['provider_id']."&link=$post_target&quantity=$post_jumlah";
			} else if ($post_comments == true) {
				$postdata = "key=".$apiprovider."&action=add&service=".$data_layanan['provider_id']."&link=$post_target&comments=$post_comments";
			}
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://panel.kincaimedia.net/api/v1");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$chresult = curl_exec($ch);
			curl_close($ch);
			$json_result = json_decode($chresult, true);
		} else {
			die("Layanan Tidak Tersedia");
		}
		if ($provider == "KMPANEL" AND $json_result['status'] == false) {
			$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Order Gagal', 'pesan' => 'Pemesanan Ditutup. Coba Lagi 15 Menit Berikutnya.');
		} else {
			if ($provider == "KMPANEL") {
				$provider_oid = $json_result['order'];
			}

			if ($conn->query("INSERT INTO pembelian_sosmed VALUES ('','$order_id', '$provider_oid', '$sess_username', '".$data_layanan['layanan']."', '$post_target', '$post_jumlah', '0', '$start_count', '$harga', '$profit', 'Pending', '$date', '$time', '$provider', 'Website', '0')") == true) {
				$conn->query("UPDATE users SET saldo = saldo - $harga, pemakaian_saldo = pemakaian_saldo + $harga WHERE username = '$sess_username'");
				$conn->query("INSERT INTO history_saldo VALUES ('', '$sess_username', 'Pengurangan Saldo', '$harga', 'Order ID $order_id Sosial Media Paket', '$date', '$time')");	   				
				$jumlah = number_format($post_jumlah,0,',','.');
				$harga2 = number_format($harga,0,',','.');
				$_SESSION['hasil'] = array(
					'alert' => 'success',
					'judul' => 'Order Berhasil',
					'pesan' => '<br />
					-<b>Order ID: </b> '.$order_id.'<br />
					-<b>Layanan: </b> '.$data_layanan['layanan'].'<br />
					-<b>Jumlah: </b> '.$jumlah.'<br />
					-<b>Harga: </b> Rp '.$harga2.'');
			} else {
				$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Order Gagal', 'pesan' => 'Pemesanan Ditutup. Coba Lagi 30 Menit Berikutnya.');
			}
		}
	}
}

require("../lib/header.php");
?>

<!--Title-->
<title>SOSIAL MEDIA PAKET 11</title>
<meta name="description" content="Platform Layanan Digital All in One, Berkualitas, Cepat & Aman. Menyediakan Produk & Layanan Pemasaran Sosial Media, Payment Point Online Bank, Layanan Pembayaran Elektronik, Optimalisasi Toko Online, Voucher Game dan Produk Digital."/>

<div class="row">
	<div class="col-md-7">
		<div class="card">
			<div class="card-body">
				<h4 class="text-uppercase text-center header-title"><i class="mdi mdi-instagram mr1 text-primary"></i><b> SOSIAL MEDIA PAKET 11</b></h4><hr>
				<b><div style="text-align:center;"><a href="<?php echo $config['web']['url'];?>pemesanan">MENU<a/></div></b><p/>
					
				<form class="form-horizontal" method="POST">
					<input type="hidden" name="csrf_token" value="<?php echo $config['csrf_token'] ?>">   										    
					<div class="form-group">
						<label class="col-md-12 control-label">Kategori *</label>
						<div class="col-md-12">
							<select class="form-control" id="kategori" name="kategori">
								<option value="">Pilih Salah Satu</option>
								<?php
								$cek_kategori = $conn->query("SELECT * FROM kategori_layanan WHERE tipe = 'Sosial Media' AND nama LIKE 'Telegram%' ORDER BY id ASC");
								while ($data_kategori = $cek_kategori->fetch_assoc()) {
									?>
									<option value="<?php echo $data_kategori['kode']; ?>"><?php echo $data_kategori['nama']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-12 control-label">Layanan *</label>
						<label class="col-md-12 control-label text-primary"><small>Rekomendasi Terbaik di 3 Layanan Teratas</small></label>
						<div class="col-md-12">
							<select class="form-control" name="layanan" id="layanan">
								<option value="0">Pilih Kategori</option>
							</select>
						</div>
					</div>

					<div id="catatan">
					</div>

					<div class="form-group">
						<label class="col-md-12 control-label">Target *</label>
						<div class="col-md-12">
							<input type="text" name="target" class="form-control" placeholder="Username / Link">
						</div>
					</div>

					<div id="show1">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label class="col-md-12 col-form-label">Jumlah *</label>
								<div class="col-md-12">
									<input type="number" name="jumlah" class="form-control" placeholder="Jumlah" onkeyup="get_totalshow1(this.value).value;">
								</div>
							</div>
							<input type="hidden" id="rate" value="0">
							<div class="form-group col-md-6">
								<label class="col-md-12 col-form-label">Total</label>
								<div class="col-md-12">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Rp </span>
										</div>
										<input type="number" class="form-control" id="totalshow1" readonly>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="show2" style="display: none;">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label class="col-md-12 col-form-label">Komentar</label>
								<div class="col-md-12">
									<textarea class="form-control" name="comments" id="comments" placeholder="Pisahkan setiap baris komentar dengan enter"></textarea>
								</div>
							</div>
							<input type="hidden" id="rate" value="0">
							<div class="form-group col-md-6">
								<label class="col-form-label">Total</label>
								<div class="col-md-12">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Rp </span>
										</div>
										<input type="number" class="form-control" id="totalshow2" readonly>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12"> <button type="submit" class="pull-right btn btn-block btn--md btn-primary waves-effect w-md waves-light" name="pesan"><i class="mdi mdi-cart"></i>Order</button> </div>

				</form>

				<div style="text-align: center;">
					<br/>Dengan melakukan order, Anda telah memahami dan menyetujui <a href="#informasiorder"><b>Syarat & Ketentuan</b></a>, serta mengikuti <a href="#informasiorder"><b>Cara Melakukan Order</b></a> sesuai panduan.
				</div>

			</div>
		</div> 
	</div> 
	<!-- end col -->

	<!-- INFORMASI ORDER -->
	<div class="col-md-5" id="informasiorder">
		<div class="card">
			<div class="card-body">

				<center><h4 class="m-t-0 text-uppercase header-title"><i aria-hidden="true" class="fa fa-info-circle"></i><b> Informasi Order</h4></b>
					Gunakan koneksi internet yang stabil agar daftar layanan sinkron dengan kategori yang dipilih.<hr>
				</center>

				<!--KETENTUAN-->
				<div class="table-responsive">
					<center><i aria-hidden="true" class="fa fa-check-circle"></i><b> Syarat & Ketentuan</b></center>
					<ol class="list-p">
						<li>Mengikuti cara order di bawah.</li>
						<li>Memahami & mengikuti <a href="#catatan"><b><u>Deskripsi</u></b></a> layanan.</li>
						<li>Target / tujuan sesuai <b><a href="/halaman/target-pesanan" target="_blank">Contoh Target Pesanan</a></b>.</li>
						<li>Kesalahan input & order pending / processing tidak dapat di cancel.</li>
						<li>Order baru untuk layanan & target yang sama, tunggu status sebelumnya <span class="badge badge-success"><b>Success</b></span>.</li>
						<li>Memahami & mengikuti <b><a href="/halaman/status-order" target="_blank">Informasi Status Order</a></b>.</li>
						<li>Memahami & mengikuti <b><a href="/halaman/ketentuan-layanan" target="_blank">Ketentuan Layanan</a></b> & <b><a href="/halaman/pertanyaan-umum" target="_blank">FAQs</a></b>.</li>
					</ol>
				</div>

				<!--CARA-->
				<div class="table-responsive">
					<center><i aria-hidden="true" class="fa fa-check-circle"></i><b> Cara Melakukan Order</b></center>
					<ol class="list-p">
						<li>Pilih salah satu kategori & layanan.</li>
						<li>Masukkan username / url pada target (<b><a href="/halaman/target-pesanan" target="_blank">Lihat Contoh</a></b>).</li>
						<li>Masukkan jumlah pemesanan</li>
						<li>Klik <span class="badge badge-primary"><b>Order</b></span> untuk memesan.</li>
					</ol>
				</div>

			</div>
		</div>
	</div>
	<!-- INFORMASI ORDER -->
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#kategori").change(function() {
			var kategori = $("#kategori").val();
			$.ajax({
				url: '<?php echo $config['web']['url'];?>ajax/layanan_sosmed.php',
				data: 'kategori=' + kategori,
				type: 'POST',
				dataType: 'html',
				success: function(msg) {
					$("#layanan").html(msg);
				}
			});
		});
		$("#layanan").change(function() {
			var layanan = $("#layanan").val();
			$.ajax({
				url: '<?php echo $config['web']['url'];?>ajax/catatan_sosmed.php',
				data: 'layanan=' + layanan,
				type: 'POST',
				dataType: 'html',
				success: function(msg) {
					$("#catatan").html(msg);
				}
			});
			$.ajax({
				url: '<?php echo $config['web']['url'];?>ajax/rate_sosmed.php',
				data: 'layanan=' + layanan,
				type: 'POST',
				dataType: 'html',
				success: function(msg) {
					$("#rate").val(msg);
				}
			});
		});
	});
	document.getElementById("show1").style.display = "none";
	$("#layanan").change(function() {
		var selectedCountry = $("#layanan option:selected").text();
		if (selectedCountry.indexOf('Like Komentar') !== -1 || selectedCountry.indexOf('like komentar') !== -1) {
			document.getElementById("show1").style.display = "block";
			document.getElementById("show2").style.display = "none";
		} else if (selectedCountry.indexOf('Komentar') !== -1 || selectedCountry.indexOf('komentar') !== -1) {
			document.getElementById("show1").style.display = "none";
			document.getElementById("show2").style.display = "block";
		} else {
			document.getElementById("show1").style.display = "block";
			document.getElementById("show2").style.display = "none";
		}
	});
	$(document).ready(function(){
		$("#comments").on("keypress", function(a){
			if(a.which == 13) {
				var baris = $("#comments").val().split(/\r|\r\n|\n/).length;
				var rates = $("#rate").val();
				var calc = eval(baris)*rates;
				console.log(calc)
				$('#totalshow2').val(calc);
			}
		});
	});
	function get_totalshow1(quantity) {
		var rate = $("#rate").val();
		var result = eval(quantity) * rate;
		$('#totalshow1').val(result);
	}
</script>

<?php
require ("../lib/footer.php");
?>