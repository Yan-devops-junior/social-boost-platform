<?php
require("../config.php");
$cek_pesanan = $conn->query("SELECT * FROM pembelian_sosmed WHERE status IN ('','Pending','Processing') AND provider = 'KMPANEL'");

if (mysqli_num_rows($cek_pesanan) == 0) {
  die("Order Pending Tidak Ditemukan.");
} else {
  while($data_pesanan = $cek_pesanan->fetch_assoc()) {
    $poid =  $data_pesanan['provider_oid'];
    $oid =  $data_pesanan['oid'];
    $id =  $data_pesanan['id'];
    $o_provider =  $data_pesanan['provider'];

    if ($o_provider == "MANUAL") {
      echo "Order manual<br />";
    } else {

      $cek_provider = $conn->query("SELECT * FROM provider WHERE code = 'KMPANEL'");
      $data_provider = $cek_provider->fetch_assoc();

      if ($o_provider !== "MANUAL") {
        $api_postdata = "key=".$apiprovider."&action=status&order=$poid";
      } else {
        die("System error");
      }

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://panel.kincaimedia.net/api/v1");
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $api_postdata);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $chresult = curl_exec($ch);
      //echo $chresult;
      curl_close($ch);
      $json_result = json_decode($chresult, true);
      //print_r($json_result);

      if ($o_provider !== "MANUAL") {
        $u_status = $json_result['status'];
        $u_start = $json_result['start_count'];
        $u_remains = $json_result['remains'];
      }

      if($u_status == 'Processing'){
        $status = 'Processing';
      }else if($u_status == 'In progress'){
        $status = 'Processing';
      }else if($u_status == 'Pending'){
        $status = 'Pending';
      }else if($u_status == 'Completed'){
        $status = 'Success';
      }else if($u_status == 'Partial'){
        $status = 'Partial';
      }else if($u_status == 'Canceled'){
        $status = 'Error';
      }else{
        $status = 'Pending';
      }

      $update_pesanan = $conn->query("UPDATE pembelian_sosmed SET status = '$status', start_count = '$u_start', remains = '$u_remains' WHERE id = '$id' AND provider = 'KMPANEL'");
      if ($update_pesanan == TRUE) {
        echo "<b>Status Order Diupdate</b> <br/>
        Order ID Web: $oid <br/>
        Order ID Provider: $poid <br/>
        Provider: $o_provider <br/>
        Status: $status <br/>
        Start: $u_start <br/>
        Remains: $u_remains <br/><br/>";
      } else {
        echo "Error database";
      }
    }
  }
}

?>