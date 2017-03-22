<?php

include 'koneksi.php';

$id = $_GET['id'];

$updated = "UPDATE pesan SET konfirmBayar = 1 WHERE id_pesan = '$id'";
$query = mysqli_query($connect,$updated);

header("location:admin.php?menu=bayarConfirm");




?>