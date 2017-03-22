<br><br><br><br><br>
<form class="form-horizontal" method="post" action="proses_hotel.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
 <center><legend><h2>Tambah Data Hotel</h2></legend></center>
            <br><br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kategori">Daerah</label>  
  <div class="col-md-4">
  <input id="daerah" name="daerah" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="min_pemesanan">Nama Hotel</label>  
  <div class="col-md-4">
  <input id="nama_hotel" name="nama_hotel" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Tarif</label>  
  <div class="col-md-4">
  <input id="tarif" name="tarif" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Masukkan Gambar</label>  
  <div class="col-md-4">
  <input id="filebutton" name="fileToUpload" class="input-file" type="file">  
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="simpan"></label>
  <div class="col-md-8">
  <button type="submit" id="" name="simpan" class="btn btn-primary">Simpan</button>
      <button id="back" name="back" class="btn btn-danger">Back</button>
  </div>
</div>

</fieldset>
</form>
