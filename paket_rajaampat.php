<?php
include 'koneksi.php';


	$query = "SELECT * FROM paket WHERE kategori='paket wisata raja ampat'";
	$sql = mysqli_query($connect,$query);
	$data = mysqli_fetch_array($sql,MYSQLI_BOTH);
?>

<div class="row">
<div class="box">
			<hr>
                <h2 class="page-header"><center>PAKET WISATA RAJA AMPAT</center> </h2>
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
					<li>Kami akan menjemput seluruh peserta tour di Airport Dominique Edward Osok, Sorong</li>
                    <li>menuju dermaga untuk berlayar dari Sorong menuju dermaga Waisai Raja Ampat dengan kapal Marina Express dengan waktu tempuh 2 jam</li>
					<li>Tiba di dermaga Locbon Waisai, selanjutnya kita akan menuju Hotel Raja Ampat City</li>
					<li>Makan Malam</li>
					<li>Tiba di Hotel Raja Ampat City, peserta check-in dan beristirahat, selanjutnya acara bebas</li>
                </ul>
				<br>
				<h5>Hari Kedua</h5>
				  <ul>
                    <li>sarapan pagi</li>
					<li>Menikmati Taman Laut Raja Ampat sembari kita menuju Painemo. Untuk mencapai puncak kita akan melakukan kegiatan Trekking menuju puncaknya</li>
					<li>Kita akan menuju Telaga Bintang, disini kita akan melakukan Trekking. Dari atas puncak kita akan menyaksikan Laguna berbentuk bintang</li>
					<li>Kita akan menuju homestay Pianemo untuk makan siang dan selanjutnya peserta tour beristirahat sejenak</li>
					<li>Kita akan menuju Arborek disini peserta bisa melakukan Snorkeling. Selain Snorkeling peserta juga bisa berwisata keliling Kampung Wisata Arborek</li>
					<li>Kita akan menuju Yenbuba Jety, disini peserta bisa melakukan Senorkeling</li>
					<li>Kita akan menuju Pasir Timbul untuk Wisata Pantai</li>
					<li>Makan Malam</li>
					<li>beristirahat dan selanjutnya acara bebas</li>
                </ul>
				<br>
				<h5>Hari Ketiga</h5>
				  <ul>
                    <li>sarapan pagi</li>
					<li>Menikmati Taman Laut Raja Ampat sembari kita menuju pulau Wayag</li>
					<li>Kita akan tiba di pos Wayag. Peserta beistirahat sejenak dan selanjutnya menuju puncak Wayag dengan melakukan aktifitas Trekking</li>
					<li>Peserta makan siang. Selesai makan siang, Peserta beristirahat sambil menikmati pemandangan pantai pulau Wayag</li>
					<li>Makan Malam</li>
					<li>beristirahat dan selanjutnya acara bebas</li>
                </ul>
				<br>
				<h5>Hari Keempat</h5>
				  <ul>
                    <li>sarapan pagi</li>
					<li>Kita akan mulai kegiatan City Tour mengunjungi Pantai (WTC), Tugu Selamat Datang (RAJA AMPAT) dan belanja souvenir khas Raja Ampat</li>
					<li>Kita akan kembali Hotel Raja Ampat City Waisai</li>
					<li>Makan Siang</li>
					<li>Kita akan kembali menuju dermaga Locbon Waisai</li>
					<li>Kita akan berlayar menuju dermaga Sorong menaiki kapal Marina Express dengan waktu tempuh 2 jam</li>
					<li>Kita akan tiba di dermaga Sorong, selanjutnya kita akan menuju Airport Dominique Edward Osok, Sorong </li>
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
                    <img src="img/paket/rajaampat1.jpg" height="200" width="350" alt="">
                </a>   
            </div>
			
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="img/paket/rajaampat2.jpg" height="200" width="350" alt="">
                </a>   
            </div>
			
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="img/paket/rajaampat3.jpg" height="200" width="350" alt="">
                </a>
            </div>
			</div>
		</div>
</div>


        


          


