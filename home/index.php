<?php
	session_start();
	require '../config.php';
	require '../lib/database.php';

	if (isset($_SESSION['user'])) {
	    header("Location: ".$config['web']['url']);
	} else {

	?>

	<!DOCTYPE html>
	<html lang="id-ID" xml:lang="id-ID">

	    <head>

            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title> RealBoost ID<?php /*echo $data['title'];*/ ?></title>

            <?php
            include_once '../lib/SEOSecretIDN-meta-all.php';
            include_once '../lib/SEOSecretIDN-meta-homepageonly.php';
            ?>

            <!--cssfont-->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet"/>

            <!--css-->
            <link href="/rebo/assets/css/scroll.css?v<?php echo $versi; ?>" rel="stylesheet"/>
            <link href="css/bootstrap.min.css?v<?php echo $versi; ?>" rel="stylesheet"/>
            <link href="css/animate.css?v<?php echo $versi; ?>" rel="stylesheet"/>
            <link href="css/meanmenu.css?v<?php echo $versi; ?>" rel="stylesheet"/>
            <link href="css/magnific-popup.min.css?v<?php echo $versi; ?>" rel="stylesheet"/>
            <link href="css/owl.carousel.min.css?v<?php echo $versi; ?>" rel="stylesheet"/>
            <link href="css/odometer.css?v<?php echo $versi; ?>" rel="stylesheet"/>
            <link href="css/slick.css?v<?php echo $versi; ?>" rel="stylesheet"/>
            <link href="css/style.css?v<?php echo $versi; ?>" rel="stylesheet"/>
            <link href="css/responsive.css?v<?php echo $versi; ?>" rel="stylesheet"/>
            <link href="css/footer.css?v<?php echo $versi; ?>" rel="stylesheet"/>

	    </head>

	    <body>

	        <!--HEADER-->
	        <header id="header">
	        	<div class="startp-mobile-nav fixed">
	        		<div class="logo">
	        			<a href="index.php"><img src="/rebo/assets/images/kincaimedia/RB.png?v<?php echo $versi; ?>" class="home-logo" title="Realboost ID<?php /*echo $data['short_title'];*/ ?>" alt="<?php echo $data['short_title']; ?>"></a>
	        		</div>
	        	</div>
	        	<div class="startp-nav fixed">
	        		<div class="container">
	        			<nav class="navbar navbar-expand-md navbar-light">
	        				<a class="navbar-brand" href="index.php"><img src="/rebo/assets/images/kincaimedia/rebo.png?v<?php echo $versi; ?>" style="border-radius :5px;" class="home-logo" title="RealBoost ID<?php /*echo $data['short_title'];*/ ?>" alt="<?php echo $data['short_title']; ?>"></a>
	        				<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
	        					<ul class="navbar-nav nav ml-auto">
	        						<li class="nav-item"><a href="#home"><i class="fa fa-home"></i> HOME</a></li>
	        						<li class="nav-item"><a href="#panel"><i class="fa fa-check-circle"></i> ABOUT</a></li>
	        						<li class="nav-item"><a href="#aplikasi"><i class="fab fa-android"></i> DOWNLOAD</a></li>
	        						<li class="nav-item"><a href="#fitur"><i class="fa fa-star"></i> FEATURES</a></li>
	        						<li class="nav-item"><a href="/halaman/daftar-harga" target="_blank" title="Produk dan Layanan <?php echo $data['short_title']; ?>" alt="Produk dan Layanan <?php echo $data['short_title']; ?>"><i class="fa fa-shopping-cart"></i> SERVICES</a></li>
	        						<li class="nav-item"><a href="#faqs"><i class="fa fa-question-circle"></i> FAQS</a></li>
	        						<li class="nav-item"><a href="#kontak"><i class="fa fa-comments"></i> CONTACT US</a></li>
	        					</ul>
	        				</div>
	        				<div class="others-option m">
	        					<a href="/rebo/halaman/platform-aplikasi" target="_blank" class="btn btn-primary" title="Download <?php echo $data['short_title']; ?>" alt="Download <?php echo $data['short_title']; ?>"><i class="fa fa-download"></i> DOWNLOAD</a>
	        				</div>
	        			</nav>
	        		</div> 
	        	</div>
	        </header>

	        <!--BERANDA-->
	        <div class="main-banner" id="home">
	        	<div class="d-table">
	        		<div class="d-table-cell c">
	        			<div class="container">
	        				<div class="row h-100 justify-content-center align-items-center">
	        					<div class="col-lg-5">
	        						<div class="hero-content text-center text-white">
	        							<p>
	        								<img src="/rebo/assets/images/kincaimedia/RB.png?v<?php echo $versi; ?>" class="img-fluid" width="256px" title="<?php echo $data['short_title']; ?>" alt="<?php echo $data['short_title']; ?>" style="border-radius: 35px;">
	        							</p>
	        							<h1 class="text-white" style="text-transform: uppercase;">REALBOOST ID<?php /*echo $data['short_title']; */ ?></h1>
	        							<p>
	        								<div class="text-white">
	        									<i class="fa fa-list-ul"></i> Lihat <a href="/rebo/halaman/produk-dan-layanan" target="_blank" title="Produk dan Layanan <?php echo $data['short_title']; ?>" alt="Produk dan Layanan <?php echo $data['short_title']; ?>"><u style="color: #ffffff"><?php echo $total_layanan; ?>+ Produk & Jasa</u></a>.
	        								</div>
	        							</p>
	        							<p>
	        								<a href="/auth/login" class="btn btn-primary" title="Login <?php echo $data['short_title']; ?>" alt="Login <?php echo $data['short_title']; ?>"><i class="fa fa-sign-in-alt"></i> MASUK</a>
	        								<a href="/auth/register" class="btn btn-primary" title="Register <?php echo $data['short_title']; ?>" alt="Register <?php echo $data['short_title']; ?>"><i class="fa fa-user-plus"></i> DAFTAR</a>
	        							</p>
	        							<i class="fa fa-check-circle"></i> Powered by Realboost ID <?php /*echo $data['short_title'];*/ ?>
	        						</div>
	        					</div>
	        					<div class="col-lg-6">
	        						<img src="/rebo/assets/images/halaman/panel.png" class="img-fluid" title="<?php echo $data['short_title']; ?>" alt="<?php echo $data['short_title']; ?>">
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="shape1"><img src="images/shape1.png" alt="shape"></div>
	        	<div class="shape2 rotateme"><img src="images/shape2.svg" alt="shape"></div>
	        	<div class="shape3"><img src="images/shape3.svg" alt="shape"></div>
	        	<div class="shape4"><img src="images/shape4.svg" alt="shape"></div>
	        	<div class="shape5"><img src="images/shape5.png" alt="shape"></div>
	        	<div class="shape6 rotateme"><img src="images/shape4.svg" alt="shape"></div>
	        	<div class="shape7"><img src="images/shape4.svg" alt="shape"></div>
	        	<div class="shape8 rotateme"><img src="images/shape2.svg" alt="shape"></div>
	        </div>

	        <!--PANEL-->
	        <section class="boxes-area" id="panel">
	        	<div class="container">
	        		<div class="section-title">
	        			<h2><i class="fa fa-star"></i> RealBoost ID<?php /*echo $data['short_title']; */?></h2>
	        			<div class="bar"></div>
	        			<p>
	        				Anda dapat menjadi member, reseller atau agen berbagai jasa pembayaran yang terkoneksi PPOB, serta jasa optimasi media sosial dan toko online. Tersedia produk PPOB multi provider, e-money, voucher, pulsa, dan jasa exchanger.
	        			</p>
	        		</div>
	        		<div class="row">
	        			<div class="boxes-slides">
	        				<div class="col-lg-12 col-md-12">
	        					<div class="single-box bg-005CAA">
	        						<div class="icon">
	        							<i data-feather="airplay"></i>
	        						</div>
	        						<h3>Produk Digital Terkoneksi PPOB</h3>
	        						<p>Tersedia Produk Digital sistem PPOB untuk transaksi E-Money (Gojek, Grab, Dana, Ovo & Steam Wallet), Voucher All Games, Token PLN, Pulsa & Paket Internet, Telepon & SMS, hingga Produk Operator Global.</p>
	        					</div>
	        				</div>

	        				<div class="col-lg-12 col-md-12">
	        					<div class="single-box bg-005CAA">
	        						<div class="icon">
	        							<i data-feather="zap"></i>
	        						</div>
	        						<h3>Optimasi Sosmed & Toko Online</h3>
	        						<p>Tersedia layanan Sosial Media Marketing All-In-One untuk optimasi Youtube, Facebook, Instagram, Twitter, Pinterest, Tiktok dan WhatsApp. Juga terdapat layanan toko online untuk Shopee, Tokopedia dan Bukalapak.</p>
	        					</div>
	        				</div>

	        				<div class="col-lg-12 col-md-12">
	        					<div class="single-box bg-005CAA">
	        						<div class="icon">
	        							<i data-feather="check"></i>
	        						</div>
	        						<h3>Jasa Exchanger & Perbankan</h3>
	        						<p>Layanan exchange tersedia untuk pertukaran (jual/beli) dollar, cryptocurrency, dan voucher indodax. Sedangkan pada jasa perbankan hanya E-Money Changer dan BRI Brizzi. Tersedia bagi Member, Reseller & Agen.</p>
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </section>

	        <!--APLIKASI-->
	        <section class="services-area-two bg-f5f5f5" id="aplikasi">
	        	<div class="container">
	        		<div class="section-title">
	        			<h2><i class="fab fa-android" style="color:#a4c639"></i> Aplikasi RealBoost ID<?php /*echo $data['short_title']; */?></h2>
	        			<div class="bar"></div>
	        			<p>Selain menyediakan platform berbasis web, RealBoost ID<?php /*echo $data['short_title']; */?> juga bisa di akses melalui aplikasi mobile dan tablet.</p>
	        			<img src="/rebo/assets/images/halaman/platform-aplikasi.png" class="img-fluid" title="Download <?php echo $data['short_title']; ?>" alt="Download <?php echo $data['short_title']; ?>">
	        			<p>Dapatkan <?php echo $total_layanan; ?>+ Produk & Layanan dalam 1 Aplikasi.</p>
	        			<a href="/rebo/halaman/platform-aplikasi" class="btn btn-primary" title="Aplikasi <?php echo $data['short_title']; ?>" alt="Aplikasi <?php echo $data['short_title']; ?>"><i class="fa fa-download" style="color:#a4c639"></i> Download</a>
	        		</div>
	        	</div>
	        </section>

	        <!--FITUR-->
	        <section class="services-area ptb-50 bg-f5f5f5" id="fitur">
	        	<div class="container">
	        		<div class="row h-100 justify-content-center align-items-center">
	        			<div class="col-lg-6 col-md-12 services-content">
	        				<div class="section-title">
	        					<h2><i class="fa fa-star"></i> Fitur RealBoost ID<?php /*echo $data['short_title'];*/ ?></h2>
	        					<div class="bar"></div>
	        					<p>RealBoost ID<?php /*echo $data['short_title'];*/ ?> selalu meningkatkan kualitas layanan dan memberikan fitur terbaik yang bisa dengan mudah Anda gunakan.</p>
	        				</div>

	        				<div class="row">
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="check"></i> Keamanan Transaksi
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="chevrons-up"></i> Real Boosting<?php /*echo $data['short_title'];*/ ?> Automation
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="plus"></i> Payment Point Online Bank
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="thumbs-up"></i> Voucher Games Termurah
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="corner-right-up"></i> Tersedia Voucher Indodax
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="grid"></i> Terintegrasi API & H2H
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="zap"></i> Cepat & Mudah Digunakan
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="trending-up"></i> Metode Deposit Lengkap
	        						</div>
	        					</div>
	        				</div>
	        			</div>
	        			<div class="col-lg-6 col-md-12">
	        				<br/><img src="/rebo/assets/images/halaman/produk-dan-layanan.png" class="img-fluid" title="Fitur RealBoost ID<?php /*echo $data['short_title'];*/ ?>" alt="Fitur <?php echo $data['short_title']; ?>">
	        			</div>
	        		</div>
	        	</div>
	        </section>
	        <!--FITUR DESC-->
	        <section class="services-area-two">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<div class="icon">
	        						<i data-feather="check"></i>
	        					</div>
	        					<h3>Keamanan Transaksi</h3>
	        					<p>Perlindungan keamanan adalah prioritas, kami menjamin privasi data dan transaksi divalidasi & disetujui pengguna sendiri.</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<div class="icon">
	        						<i data-feather="chevrons-up"></i>
	        					</div>
	        					<h3>Real Boosting<?php /*echo $data['short_title'];*/ ?> Automation</h3>
	        					<p>Fitur otomatisasi dengan AI diterapkan untuk mempopulerkan bisnis Anda di Sosial Media dan Toko Online di Marketplace.</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<div class="icon">
	        						<i data-feather="plus"></i>
	        					</div>
	        					<h3>Payment Point Online Bank</h3>
	        					<p>Setiap pesanan di proses secara Otomatis dan Instan dengan PPOB, langsung pada Server utama kami tanpa penundaan.</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<div class="icon">
	        						<i data-feather="thumbs-up"></i>
	        					</div>
	        					<h3>Voucher Games Termurah</h3>
	        					<p>Anda gamers sejati? Mau beli voucher game harga murah dengan cara yang mudah? Yuk dapatkan voucher game terlengkap disini.</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<div class="icon">
	        						<i data-feather="corner-right-up"></i>
	        					</div>
	        					<h3>Tersedia Voucher Indodax</h3>
	        					<p>Dapatkan voucher indodax exchange tanpa fee. Tersedia metode pembayaran melalui pulsa, paypal, e-money & bank.</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<div class="icon">
	        						<i data-feather="grid"></i>
	        					</div>
	        					<h3>Terintegrasi API & H2H</h3>
	        					<p>Mendukung transaksi melalui Application Programming Interface (API). Cocok untuk bisnis dengan sistem Host to Host (H2H).</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<div class="icon">
	        						<i data-feather="zap"></i>
	        					</div>
	        					<h3>Cepat & Mudah Digunakan</h3>
	        					<p>Transaksi dapat diakses dengan cepat & tampilan yang responsive semua perangkat, tersedia App Mobile Android yang mudah digunakan.</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<div class="icon">
	        						<i data-feather="trending-up"></i>
	        					</div>
	        					<h3>Metode Pembayaran Lengkap</h3>
	        					<p>Kami mendukung berbagai metode pembayaran, mulai dari pulsa transfer, e-money, bank, e-payment, hingga cryptocurrency.</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<div class="icon">
	        						<i data-feather="thumbs-up"></i>
	        					</div>
	        					<h3>Produk Resmi dan Legal</h3>
	        					<p>Kami hanya menyediakan produk digital resmi dan legal digunakan, terkoneksi dengan berbagai perusahaan penyedia yang resmi di indonesia.</p>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </section>

	        <!--KATEGORI-->
	        <section class="services-area ptb-50 bg-f5f5f5">
	        	<div class="container">
	        		<div class="row h-100 justify-content-center align-items-center">
	        			<div class="col-lg-6 col-md-12 services-content">
	        				<div class="section-title">
	        					<h2><i class="fa fa-list-ul"></i> Kategori Layanan</h2>
	        					<div class="bar"></div>
	        				</div>
	        				<div class="row">
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="check"></i> SOSIAL MEDIA
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="thumbs-up"></i> AKUN PREMIUM
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="chevrons-up"></i> PAKET INTERNET
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="trending-up"></i> PULSA REGULER
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="plus"></i> TELEPON & SMS
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="grid"></i> TOP UP E-MONEY
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="corner-right-up"></i> TOKEN PLN
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="zap"></i> PROVIDER GLOBAL
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="check"></i> VOUCHER GAMES
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="thumbs-up"></i> VOUCHER DIGITAL
	        						</div>
	        					</div>
	        				</div>
	        			</div>

	        			<div class="col-lg-6 col-md-12">
	        				<br/><img src="/rebo/assets/images/halaman/target-pesanan-ppob.png" class="img-fluid" title="Kategori Layanan <?php echo $data['short_title']; ?>" alt="Kategori Layanan <?php echo $data['short_title']; ?>">
	        			</div>
	        		</div>
	        	</div>
	        </section>

	        <!--FAQS-->
	        <section class="services-area-two" id="faqs">
	        	<div class="container">
	        		<div class="section-title">
	        			<h2><i class="fa fa-question-circle"></i> Pertanyaan Umum</h2>
	        			<div class="bar"></div>
	        		</div>
	        		<div class="row">
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<h3>Apa Itu Realboost ID<?php /*echo $data['short_title'];*/ ?>?</h3>
	        					<p>RealBoost ID<?php /*echo $data['short_title'];*/ ?> adalah penyedia layanan otomatisasi berteknologi AI, berkualitas, cepat & aman. Kami <?php /*echo $data['short_title'];*/ ?> berkomitmen mempopulerkan bisnis Anda di internet. Layanan unggulan kami <?php /*echo $data['short_title'];*/ ?> dapat melakukan Optimasi Sosial Media & Toko Online.</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<h3>Apa Kelebihan RealBoost ID<?php /*echo $data['short_title'];*/ ?>?</h3>
	        					<p>Dibanding jasa serupa lainnya, RealBoost ID<?php /*echo $data['short_title'];*/ ?> memberikan harga termurah, berteknologi bot AI tercepat, serta keamanan transaksi perbankan & PPOB yang terjamin. Kami<?php /*echo $data['short_title'];*/ ?> juga menyediakan edukasi bisnis dan panduan penggunaan sistem untuk Member, Reseller dan Agen.</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<h3>Apakah Realboost ID<?php /*echo $data['short_title'];*/ ?> Gratis?</h3>
	        					<p>Akses layanan gratis untuk semua pengguna dengan sistem Penambahan Saldo & giveaway. Lama waktu layanan gratis mengikuti aturan yang ditetapkan, Kami<?php /*echo $data['short_title'];*/ ?> memberikan layanan gratis apabila ada event tertentu, fitur baru, atau perayaan moment spesial.</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<h3>Bagaimana Cara Deposit?</h3>
	        					<p>Klik menu Isi Saldo, pilih metode deposit, pilih sistem konfirmasi, isi nominal deposit & submit. Lakukan pembayaran. Setelah transfer klik konfirmasi di Tagihan. Metode "Otomatis" akan dikonfirmasi detik itu juga!</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<h3>Bagaimana Cara Order?</h3>
	        					<p>Klik Order Baru, pilih Kategori, pilih Produk/Layanan, masukkan jumlah pemesanan, lalu klik Order. Selanjutnya akan muncul status orderan, Anda juga bisa melihat informasi status pemesanan di menu Riwayat.</p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box">
	        					<h3>Bagaimana Kinerja Server?</h3>
	        					<p>Order sukses tercepat mulai 1 sampai 5 menit (jika sedang tidak melakukan sinkronisasi data), Kami<?php /*echo $data['short_title'];*/ ?> akan terus meningkatkan kinerja server. Jika orderan pending, mohon menunggu paling lama 1x24 jam.</p>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </section>

	        <!--TEKNOLOGI-->
	        <section class="services-area ptb-50 bg-f5f5f5">
	        	<div class="container">
	        		<div class="row h-100 justify-content-center align-items-center">
	        			<div class="col-lg-6 col-md-12 services-content">
	        				<div class="section-title">
	        					<h2><i class="fa fa-server"></i> Dukungan Teknologi</h2>
	        					<div class="bar"></div>
	        				</div>
	        				<div class="row">
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="check"></i> Artificial Intelligence
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="chevrons-up"></i> Cloudlinux Hosting
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="grid"></i> Hypertext Preprocessor
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="thumbs-up"></i> Intel Corporation
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="trending-up"></i> Content Delivery Network
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="corner-right-up"></i> Database Management
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="plus"></i> Host Control Panel
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="zap"></i> Transport Layer Security
	        						</div>
	        					</div>
	        				</div>
	        			</div>

	        			<div class="col-lg-6 col-md-12">
	        				<br/><img src="/rebo/assets/images/halaman/dukungan-teknologi.png" class="img-fluid" title="Dukungan Teknologi <?php echo $data['short_title']; ?>" alt="Dukungan Teknologi <?php echo $data['short_title']; ?>">
	        			</div>
	        		</div>
	        	</div>
	        </section>

	        <!--PEMBAYARAN-->
	        <section class="services-area-two">
	        	<div class="container">
	        		<div class="section-title">
	        			<h2><i class="fa fa-credit-card"></i> Metode Pembayaran</h2>
	        			<div class="bar"></div>
	        		</div>
	        		<div class="row">
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box text-center">
	        					<h3>Bank Lokal (Indonesia)</h3>
	        					<p><img class="img-fluid" src="/rebo/assets/images/pembayaran/kincaimedia-deposit-bank.png" title="Bank Lokal" alt="Bank Lokal"></p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box text-center">
	        					<h3>E-Money Global</h3>
	        					<p><img class="img-fluid" src="/rebo/assets/images/pembayaran/kincaimedia-deposit-epayment.png" title="E-Money Global" alt="E-Money Global"></p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box text-center">
	        					<h3>E-Money Lokal</h3>
	        					<p><img class="img-fluid" src="/rebo/assets/images/pembayaran/kincaimedia-deposit-emoney.png" title="E-Money Lokal" alt="E-Money Lokal"></p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box text-center">
	        					<h3>Pulsa Transfer</h3>
	        					<p><img class="img-fluid" src="/rebo/assets/images/pembayaran/kincaimedia-deposit-pulsa.png" title="Pulsa Transfer" alt="Pulsa Transfer"></p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box text-center">
	        					<h3>Cryptocurrency</h3>
	        					<p><img class="img-fluid" src="/rebo/assets/images/pembayaran/kincaimedia-deposit-cryptocurrency.png" title="Cryptocurrency" alt="Cryptocurrency"></p>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="single-services-box text-center">
	        					<h3>Redeem Voucher</h3>
	        					<p><img class="img-fluid" src="/rebo/assets/images/pembayaran/kincaimedia-deposit-voucher.png" title="Redeem Voucher" alt="Redeem Voucher"></p>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </section>

	        <!--STATISTIK-->
	        <section class="funfacts-area ptb-50 bg-f5f5f5">
	        	<div class="container">
	        		<div class="section-title">
	        			<h2><i class="fa fa-users"></i> Statistik Pengguna</h2>
	        			<div class="bar"></div>
	        		</div>

	        		<div class="row justify-content-center">
	        			<div class="col-lg-4 col-md-3 col-6">
	        				<div class="funfact">
	        					<h3><span class="odometer" data-count="<?php echo $total_layanan; ?>">00</span>+</h3>
	        					<p>Produk & Layanan</p>
	        				</div>
	        			</div>

	        			<div class="col-lg-4 col-md-3 col-6">
	        				<div class="funfact">
	        					<h3><span class="odometer" data-count="<?php echo $total_pengguna; ?>">00</span>+</h3>
	        					<p>Agen & Reseller</p>
	        				</div>
	        			</div>

	        			<div class="col-lg-4 col-md-3 col-6">
	        				<div class="funfact">
	        					<h3><span class="odometer" data-count="<?php echo $jumlah_deposit_member; ?>">00</span>+</h3>
	        					<p>Transaksi Hari Ini</p>
	        				</div>
	        			</div>
	        		</div>

	        		<div class="map-bg">
	        			<img src="images/map.png" title="Pengguna <?php echo $data['short_title']; ?>" alt="Pengguna <?php echo $data['short_title']; ?>">
	        		</div>
	        	</div>
	        </section>

	        <!--TESTIMONI-->
	        <section class="feedback-area ptb-50 bg-f5f5f5">
	        	<div class="container">
	        		<div class="section-title">
	        			<h2>Apa Tanggapan Mereka<i class="fa fa-question"></i></h2>
	        			<div class="bar"></div>
	        		</div>
	        		<center>
	        			<img src="/rebo/assets/images/halaman/mitra-dan-jaringan.png" class="img-fluid" title="Review <?php echo $data['short_title']; ?>" alt="Review <?php echo $data['short_title']; ?>">
	        		</center>
	        		<div class="feedback-slides">
	        			<div class="client-feedback">
	        				<div>
	        					<div class="item">
	        						<div class="single-feedback">
	        							<div class="client-img">
	        								<img src="/rebo/assets/images/client/anisasafa.jpg" title="Testimoni <?php echo $data['short_title']; ?>" alt="Testimoni <?php echo $data['short_title']; ?>">
	        							</div>

	        							<h3>Kurnia Anggie</h3>
	        							<span>Agen</span>
	        							<p>Harganya murah, penggunaan yg mudah dan pelayanan yg ramah. Recommen banget pokoknya ^_^</p>
	        						</div>
	        					</div>
	        					
	        					<div class="item">
	        						<div class="single-feedback">
	        							<div class="client-img">
	        								<img src="/rebo/assets/images/client/rianaramadhan.jpg" title="Testimoni <?php echo $data['short_title']; ?>" alt="Testimoni <?php echo $data['short_title']; ?>">
	        							</div>

	        							<h3>Andriana Lov</h3>
	        							<span>Member</span>
	        							<p>Jasa sosmednya murah banget dan masuknya juga cepet, makasih kak :)</p>
	        						</div>
	        					</div>
	        					
	        					<div class="item">
	        						<div class="single-feedback">
	        							<div class="client-img">
	        								<img src="/rebo/assets/images/client/kikilesvina.jpg" title="Testimoni <?php echo $data['short_title']; ?>" alt="Testimoni <?php echo $data['short_title']; ?>">
	        							</div>

	        							<h3>Kiki Jenkins</h3>
	        							<span>Reseller</span>
	        							<p>Selain murah prosesnya juga cepat, semoga kedepannya ada aplikasi androidnya biar lebih mudah buka di hp</p>
	        						</div>
	        					</div>
	        					
	        					<div class="item">
	        						<div class="single-feedback">
	        							<div class="client-img">
	        								<img src="/rebo/assets/images/client/muhammadraihan.jpg" title="Testimoni <?php echo $data['short_title']; ?>" alt="Testimoni <?php echo $data['short_title']; ?>">
	        							</div>

	        							<h3>Ahmad Kasim</h3>
	        							<span>Reseller</span>
	        							<p>Allhamdulillah berkat panel sosmed ini pekerjaan saya sebagai seller produk virtual jadi lebih mudah ningkatin popularitas akun sosmed, mantapp</p>
	        						</div>
	        					</div>

	        					<div class="item">
	        						<div class="single-feedback">
	        							<div class="client-img">
	        								<img src="/rebo/assets/images/client/sigitwardana.jpg" title="Testimoni <?php echo $data['short_title']; ?>" alt="Testimoni <?php echo $data['short_title']; ?>">
	        							</div>

	        							<h3>Angga Agung</h3>
	        							<span>Agen</span>
	        							<p>Harga sangat terjangkau dan proses penambahan follower nya juga cepat, ga di ragukan lagi, mantabs!</p>
	        						</div>
	        					</div>

	        					<div class="item">
	        						<div class="single-feedback">
	        							<div class="client-img">
	        								<img src="/rebo/assets/images/client/budiprasetyo.jpg" title="Testimoni <?php echo $data['short_title']; ?>" alt="Testimoni <?php echo $data['short_title']; ?>">
	        							</div>

	        							<h3>Habibie</h3>
	        							<span>Member</span>
	        							<p>SMM panel terbaik menurut ane, penggunaan mudah dan fiturnya sesuai kebutuhan. Belum bisa pindah ke tool lain hehe.. sukses terus bosku!</p>
	        						</div>
	        					</div>
	        				</div>
	        			</div>
	        			<div class="client-thumbnails">
	        				<div>
	        					<div class="item">
	        						<div class="img-fill"><img src="/rebo/assets/images/client/anisasafa.jpg" title="Testimoni <?php echo $data['short_title']; ?>" alt="Testimoni <?php echo $data['short_title']; ?>"></div>
	        					</div>
	        					
	        					<div class="item">
	        						<div class="img-fill"><img src="/rebo/assets/images/client/rianaramadhan.jpg" title="Testimoni <?php echo $data['short_title']; ?>" alt="Testimoni <?php echo $data['short_title']; ?>"></div>
	        					</div>
	        					
	        					<div class="item">
	        						<div class="img-fill"><img src="/rebo/assets/images/client/kikilesvina.jpg" title="Testimoni <?php echo $data['short_title']; ?>" alt="Testimoni <?php echo $data['short_title']; ?>"></div>
	        					</div>
	        					
	        					<div class="item">
	        						<div class="img-fill"><img src="/rebo/assets/images/client/muhammadraihan.jpg" title="Testimoni <?php echo $data['short_title']; ?>" alt="Testimoni <?php echo $data['short_title']; ?>"></div>
	        					</div>
	        					
	        					<div class="item">
	        						<div class="img-fill"><img src="/rebo/assets/images/client/sigitwardana.jpg" title="Testimoni <?php echo $data['short_title']; ?>" alt="Testimoni <?php echo $data['short_title']; ?>"></div>
	        					</div>
	        					
	        					<div class="item">
	        						<div class="img-fill"><img src="/rebo/assets/images/client/budiprasetyo.jpg" title="Testimoni <?php echo $data['short_title']; ?>" alt="Testimoni <?php echo $data['short_title']; ?>"></div>
	        					</div>
	        				</div>

	        				<button class="prev-arrow slick-arrow">
	        					<i data-feather="arrow-left"></i>
	        				</button>
	        				
	        				<button class="next-arrow slick-arrow">
	        					<i data-feather="arrow-right"></i>
	        				</button>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="shape1"><img src="images/shape1.png" alt="shape"></div>
	        	<div class="shape2 rotateme"><img src="images/shape2.svg" alt="shape"></div>
	        	<div class="shape3"><img src="images/shape3.svg" alt="shape"></div>
	        	<div class="shape4"><img src="images/shape4.svg" alt="shape"></div>
	        	<div class="shape5"><img src="images/shape5.png" alt="shape"></div>
	        	<div class="shape6 rotateme"><img src="images/shape4.svg" alt="shape"></div>
	        	<div class="shape7"><img src="images/shape4.svg" alt="shape"></div>
	        	<div class="shape8 rotateme"><img src="images/shape2.svg" alt="shape"></div>
	        </section>

	        <!--DISKRIPSI-->
	        <section class="ready-to-talk">
	        	<div class="container">
	        		<img src="/rebo/assets/images/kincaimedia/rebo.png?v<?php echo $versi; ?>" style="border-radius: 5px;" title="Website <?php echo $data['short_title']; ?>" alt="Website <?php echo $data['short_title']; ?>" style="max-width: 200px">
	        		<h3>Realboost ID - Provider SMM Terbaik dan Terlengkap <?php /*echo $data['title']; */?></h3>
	        	</div>
	        </section>

	        <!--FOOTER-->
	        <footer class="footer-area" id="kontak">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-4 col-md-12">
	        				<div class="single-footer-widget pl-5">
	        					<h3>Tentang Kami</h3>
	        					<?php echo $data['deskripsi_web']; ?><br/><br/>
	        					<ul class="list">
	        						<li><a href="/rebo/auth/register" title="Registrasi <?php echo $data['short_title']; ?>" alt="Registrasi <?php echo $data['short_title']; ?>">Registrasi</a></li>
	        						<li><a href="/rebo/auth/login" title="Member Area <?php echo $data['short_title']; ?>" alt="Member Area <?php echo $data['short_title']; ?>">Member Area</a></li>
	        					</ul>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-12">
	        				<div class="single-footer-widget pl-5">
	        					<h3>Halaman Terkait</h3>
	        					<ul class="list">
	        						<li><a href="/rebo/halaman/tentang-kami" title="Tentang Kami" alt="Tentang Kami">About Us</a></li>
	        						<li><a href="/rebo/halaman/platform-aplikasi" title="Platform Aplikasi" alt="Platform Aplikasi">Platform Aplikasi</a></li>
	        						<li><a href="/rebo/halaman/dukungan-teknologi" title="Dukungan Teknologi" alt="Dukungan Teknologi">Dukungan Teknologi</a></li>
	        						<li><a href="/rebo/halaman/dukungan-pembayaran" title="Dukungan Pembayaran" alt="Dukungan Pembayaran">Dukungan Pembayaran</a></li>
	        						<li><a href="/rebo/halaman/ketentuan-layanan" title="Ketentuan Layanan" alt="Ketentuan Layanan">Ketentuan Layanan</a></li>
	        						<li><a href="/rebo/halaman/pertanyaan-umum" title="Pertanyaan Umum" alt="Pertanyaan Umum">Pertanyaan Umum</a></li>
	        					</ul>
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-12">
	        				<div class="single-footer-widget pl-5">
	        					<h3>Dukungan Pelanggan</h3>
	        					Jangan ragu menghubungi kami melalui whatsapp, halaman kontak, atau email @emailanda.com<?php /*echo $data['email']; */?>.<br/><br/>
	        					<ul class="social-links">
	        						<li><a href="<?php echo $data['url_whatsapp']; ?>" target="_blank" alt="Database Youtube SMM Panel Indoensia" title="Whatsapp Panel dan Server Pulsa H2H"><i class="fab fa-whatsapp"></i></a></li>
									<li><a href="<?php echo $data['url_email']; ?>" target="_blank" alt="Database Instagram SMM Panel Indoensia" title="Email Panel dan Server Pulsa H2H"><i class="fa fa-envelope"></i></a></li>
									<li><a href="<?php echo $data['url_youtube']; ?>" target="_blank" alt="Database Youtube SMM Panel Indoensia" title="Youtube Panel dan Server Pulsa H2H"><i class="fab fa-youtube"></i></a></li>
									<li><a href="<?php echo $data['url_facebook']; ?>" target="_blank" alt="Database Facebook SMM Panel Indoensia" title="Facebook Panel dan Server Pulsa H2H"><i class="fab fa-facebook"></i></a></li>
									<li><a href="<?php echo $data['url_instagram']; ?>" target="_blank" alt="Database Instagram SMM Panel Indoensia" title="Instagram Panel dan Server Pulsa H2H"><i class="fab fa-instagram"></i></a></li>
									<li><a href="<?php echo $data['url_twitter']; ?>" target="_blank" alt="Database Instagram SMM Panel Indoensia" title="Twitter Panel dan Server Pulsa H2H"><i class="fab fa-twitter"></i></a></li>
									<li><a href="https://basebattery.my.id/" target="_blank" alt="Database Instagram SMM Panel Indoensia" title="Blog Panel dan Server Pulsa H2H"><i class="fa fa-rss"></i></a></li>
	        					</ul>
	        					<br/>
	        					<ul class="list">
	        						<li><a href="/rebo/halaman/hubungi-kami" title="Kontak <?php echo $data['short_title']; ?>" alt="Kontak <?php echo $data['short_title']; ?>">Hubungi Kami</a></li>
	        						<li><a href="/rebo/halaman/mitra-dan-jaringan" title="Mitra dan Jaringan" alt="Mitra dan Jaringan">Mitra & Jaringan</a></li>
	        					</ul>
	        				</div>
	        			</div>
	        			<div class="col-lg-12 col-md-12">
	        				<div class="copyright-area">
	        					Copyright &copy;<?php /*echo date("Y"); ?> <?php echo $data['short_title']; */?>2025 Realboost ID.
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </footer>

	        <div class="go-top">
	        	<i data-feather="arrow-up"></i>
	        </div>

	        <!--javascript-->
	        <script src="js/jquery.min.js"></script>
	        <script src="js/jquery.meanmenu.min.js"></script>
	        <script src="js/jquery.magnific-popup.min.js"></script>
	        <script src="js/jquery.appear.js"></script>
	        <script src="js/odometer.min.js"></script>
	        <script src="js/slick.js"></script>
	        <script src="js/owl.carousel.min.js"></script>
	        <script src="js/feather.min.js"></script>
	        <script src="js/main.js"></script>

	        <?php
			include_once '../lib/SEOSecretIDN-schema-all.php';
			include_once '../lib/SEOSecretIDN-javascript-home.php';
			?>

	    </body>

	</html>

<?php } ?>