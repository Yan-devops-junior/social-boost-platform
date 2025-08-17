<?php

//Jumlah & Total Layanan
$layanan_sosmed = mysqli_num_rows($conn->query("SELECT * FROM layanan_sosmed"));
$total_layanan = $layanan_sosmed;

//Jumlah Users
$total_pengguna = mysqli_num_rows($conn->query("SELECT * FROM users"));

//Jumlah Deposit
$jumlah_deposit_bank_member = mysqli_num_rows($conn->query("SELECT * FROM deposit_bank WHERE status IN ('Success') "));
$jumlah_deposit_emoney_member = mysqli_num_rows($conn->query("SELECT * FROM deposit_emoney WHERE status IN ('Success') "));
$jumlah_deposit_epayment_member = mysqli_num_rows($conn->query("SELECT * FROM deposit_epayment WHERE status IN ('Success') "));
$jumlah_deposit_tsel_member = mysqli_num_rows($conn->query("SELECT * FROM deposit_tsel WHERE status IN ('Success') "));
$jumlah_deposit_voucher_member = mysqli_num_rows($conn->query("SELECT * FROM voucher WHERE status IN ('sudah di redeem') "));
$jumlah_deposit_lain_member = mysqli_num_rows($conn->query("SELECT * FROM deposit WHERE status IN ('Success') "));
$jumlah_deposit_member = $jumlah_deposit_bank_member + $jumlah_deposit_emoney_member + $jumlah_deposit_epayment_member + $jumlah_deposit_tsel_member + $jumlah_deposit_voucher_member + $jumlah_deposit_lain_member;

//Total Deposit Bank
$total_deposit_bank = $conn->query("SELECT SUM(jumlah_transfer) AS total FROM deposit_bank WHERE status IN ('Success') ");
//Cek data deposit bank untuk total
$data_deposit_bank = $total_deposit_bank->fetch_assoc();

//Total Deposit Emoney
$total_deposit_emoney = $conn->query("SELECT SUM(jumlah_transfer) AS total FROM deposit_emoney WHERE status IN ('Success') ");
//Cek data deposit emoney untuk total
$data_deposit_emoney = $total_deposit_emoney->fetch_assoc();

//Total Deposit epayment
$total_deposit_epayment = $conn->query("SELECT SUM(jumlah_transfer) AS total FROM deposit_epayment WHERE status IN ('Success') ");
//Cek data deposit epayment untuk total
$data_deposit_epayment = $total_deposit_epayment->fetch_assoc();

//Total Deposit Tsel
$total_deposit_tsel = $conn->query("SELECT SUM(jumlah_transfer) AS total FROM deposit_tsel WHERE status IN ('Success') ");
//Cek data deposit tsel untuk total
$data_deposit_tsel = $total_deposit_tsel->fetch_assoc();

//Total Deposit Voucher
$total_deposit_voucher = $conn->query("SELECT SUM(saldo) AS total FROM voucher WHERE status IN ('sudah di redeem') ");
//Cek data deposit voucher untuk total
$data_deposit_voucher = $total_deposit_voucher->fetch_assoc();

//Total Deposit Lain
$total_deposit = $conn->query("SELECT SUM(jumlah_transfer) AS total FROM deposit WHERE status IN ('Success') ");
//Cek data deposit lain untuk cronjobs
$data_deposit = $total_deposit->fetch_assoc();

//Jumlah Pesanan
$jumlah_pesanan_sosmed = mysqli_num_rows($conn->query("SELECT * FROM pembelian_sosmed WHERE status IN ('Success') "));

//Total Transaksi
$total_pemesanan_sosmed = $conn->query("SELECT SUM(harga) AS total FROM pembelian_sosmed WHERE status IN ('Success') ");
$data_pesanan_sosmed = $total_pemesanan_sosmed->fetch_assoc();

// Total Saldo Member
$total_saldo_member = $conn->query("SELECT SUM(saldo) AS total FROM users WHERE level IN ('Member','Agen','Reseller') ");
$data_saldo_member = $total_saldo_member->fetch_assoc();

// Pemakaian Saldo Member
$total_transaksi_member = $conn->query("SELECT SUM(pemakaian_saldo) AS total FROM users WHERE level IN ('Member','Agen','Reseller') ");
$data_transaksi_member = $total_transaksi_member->fetch_assoc();

// Total Profit Pembelian Sosmed Perbulan
$ThisProfitSosmed = $conn->query("SELECT SUM(profit) AS total FROM pembelian_sosmed WHERE MONTH(pembelian_sosmed.date) = '".date('m')."' AND YEAR(pembelian_sosmed.date) = '".date('Y')."'");
$ProfitSosmed = $ThisProfitSosmed->fetch_assoc();

$ThisTotalSosmed = $conn->query("SELECT SUM(harga) AS total FROM pembelian_sosmed WHERE MONTH(pembelian_sosmed.date) = '".date('m')."' AND YEAR(pembelian_sosmed.date) = '".date('Y')."'");
$AllSosmed = $ThisTotalSosmed->fetch_assoc();

$CountProfitSosmed = mysqli_num_rows($conn->query("SELECT * FROM pembelian_sosmed WHERE MONTH(pembelian_sosmed.date) = '".date('m')."' AND YEAR(pembelian_sosmed.date) = '".date('Y')."'"));

// ===== Halaman Pengguna ===== //
// Data User Order
$jumlah_order_sosmed = mysqli_num_rows($conn->query("SELECT * FROM pembelian_sosmed WHERE user = '$sess_username'"));

