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
if($delet_kategori_layanan == TRUE){
    echo"Kategori Sosial Media Dihapus <br/>";
}else{
    echo"Kategori Sosial Media Gagal Dihapus <br/>";
}

//DELL ALL LAYANAN SOSMED
$delet_layanan_sosmed = mysqli_query($conn, "DELETE FROM layanan_sosmed");
if($delet_layanan_sosmed == TRUE){
    echo"Layanan Sosial Media Dihapus <br/>";
}else{
    echo"Layanan Sosial Media Gagal Dihapus <br/>";
}

?>