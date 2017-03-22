<?php

include "koneksi.php";

if(isset($_POST['simpan'])){

  $daerah=$_POST["daerah"];
  $nama_hotel=$_POST["nama_hotel"];
  $tarif=$_POST["tarif"];
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

	$query = "INSERT INTO hotel VALUES ('','$daerah','$nama_hotel','$tarif','$target_file')";
	$sql=mysqli_query($connect,$query);
	//$error = mysqli_error($connect);
	//echo $query;
	header("location:admin.php?menu=hotel");

}

elseif (isset($_GET['del'])){
  
  $query = "DELETE FROM hotel WHERE no='". $_GET['no'] ."'";
  $sql = mysqli_query($connect,$query);

  header("location:admin.php?menu=hotel");

}elseif (isset($_POST['edit_hotel'])) {
  $no=$_POST['no']; 
  $daerah=$_POST["daerah"];
  $nama_hotel=$_POST["nama_hotel"];
  $tarif=$_POST["tarif"];


  $target_file = "uploads/";
  
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


  $query = "UPDATE hotel SET daerah='$daerah', nama_hotel='$nama_hotel',
        tarif='$tarif',  gambar='$target_file' WHERE no='$no'";
  $sql = mysqli_query($connect,$query) or die (mysqli_error($connect));

  


  header("location:admin.php?menu=hotel");

}
elseif (isset($_POST['reset'])) {
  header("location:admin.php?menu=hotel");
}

?>