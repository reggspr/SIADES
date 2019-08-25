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
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">LAPORAN</h2>
                    <hr class="light"><br>
                    <form class="form-horizontal" action="filterisasi.php" method="post">
                        <div class="form-group">
                            <label for="inputtgl" class="col-sm-2 control-label">Tanggal</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control" id="inputtgl" name="inputtgl" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                          <div class="form-group"><br>
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-info">Filter</button>
                            </div>
                          </div>
                    </form>
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
