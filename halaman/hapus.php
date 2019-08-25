<?php
	include('../koneksi.php');
    include('../firewall.php');   
	$id=$_GET['id'];
	$sqlSaldo = mysql_query("SELECT * FROM administrasi WHERE id='$id'");
	$datadebit = mysql_fetch_array($sqlSaldo);
	$debit = $datadebit['debit'];
	$kredit = $datadebit['kredit'];
	$dataawal = mysql_query("SELECT saldo from saldo");
	$datasaldo = mysql_fetch_array($dataawal);
	$saldoAwal = $datasaldo['saldo'];
	$saldoAkhir =  $saldoAwal - $debit + $kredit;
	$sql = mysql_query("DELETE FROM administrasi WHERE id='$id'");
	if ($sql) {
		header("location:riwayat.php");
		$sqlAkhir = mysql_query("UPDATE saldo SET saldo='$saldoAkhir'");
	}
	else{
		echo "Gagal";
		echo mysql_error();
	}
?>