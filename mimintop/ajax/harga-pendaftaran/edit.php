<?php
if (!isset($_SESSION)) {
	session_start();
}
require_once '../../../config.php';
require_once '../../../lib/session_login_admin.php'; 
if (!isset($_GET['id'])) {
    
    exit(header("Location: ".$config['web']['url']."mimintop/harga-pendaftaran"));
} 
$Target = $conn->real_escape_string(filter($_GET['id']));
$CallDatabase = $conn->query("SELECT * FROM harga_pendaftaran WHERE id = '$Target'");
$ShowData = $CallDatabase->fetch_assoc();
if (mysqli_num_rows($CallDatabase) == 0) {
    
    exit(header("Location: ".$config['web']['url']."mimintop/harga-pendaftaran"));
}
if ($_GET['id'] == '1') {
    $page = "Member";
} elseif ($_GET['id'] == '2') {
    $page = "Agen";
} elseif ($_GET['id'] == '3') {
    $page = "Reseller";
} elseif ($_GET['id'] == '4') {
    $page = "Admin";
} elseif ($_GET['id'] == '5') {
    $page = "Developers";
}

if (isset($_POST['edit'])) {
    $PostHarga = $conn->real_escape_string($_POST['set_harga']);
    $PostBonus = $conn->real_escape_string($_POST['set_bonus']);
    if ($conn->query("UPDATE harga_pendaftaran SET harga = '$PostHarga', bonus = '$PostBonus' WHERE id = '".$conn->real_escape_string($_GET['id'])."'") == true) {

        exit(header("Location: ".$config['web']['url']."mimintop/harga-pendaftaran"));
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
                        <label class="col-md-10 control-label">Harga Pendaftaran</label>
                        <div class="col-md-10">
                            <input type="number" name="set_harga" class="form-control" value="<?php echo $ShowData['harga']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Bonus Saldo</label>
                        <div class="col-md-10">
                            <input type="number" name="set_bonus" class="form-control" value="<?php echo $ShowData['bonus']; ?>">
                        </div>
                    </div>                       
                    <div class="pull-right">
                        <a href="<?php echo $config['web']['url'];?>mimintop/harga-pendaftaran" class="btn btn-info"><i aria-hidden="true" class="fa fa-arrow-left fa-fw"></i> Kembali</a> 
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