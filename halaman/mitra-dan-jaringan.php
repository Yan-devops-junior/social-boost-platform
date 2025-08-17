<?php
if (!isset($_SESSION)) {
	session_start();
}
require '../config.php';
require '../lib/header.php';
?>
<!--Title-->
<title>Kemitraan Usaha dan Jaringan Bisnis <?php echo $data['short_title']; ?></title>
<meta name="description" content="Berikut adalah daftar partner dan jaringan kerjasama kami yang telah terdaftar. Jangan ragu menghubungi kami melalui whatsapp, halaman kontak, atau via email support."/>

<!--OG2-->
<meta content="Informasi Kemitraan Usaha dan Jaringan Bisnis <?php echo $data['short_title']; ?>" property="og:title"/>
<meta content="Berikut adalah daftar partner dan jaringan kerjasama kami yang telah terdaftar. Jangan ragu menghubungi kami melalui whatsapp, halaman kontak, atau via email support." property="og:description"/>
<meta content="<?php echo $data['short_title']; ?> - Informasi Kemitraan Usaha dan Jaringan Bisnis <?php echo $data['short_title']; ?>" property="og:headline"/>
<meta content="<?php echo $config['web']['url'];?>assets/images/halaman/mitra-dan-jaringan.png" property="og:image"/>
<meta content="Informasi Kemitraan Usaha dan Jaringan Bisnis <?php echo $data['short_title']; ?>" property="twitter:title"/>
<meta content="Berikut adalah daftar partner dan jaringan kerjasama kami yang telah terdaftar. Jangan ragu menghubungi kami melalui whatsapp, halaman kontak, atau via email support." property="twitter:description"/>
<meta content="<?php echo $config['web']['url'];?>assets/images/halaman/mitra-dan-jaringan.png" property="twitter:image"/>

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body table-responsive">
				<center><h1 class="m-t-0 text-uppercase text-center header-title"><b>Kemitraan Usaha dan Jaringan Bisnis <?php echo $data['short_title']; ?></b></h1>
					<div class="box-content text-center">
                        <a href="/halaman/mitra-dan-jaringan" title="Kemitraan dan Jaringan <?php echo $data['short_title']; ?>" alt="Kemitraan dan Jaringan <?php echo $data['short_title']; ?>"> <img src="/assets/images/halaman/mitra-dan-jaringan.png" class="img-responsive" style="max-width: 95%;min-width: 250px;"></a>
                    </div><br/>
				</center>
				<?php 
				//Call Mintra dan Jaringan
				$CallPage = Show('halaman', "id = '4'");
				echo "".$CallPage['konten']."";
				?>
			</div>

			<center>
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<h4 class="m-t-0 text-uppercase text-center header-title"><i aria-hidden="true" class="fa fa-rss "></i> <b>Mitra dan Jaringan</b></h4><hr>
							<div class="table-responsive" style="display: inline-grid;">
								<table class="able table-striped table-hovered nowrap mb-0">
									<tbody>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://401xd.com" target="_blank">401XD Group
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://katalog.401xd.com" target="_blank">Katalog 401xd.com
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://safelink.asia" target="_blank">Safelink Asia
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://safelinku.top" target="_blank">Safelinku Top
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://mycoding.net" target="_blank">Project Mycoding.net
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://mycoding.id" target="_blank">Project Mycoding.id
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://blog.kincaimedia.net" target="_blank">Blog Kincaimedia.net
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://teknologi.kincaimedia.net" target="_blank">Teknologi Kincaimedia.net
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://coinmarket.kincaimedia.net" target="_blank">Coinmarket Kincaimedia.net
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://gadget.kincaimedia.net" target="_blank">Gadget Kincaimedia.net
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://traveling.kincaimedia.net" target="_blank">Traveling Kincaimedia.net
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://movie.kincaimedia.net" target="_blank">Movie Kincaimedia.net
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://video.kincaimedia.net" target="_blank">Video Kincaimedia.net
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://kesehatan.kincaimedia.net" target="_blank">Kesehatan Kincaimedia.net
												</a>
											</td>
										</tr>
										<tr>
											<td width="20">
												<div class="btn btn-xs btn-primary"><i class="fas fa-info-circle"></i>
												</div>
											</td>
											<td style="padding-left: 5px;">
												<a href="https://kuliner.kincaimedia.net" target="_blank">Kuliner Kincaimedia.net
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<br/><br/>
							<h3 class="m-t-0 text-uppercase header-title"><b> Kontak Kami</b></h3>
							Jangan ragu menghubungi kami melalui whatsapp (deposit manual & kerjasama), halaman tiket (info produk, layanan & orderan), atau melalui email <?php echo $data['email']; ?>. CS kami siap membantu Anda non stop 24 jam setiap hari. <a href="/halaman/hubungi-kami" title="Kontak <?php echo $data['short_title']; ?>" alt="Kontak <?php echo $data['short_title']; ?>">Hubungi <?php echo $data['short_title']; ?></a>
						</div>
					</div>
				</div>
			</center>
		</div>
	</div>
</div>

</div>
<!-- end container -->
</div>
<!-- end content -->

<?php
require '../lib/footer.php';
?>