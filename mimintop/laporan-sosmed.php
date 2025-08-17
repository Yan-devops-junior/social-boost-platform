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
        <br /><h2 class="text-center">Laporan Bulanan Data Pesanan Sosial Media</h2><br/>
    </div>
</div>
<!-- End-Page-Title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="m-t-0 header-title"><b><i aria-hidden="true" class="fa fa-book"></i>    Laporan Pesanan Sosial Media</b></h4>     
                <div class="table-responsive">
                    <table class="table table-striped table-bordered nowrap m-0">
                        <thead>
                            <tr>
                                <th>Total Pesanan</th>
                                <th>Penghasilan Kotor</th>
                                <th>Penghasilan Bersih</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td><?php echo $CountProfitSosmed; ?></td>
                                <td>Rp <?php echo number_format($AllSosmed['total'],0,',','.') ?></td>   
                                <td>Rp <?php echo number_format($ProfitSosmed['total'],0,',','.'); ?></td>                            
                            </tr>  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Grafik-->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="m-t-0 "><i aria-hidden="true" class="fa fa-area-chart fa-fw"></i> Grafik Order 7 Hari Terakhir</h4>
                <div id="line-chart7" style="height: 300px;"></div>
                <script type="text/javascript">
                    $(function(){
                        new Morris.Area({
                            element: 'line-chart7',
                            data: [
                            <?php
                            $list_tanggal = array();
                            for ($i = 6; $i > -1; $i--) {
                                $list_tanggal[] = date('Y-m-d', strtotime('-'.$i.' days'));
                            }

                            for ($i = 0; $i < count($list_tanggal); $i++) {
                                $get_order_sosmed = $conn->query("SELECT * FROM pembelian_sosmed WHERE date = '".$list_tanggal[$i]."' ");
                                print("{ y: '".tanggal_indo($list_tanggal[$i])."', a: ".mysqli_num_rows($get_order_sosmed)."}, ");

                            }
                            ?>
                            ],
                            xkey: 'y',
                            ykeys: ['a'],
                            labels: ['Pesanan Sosial Media'],
                            lineColors: ['#02c0ce'],
                            gridLineColor: '#eef0f2',
                            pointSize: 0,
                            lineWidth: 0,
                            resize: true,
                            parseTime: false
                        });
                    });
                </script>                          
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="m-t-0 "><i aria-hidden="true" class="fa fa-area-chart fa-fw"></i> Grafik Order 30 Hari Terakhir</h4>
                <div id="line-chart30" style="height: 300px;"></div>
                <script type="text/javascript">
                    $(function(){
                        new Morris.Area({
                            element: 'line-chart30',
                            data: [
                            <?php
                            $list_tanggal = array();
                            for ($i = 29; $i > -1; $i--) {
                                $list_tanggal[] = date('Y-m-d', strtotime('-'.$i.' days'));
                            }

                            for ($i = 0; $i < count($list_tanggal); $i++) {
                                $get_order_sosmed = $conn->query("SELECT * FROM pembelian_sosmed WHERE date = '".$list_tanggal[$i]."' ");
                                print("{ y: '".tanggal_indo($list_tanggal[$i])."', a: ".mysqli_num_rows($get_order_sosmed)."}, ");

                            }
                            ?>
                            ],
                            xkey: 'y',
                            ykeys: ['a'],
                            labels: ['Pesanan Sosial Media'],
                            lineColors: ['#02c0ce'],
                            gridLineColor: '#eef0f2',
                            pointSize: 0,
                            lineWidth: 0,
                            resize: true,
                            parseTime: false
                        });
                    });
                </script>                          
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="m-t-0 "><i aria-hidden="true" class="fa fa-area-chart fa-fw"></i> Grafik Order 360 Hari Terakhir</h4>
                <div id="line-chart360" style="height: 300px;"></div>
                <script type="text/javascript">
                    $(function(){
                        new Morris.Area({
                            element: 'line-chart360',
                            data: [
                            <?php
                            $list_tanggal = array();
                            for ($i = 359; $i > -1; $i--) {
                                $list_tanggal[] = date('Y-m-d', strtotime('-'.$i.' days'));
                            }

                            for ($i = 0; $i < count($list_tanggal); $i++) {
                                $get_order_sosmed = $conn->query("SELECT * FROM pembelian_sosmed WHERE date = '".$list_tanggal[$i]."' ");
                                print("{ y: '".tanggal_indo($list_tanggal[$i])."', a: ".mysqli_num_rows($get_order_sosmed)."}, ");

                            }
                            ?>
                            ],
                            xkey: 'y',
                            ykeys: ['a'],
                            labels: ['Pesanan Sosial Media'],
                            lineColors: ['#02c0ce'],
                            gridLineColor: '#eef0f2',
                            pointSize: 0,
                            lineWidth: 0,
                            resize: true,
                            parseTime: false
                        });
                    });
                </script>                          
            </div>
        </div>
    </div>
</div>

<?php 
require_once '../lib/footer_admin.php';
?>