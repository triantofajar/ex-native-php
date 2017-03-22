


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



	$query = "SELECT * FROM pesan WHERE nama_klien='$nama_klien' 
			  AND konfirm = 0 AND fixed = 0 ";
	$sql = mysqli_query($connect,$query);


?>
<div class="box">
	<h2>PEMESANAN</h2>

	<?php	


	$sqlNama = "SELECT * FROM pesan WHERE nama_klien = '$nama_klien' ";
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
		<th>Detail</th>
		
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
			<td width="50"><a id="recruit_detail" href="index.php?pg=detail&&id=<?php echo $data['id_pesan'];?>"><span class="glyphicon glyphicon-edit"></span></a>
			 <a id="actdelete" href="proses_pesanan.php?del=1&id=<?php echo $data['id_pesan'];?>"><span class="glyphicon glyphicon-trash"></span></a></td>

		</tr>

<?php
	}
}
?>
</table>


	<?php

	//sum harga

	$sqlSum = "SELECT SUM(harga) as total FROM pesan
			   WHERE nama_klien = '$nama_klien' AND konfirm = 0 AND fixed = 0";
	$query = mysqli_query($connect,$sqlSum);
	$total = mysqli_fetch_array($query);

	?>
	<form action="proses_bayar.php" method="POST">
		<table class="table table-stripted-bordered">
	<tr>
	<td>Total Pembayaran (Rp. )</td><td>:</td><td><input type="text" name="total" id="total" class="form-control responsive" value="<?php echo $total['total']; ?>" readonly="readonly" ></td>
	</tr>

	<input type="hidden" name="nik"  class="form-control responsive" value="<?php echo $tmp['nik']; ?>" >
	<input type="hidden" name="nama"  class="form-control responsive" value="<?php echo $tmp['nama_klien']; ?>" >
	
	<!-- <td>Bayar (Rp. )</td><td>:</td><td><input type="text" name="bayar" id="bayar" class="form-control responsive" value=""  ></td>
	</tr>
	<td>Kembali (Rp. )</td><td>:</td><td><input type="text" name="kembali" id="kembali" class="form-control responsive" value=""  ></td> -->
	</tr>
		</table>
	

	<div class="col-md-8">
	<center><input type="submit" name="submit" class="btn btn-warning" /></center>
	

	</form>
	  <script type="text/javascript">
	 
	        var total_form = document.getElementById('total');
	        var total = parseInt(total_form.value);
	        

	        var bayar_form = document.getElementById('bayar');

	        
	        bayar_form.onkeyup = function(){

	          var total_form = document.getElementById('total');
	          var total = parseInt(total_form.value);
	        

	          // var bayar_form = document.getElementById('bayar');
	          // var bayar = parseInt(bayar_form.value);

	          // var kembali_form = document.getElementById('kembali');
	          // var kembali = parseInt(kembali_form.value);

	          // var kembalian = 0 ;
	          // kembalian = bayar - total;

	          // kembali_form.value = kembalian; 
	          }

	</script> 

	
	
	</div>
</div>

	</div>