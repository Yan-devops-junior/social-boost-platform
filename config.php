<?php
	date_default_timezone_set('Asia/Jakarta');
	error_reporting(0);

	// Database
	$config['db'] = array(
		'host' => 'localhost',
		'name' => 'queensmm', //Ganti dengan nama database anda
		'username' => 'root', //Ganti dengan username database anda
		'password' => '' //Ganti dengan password database anda
	);
	$conn = mysqli_connect($config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['name']);
	if(!$conn) {
		die("Koneksi Gagal : ".mysqli_connect_error());
	}

	// Konfigurasi url domain
	$config['web'] = array(
	'url' => 'https://localhost/rebo/', 
	'url_canonical' => 'https://localhost/rebo' 
	);

	// Email SMTP
	$config['email'] = array(
		'enkripsi' => 'ssl', //ssl atau tls, direkomendasikan ssl
		'mailhost' => 'HOST EMAIL', //url host mail
		'mailport' => '465', //port email, ex: 465
		'mailusername' => 'EMAIL SMTP', //alamat email, 
		'mailpassword' => 'PASSWORD EMAIL' //password email
	);

	// API google captcha v2 Checkbox: https://www.google.com/recaptcha
	$config['captcha'] = array(
	'sitekey' => 'DATA SITE KEY',
	'secretkey' => 'SECRET KEY'
	);

	// API Provider SMM. Daftar di Rebo
	$apiprovider = 'XXX123XX123XX123XX123';

	// Profit / Margin / Selisih harga dengan provider
	$apimargin = 1.1; //1.05 = 5% | 1.1 = 10% | 1.2 = 20%

	// Status
	$maintenance = 0;
	if($maintenance == 1) {
		header("location: /offline");
	}

	// date & time
	$date = date("Y-m-d");
	$time = date("H:i:s");
	
	// versi
	$versi = '6.5.5';

	require("lib/function.php");

?>