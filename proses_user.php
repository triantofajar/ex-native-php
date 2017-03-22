<?php

include "koneksi.php";

if(isset($_POST['simpan'])){

  $user=$_POST["user"];
  $password=md5($_POST["password"]);
  $nama=$_POST["nama"];
  $petugas=$_POST["petugas"];
  $alamat=$_POST["alamat"];
  $email=$_POST["email"];
  $tlp=$_POST["tlp"];
  $hak_akses=$_POST["hak_akses"];

	$query = "INSERT INTO user VALUES ('','$user','$password','$nama','$petugas','$alamat',
				'$email','$tlp','$hak_akses')";
	$sql=mysqli_query($connect,$query);
	//$error = mysqli_error($connect);
  // echo $query;
  header("location:admin.php?menu=manage_user");

}

elseif (isset($_GET['del'])){
	
	$query = "DELETE FROM user WHERE id_user='". $_GET['id'] ."'";
	$sql = mysqli_query($connect,$query);

	header("location:admin.php?menu=manage_user");

}elseif (isset($_POST['edit_user'])) {
  $id=$_POST['id_user'];	
  $user=$_POST["user"];
  $password=md5($_POST["password"]);
  $nama=$_POST["nama"];
  $petugas=$_POST["petugas"];
  $alamat=$_POST["alamat"];
  $email=$_POST["email"];
  $tlp=$_POST["tlp"];
  $hak_akses=$_POST["hak_akses"];

	$query = "UPDATE user SET username='$user', password='$password',
				nama_klien='$nama',nama_petugas='$petugas', alamat='$alamat', email='$email',
				no_tlp='$tlp',hak_akses='$hak_akses' WHERE id_user='$id'";

	$sql = mysqli_query($connect,$query);
// echo $query;
	header("location:admin.php?menu=manage_user");

}
elseif (isset($_POST['reset'])) {
  header("location:admin.php?menu=manage_user");
}

?>