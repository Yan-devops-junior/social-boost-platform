<?php
require("../config.php");
$cek_pesanan = $conn->query("SELECT * FROM pembelian_sosmed WHERE status IN ('Error','Partial') AND refund = '0'");

if (mysqli_num_rows($cek_pesanan) == 0) {
	die("Status Error/Partial Tidak Ditemukan");
} else {
	while($data_pesanan = mysqli_fetch_assoc($cek_pesanan)) {

		$harga = $data_pesanan['harga'] / $data_pesanan['jumlah'];
		$profit = $data_pesanan['profit'] / $data_pesanan['jumlah'];
		$refund1 = $harga * $data_pesanan['remains'];
		$refund2 = $profit * $data_pesanan['remains'];

		if($data_pesanan['remains'] == 0) {
			$refund1 = $data_pesanan['harga'];
			$refund2 = $data_pesanan['profit'];
		}

		$update_user = $conn->query("UPDATE users SET pemakaian_saldo = pemakaian_saldo - $refund1 WHERE user = '".$data_pesanan['user']."'");
		$update_user = $conn->query("UPDATE users SET saldo = saldo + $refund1 WHERE username = '".$data_pesanan['user']."'");
		$update_order = $conn->query("INSERT INTO history_saldo VALUES ('', '".$data_pesanan['user']."', 'Penambahan Saldo', '$refund1', 'Pengembalian Dana. Order ID ".$data_pesanan['oid']."', '$date', '$time')");
		$update_order = $conn->query("UPDATE pembelian_sosmed SET refund = '1' , profit = profit - $refund2  WHERE oid = '".$data_pesanan['oid']."'");
		if ($update_order AND $update_user == TRUE) {
			echo "Dikembalikan: Rp $refund1 <br/>
			Order ID: ".$data_pesanan['oid']." <br/>
			Untuk: ".$data_pesanan['user']." <br/><br/>";
		} else {
			echo "Error database";
		}
	}
}

?>