<?php


include "koneksi.php";
$username=$_POST["username"];
$password=md5($_POST["password"]); // encrypt password dengan md5 password

$query="SELECT * FROM user WHERE username='$username' AND password='$password'";
$login=mysqli_query($connect,$query) or die(mysqli_error($connect));
$check=mysqli_num_rows($login);

$data=mysqli_fetch_array($login,MYSQLI_BOTH);

if ($check>0){

// jika Username dan password ada didalam database daftarkan session
session_start();
$_SESSION['user'] = $username;
$_SESSION['hak_akses'] = $data['hak_akses'];
$_SESSION['nik'] = $data['nik'];
$_SESSION['nama_klien'] = $data['nama_klien'];
$_SESSION['id'] = session_id();


if($data['hak_akses']=="admin"){

	 echo "<strong><center>Berhasil Masuk";
	 echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php">'; 
}else{
	 //header("location:menu-bar.php");
	 echo "<strong><center>Berhasil Masuk";
	 echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=index.php">'; 
}
 
  
// segera redirect ke halaman admin

}
else{
	// echo $data;
 //header("location:index.php");
	print"
	<script>
	alert(\"Username atau Password Anda Salah!\");
	history.back(-1);
	</script>";
} 
?>