// Data User Deposit
$jumlah_deposit_lain = mysqli_num_rows($conn->query("SELECT * FROM deposit WHERE username = '$sess_username' AND status = 'Success'"));
$jumlah_deposit_bank = mysqli_num_rows($conn->query("SELECT * FROM deposit_bank WHERE username = '$sess_username' AND status = 'Success'"));
$jumlah_deposit_emoney = mysqli_num_rows($conn->query("SELECT * FROM deposit_emoney WHERE username = '$sess_username' AND status = 'Success'"));
$jumlah_deposit_epayment = mysqli_num_rows($conn->query("SELECT * FROM deposit_bank WHERE username = '$sess_username' AND status = 'Success'"));
$jumlah_deposit_tsel = mysqli_num_rows($conn->query("SELECT * FROM deposit_tsel WHERE username = '$sess_username' AND status = 'Success'"));
$jumlah_deposit_voucher = mysqli_num_rows($conn->query("SELECT * FROM deposit_voucher WHERE username = '$sess_username' AND status = 'Success'"));
$jumlah_deposit_user = $jumlah_deposit_lain + $jumlah_deposit_bank + $jumlah_deposit_emoney + $jumlah_deposit_epayment + $jumlah_deposit_tsel + $jumlah_deposit_voucher;

$CallDBDepositBankPending = $conn->query("SELECT * FROM deposit_bank WHERE username = '$sess_username' AND status = 'Pending'");
$CallDBDepositEmoneyPending = $conn->query("SELECT * FROM deposit_emoney WHERE username = '$sess_username' AND status = 'Pending'");
$CallDBDepositEpaymentPending = $conn->query("SELECT * FROM deposit_epayment WHERE username = '$sess_username' AND status = 'Pending'");
$CallDBDepositTselPending = $conn->query("SELECT * FROM deposit_tsel WHERE username = '$sess_username' AND status = 'Pending'");
$CallDBDepositOperPending = $conn->query("SELECT * FROM deposit WHERE username = '$sess_username' AND status = 'Pending'");

$cek_order_sosmed = $conn->query("SELECT SUM(harga) AS total FROM pembelian_sosmed WHERE user = '$sess_username'");
$data_order_sosmed = $cek_order_sosmed->fetch_assoc();

// ===== Data Halaman Kontak ===== //
$CallDbHalaman = $conn->query("SELECT * FROM halaman WHERE id = '1'");
$PageContact = $CallDbHalaman->fetch_assoc();

// ===== Data Status Order Sosmed ADMIN ===== //
$AllOrderSosmedPending = $conn->query("SELECT * FROM pembelian_sosmed WHERE status = 'Pending'");
$AllOrderSosmedProcessing = $conn->query("SELECT * FROM pembelian_sosmed WHERE status = 'Processing'");
$AllOrderSosmedError = $conn->query("SELECT * FROM pembelian_sosmed WHERE status = 'Error'");
$AllOrderSosmedPartial = $conn->query("SELECT * FROM pembelian_sosmed WHERE status = 'Partial'");
$AllOrderSosmedSuccess = $conn->query("SELECT * FROM pembelian_sosmed WHERE status = 'Success'");

// ===== Data Status Order Sosmed USER ===== //
$CallDBOrderSosmedPending = $conn->query("SELECT * FROM pembelian_sosmed WHERE user = '$sess_username' AND status = 'Pending'");
$CallDBOrderSosmedProcessing = $conn->query("SELECT * FROM pembelian_sosmed WHERE user = '$sess_username' AND status = 'Processing'");
$CallDBOrderSosmedError = $conn->query("SELECT * FROM pembelian_sosmed WHERE user = '$sess_username' AND status = 'Error'");
$CallDBOrderSosmedPartial = $conn->query("SELECT * FROM pembelian_sosmed WHERE user = '$sess_username' AND status = 'Partial'");
$CallDBOrderSosmedSuccess = $conn->query("SELECT * FROM pembelian_sosmed WHERE user = '$sess_username' AND status = 'Success'");

// ===== Data Deposit ADMIN ===== //
$AllDepositUsersBank = $conn->query("SELECT * FROM deposit_bank WHERE status = 'Pending'");
$AllDepositUsersEmoney = $conn->query("SELECT * FROM deposit_emoney WHERE status = 'Pending'");
$AllDepositUsersEpayment = $conn->query("SELECT * FROM deposit_epayment WHERE status = 'Pending'");
$AllDepositUsersTsel = $conn->query("SELECT * FROM deposit_tsel WHERE status = 'Pending'");
$AllDepositUsersVoucher = $conn->query("SELECT * FROM deposit_voucher WHERE status = 'Pending'");
$AllDepositUsersLain = $conn->query("SELECT * FROM deposit WHERE status = 'Pending'");

// ===== Data Tiket ADMIN ===== //
$AllTiketUsersClosed = $conn->query("SELECT * FROM tiket WHERE status = 'Closed'");
$AllTiketUsersPending = $conn->query("SELECT * FROM tiket WHERE status = 'Pending'");
$AllTiketUsersWaiting = $conn->query("SELECT * FROM tiket WHERE status = 'Waiting'");
$AllTiketUsersResponded = $conn->query("SELECT * FROM tiket WHERE status = 'Responded'");

// ===== Data Tiket USER ===== //
$CallDBTiketClosed = $conn->query("SELECT * FROM tiket WHERE user = '$sess_username' AND status = 'Closed'");
$CallDBTiketPending = $conn->query("SELECT * FROM tiket WHERE user = '$sess_username' AND status = 'Pending'");
$CallDBTiketWaiting = $conn->query("SELECT * FROM tiket WHERE user = '$sess_username' AND status = 'Waiting'");
$CallDBTiketResponded = $conn->query("SELECT * FROM tiket WHERE user = '$sess_username' AND status = 'Responded'");

// ===== Data Website ===== //
$panggil = $conn->query("SELECT * FROM setting_web WHERE id = '1'");
$data = $panggil->fetch_assoc();

?>