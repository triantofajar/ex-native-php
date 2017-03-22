<?php
include 'koneksi.php';


	$query = "SELECT * FROM paket WHERE kategori='paket wisata garut'";
	$sql = mysqli_query($connect,$query);
	$data = mysqli_fetch_array($sql,MYSQLI_BOTH);
?>
<div class="row">

	<div class="box">
	
                <div class="col-lg-10"  style="margin-left:2%;">
				<hr>
                <h2 class="page-header"><center>PAKET UMROH</center> </h2>
				<hr>
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
	</div>
</div>


				

				
                   
                    <div class="col-md-8">
                <!-- <h3><b>HARGA UMROH Rp 18,5 + Rp 1,1 Juta</b></h3> -->
				<!-- <h3><b>Fasilitas hotel bintang 3 program umroh 9 hari</b></h3> -->
				<br>
				<h5>Harga Umroh Termasuk :</h5>
                <ul>
					<li>Tiket pesawat ekonomis class</li>  
					<li>Hotel sesuai program (hotel bintang 3/setaraf)</li>
					<li>Makan sehari 2x</li>  
					<li>Pembimbing dan Muthowif</li>  
					<li>Bus AC</li>
					<li>Ziarah di makkah dan madinah</li>
					<li>Manasik</li>
					<li>Air zamzam 5 liter</li>
				</ul>
				<br>
				
				<h5>Biaya Umroh Tidak Termasuk :</h5>
                <ul>
					<li>Pasport</li>
					<li>Handling dan Perlengakapan Rp 1,1 Juta</li>
					<li>Kartu kuning meningitis</li>
					<li>Surat keterangan mahram Rp 300.000</li>
					<li>Kelebihan bagasi</li>
					<li>Keperluan pribadi</li>
					<li>Biaya pengobatan dan tindakan medis lainnya serta biaya pengurusan jenazah - Pengiriman perlengkapan Rp 100.ribu untuk plulau jawa dan Rp 150.000 untuk </li>
					
				</ul>
				<br>
				
				</div>
                </div>
            </div>
</div>


<div class="row">
		<div class="box">
			<div class="col-lg-12">
			        <hr>
                    <h2 class="intro-text text-center"><b>KLIEN KAMI</b></h2>
                    <hr>
				<div class="col-md-4 portfolio-item">
                <a href="#">
                    <img src="img/umroh1.jpg" height="200" width="350" alt="">
                </a>   
            </div>
			
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="img/umroh2.jpg" height="200" width="350" alt="">
                </a>   
            </div>
			
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="img/umroh3.jpg" height="200" width="350" alt="">
                </a>
            </div>
			
			
			
			</div>
		
		
		</div>

</div>