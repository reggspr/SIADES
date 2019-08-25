<?php
	include('../koneksi.php');
	include('../firewall.php');
	$id = $_POST['id'];
	$tgl = $_POST['inputtgl'];
	$keterangan = $_POST['inputKeterangan'];
	$debitbaru = $_POST['inputDebit'];
	$kreditbaru = $_POST['inputKredit'];
	$dataawallama = mysql_query("SELECT * from administrasi WHERE id='$id'");
	$datalama = mysql_fetch_array($dataawallama);
	$debitlama = $datalama['debit'];
	$kreditlama = $datalama['kredit'];
	$dataawal = mysql_query("SELECT saldo from saldo");
	$datasaldo = mysql_fetch_array($dataawal);
	$saldoAwal = $datasaldo['saldo'];
	$saldoAkhir =  $saldoAwal - $debitlama + $kreditlama + $debitbaru - $kreditbaru;

	$sql = mysql_query("UPDATE administrasi SET tgl='$tgl', keterangan='$keterangan', debit='$debitbaru', kredit='$kreditbaru' WHERE id='$id'");

	if ($sql) {
		header("location:riwayat.php");
		$sqlSaldo = mysql_query("UPDATE saldo SET saldo='$saldoAkhir', tgl='$tgl'");
	}
	else
	{
		echo "gagal";
		echo mysql_error();
	}
	?>