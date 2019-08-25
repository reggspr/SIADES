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
                <a class="navbar-brand page-scroll" href="../indexkades.php">DESA MALEBER</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="../logoutk.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <section class="bg-primary" id="about">
        <?php include('../koneksi.php');
            if(isset($_POST['inputtgl']))
            {
                $inputtgl = $_POST['inputtgl'];
            
        ?>
    <div class="table-responsive">
    <table class="table">
        <thead>
             <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Debit</th>
                    <th>Kredit</th>
                </tr>
        </thead>
        <tbody>
            <?php

                $sqlm= mysql_query("SELECT * from administrasi WHERE tgl like '%$inputtgl%' ");
                $no = 1;
                if(mysql_num_rows($sqlm)==0)
                {
                    echo "<script>alert('Tidak ada data untuk dilaporkan')</script>";
                    echo "<meta http-equiv='refresh' content='0; url=laporan.php'>";
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
                </tr>
                <?php $no++; } ?>
                <tr>
                    <td colspan=5><label class="label label-success hidden-print" media="screen"><a href="#" onclick="window.print()" media="screen" style="color:#FFF">Cetak</a></label></td>
                </tr>
        </tbody>
                <?php }?>
    </table>
    </div>
    <?php
            }
    ?>
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
