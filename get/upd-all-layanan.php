<!--Viewport -->
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<h3>
	<div style="text-align: center;">
		<a href="../mimintop/action-provider"><b>Kembali</b></a><br/>
	</div>
</h3>

<?php
if (!isset($_SESSION)) {
	session_start();
}
require_once ("../config.php");
//require_once ("../lib/session_login_admin.php");

//DELL ALL KATEGORI LAYANAN
$delet_kategori_layanan = mysqli_query($conn, "DELETE FROM kategori_layanan");

//DELL ALL LAYANAN SOSMED
$delet_layanan_sosmed = mysqli_query($conn, "DELETE FROM layanan_sosmed");

$postdata = "key=".$apiprovider."&action=services";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://panel.kincaimedia.net/api/v1");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$chresult = curl_exec($ch);
//echo $chresult;
curl_close($ch);
$json_result = json_decode($chresult, true);
//print_r($json_result);

$no = 1;
$indeks = 0;
while($indeks < count($json_result)){ 
	$id_provider = $json_result[$indeks]['service'];
	$kategori = $json_result[$indeks]['category'];
	$layanan = $json_result[$indeks]['name'];
	$api = $json_result[$indeks]['rate'];
	$min = $json_result[$indeks]['min'];
	$max = $json_result[$indeks]['max'];
	$typeprov = $json_result[$indeks]['type'];
	$catatan = $json_result[$indeks]['desc'];
	$dripfeed = $json_result[$indeks]['dripfeed'];
	$statusprovider = 1;
	$provider = "KMPANEL";
	$profit = $apimargin;
	$profit_api = $apimargin;
	$rate_asli = $api * $profit;
	$harga_api = $api * $profit_api;

	if($typeprov == 'default'){
		$status = 'Aktif';
	} else if($typeprov == 'custom_comments'){
		$status = 'Nonaktif';
	} else {
		$status = 'Nonaktif';
	}

	$tipe = "Sosial Media";
	$indeks++; 

	$cek_kategori = $conn->query("SELECT * FROM kategori_layanan WHERE nama = '$kategori' AND tipe = '$tipe'");
	if(mysqli_num_rows($cek_kategori) > 0){
	}else{
		$input_kategori = $conn->query("INSERT INTO kategori_layanan VALUES ('','$kategori','$kategori','$tipe')");
	}
	$cek_layanan = $conn->query("SELECT * FROM layanan_sosmed WHERE provider_id = '$id_provider' AND provider = '$provider'");
	$data_layanan = $cek_layanan->fetch_assoc();
	if(mysqli_num_rows($cek_layanan) > 0) {
		$update = mysqli_query($conn, "UPDATE layanan_sosmed SET harga = '$rate_asli', harga_api = '$harga_api', profit = '$profit', status = '$status' WHERE provider_id = '$id_provider' AND provider = '$provider'");
		echo "<b>Layanan Sudah Ada & Harga Diupdate</b> <br/>
		Provider ID: $id_provider <br/>
		Kategori: $kategori <br/>
		Layanan: $layanan <br/>
		Harga Provider: $api <br/>
		Min. Order: $min <br/>
		Max. Order: $max <br/>
		Catatan: $catatan <br/>
		Provider: $provider <br/>
		Harga Web: $rate_asli <br/>
		Harga Api: $harga_api <br/>
		Status: $status <br/>
		Tipe: $tipe <br/> <br/>";
	} else {
		$sid = $no++;
		$insert_layanan = $conn->query("INSERT INTO layanan_sosmed VALUES ('','$sid' ,'$kategori' ,'$layanan' ,'$catatan' ,'$min' ,'$max' ,'$rate_asli' ,'$harga_api', '$profit', '$status' ,'$id_provider' ,'$provider' ,'$tipe')");
		if($insert_layanan == TRUE){
			echo "<b>Data Berhasil Disimpan</b> <br/>
			Provider ID: $id_provider <br/>
			Kategori: $kategori <br/>
			Layanan: $layanan <br/>
			Harga Provider: $api <br/>
			Min. Order: $min <br/>
			Max. Order: $max <br/>
			Catatan: $catatan <br/>
			Provider: $provider <br/>
			Harga Web: $rate_asli <br/>
			Harga Api: $harga_api <br/>
			Status: $status <br/>
			Tipe: $tipe <br/><br/>";
		}else{
			echo "<b>Data Gagal Disimpan</b> <br/>";
		}
	}

}

?>