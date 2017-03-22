<?php

include "koneksi.php";

if(isset($_POST["simpan"])){

  $id_user = $_POST["id_user"];
  $nik=$_POST["nik"];
  $username=$_POST["username"];
  $password=md5($_POST["password"]);
  $nama_klien=$_POST["nama_klien"];
  $alamat=$_POST["alamat"];
  $hak_akses = $_POST["hak_akses"];


	$queryInsert = "INSERT INTO user VALUES('$id_user','$nik','$username','$password','$nama_klien','$alamat','$hak_akses')";
	$sql=mysqli_query($connect,$queryInsert) or die (mysqli_error($connect));
	//$error = mysqli_error($connect);
	//echo $query;
	header("location:index.php");
}
?>