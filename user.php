<?php 
error_reporting(0);
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventaris Sekolah</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->


</head>

<body>

    <?php if (empty($_SESSION['userid'])) {
        include 'login_form.php';
    } else {?>

    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h4 class="navbar-brand" href="index.html">Inventaris Sekolah | SIG</h4>
            </div>

            <ul class="nav navbar-top-links navbar-right" style="margin-top: 10px">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> User <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="logoff.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <section class="panel panel-default container">
        <div id="navbar" class="navbar-collapse collapse center">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li>
                    <a href="user.php?pg=beranda"><i class="glyphicon glyphicon-home"></i> Beranda</a>
                    </li>
                    <li>
                    <a href="user.php?pg=profil"><i class="glyphicon glyphicon-user"></i> Profil</a>
                    </li>
                    <li>
                    <a id="user" href="user.php?pg=inventaris"><i class="glyphicon glyphicon-th-list"></i> Inventaris</a>
                    </li>
                    <li>
                    <a href="user.php?pg=buku"><i class="glyphicon glyphicon-book"></i><span> Buku Tamu</span></a>
                    </li>
                </ul>
            </div>
        </div> 
    </section>

    <section class="container" style="background-color: #ffffff">
        <?php
        if(empty($_GET['pg']) OR $_GET['pg']=='beranda')include 'beranda.php';

        $link = $_GET['pg'];
        $link = explode("_", $link);
        $folder= $link[0];
        
        include 'pages/'.$folder.'/'.$_GET['pg'].'.php';
        ?>
        
        <?php } ?>
    </section>
    <!-- jQuery -->
    <script src="asset/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="asset/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <script>
    $(document).ready(function(){
        $("#user").click(function(){
            
        });
    });
    </script>

</body>

</html>
