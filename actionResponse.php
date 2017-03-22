<?php

include 'koneksi.php';

$id = $_GET['id'];

$response = $_POST['respon'];

$uResponse = "UPDATE pesan SET response = '$response' WHERE id_pesan = '$id'";
$query = mysqli_query($connect,$uResponse);

header("location:admin.php?menu=departure");





?>