<?php

include "koneksi.php";

if(isset($_POST['simpan'])){

  $kategori=$_POST["kategori"];
  $durasi=$_POST["durasi"];
  $harga=$_POST["harga"];
  $rincian=$_POST["rincian"];
  $berlaku=$_POST["berlaku"];
  $pembayaran=$_POST["pembayaran"];
  
  $target_dir = "uploads/";

  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  if(isset($_POST["simpan"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          // echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }

  
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }

	$query = "INSERT INTO paket VALUES ('','$kategori','$durasi','$harga','$rincian','$berlaku','$pembayaran','$target_file')";
	$sql=mysqli_query($connect,$query);
	//$error = mysqli_error($connect);
	//echo $query;
	header("location:admin.php?menu=view_wisata");

}

elseif (isset($_GET['del'])){
  
  $query = "DELETE FROM paket WHERE no='". $_GET['no'] ."'";
  $sql = mysqli_query($connect,$query);

  header("location:admin.php?menu=view_wisata");

}elseif (isset($_POST['edit_wisata'])) {
  
  $no = $_POST["no"];
  $kategori=$_POST["kategori"];
  $durasi=$_POST["durasi"];
  $harga=$_POST["harga"];
  $rincian=$_POST["rincian"];
  $berlaku=$_POST["berlaku"];
  $pembayaran=$_POST["pembayaran"];

  $target_dir = "uploads/";
  
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  if(isset($_POST["edit_hotel"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          // echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }


  $queryUpdate = "UPDATE paket SET kategori='$kategori', durasi='$durasi',harga='$harga',rincian='$rincian',masa_berlaku='$berlaku',sistem_pembayaran='$pembayaran',gambar='$target_file' WHERE no='$no'";
  $sqlUpdate = mysqli_query($connect,$queryUpdate) or die (mysqli_error($connect));


  header("location:admin.php?menu=view_wisata");

}
elseif (isset($_POST['reset'])) {
  header("location:admin.php?menu=view_wisata");
}

?>