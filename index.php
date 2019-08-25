<!DOCTYPE html>
<html lang="en">
<?php 
    include('firewall.php');   
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MALEBER</title>
    <link rel="stylesheet" href="gaya/css/bootstrap.min.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="gaya/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="gaya/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="gaya/css/creative.css" type="text/css">
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
                <a class="navbar-brand page-scroll" href="index.php">DESA MALEBER</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="halaman/transaksi.php">Transaksi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="halaman/riwayat.php">Riwayat</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <?php 
            include('koneksi.php');
            $sqlm=mysql_query("SELECT * from saldo");
            $datam = mysql_fetch_array($sqlm);
        ?>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>SELAMAT DATANG DI DESA MALEBER</h1>
                <hr>
                <h3>Uang kas desa hingga saat ini adalah Rp. <?php echo $datam['saldo'] ?>.-</h3>
                <p>Terhitung trasaksi terakhir pada tanggal <?php echo $datam['tgl'] ?></p>
                <a href="halaman/transaksi.php" class="btn btn-primary btn-xl page-scroll">Transaksi Baru</a>
                <a href="halaman/riwayat.php" class="btn btn-primary btn-xl page-scroll">Lihat Riwayat</a>
            </div>
        </div>
    </header>
    <script src="gaya/js/jquery.js"></script>
    <script src="gaya/js/bootstrap.min.js"></script>
    <script src="gaya/js/jquery.easing.min.js"></script>
    <script src="gaya/js/jquery.fittext.js"></script>
    <script src="gaya/js/wow.min.js"></script>
    <script src="gaya/js/creative.js"></script>

</body>

</html>
