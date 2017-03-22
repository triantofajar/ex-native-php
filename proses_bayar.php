<?php


include 'koneksi.php';

$getnik = $_GET['nik'];

$id_bayar = $_POST['id_bayar'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$total = $_POST['total'];
$bayar = $_POST['bayar'];
$kembali = $_POST['kembali'];


//insert pembayaran
$sqlInsert = "INSERT INTO pembayaran(id_bayar,nik,total,bayar,kembali)
			  VALUES('$id_bayar','$nik','$total','$bayar','$kembali')";
$query = mysqli_query($connect,$sqlInsert);

//update fixed and invoice


$sqlGet= mysqli_query($connect,"SELECT * FROM pesan WHERE nama_klien = '".$nama."' 
					  AND fixed = '0' ");

//php random invoice
$invoice = mt_rand(1,1000);

while($result = mysqli_fetch_array($sqlGet)){

$fixed = "UPDATE pesan SET fixed = 1 , invoice ='$invoice' WHERE id_pesan = '" . $result['id_pesan'] . "' ";
$queryf = mysqli_query($connect,$fixed);

}

header("location:index.php?pg=view_invoice&&nik=$nik&&invoice=$invoice");

?>