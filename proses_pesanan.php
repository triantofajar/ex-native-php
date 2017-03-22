<?php

include "koneksi.php";
session_start();

if(isset($_SESSION['nik'])){
  $nik = $_SESSION['nik'];
}

if(isset($_POST['simpan'])){
  $date=date('Y-m-d');
  $id_pesan = $_POST["id_pesan"];
  $id_paket=$_POST["id_paket"];
  $nik=$_POST["nik"];
  $nama_klien=$_POST["nama_klien"];
  $tgl=$_POST["tgl"];
  $harga=$_POST["harga"];
  $kategori=$_POST["kategori"];



	$query = "INSERT INTO pesan(id_pesan,id_paket,nik,tgl_pesan,nama_klien,tgl,harga,kategori)VALUES('$id_pesan','$id_paket','$nik','$date','$nama_klien','$tgl','$harga','$kategori')";
	$sql=mysqli_query($connect,$query) or die(mysqli_error($connect));

	//$error = mysqli_error($connect);
	//echo $query;
	header("location:index.php?pg=view_pesanan&&nik=$nik");
}elseif (isset($_GET['del'])){
  
  $query = "DELETE FROM pesan WHERE id_pesan='". $_GET['id'] ."'";
  $sql = mysqli_query($connect,$query);

  header("location:index.php?pg=view_pesanan&&nik=$nik");

}
?>