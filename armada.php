

<div style='min-height:630px;'>
<br><br><br><br><br>

<form class="form-horizontal" method="post" action="proses_fasilitas.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<center><legend><h2>Tambah Data</h2></legend></center><br><br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Jenis</label>  
  <div class="col-md-4">
  <input id="" name="judul" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="">Nama</label>  
  <div class="col-md-4">
  <input id="" name="nama" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Rincian</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="rincian" required></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Masukkan Gambar</label>
  <div class="col-md-4">
    <input id="filebutton" name="fileToUpload" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button type="submit" id="" name="simpan" class="btn btn-primary">Simpan</button>
    <button id="reset" name="reset" class="btn btn-danger" onclick="history.back();">Back</button>
  </div>
</div>
  
</fieldset>
</form>
</div>
</div>
