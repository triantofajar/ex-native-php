<?php
include 'koneksi.php';


	$query = "SELECT * FROM paket WHERE kategori='paket wisata yogyakarta'";
	$sql = mysqli_query($connect,$query);
	$data = mysqli_fetch_array($sql,MYSQLI_BOTH);
?>

<div class="row">
<div class="box">
			<hr>
                <h2 class="page-header"><center>PAKET WISATA YOGYAKARTA</center> </h2>
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
                <h3><b>Jadwal Intenery</b> <i class="glyphicon glyphicon-list-alt"></i></h3>
				<br>
				<h5>Hari Pertama</h5>
				  <ul>
					<li>Tiba di Jogjakarta</li>
                    <li>Candi Borobudur</li>
					<li>Makan Siang</li>
					<li>Malioboro</li>
					<li>Makan Malam</li>
					<li>Check in Hotel</li>
                </ul>
				<br>
				<h5>Hari Kedua</h5>
				  <ul>
                    <li>Sarapan Pagi</li>
					<li>Goa Pindul</li>
					<li>Air Terjun Sri Gethuk</li>
					<li>Makan Siang</li>
					<li>Pantai Indrayanti</li>
					<li>Makan Malam</li>
					<li>Kembali ke Hotel</li>
                </ul>
				<br>
				<h5>Hari Ketiga</h5>
				  <ul>
                    <li>Sarapan pagi</li>
					<li>Prambanan</li>
					<li>Makan Siang</li>
					<li>Shopping Tour</li>
					<li>D'Mata Musium</li>
					<li>Makan Malam</li>
                </ul>
				<br>
				<h5>Hari Keempat</h5>
				  <ul>
                    <li>Check Out</li>
                </ul>
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

<div class="row">
		<div class="box">
			<div class="col-lg-12">
			        <hr>
                    <h2 class="intro-text text-center"><b>TEMPAT MENARIK</b></h2>
                    <hr>
				<div class="col-md-4 portfolio-item">
                <a href="#">
                    <img src="img/paket/yogya1.jpg" height="200" width="350" alt="">
                </a>   
            </div>
			
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="img/paket/yogya2.jpg" height="200" width="350" alt="">
                </a>   
            </div>
			
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="img/paket/yogya3.jpg" height="200" width="350" alt="">
                </a>
            </div>
			</div>
		</div>
</div>



        


          


