<div class="col-md-10" style="margin-left: 2%;" >


<?php
	include "koneksi.php";


//getnik reserved
$getnik = $_GET['nik'];
$getinvoice = $_GET['invoice'];




	$query = "SELECT * FROM pesan WHERE nik='$getnik' AND invoice = $getinvoice";
	$sql = mysqli_query($connect,$query);


?>
<div class="box">
	<h2 align="center">INVOICE</h2>

	

<div class="panel panel-default">
  <div class="panel-body text-left" style="background-color: #E5E4E2">
  

  </div>

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

<div class="col-md-8 pul-right">
<a href="cetak.php?&&nik=<?php echo $getnik;?>&&invoice=<?php echo $getinvoice; ?>" target="_blank" class="btn btn-warning">Cetak Invoice</a>
</div>


	  
	
	</div>
</div>

	</div>