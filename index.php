<?php
session_start();

if(isset($_GET['pg'])) $page = $_GET['pg']; else $page = "index";
if(isset($_SESSION['nama_klien'])){
  $nama_klien = $_SESSION['nama_klien'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>GTR Tour And Travel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <!--Start JS Datepicker-->
    <script src="js/jquery.js"></script>

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     
  
</head>

<body>

    <div class="brand">GTR Tour And Travel</div>
    <div class="address-bar">Jl. Garuda V no. 287 Blok. B Bekasi Utara Perumahan Babelan Indah</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php]">GTR Tour And Travel</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" >
                    <li>
                        <a href="?pg=index">Beranda</a>
                    </li>
                    <li>
                        <a href="" class="bdropdown-toggle" type="button" data-toggle="dropdown">Layanan Kami<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="?pg=paketw">Paket Wisata</a></li>
							<li><a href="?pg=paketu">Paket Umroh</a></li>
							<li><a href="?pg=hotel">Hotel</a></li>
							<li><a href="#">Visa</a></li>
						</ul>
                    </li>
                   

                    <?php
                    if(!isset($_SESSION['id'])){

                    ?>
                    <li>
                        <a href="?pg=fasilitas">Fasilitas</a>
                    </li>
                    <li>
                        <a href="?pg=kontak">Kontak Kami</a>
                    </li>
                    <?php
                        }
                   
                     elseif(isset($_SESSION['id'])){

                     ?>
                     <li>
                        <a href="" class="bdropdown-toggle" type="button" data-toggle="dropdown">PEMESANAN<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="?pg=view_pesanan">View Pemesanan</a></li>
                          <li><a href="?pg=view_status">Status Pesanan</a></li>
                        </ul>
                     </li>

                     <li>
                         <a href="?pg=konfirmasi_bayar">Pembayaran</a>
                     </li>
                     <?php
                         } ?>          

                    
					 
                    <?php
                    if(isset($_SESSION['id'])){
                        include 'panelLogout.php';

                    }elseif (!isset($_SESSION['id'])) {
                        include 'login.php';
                        
                    }

                    ?>




                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
	<?php
 //halaman home
            if($page=="index") include 'isi.php';
			
			//halamanlayanan
             
    		 else if($page=="paketw") include 'paketwisata.php';
			 else if($page=="paketu") include 'paketumroh.php';
			 
			 //halamankontak
			 else if($page=="kontak") include 'kontak.php';
			 
			 //halaman fasilitas
			 else if($page=="fasilitas") include 'fasilitas.php';
			 
			 //halaman paket wisata
			 else if($page=="paketg") include 'paket_garut.php';
			 else if($page=="pakets") include 'paket_semarang.php';
			 else if($page=="pakety") include 'paket_yogya.php';
			 else if($page=="paketl") include 'paket_lombok.php';
			 else if($page=="paketb") include 'paket_bali.php';
			 else if($page=="paketr") include 'paket_rajaampat.php';
			 else if($page=="paketm") include 'paket_malang.php';
			 else if($page=="paketmalay") include 'paket_malaysia.php';
			 else if($page=="paketh") include 'paket_hongkong.php';
       else if($page=="pesanan") include 'pesanan.php';
       else if($page=="photel") include 'pesananhotel.php';
       else if($page=="view_pesanan") include 'view_pemesanan.php';
       else if($page=="view_status") include 'view_status.php';
             
       else if($page=="detail") include 'detail_pesanan.php';
       else if($page=="view_invoice") include 'view_invoice.php';
       else if($page=="invoice") include 'cetak.php';
       else if($page=="konfirmasi_bayar") include 'konfirmasiBayar.php';
       else if($page=="form_pembayaran") include 'formPembayaran.php';
                        

           
           

             //detail paket
             else if($page=="paket") include 'paket.detail.php';




             //halaman hotel
             else if($page=="hotel") include 'hotel.php';
             else if($page=="tarif") include 'tarif_hotel.php';

              else if($page=="signup") include 'form_signup.php';
?>

    </div>
    <!-- /.container -->
	
	

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright PUTRIHDYN 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
