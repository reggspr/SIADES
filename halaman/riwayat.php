<!DOCTYPE html>
<html lang="en">
<?php 
    include('../firewall.php');   
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MALEBER</title>
    <link rel="stylesheet" href="../gaya/css/bootstrap.min.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../gaya/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../gaya/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="../gaya/css/creative.css" type="text/css">
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="../index.php">DESA MALEBER</a>
            </div>
            <?php 
            include('../koneksi.php');
            $sqlm=mysql_query("SELECT * from saldo");
            $datas = mysql_fetch_array($sqlm);
        ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll">Rp. <?php echo $datas['saldo'] ?>.-</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="transaksi.php">Transaksi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="riwayat.php">Riwayat</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="riwa">
        <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Berikut ini adalah riwayat transaksi</h2>
                    <hr class="light">
    <div class="table-responsive">
	<table class="table">
		<thead>
		     <tr>
		    		<th>No</th>
		    		<th>Tanggal</th>
		    		<th>Keterangan</th>
		    		<th>Debit</th>
		    		<th>Kredit</th>
                    <th>Tindak Lanjut</th>
		    	</tr>
		</thead>
		<tbody>
			<?php
				include('../koneksi.php');
				$sqlm= mysql_query("SELECT * from administrasi");
				$no = 1;
                if(mysql_num_rows($sqlm)==0)
                {
                    header('location:transaksi.php');
                }
                else
                {
				while ($datam=mysql_fetch_array($sqlm)) {
			?>
		    	<tr>
		    		<td><?php echo $no ?></td>
		    		<td><?php echo $datam['tgl'] ?></td>
		    		<td><?php echo $datam['keterangan'] ?></td>
		    		<td><?php echo $datam['debit'] ?></td>
		    		<td><?php echo $datam['kredit'] ?></td>
                    <td><a href="edit.php?id=<?php echo $datam['id'] ?>"><button class="btn btn-info">Edit</button></a>&nbsp<a href="hapus.php?id=<?php echo $datam['id'] ?>"><button class="btn btn-warning">Hapus</button></a></td>
		    	</tr>
		    	<?php $no++; }} ?>
		</tbody>
	</table>
	</div>

                </div>
            </div>
        </div>
    </section>
    </header>
    <script src="../gaya/js/jquery.js"></script>
    <script src="../gaya/js/bootstrap.min.js"></script>
    <script src="../gaya/js/jquery.easing.min.js"></script>
    <script src="../gaya/js/jquery.fittext.js"></script>
    <script src="../gaya/js/wow.min.js"></script>
    <script src="../gaya/js/creative.js"></script>

</body>

</html>
