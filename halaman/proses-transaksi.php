<?php
	include('../koneksi.php');
	include('../firewall.php');
	$tgl = $_POST['inputtgl'];
	$keterangan = $_POST['inputKeterangan'];
	$debit = $_POST['inputDebit'];
	$kredit = $_POST['inputKredit'];
	$dataawal = mysql_query("SELECT saldo from saldo");
	$datasaldo = mysql_fetch_array($dataawal);
	$saldoAwal = $datasaldo['saldo'];
	$saldoAkhir =  $saldoAwal + $debit - $kredit;

	$sql = mysql_query("INSERT INTO administrasi VALUES ('$tgl', '$keterangan','$debit','$kredit','')");

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