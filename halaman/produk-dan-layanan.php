<?php
if (!isset($_SESSION)) {
	session_start();
}
require '../config.php';
require '../lib/header.php';
?>
<!--Title-->
<title>Produk PPOB dan Layanan SMM <?php echo $data['short_title']; ?></title>
<meta name="description" content="Berikut adalah produk dan layanan jasa optimasi Sosial Media, Toko Online, Payment Point Online Bank (PPOB), dan berbagai produk virtual yang tersedia di <?php echo $data['title']; ?>."/>

<!--OG2-->
<meta content="Produk PPOB dan Layanan SMM <?php echo $data['short_title']; ?>" property="og:title"/>
<meta content="Berikut adalah Jasa Sosoal Media, Toko Online, Payment Point Online Bank (PPOB), dan berbagai produk virtual yang tersedia di <?php echo $data['title']; ?>." property="og:description"/>
<meta content="<?php echo $data['short_title']; ?> - Produk PPOB dan Layanan SMM <?php echo $data['short_title']; ?>" property="og:headline"/>
<meta content="<?php echo $config['web']['url'];?>assets/images/halaman/produk-dan-layanan.png" property="og:image"/>
<meta content="Produk PPOB dan Layanan SMM <?php echo $data['short_title']; ?>" property="twitter:title"/>
<meta content="Berikut adalah produk dan layanan jasa optimasi Sosial Media, Toko Online, Payment Point Online Bank (PPOB), dan berbagai produk virtual yang tersedia di <?php echo $data['title']; ?>." property="twitter:description"/>
<meta content="<?php echo $config['web']['url'];?>assets/images/halaman/produk-dan-layanan.png" property="twitter:image"/>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body table-responsive">
				<center><h1 class="m-t-0 text-uppercase text-center header-title"><b>Produk PPOB dan Layanan SMM <?php echo $data['short_title']; ?></b></h1>
					<div class="box-content text-center">
                        <a href="/halaman/produk-dan-layanan" title="<?php echo $data['short_title'];?>" alt="<?php echo $data['title'];?>"> <img src="/assets/images/halaman/produk-dan-layanan.png" class="img-responsive" style="max-width: 95%;min-width: 250px;"></a>
                    </div>
	                <?php 
					//Call Produk dan Layanan
					$CallPage = Show('halaman', "id = '3'");
					echo "".$CallPage['konten']."";
					?>
                    Silakan pilih kategori terlebih dahulu
				</center>

				<!--Navigasi v2-->
				<center>
					<div style="min-width: 200px;max-width: 400px;">
						<div class="input-group btn btn-dark">
							<div class="input-group-prepend">
								<span class="btn btn-primary" id="navigasi" ><i aria-hidden="true" class="fa fa-cog fa-spin"></i></span>
							</div>
							<select name="category" class="form-control" id="filter_kategori">
								<option value="Pilih">PILIH KATEGORI</option>
								<option value="SosialMedia1">SOSIAL MEDIA</option>
							</select>
						</div>
					</div>
				</center>

				<div class="tab-content">
					<div id="Pilih" class="tab-pane active">
						<center>
							<h2 class="text-primary header-title" style="text-transform: uppercase;"><b><?php echo $data['title']; ?></b></h2>
							<br/>
							<div class="table-responsive" style="max-width: uppercase;">
								<div class="col-sm-12">
									Platform bisnis yang menyediakan berbagai Layanan Jasa Pemasaran Sosial Media.
									<br/><br/>
									Anda dapat menjadi member, reseller atau agen berbagai jasa optimasi media sosial dan toko online.
								</div>
							</div>
						</center>
					</div>
					<div id="SosialMedia1" class="tab-pane">
						<center>
							<h2 class="text-primary header-title"><b>JASA SOSIAL MEDIA 1</b></h2>
						</center>
						<div style="text-align:left;">
							Sudah coba berbagai cara tapi jumlah <b>followers, subscribe, viewers, liker</b> atau <b>comment</b> di akun kamu nggak nambah-nambah? Coba gunakan tool dari situs <?php echo $data['short_title']; ?> dibawah ini untuk membuatmu populer di sosial media dengan cepat! Kami merekomendasikan tool sosial media terbaik dan organik, serta aman digunakan yang bisa kamu coba. <br/><br/>
							Siapa sih yang nggak mau followers, subscribe, liker atau comment dengan instant dan cepat. Bahkan, kamu mungkin udah kenal dengan aplikasi auto followers gratis di internet untuk dapat ribuan followers gratis tiap hari!<br/><br/>
							Tapi ingat ya, jika <b style="color:red">memasukkan username dan password</b>, akunmu tidak akan aman karena situs yang kamu gunakan mungkin menyimpannya.<br/><br/>
							Nah, disini <?php echo $data['short_title']; ?> memberikan tool <b style="color:green">tanpa harus login akun</b>, <?php echo $data['short_title']; ?> tidak meminta password akun sosial mediamu, tapi hanya <b>username</b> saja jika ingin menambah <b>followers atau subscribe</b>, atau <b>link</b> postinganmu jika ingin menambah <b>like, viewers, atau comment</b> dengan cepat.
						</div>
						<br />
						<?php $cpr = $conn->query("SELECT * FROM kategori_layanan WHERE tipe = 'Sosial Media'"); ?>
						<?php while ($dpr = $cpr->fetch_assoc()) { ?>
							<br/><center><h3 class="header-title">Jasa Sosial Media <?= $dpr['nama']; ?> Permanen dan Aman</h3></center>
							<?php $cprl = $conn->query("SELECT * FROM layanan_sosmed WHERE kategori = '".$dpr['kode']."' AND tipe = 'Sosial Media' AND status = 'Aktif' ORDER BY harga ASC"); ?>
							<div class="table-responsive">
								<table class="table table-bordered table-hovered mb-1">
									<thead>
										<tr>
											<th width="100">ID</th>
											<th width="600">Layanan</th>
											<th width="100">Harga/1000</th>
										</tr>
									</thead>
									<tbody>
										<?php while($dprl = $cprl->fetch_assoc()) { ?>
											<?php
											if ($dprl['status'] == "Aktif") {
												$label = "primary";
											} else {
												$label = "danger";
											}
											?>
											<tr>
												<td><?= $dprl['service_id']; ?></td>
												<td>Jasa <?= $dprl['layanan']; ?> Terbaik & Terpercaya</td>
												<td>Rp.<?= number_format($dprl['harga'],0,',','.'); ?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						<?php } ?>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<!--Filter Kategori Navigasi v2-->
<script>
	$(document).ready(function(){
		$('#filter_kategori').on('change',function(){
			var selected = this.value;

			$('[class="tab-pane active"]').removeClass('active');
			$('#'+selected).addClass('active');
		});
	});
</script>

</div>
<!-- end container -->
</div>
<!-- end content -->

<?php
require '../lib/footer.php';
?>