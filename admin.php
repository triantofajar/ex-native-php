<?php
session_start();

$id1=$_SESSION['id'];
$id2=session_id();

if (isset($_SESSION['id']))
{
    // jika level admin
    if ($_SESSION['hak_akses'] == "user")
   {   
    header('location:menu-bar.php');
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
 }else{
    header("location: index.php");
 }
if(isset($_GET['menu']))$page = $_GET['menu'];else $page = "index";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin GTR TOURandTRAVEL</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 <!--Start JS Datepicker-->
  <script src="js/jquery.js"></script> 
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background: #0066cc">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color: #f9ecf2">GTR TOUR AND TRAVEL Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav" >
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" >
                <ul class="nav navbar-nav side-nav" style="background: #004d99">
                    <li class="active">
                        <a href="?menu=index" style="color: #f9ecf2"><i class="glyphicon glyphicon-home"></i> Beranda</a>
                    </li>
                    <li>
                        <a href="?menu=daftar_pesanan" style="color: #f9ecf2"><i class="glyphicon glyphicon-save"></i>Pemesanan Masuk</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo" style="color: #f9ecf2"><i class="glyphicon glyphicon-list-alt"></i> Manajemen<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="?menu=manage_user" style="color: #f9ecf2">User</a>
                            </li>
                            <li>
                                <a href="?menu=pelanggan" style="color: #f9ecf2">Pelanggan</a>
                            </li>
                            <li>
                                <a href="?menu=manage_harga" style="color: #f9ecf2">Harga</a>
                            </li>
                            <li>
                                <a href="?menu=hotel" style="color: #f9ecf2">Hotel</a>
                            </li>
                            <li>
                                <a href="?menu=view_wisata" style="color: #f9ecf2">Wisata</a>
                            </li>
                            
                            <li>
                                <a href="?menu=fasilitas" style="color: #f9ecf2">Fasilitas</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                     <a href="?menu=bayarConfirm" style="color: #f9ecf2"><i class="glyphicon glyphicon-list-alt"></i> Konfirmasi Pembayaran</a>
                    </li>
                   
                     <li>
                     <a href="?menu=departure" style="color: #f9ecf2"><i class="glyphicon glyphicon-list-alt"></i> Pemberangkatan</a>
                    </li>
                   

                    <li>
                        <a href="?menu=report" style="color: #f9ecf2"><i class="glyphicon glyphicon-folder-open"></i>Report</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

               <?php
                if($page=="index")include 'home_admin.php';
                if($page=="daftar_pesanan")include 'pemesanan_masuk.php';

                if($page=="report")include 'report.php';
                if($page=="bayarConfirm")include 'viewBayar.php';


                if($page=="manage_user")include 'manage_user.php';
                if($page=="form_user")include 'user.php';
                if($page=="edit_user")include 'edit_user.php';


                if($page=="pelanggan")include 'manage_pelanggan.php';

                if($page=="form_fasilitas")include 'armada.php';
                if($page=="fasilitas")include 'manage_fasilitas.php';
                if($page=="edit_fasilitas")include 'edit_fasilitas.php';

                if($page=="form_hotel")include 'form_hotel.php';
                if($page=="hotel")include 'manage_hotel.php';
                if($page=="edit_hotel")include 'edit_hotel.php';


                
                if($page=="view_konf")include 'view_konfirmasi.php';
                if($page=="detail")include 'detail_konfirm.php';
                if($page=="departure")include 'viewDeparture.php';



                if($page=="manage_harga")include 'manage_harga.php';
                if($page=="edit_harga")include 'edit_harga.php';
                if($page=="tambah_harga")include 'form_harga.php';


                if($page=="view_wisata")include 'manage_wisata.php';
                if($page=="add_wisata")include 'form_wisata.php';
                if($page=="edit_wisata")include 'edit_wisata.php';



                



            
               ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
