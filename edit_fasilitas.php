
<?php

include "koneksi.php";
  $id = $_GET['id'];
  $query = "SELECT * FROM fasilitas WHERE no='$id'";
  $sql = mysqli_query($connect,$query);

  $data = mysqli_fetch_array($sql,MYSQLI_BOTH);


?>

<div style='min-height:630px;'>
<br><br><br><br><br>

<form class="form-horizontal" method="post" action="proses_fasilitas.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<center><legend><h2>Tambah Data</h2></legend></center><br><br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">judul</label>
  <div class="col-md-4">
  <input id="" name="judul" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['judul'];?>">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="">Nama</label>
  <div class="col-md-4">
  <input id="" name="nama" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['nama'];?>">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Rincian</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="rincian" value="<?php echo $data['rincian'];?>"></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Masukkan Gambar</label>
  <div class="col-md-4">
    <input id="filebutton" name="fileToUpload" class="input-file" type="file" value="<?php echo $data['gambar'];?>">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
   <input type="hidden" name="no" value="<?php echo $data['no'];?>">
    <button id="simpan" name="edit_fasilitas" class="btn btn-primary">Simpan</button>
    <button id="reset" name="reset" class="btn btn-danger">Reset</button>
  </div>
</div>
  
</fieldset>
</form>
</div>
</div>
