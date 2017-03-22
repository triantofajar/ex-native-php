<?php
include 'koneksi.php';

$id=$_GET['id'];

	$sqlDetail = "SELECT * FROM pesan WHERE id_pesan = '$id'";
	$query = mysqli_query($connect,$sqlDetail);
	$data = mysqli_fetch_array($query,MYSQLI_BOTH);
?>
<style>
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #e6ecff}

th {
    background-color: #3366ff;
    color: white;
}

	
</style>


<div class="row">

<div class="box">
			  
			  <hr>
                <h2 class="page-header"><center>DETAIL PEMESANAN</center> </h2>
             <hr>
             <div class="col-lg-10"  style="margin-left:2%;">

				<div class="row">
	<div class="col-md-10">
	<br>
	<h4>Nama Klien : <?php echo $data['nama_klien']; ?></h4>

	<?php
	


	$sqlView = "SELECT * FROM pesan WHERE id_pesan = '$id'";
	$query = mysqli_query($connect,$sqlView);
	$result = mysqli_fetch_array($query);
	?>
	<table class="table table-stripted responsive">
		<tr>
			<td width="200px">Tanggal Reserved</td>
			<td width="10px">:</td>
			<td> <?php echo $result['tgl'];?> </td>
		</tr>
		<tr>
			<td width="200px">Kategori</td>
			<td width="10px">:</td>
			<td> <?php echo $result['kategori'];?> </td>
		</tr>
		<tr>
			<td width="200px">Harga</td>
			<td width="10px">:</td>
			<td> <?php echo $result['harga'];?> </td>
		</tr>
		
		</table>

		<?php
		$konfirm = $data['konfirm'];

		if($konfirm == 0){
		?>
		<center><a href="?menu=daftar_pesanan" class="btn btn-danger">Back</a>&nbsp;&nbsp;<a href="actionConfirm.php?id=<?php echo $data['id_pesan']; ?>" class="btn btn-primary">Konfirmasi</a></center>
		<?php
		}
		elseif ($konfirm == 1) {
		?>
		<center><button type ="button" class="btn btn-danger" >Sudah Dikonfirmasi</a></center>
		<?php
		} ?>

		
  
	</div>
</div>