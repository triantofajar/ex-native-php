<div class="col-md-12" style="text-align: center; margin-left: 2%;" >


<?php
	include "koneksi.php";

$nama_klien=$_SESSION['nama_klien'];




$per_page=10;

if (isset($_GET['pg'])) {

	$page = $_GET['pg'];

}else {

	$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;

$query_limit = "LIMIT $start_from, $per_page";




	$query = "SELECT * FROM pesan WHERE nama_klien='$nama_klien' AND konfirm = 1  ";
	$sql = mysqli_query($connect,$query);


?>
<div class="box">
	<h2>PEMBAYARAN</h2>

	<?php	


	$sqlNama = "SELECT * FROM pesan WHERE nama_klien = '$nama_klien'";
	$query = mysqli_query($connect,$sqlNama);
	$tmp = mysqli_fetch_array($query);

	?>

	<div class="panel panel-default">
  		<div class="panel-body text-left" style="background-color: #E5E4E2">
  			<table>
				<tr>
					<td align="left">NIK : <?php echo $tmp['nik']; ?></td>
				</tr>
				<tr>
					<td align="left">Nama Pemesan : <?php echo $tmp['nama_klien']; ?></td>
				</tr>
			</table>
  		</div>

	</div>
<br>
	
<br>
	<table class='table table-stripted-bordered'>
	<thead>	
	<tr>
		<th>No</th>
		<th>No Invoice</th>
		<th>Tanggal Keberangkatan</th>
		<th>Kategori</th>
		<th>Tarif</th>
		<th>Pembayaran</th>
		
	</tr>
	</thead>
	<?php

$no = 1;

$count = mysqli_num_rows($sql);

if($count<1){
	echo "<tr><td colspan='9'><center>Menunggu Konfirmasi Admin</center></td></tr>";
}else{

	while($data=mysqli_fetch_array($sql,MYSQLI_BOTH)){


?>

	<tr>
			<td align="left"><?php echo $no++; ?></td>
			<td align="left"><?php echo $data['invoice']; ?></td>
			<td align="left"><?php echo $data['tgl']; ?></td>
			
			<td align="left"><?php echo $data['kategori']; ?></td>
			<td align="left">Rp. <?php echo number_format($data['harga']); ?></td>
			<td width="50">
			<?php
			if($data['uploads']==NULL){
			?>
			<a href="?pg=form_pembayaran&&id=<?php echo $data['id_pesan']; ?>" class="btn btn-danger" >Process</a>
			<?php
			}else{
				if($data['konfirmBayar']==0){
					echo "Wait for Confirm";
				}else{
				?>
				<a href="kwitansiCetak.php?id=<?php echo $data['id_pesan']; ?>" class="btn btn-success" target="_blank" >Kwitansi</a>
			<?php 
			}
				}
			?>
			
			</td>

		</tr>

<?php
	}
}
?>
</table>


	
</div>

	</div>