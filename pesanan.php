<link rel="stylesheet" href="datepicker/themes/base/jquery.ui.all.css">
<script src="datepicker/js/jquery-1.7.2.js"></script>
<script src="datepicker/ui/jquery.ui.core.js"></script>


<script src="datepicker/ui/jquery.ui.widget.js"></script>
<script src="datepicker/ui/jquery.ui.datepicker.js"></script>
<script>
$(function() {
	$( "#datepicker" ).datepicker({
	dateFormat:"yy/mm/dd",
		changeMonth: true,
		changeYear: true
	});
});
</script>

<?php
include 'koneksi.php';

$paket=$_GET['paket'];

	$query = "SELECT * FROM paket WHERE kategori='$paket'";
	$sql = mysqli_query($connect,$query);
	$data = mysqli_fetch_array($sql,MYSQLI_BOTH);
?>



<div class="row">

<div class="box">
			  
			  <hr>
                <h2 class="page-header"><center>FORM RESERVED</center> </h2>
             <hr>
             <div class="col-lg-10"  style="margin-left:2%;">

				<div class="row">
	<div class="col-md-10">
	<br><br>
	<form action="proses_pesanan.php" method="POST" enctype="multipart/form">
		<table class="table table-hover">
		<input type="hidden" name="id_paket" value="<?php echo $data['no']; ?>">
			<tr>
				<td width="200px">NIK</td>
				<td width="10px">:</td>
				<td><input type="text" name="nik" class="form-control input-md" value="<?php echo $_SESSION['nik']; ?>"> </td>
			</tr>
			<tr>
				<td width="200px">NAMA</td>
				<td width="10px">:</td>
				<td><input type="text" name="nama_klien" class="form-control input-md"  value="<?php echo $_SESSION['nama_klien']; ?>"></td>
			</tr>
			<tr>
				<td width="200px">TANGGAL</td>
				<td width="10px">:</td>
				<td><input type="text" name="tgl" class="form-control input-md" id="datepicker"></td>
			</tr>
			<tr>
				<td width="200px">HARGA (Rp.)</td>
				<td width="10px">:</td>
				<td><input type="text" name="harga" class="form-control input-md" value="<?php echo $data['harga']; ?>"></td>
			</tr>
			<tr>
				<td width="200px">KATEGORI</td>
				<td width="10px">:</td>
				<td><input type="text" name="kategori" class="form-control input-md" value="<?php echo $data['kategori']; ?>"></td>
			</tr>

			

		</table>
		<center><button type="submit" id="" name="simpan" class="btn btn-primary">Simpan</button></center>
  
	</div>
</div>