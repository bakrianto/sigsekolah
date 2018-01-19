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

    <title>Sistem Inventaris | SLB Marganingsih</title>

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

    <!-- AdminLTE CSS -->
    <link href="dist/css/AdminLTE.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/jquery.jOrgChart.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="css/jquery.jOrgChart.css"/>

    <link href="css/prettify.css" type="text/css" rel="stylesheet" />

    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <link href="dist/css/peta.css" rel="stylesheet">

    <!-- <script type="text/javascript" src="dist/js/jquery.js"></script> -->
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
    <!-- <script type="text/javascript" src="dist/js/jquery.imagemapster.min.js"></script> -->
    <script type="text/javascript" src="asset/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="dist/js/jquery.imagemapster.js"></script>
    <!-- Datatables -->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.js"></script>

    <style type="text/css" media="screen">
        div.scrollmenu {
        overflow: auto;
        white-space: nowrap;
    }

        #map {
        height: 100%;
    }
    </style>

</head>

<body onload="prettyPrint();">

    <?php 
    if (empty($_SESSION['username'])) { ?>
       <?php include 'login_form.php'; ?>
    <?php }
    elseif ($_SESSION['username'] == "admin") {?>
    <!-- Menu Admin -->
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
            <h4 class="navbar-brand" href="index.html">Inventaris | SLB Marganingsih</h4>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right" style="margin-top: 10px">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <?php echo "$_SESSION[usernm]" ?>&nbsp;<i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="index.php?pg=admin"><i class="fa fa-user fa-fw"></i> Tambah/Edit</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logoff.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </div>
    </nav>

    <section class="panel panel-default container">
        <div id="navbar" class="navbar-collapse collapse center">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li>
                    <a href="index.php?pg=kategori"><i class="glyphicon glyphicon-tasks"></i> Kategori</a>
                    </li>
                    <li>
                    <a href="index.php?pg=ruang"><i class="glyphicon glyphicon-home"></i> Ruang</a>
                    </li>
                    <li>
                    <a class="show" href="index.php?pg=inventaris"><i class="glyphicon glyphicon-th-list"></i> Inventaris</a>
                    </li>
                    <li>
                    <a class="show" href="index.php?pg=organisasi"><i class="fa fa-users"></i> Organisasi</a>
                    </li>
                    <li>
                    <a class="show" href="index.php?pg=laporan"><i class="fa fa-users"></i> Laporan</a>
                    </li>
<!--                     <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Organisasi<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="index.php?pg=organisasi_komite">Komite Sekolah</a></li>
                        <li><a href="index.php?pg=organisasi_struktur">Struktur Organisasi</a></li>
                        <li><a href="index.php?pg=organisasi_yayasan">Pengurus Yayasan</a></li>
                        </ul>
                    </li> -->
<!--                     <li>
                    <a href="index.php?pg=buku"><i class="glyphicon glyphicon-book"></i> Buku Tamu</a>
                    </li> -->
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

    </section>

    <?php }
    elseif($_SESSION['username'] == "user"){ ?>
    <!-- menu user -->
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
            <h4 class="navbar-brand" href="index.html">Inventaris | SLB Marganingsih</h4>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right" style="margin-top: 10px">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <?php echo "$_SESSION[usernm]" ?>&nbsp;<i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="logoff.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </div>
    </nav>
    <section class="panel panel-default container">
        <div id="navbar" class="navbar-collapse collapse center">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li>
                    <a href="index.php?pg=beranda"><i class="glyphicon glyphicon-home"></i> Beranda</a>
                    </li>
                    <li>
                    <a href="index.php?pg=profil"><i class="glyphicon glyphicon-user"></i> Profil</a>
                    </li>
                    <li>
                    <a id="user" href="index.php?pg=inventaris"><i class="glyphicon glyphicon-th-list"></i> Inventaris</a>
                    </li>
                    <li>
                    <a class="show" href="index.php?pg=organisasi"><i class="fa fa-users"></i> Organisasi</a>
                    </li>
<!--                     <li>
                    <a href="index.php?pg=buku"><i class="glyphicon glyphicon-book"></i><span> Buku Tamu</span></a>
                    </li> -->
                </ul>
            </div>
        </div> 
    </section>

    <section class="container text-center" style="background-color: #ffffff">
        <div class="row" style="margin-bottom: 50px">
        <?php
            if(empty($_GET['pg']) OR $_GET['pg']=='beranda')include 'beranda.php';

                $link = $_GET['pg'];
                $link = explode("_", $link);
                $folder= $link[0];
                
                include 'pages/'.$folder.'/'.$_GET['pg'].'.php';
            
            ?>
        </div>
    </section>

    <?php }
    else {
        header("location:login.php");
    }
    ?>

    <!-- jQuery -->
    <!-- <script src="asset/jquery/dist/jquery.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="asset/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

    <script src="prettify.js"></script>

    <script src="jquery.jOrgChart.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '#detail', function(event) {
                event.preventDefault();
                var inventaris = $(this).data('id');
                var url = $(this).data('data');
                var req = $.ajax({
                    url: url,
                    type: 'POST',
                    data: {inventaris : inventaris},
                })
                req.done(function(html) {
                    $('#data-det').html(html);
                })
                req.fail(function(xhr, textStatus, errorThrown) {
                    alert(xhr.responseText);
                })
            });

            $('ul.nav li.dropdown').hover(function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });

             $('.data').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#org").jOrgChart({
                chartElement : '#chart',
            });
        });
    </script>

    <script>
        $(document).ready(function(){
           $('.data').DataTable();
        }); 
    </script>
    <!-- <script src="./dist/js/peta.js" type="text/javascript" charset="utf-8" async defer></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6JOl3GcLzmIFFxqlkEAukOVyIJhPOj14&callback=initMap">
    </script> -->
</body>

</html>
