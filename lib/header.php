<?php

require 'session_login.php';
require 'database.php';
require 'csrf_token.php';
?>

<!DOCTYPE html>
<html lang="id-ID" xml:lang="id-ID">
    <head>

        <?php
        include_once 'SEOSecretIDN-meta-all.php';
        ?>

        <!-- App css -->
        <link href="/rebo/assets/css/scroll.css?v<?php echo $versi; ?>" rel="stylesheet" type="text/css" async/>
        <link href="/rebo/assets/default/bootstrap-kmp.css?v<?php echo $versi; ?>" rel="stylesheet" type="text/css" async/>
        <link href="/rebo/assets/default/app-kmp.css?v<?php echo $versi; ?>" rel="stylesheet" type="text/css" async/>
        <link href="/rebo/assets/css/remixiconcolab.css?v<?php echo $versi; ?>" rel="stylesheet" type="text/css" async/>
        <link href="/rebo/assets/css/remixicondefault.css?v<?php echo $versi; ?>" rel="stylesheet" type="text/css" async/>
        <link href="/rebo/assets/default/dataTables.bootstrap4.css?v<?php echo $versi; ?>" rel="stylesheet" type="text/css" async/>
        <link href="/rebo/assets/default/responsive.bootstrap4.css?v<?php echo $versi; ?>" rel="stylesheet" type="text/css" async/>
        <link href="/rebo/assets/default/buttons.bootstrap4.css?v<?php echo $versi; ?>" rel="stylesheet" type="text/css" async/>
        <link href="/rebo/assets/default/select.bootstrap4.css?v<?php echo $versi; ?>" rel="stylesheet" type="text/css" async/>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">

                <?php
                if (isset($_SESSION['user'])) {
                    ?>
                    <ul class="list-unstyled topnav-menu float-right mb-0">
                        <!--NAVIGASI AKUN-->
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="/rebo/assets/images/users/user.png" alt="Profil Pengguna" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    <font color ='white'><?php echo $data_user['nama']; ?><i class="mdi mdi-chevron-down"></i></font>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <!-- title-->
                                <div class="dropdown-header noti-title bg-light">
                                    <div class="text-overflow m-0">
                                        <i aria-hidden="true" class="fa fa-user-circle"></i> <?php echo $sess_username; ?>
                                        <br/><br/>
                                        <i aria-hidden="true" class="fa fa-wallet"></i> <b><?php echo number_format($data_user['saldo'],0,',','.'); ?></b> IDR
                                    </div>
                                </div>
                                <!-- item-->
                                <a href="/rebo/user/setting" class="dropdown-item notify-item">
                                    <i aria-hidden="true" class="fa fa-cog fa-spin"></i> <span>Profil Saya</span>
                                </a>
                                <!-- item-->
                                <a href="/rebo/user/mutasi" class="dropdown-item notify-item">
                                    <i aria-hidden="true" class="fa fa-wallet"></i> <span>Mutasi Saldo</span>
                                </a>
                                <!-- item-->
                                <a href="/rebo/panel/bonus-member" class="dropdown-item notify-item">
                                    <i aria-hidden="true" class="fa fa-gift"></i> <span>Bonus Member</span>
                                </a>
                                <!-- item-->
                                <a href="/rebo/user/log" class="dropdown-item notify-item">
                                    <i aria-hidden="true" class="fa fa-history"></i> <span>Log Aktivitas</span>
                                </a>
                                <!-- item-->
                                <a href="/rebo/logout" class="dropdown-item notify-item">
                                    <i class="ri-shut-down-line"></i> <span>Keluar</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                <?php } ?>
                <div class="logo-box">
                    <a href="/" class="logo text-center">
                        <span class="logo-lg">
                            <img src="/rebo/assets/images/kincaimedia/rebo.png" alt="SMM Panel PPOB Auto Subscribe dan Follower Indonesia" title="Platform Layanan Digital All in One, Berkualitas, Cepat & Aman" style="max-width: 150px;">
                        </span>
                        <span class="logo-sm">
                            <img src="/rebo/assets/images/kincaimedia/RB.png" alt="SMM Panel PPOB Auto Subscribe dan Follower Indonesia" title="Platform Layanan Digital All in One, Berkualitas, Cepat & Aman" style="max-width: 60px;">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button aria-label="Top Navigation" class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
                    <!--NAVIGASI HALAMAN-->
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="/rebo/assets/images/kincaimedia/RB.png" alt="Halaman <?php echo $data['short_title']; ?>" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-left arrow-dropdown-menu arrow-menu-left user-list notify-list">
                            <!-- item-->
                            <a href="/rebo/halaman/tentang-kami" class="dropdown-item notify-item">
                                <i aria-hidden="true" class="fa fa-info-circle"></i> <span>Tentang Kami</span>
                            </a>
                            <!-- item-->
                            <a href="/rebo/halaman/platform-aplikasi" class="dropdown-item notify-item">
                                <i class="fab fa-android"></i> <span>Platform Aplikasi</span>
                            </a>
                            <!-- item-->
                            <a href="/rebo/halaman/dukungan-teknologi" class="dropdown-item notify-item">
                                <i aria-hidden="true" class="fa fa-server"></i> <span>Dukungan Teknologi</span>
                            </a>
                            <!-- item-->
                            <a href="/rebo/halaman/dukungan-pembayaran" class="dropdown-item notify-item">
                                <i aria-hidden="true" class="fa fa-credit-card"></i> <span>Dukungan Pembayaran</span>
                            </a>
                            <!-- item-->
                            <a href="/rebo/halaman/ketentuan-layanan" class="dropdown-item notify-item">
                                <i aria-hidden="true" class="fa fa-exclamation-circle"></i> <span>Ketentuan Layanan</span>
                            </a>
                            <!-- item-->
                            <a href="/rebo/halaman/pertanyaan-umum" class="dropdown-item notify-item">
                                <i aria-hidden="true" class="fa fa-question-circle"></i>
                                <span>Pertanyaan Umum</span>
                            </a>
                            <!-- item-->
                            <a href="/rebo/halaman/mitra-dan-jaringan" class="dropdown-item notify-item">
                                <i class="ri-team-fill"></i>
                                <span>Mitra dan Jaringan</span>
                            </a>
                        </div>
                    </li>
                </ul>

                <?php
                if (!isset($_SESSION['user'])) {
                    ?>
                    <ul class="list-unstyled topnav-menu float-right mb-0">
                        <!--NAVIGASI AKUN-->
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="/rebo/assets/images/users/user.png" alt="Profil Pengguna" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <!-- item-->
                                <a href="/" class="dropdown-item notify-item">
                                    <i aria-hidden="true" class="fa fa-home"></i> <span>Beranda</span>
                                </a>
                                <!-- item-->
                                <a href="/rebo/auth/register" class="dropdown-item notify-item">
                                    <i aria-hidden="true" class="fa fa-user-plus"></i> <span>Registrasi</span>
                                </a>
                                <!-- item-->
                                <a href="/rebo/auth/login" class="dropdown-item notify-item">
                                    <i aria-hidden="true" class="fa fa-user"></i> <span>Member Area</span>
                                </a>

                                <!-- item-->
                                <a href="/rebo/halaman/daftar-harga" class="dropdown-item notify-item">
                                    <i aria-hidden="true" class="fa fa-tags"></i> <span>Daftar Harga</span>
                                </a>
                                <!-- item-->
                                <a href="/rebo/halaman/hubungi-kami" class="dropdown-item notify-item">
                                    <i class="fas fa-comments"></i> <span>Hubungi Kami</span>
                                </a>
                                <!-- item-->
                                <a href="/rebo/halaman/memulai-transaksi" class="dropdown-item notify-item">
                                    <i aria-hidden="true" class="fa fa-question-circle"></i></i> <span>Mulai Transaksi</span>
                                </a>
                                <!-- item-->
                                <a href="/rebo/halaman/cara-deposit" class="dropdown-item notify-item">
                                    <i aria-hidden="true" class="fa fa-question-circle"></i></i> <span>Cara Deposit</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                <?php } ?>
            </div>

            <div class="left-side-menu">
                <div class="slimscroll-menu">
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">
                            <?php
                            if (isset($_SESSION['user'])) {
                                ?>    
                                <?php
                                if ($data_user['level'] == "Developers") {
                                    ?>            
                                    <li class="menu-title"> Developer</li>
                                    <li>
                                        <a href="/mimintop">
                                            <i class="ri-terminal-box-fill"></i>
                                            <span> Developer </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect">
                                            <i aria-hidden="true" class="fa fa-file-invoice"></i>
                                            <span> Deposit </span>
                                            <?php if (mysqli_num_rows($AllDepositUsersBank) !== 0) { ?><span class="badge badge-success"><?php echo mysqli_num_rows($AllDepositUsersBank); ?></span> <?php } ?>
                                            <?php if (mysqli_num_rows($AllDepositUsersEmoney) !== 0) { ?><span class="badge badge-primary"><?php echo mysqli_num_rows($AllDepositUsersEmoney); ?></span> <?php } ?>
                                            <?php if (mysqli_num_rows($AllDepositUsersEpayment) !== 0) { ?><span class="badge badge-primary"><?php echo mysqli_num_rows($AllDepositUsersEpayment); ?></span> <?php } ?>
                                            <?php if (mysqli_num_rows($AllDepositUsersTsel) !== 0) { ?><span class="badge badge-danger"><?php echo mysqli_num_rows($AllDepositUsersTsel); ?></span> <?php } ?>
                                            <?php if (mysqli_num_rows($AllDepositUsersVoucher) !== 0) { ?><span class="badge badge-info"><?php echo mysqli_num_rows($AllDepositUsersVoucher); ?></span> <?php } ?>
                                            <?php if (mysqli_num_rows($AllDepositUsersLain) !== 0) { ?><span class="badge badge-warning"><?php echo mysqli_num_rows($AllDepositUsersLain); ?></span> <?php } ?>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level nav" aria-expanded="false">
                                            <li>
                                                <a href="/rebo/mimintop/deposit-bank"> Deposit Bank 
                                                    <?php if (mysqli_num_rows($AllDepositUsersBank) !== 0) { ?><span class="badge badge-success badge-pill notif-tiket"><?php echo mysqli_num_rows($AllDepositUsersBank); ?></span><?php } ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/rebo/mimintop/deposit-emoney"> Deposit Emoney 
                                                    <?php if (mysqli_num_rows($AllDepositUsersEmoney) !== 0) { ?><span class="badge badge-primary badge-pill notif-tiket"><?php echo mysqli_num_rows($AllDepositUsersEmoney); ?></span><?php } ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/rebo/mimintop/deposit-epayment"> Deposit Epayment 
                                                    <?php if (mysqli_num_rows($AllDepositUsersEpayment) !== 0) { ?><span class="badge badge-primary badge-pill notif-tiket"><?php echo mysqli_num_rows($AllDepositUsersEpayment); ?></span><?php } ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/rebo/mimintop/deposit-tsel"> Deposit Telkomsel 
                                                    <?php if (mysqli_num_rows($AllDepositUsersTsel) !== 0) { ?><span class="badge badge-danger badge-pill notif-tiket"><?php echo mysqli_num_rows($AllDepositUsersTsel); ?></span><?php } ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/rebo/mimintop/deposit-voucher"> Deposit Voucher 
                                                    <?php if (mysqli_num_rows($AllDepositUsersVoucher) !== 0) { ?><span class="badge badge-info badge-pill notif-tiket"><?php echo mysqli_num_rows($AllDepositUsersVoucher); ?></span><?php } ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/rebo/mimintop/deposit"> Deposit Lainnya 
                                                    <?php if (mysqli_num_rows($AllDepositUsersLain) !== 0) { ?><span class="badge badge-warning badge-pill notif-tiket"><?php echo mysqli_num_rows($AllDepositUsersLain); ?></span><?php } ?>
                                                </a>
                                            </li>                                        
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/rebo/mimintop/tiket"><i class="ri-customer-service-fill"></i> <span>Tiket </span>
                                            <?php if (mysqli_num_rows($AllTiketUsersPending) !== 0) { ?><span class="badge badge-warning"><?php echo mysqli_num_rows($AllTiketUsersPending); ?></span> <?php } ?>
                                            <?php if (mysqli_num_rows($AllTiketUsersWaiting) !== 0) { ?><span class="badge badge-info"><?php echo mysqli_num_rows($AllTiketUsersWaiting); ?></span> <?php } ?>
                                        </a>
                                    </li>
                                <?php } ?>
                                <?php
                                if ($data_user['level'] != "Member") {
                                    ?> 
                                    <li class="menu-title"> Agen & Reseller</li>
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect">
                                            <i class="ri-team-fill"></i>
                                            <span> Manajemen </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level nav" aria-expanded="false">
                                            <li>
                                                <a href="/rebo/staff/tambah-pengguna">Tambah Member</a>
                                            </li>
                                            <li>
                                                <a href="/rebo/staff/transfer-saldo">Transfer Saldo</a>
                                            </li>
                                            <li>
                                                <a href="/rebo/riwayat/transfer-saldo">Riwayat Transfer</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect">
                                            <i aria-hidden="true" class="fa fa-trophy fa-fw"></i>
                                            <span> Monitoring </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level nav" aria-expanded="false">
                                            <li>
                                                <a href="/rebo/panel/monitoring-sosmed">Layanan Sosmed</a>
                                            </li>
                                            <li>
                                                <a href="/rebo/panel/top-layanan">Top 10 Layanan</a>
                                            </li>
                                            <li>
                                                <a href="/rebo/panel/top-member">Top 10 Member</a>
                                            </li>
                                        </ul>
                                    </li>
                                <?php } ?>                            
                                <li class="menu-title">Menu Utama</li>
                                <li>
                                    <a href="/">
                                        <i class="mdi mdi-view-dashboard"></i>
                                        <span> Beranda </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/rebo/pay">
                                        <i class="ri-wallet-3-fill"></i>
                                        <span> Deposit </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i aria-hidden="true" class="fa fa-file-invoice"></i>
                                        <span> Tagihan </span>
                                        <?php if (mysqli_num_rows($CallDBDepositBankPending) !== 0) { ?><span class="badge badge-success"><?php echo mysqli_num_rows($CallDBDepositBankPending); ?></span> <?php } ?>
                                        <?php if (mysqli_num_rows($CallDBDepositEmoneyPending) !== 0) { ?><span class="badge badge-primary"><?php echo mysqli_num_rows($CallDBDepositEmoneyPending); ?></span> <?php } ?>
                                        <?php if (mysqli_num_rows($CallDBDepositEpaymentPending) !== 0) { ?><span class="badge badge-primary"><?php echo mysqli_num_rows($CallDBDepositEpaymentPending); ?></span> <?php } ?>
                                        <?php if (mysqli_num_rows($CallDBDepositTselPending) !== 0) { ?><span class="badge badge-danger"><?php echo mysqli_num_rows($CallDBDepositTselPending); ?></span> <?php } ?>
                                        <?php if (mysqli_num_rows($CallDBDepositOperPending) !== 0) { ?><span class="badge badge-warning"><?php echo mysqli_num_rows($CallDBDepositOperPending); ?></span> <?php } ?>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        <li>
                                            <a href="/rebo/invoice-bank"> Faktur Bank 
                                                <?php if (mysqli_num_rows($CallDBDepositBankPending) !== 0) { ?><span class="badge badge-success badge-pill notif-tiket"><?php echo mysqli_num_rows($CallDBDepositBankPending); ?></span><?php } ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/rebo/invoice-emoney"> Faktur Emoney 
                                                <?php if (mysqli_num_rows($CallDBDepositEmoneyPending) !== 0) { ?><span class="badge badge-primary badge-pill notif-tiket"><?php echo mysqli_num_rows($CallDBDepositEmoneyPending); ?></span><?php } ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/rebo/invoice-epayment"> Faktur Epayment 
                                                <?php if (mysqli_num_rows($CallDBDepositEpaymentPending) !== 0) { ?><span class="badge badge-primary badge-pill notif-tiket"><?php echo mysqli_num_rows($CallDBDepositEpaymentPending); ?></span><?php } ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/rebo/invoice-pulsa"> Faktur Telkomsel 
                                                <?php if (mysqli_num_rows($CallDBDepositTselPending) !== 0) { ?><span class="badge badge-danger badge-pill notif-tiket"><?php echo mysqli_num_rows($CallDBDepositTselPending); ?></span><?php } ?>
                                            </a>
                                        </li>                                
                                        <li>
                                            <a href="/rebo/invoice"> Faktur Lainnya 
                                                <?php if (mysqli_num_rows($CallDBDepositOperPending) !== 0) { ?><span class="badge badge-warning badge-pill notif-tiket"><?php echo mysqli_num_rows($CallDBDepositOperPending); ?></span><?php } ?>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/rebo/halaman/daftar-harga" target="_blank">
                                        <i aria-hidden="true" class="fa fa-tags"></i>
                                        <span> Daftar Harga </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/rebo/pemesanan">
                                        <i aria-hidden="true" class="fa fa-shopping-cart"></i>
                                        <span> Order Baru </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/rebo/riwayat/pemesanan-sosmed" class="waves-effect">
                                        <i aria-hidden="true" class="fa fa-info-circle"></i>
                                        <span> Status Order </span>
                                        <?php if (mysqli_num_rows($CallDBOrderSosmedPending) !== 0) { ?><span class="badge badge-warning"><?php echo mysqli_num_rows($CallDBOrderSosmedPending); ?></span> <?php } ?>

                                        <?php if (mysqli_num_rows($CallDBOrderSosmedProcessing) !== 0) { ?><span class="badge badge-info"><?php echo mysqli_num_rows($CallDBOrderSosmedProcessing); ?></span> <?php } ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i aria-hidden="true" class="fa fa-history"></i>
                                        <span> Riwayat Deposit </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        <li>
                                            <a href="/rebo/riwayat/deposit-saldo-bank"> Deposit Bank</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/riwayat/deposit-saldo-emoney"> Deposit Emoney</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/riwayat/deposit-saldo-epayment"> Deposit Epayment</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/riwayat/deposit-saldo-tsel"> Deposit Telkomsel</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/riwayat/deposit-saldo-voucher"> Deposit Voucher</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/riwayat/deposit-saldo"> Deposit Lainnya</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-title"> Bantuan</li>
                                <li>
                                    <a href="/rebo/tiket">
                                        <i class="ri-customer-service-fill"></i>
                                        <span> Tiket </span>
                                        <?php if (mysqli_num_rows($CallDBTiketResponded) !== 0) { ?><span class="badge badge-info badge-pill notif-tiket"><?php echo mysqli_num_rows($CallDBTiketResponded); ?></span><?php } ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="/rebo/halaman/hubungi-kami">
                                        <i class="fas fa-comments"></i>
                                        <span> Kontak </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i aria-hidden="true" class="fa fa-question-circle"></i>
                                        <span> Panduan </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        <li>
                                            <a href="/rebo/halaman/memulai-transaksi"> Mulai Transaksi</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/halaman/cara-deposit"> Cara Deposit</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-title"> Halaman</li>
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i aria-hidden="true" class="fa fa-info-circle"></i>
                                        <span> Informasi </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        <li>
                                            <a href="/rebo/halaman/status-order">Status Order</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/halaman/target-pesanan">Target Pesanan</a>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                            } else {
                                ?>
                                <li class="menu-title">Menu Utama</li>
                                <li>
                                    <a href="/rebo/index.php" target="_blank">
                                        <i aria-hidden="true" class="fa fa-home"></i>
                                        <span> Beranda </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/rebo/auth/login">
                                        <i aria-hidden="true" class="fa fa-user"></i>
                                        <span> Masuk </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/rebo/auth/register">
                                        <i aria-hidden="true" class="fa fa-user-plus "></i>
                                        <span> Daftar </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/rebo/halaman/produk-dan-layanan">
                                        <i aria-hidden="true" class="fa fa-tags"></i>
                                        <span> Layanan </span>
                                    </a>
                                </li>
                                <li class="menu-title"> Bantuan</li>
                                <li>
                                    <a href="/rebo/halaman/hubungi-kami">
                                        <i class="fas fa-comments"></i>
                                        <span> Kontak </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i aria-hidden="true" class="fa fa-question-circle"></i>
                                        <span> Panduan </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        <li>
                                            <a href="/rebo/halaman/memulai-transaksi">Mulai Transaksi</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/halaman/cara-deposit">Cara Deposit</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-title"> Halaman</li>    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i aria-hidden="true" class="fa fa-info-circle"></i>
                                        <span> Informasi </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">                      
                                        <li>
                                            <a href="/rebo/halaman/tentang-kami">Tentang Kami</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/halaman/dukungan-teknologi">Dukungan Teknologi</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/halaman/dukungan-pembayaran">Dukungan Pembayaran</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/halaman/platform-aplikasi">Platform Aplikasi</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/halaman/mitra-dan-jaringan">Mitra & Jaringan</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/halaman/ketentuan-layanan">Ketentuan Layanan</a>
                                        </li>
                                        <li>
                                            <a href="/rebo/halaman/pertanyaan-umum">Pertanyaan Umum</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <br />

                        <?php
                        if (isset($_SESSION['hasil'])) {
                            ?>
                            <div class="alert alert-<?php echo $_SESSION['hasil']['alert'] ?> alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>&times;</span></button>
                                <strong>Respon : </strong><?php echo $_SESSION['hasil']['judul'] ?><br /> <strong>Pesan : </strong> <?php echo $_SESSION['hasil']['pesan'] ?>
                            </div>
                            <?php
                            unset($_SESSION['hasil']);
                        }
                        ?>

                        <?php
                        $time = microtime();
                        $time = explode(' ', $time);
                        $time = $time[1] + $time[0];
                        $start = $time;
                        ?>
                    