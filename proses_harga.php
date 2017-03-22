<?php

include "koneksi.php";

if(isset($_POST['save'])){



  $kategori=$_POST["kategori"];
  $durasi=$_POST["durasi"];
  $harga=$_POST["harga"];
  $minimalpemesanan=$_POST["min_pemesanan"];
  $masaberlaku=$_POST["masa_berlaku"];
  $sistempembayaran=$_POST["sistem_pembayaran"];

	$query = "INSERT INTO paket VALUES ('','$kategori','$durasi','$harga','$minimalpemesanan','$masaberlaku','$sistempembayaran')";
	$sql=mysqli_query($connect,$query);
	//$error = mysqli_error($connect);
	//echo $query;
	header("location:admin.php?menu=manage_harga");

}

elseif (isset($_GET['del'])){
	
	$query = "DELETE FROM paket WHERE No='". $_GET['id'] ."'";
	$sql = mysqli_query($connect,$query);

	header("location:admin.php?menu=manage_harga");

}elseif (isset($_POST['edit_harga'])) {
  $id=$_POST["no"];
  $kategori=$_POST["kategori"];
  $durasi=$_POST["durasi"];
  $harga=$_POST["harga"];
  $min_pemesanan=$_POST["min_pemesanan"];
  $masa_berlaku=$_POST["masa_berlaku"];
  $sistem_pembayaran=$_POST["sistem_pembayaran"];

	$query = "UPDATE paket SET kategori='$kategori', durasi='$durasi',
				harga='$harga', min_pemesanan='$min_pemesanan', masa_berlaku='$masa_berlaku', sistem_pembayaran='$sistem_pembayaran' WHERE no='$id'";

	$sql = mysqli_query($connect,$query);
   // echo $query;
	header("location:admin.php?menu=manage_harga");

}
elseif (isset($_POST['reset'])) {
  header("location:admin.php?menu=manage_harga");
}


?>