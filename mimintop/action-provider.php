<?php
if (!isset($_SESSION)) {
	session_start();
}
require_once '../config.php';
require_once '../lib/session_login_admin.php';                    
require_once '../lib/header_admin.php';

?> 

<!-- Page-Title -->
<div class="row">
    <div class="col-md-12">
        <br /><h2 class="text-center">Manajemen Data Akun Provider Server Pusat Database</h2><br/>
    </div>
</div>
<!-- End-Page-Title -->

<div class="row">
    <div class="col-md-4">

        <div class="card">    
            <div class="card-body table-responsive">                            
                <h4 class="m-t-0 header-title text-center">PROVIDER SMM</h4><hr>

                <!--KMPANEL-->
                <?php 
                $postdata = "key=".$apiprovider."&action=balance";
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
                ?>
                <h5 class="btn btn-dark btn-block">KMPANEL</h5>
                <div class="text-dark">
                    <b>Saldo: Rp <?php echo number_format($json_result['balance'],0,',','.'); ?></b>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body table-responsive">
                <h4 class="m-t-0 header-title text-center">SOSIAL MEDIA</h4><hr>
                <h5 class="btn btn-dark btn-block">KMPANEL</h5>
                <div class="text-dark">
                    <a class="btn btn-info waves-effect w-md waves-light" href="../get/upd-all-layanan" target="_blank">Update</a>
                    <a class="btn btn-success waves-effect w-md waves-light" href="../run/status_sosmed" target="_blank">Status</a>
                    <a class="btn btn-danger waves-effect w-md waves-light" href="../get/del-all-layanan-sosmed" target="_blank">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body table-responsive">
                <h4 class="m-t-0 header-title text-center">HAPUS SEMUA</h4><hr>
                <h5 class="btn btn-dark btn-block">KATEGORI & LAYANAN</h5>
                <div class="text-dark">
                    <a class="btn btn-danger waves-effect w-md waves-light" href="../get/del-all-layanan" target="_blank">Delete All</a>
                </div>
            </div>                               
        </div>
    </div>

    <?php 
    require_once '../lib/footer_admin.php';
    ?>