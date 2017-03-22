<?php
include 'koneksi.php';


	$query = "SELECT * FROM paket WHERE kategori='paket wisata malang'";
	$sql = mysqli_query($connect,$query);
	$data = mysqli_fetch_array($sql,MYSQLI_BOTH);
?>

<div class="row">
<div class="box">
			<hr>
                <h2 class="page-header"><center>PAKET WISATA MALANG</center> </h2>
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
					<li>Team kami akan menjemput anda beserta rombongan di Surabaya / Malang</li>
                    <li>Setelah semua rombongan masuk kedalam mobil, team kami akan membagikan snack beserta air mineral. Lalu semua rombongan menuju Bromo</li>
					<li>Makan siang di RM. Tongas Asri</li>
					<li>Setelah makan siang, kami ajak anda untuk mengunjungi Tempat Wisata Air Terjun Madakaripura</li>
					<li>Menuju Hotel</li>
					<li>Check in Hotel</li>
					<li>Makan malam di Hotel dan istirahat</li>
                </ul>
				<br>
				<h5>Hari Kedua</h5>
				  <ul>
                    <li>Bersiap – siap Bromo Sunrise Tour</li>
					<li>Menuju penanjakan 1 dengan Jeep</li>
					<li>Menunggu & Menikmati Sunrise</li>
					<li>Destinasi selanjutnya adalah Kawah Bromo</li>
					<li>Kembali ke Hotel</li>
					<li>Breakfast & Check out, Menuju Kota Batu Malang</li>
					<li>Makan siang di RM. Warung Wareg</li>
					<li>Anda akan kami ajak untuk mengunjungi Museum Angkut dan mengunjungi tempat wisata menarik lainnya di Batu yaitu Batu Night Spectacular</li>
					<li>Makan Malam</li>
					<li>Check in Hotel dan Istirahat</li>
                </ul>
				<br>
				<h5>Hari Ketiga</h5>
				  <ul>
                    <li>sarapan pagi</li>
					<li>mengunjungi tempat wisata Air Terjun Coban Rondo</li>
					<li>mengunjungi tempat wisata Agrowisata di Kusuma Agro</li>
					<li>mengunjungi tempat wisata Jatim Park 2 (*Museum Satwa & Batu Secret Zoo )</li>
					<li>Makan Malam di Lokal Resto</li>
					<li>Kembali ke Hotel</li>
					<li>beristirahat dan selanjutnya acara bebas</li>
                </ul>
				<br>
				<h5>Hari Keempat</h5>
				  <ul>
                    <li>sarapan pagi</li>
					<li>Check Out</li>
					<li>Belanja Oleh – oleh</li>
					<li>Makan siang di Lokal Resto</li>
					<li>Transfer ke Airport / Stasiun</li>
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
                    <img src="img/paket/malang1.jpg" height="200" width="350" alt="">
                </a>   
            </div>
			
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="img/paket/malang2.jpg" height="200" width="350" alt="">
                </a>   
            </div>
			
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="img/paket/malang3.jpg" height="200" width="350" alt="">
                </a>
            </div>
			</div>
		</div>
</div>


        


          


