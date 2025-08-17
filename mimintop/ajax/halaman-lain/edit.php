<?php
if (!isset($_SESSION)) {
	session_start();
}
require_once '../../../config.php';
require_once '../../../lib/session_login_admin.php'; 
if (!isset($_GET['id'])) {
    
    exit(header("Location: ".$config['web']['url']."mimintop/halaman-lain"));
} 
$Target = $conn->real_escape_string(filter($_GET['id']));
$CallDatabase = $conn->query("SELECT * FROM halaman WHERE id = '$Target'");
$ShowData = $CallDatabase->fetch_assoc();
if (mysqli_num_rows($CallDatabase) == 0) {
    
    exit(header("Location: ".$config['web']['url']."mimintop/halaman-lain"));
}
if ($_GET['id'] == '1') {
    $page = "Tentang Kami";
} elseif ($_GET['id'] == '2') {
    $page = "Platform Aplikasi";
} elseif ($_GET['id'] == '3') {
    $page = "Produk dan Layanan";
} elseif ($_GET['id'] == '4') {
    $page = "Mitra dan Jaringan";
} elseif ($_GET['id'] == '5') {
    $page = "Dukungan Teknologi";
} elseif ($_GET['id'] == '6') {
    $page = "Dukungan Pembayaran";
}

if (isset($_POST['edit'])) {
    $PostKonten = $conn->real_escape_string($_POST['set_konten']);
    if ($conn->query("UPDATE halaman SET konten = '$PostKonten' WHERE id = '".$conn->real_escape_string($_GET['id'])."'") == true) {

        exit(header("Location: ".$config['web']['url']."mimintop/halaman-lain"));
    } else {
        
    }
}
require_once '../../../lib/header_admin.php';
?>  
<hr>     
<div class="row">
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-body">
                <h4 class="m-t-0 header-title"><b><i aria-hidden="true" class="fa fa-gears"></i> <?php echo $page; ?> </b></h4>                             
                <form class="form-horizontal" method="POST">        
                    <div class="form-group">
                        <div class="col-lg-12"><textarea class="form-control" name="set_konten" rows="15"><?php echo $ShowData['konten'] ?></textarea></div>
                    </div>                       
                    <div class="pull-right">
                        <a href="<?php echo $config['web']['url'];?>mimintop/halaman-lain" class="btn btn-info"><i aria-hidden="true" class="fa fa-arrow-left fa-fw"></i> Kembali</a>
                        <button type="submit" class="btn btn-warning waves-effect w-md waves-light" name="edit"><i aria-hidden="true" class="fa fa-pencil"></i> Update</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once '../../../lib/footer_admin.php';
?>