<?php
include 'koneksi.php';

$id=$_GET['id'];

	$query = "SELECT * FROM pesan JOIN paket 
			  ON pesan.id_paket = paket.no 
			  WHERE pesan.id_pesan = '$id'";
	$sql = mysqli_query($connect,$query);
	$data = mysqli_fetch_array($sql,MYSQLI_BOTH);
?>



<div class="row">

<div class="box">
			  
			  <hr>
                <h2 class="page-header"><center>DETAIL PESANAN</center> </h2>
             <hr>
             <div class="col-lg-10"  style="margin-left:2%;">

				<div class="row">
	<div class="col-md-10">
	<br><br>
	<table class="table table-bordered">
		<tr>
			<td width="200px">KATEGORI</td>
			<td width="10px">:</td>
			<td> <?php echo $data['kategori'];?> </td>
		</tr>
		<tr>
			<td width="200px">DURASI</td>
			<td width="10px">:</td>
			<td> <?php echo $data['durasi'];?> </td>
		</tr>
		<tr>
			<td width="200px">MINIMAL PEMESANAN</td>
			<td width="10px">:</td>
			<td> <?php echo $data['min_pemesanan'];?> </td>
		</tr>
		<tr>
			<td width="200px">MASA BERLAKU</td>
			<td width="10px">:</td>
			<td> <?php echo $data['masa_berlaku'];?> </td>
		</tr>
		<tr>
			<td width="200px">SISTEM PEMBAYARAN</td>
			<td width="10px">:</td>
			<td> <?php echo $data['sistem_pembayaran'];?> </td>
			</tr>

			

		</table>
		<center><a href="?pg=view_pesanan&&nik=<?php echo $data['nik']; ?>" class="btn btn-danger">Back</a></center>
  
	</div>
</div>