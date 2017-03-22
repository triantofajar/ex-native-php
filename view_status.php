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



	$query = "SELECT * FROM pesan WHERE nama_klien='$nama_klien' ";
	$sql = mysqli_query($connect,$query);


?>
<div class="box">
	<h2>STATUS PEMESANAN</h2>

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
		<th>Tanggal</th>
		<th>Kategori</th>
		<th>Tarif</th>
		<th>Status</th>
		
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
			<td align="left"><?php echo $no++; ?></td>
			<td align="left"><?php echo $data['tgl']; ?></td>
			<td align="left"><?php echo $data['kategori']; ?></td>
			<td align="left">Rp. <?php echo number_format($data['harga']); ?></td>
			<td width="50">
			<?php
			$konfirm = $data['konfirm'];

			if($konfirm == 1){
				echo "Sudah Di Konfirmasi ";

			}
			elseif ($konfirm == 0 ) {
				echo "Belum Di Konfirmasi Admin";
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