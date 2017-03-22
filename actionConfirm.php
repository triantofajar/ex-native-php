<?php

$id = $_GET['id'];

include 'koneksi.php';

$updateConfrim = "UPDATE pesan SET konfirm = 1 WHERE id_pesan = '$id'";
$query = mysqli_query($connect,$updateConfrim);

header("location:admin.php?menu=daftar_pesanan");




?>