<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cetak Invoice</title>

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

</head>


<body onload="window.print()">
<br><br><br>
<div class="col-md-10" style="margin-left: 2%;" >

<h2 align="center">GTR TOUR AND TRAVEL</h2>
<hr>

<br>

<?php
	include "koneksi.php";


//getnik reserved
$getnik = $_GET['nik'];
$invoice = $_GET['invoice'];

	$query = "SELECT * FROM pesan WHERE nik='$getnik' AND invoice = $invoice";
	$sql = mysqli_query($connect,$query);


?>
<div class="box">
	<h2 align="center">INVOICE</h2>
	<h4 align="center">NO INVOICE = <?php echo $invoice; ?></h4>

</div>

	<?php

	

	$sqlNama = "SELECT * FROM pesan WHERE nik = '$getnik'";
	$query = mysqli_query($connect,$sqlNama);
	$tmp = mysqli_fetch_array($query);

	?>
<br>
	<table>
		
		<tr>
		<td align="left">NIK : <?php echo $tmp['nik']; ?></td>
		</tr>
		<tr>
		<td align="left">Nama Pemesan : <?php echo $tmp['nama_klien']; ?></td>
		</tr>

	</table>
<br>
	<table class='table table-bordered'>
	<thead>	
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Kategori</th>
		<th>Tarif</th>
	
		
	</tr>
	</thead>
	<?php

$no = 1;

$count = mysqli_num_rows($sql);

if($count<1){
	echo "<tr><td colspan='9'><center>Data Tidak Ditemukan!</center></td></tr>";
}else{

	while($data=mysqli_fetch_array($sql,MYSQLI_BOTH)){


?>

	<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['tgl']; ?></td>
			<td><?php echo $data['kategori']; ?></td>
			<td>Rp. <?php echo number_format($data['harga']); ?></td>
		</tr>


<?php
	}
}
?>

<?php

//sum harga

$sqlSum = "SELECT * FROM pembayaran
		   WHERE nik = '$getnik'";
$query = mysqli_query($connect,$sqlSum);
$total = mysqli_fetch_array($query);

?>

<tr>
<td>Total Pembayaran (Rp. )</td><td>:</td><td colspan="3">Rp.<?php echo number_format($total['total']); ?></td>
</tr>


</table>


	
	</div>
</div>

	</div>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>