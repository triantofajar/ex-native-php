<?php

$getkategori = $_GET['kategori'];
include 'koneksi.php';


	$query = "SELECT * FROM paket WHERE kategori='$getkategori'";
	$sql = mysqli_query($connect,$query);
	$data = mysqli_fetch_array($sql,MYSQLI_BOTH);
?>

<div class="row">
<div class="box">
			<hr>
                <h2 class="page-header"><center><?php echo $data['kategori']; ?></center> </h2>
             <hr>
             <div class="col-lg-10"  style="margin-left:2%;">

              <div class="row">
	<div class="col-md-10">
	<br><br>
		<table class="table table-hover">
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
				<td width="200px">HARGA</td>
				<td width="10px">:</td>
				<td> <?php echo $data['harga'];?> </td>
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
	</div>
</div>

	<?php

	if(isset($_SESSION['id'])){
		?>
	<div class="col-md-8">
	<center><a href="?pg=pesanan&&paket=<?php echo $data['kategori'];?>" class="btn btn-primary">Reserved</a></center>
	</div>
	<?php
	} ?>

            <div class="col-md-8">
                 <h3><b>Jadwal Intenery</b> <i class="glyphicon glyphicon-list-alt"></i></h3>
				<br>
				<div class="panel panel-default">
  <div class="panel-body" ><p> <?php echo $data['rincian'];?></p> </div>
</div>
				 
			
				<br>
				<h5>Note :</h5>
				  <ul>
                    <li>Harga sewaktu – waktu masih dapat berubah</li>
					<li>S = Snack, B = Breakfast, L = Lunch, D=Dinner</li>
					<li>Pembayaran pertama cukup 25% dari harga dan sisanya H-5 Sebelum Keberangkatan</li>
					<li>Pembayaran bisa melalui transfer ke Nomer Rek Bank GTR TOUR TRAVEL</li>
					<li>Bank Mandiri      :  1660001484955 An. VINO ASIDO</li>
					<li>Bank BCA          : 0662496934 An. ANDREW YUNAN</li>
                </ul>
                </div>
            </div>
</div>
</div>



        


          


