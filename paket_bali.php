<?php
include 'koneksi.php';


	$query = "SELECT * FROM paket WHERE kategori='paket wisata bali'";
	$sql = mysqli_query($connect,$query);
	$data = mysqli_fetch_array($sql,MYSQLI_BOTH);
?>

<div class="row">
<div class="box">
			<hr>
                <h2 class="page-header"><center>PAKET WISATA BALI</center> </h2>
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
					<li>Penjemputan di Ngurah Rai International Airport</li>
                    <li>Wisata di Pantai Kuta</li>
					<li>Lunch / Diner ( Conditional )</li>
					<li>Check in Hotel</li>
                </ul>
				<br>
				<h5>Hari Kedua</h5>
				  <ul>
                    <li>Wisata Bahari Tanjung Benoa dengan berbagai aktivitas seperti Banana Boat (Free), Parasailing, JetSky, Flying Fish, Sea Walker, Diving dan lainnya ( Biaya Pribadi )</li>
					<li>Wisata budaya di Garuda Wisnu Kencana Cultural Park, salah satu ikon pariwisata di Bali Selatan. Makan siang di Beranda's Resto GWK (Buffet Lunch)</li>
					<li>Wisata alam dengan mengunjungi Pantai Pandawa, destinasi wisata yang tergolong baru di Bali. Dengan suguhan pemandangan pantai yang begitu indah</li>
					<li>Wisata budaya di Pura Luhur Uluwatu, dengan panorama alam yang begitu mempesona. Wisatawan juga dapat menyaksikan Tari Kecak Api sembari menikmati matahari tenggelam (Biaya Pribadi)</li>
					<li>Makan malam di Jimbaran, dengan menu khas Grill Seafood Jimbaran. Setelah makan malam kembali ke hotel</li>
                </ul>
				<br>
				<h5>Hari Ketiga</h5>
				  <ul>
                    <li>Wisata mengunjungi Pura Taman Ayun, salah satu destinasi yang merupakan salah satu cagar budaya yang sudah berdiri sejak abad ke 17</li>
					<li>Wisata di Pura Ulun Danu Beratan, deretan perbukitan / pegunungan serta Danau Beratan menjadi daya tarik tersendiri desinasi ini, terlebih dengan udaranya yang sejuk</li>
					<li>Makan siang di lokal resto ( Buffet Lunch )</li>
					<li>Wisata belanja di Pusat Kaos Kata-kata Joger</li>
					<li>Mengunjungi Pura Tanah Lot, yang merupakan destinasi tervavorit di Bali dengan panorama alam yang mempesona</li>
					<li>Makan malam kuliner Bali (Hallal) Ayam Betutu. Setelah makan malam, kembali ke hotel</li>
                </ul>
				<br>
				<h5>Hari Keempat</h5>
				  <ul>
                    <li>Pusat oleh-oleh khas Bali Agung Bali / Hawai Bali / Krisna</li>
					<li>Makan siang lokal resto</li>
					<li>Transfer out menuju Ngurah Rai International Airport</li>
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
                    <img src="img/paket/bali1.jpg" height="200" width="350" alt="">
                </a>   
            </div>
			
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="img/paket/bali2.jpg" height="200" width="350" alt="">
                </a>   
            </div>
			
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="img/paket/bali3.jpg" height="200" width="350" alt="">
                </a>
            </div>
			</div>
		</div>
</div>


        


          


