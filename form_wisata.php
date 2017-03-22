<br><br>
<form class="form-horizontal" method="post" action="proses_wisata.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
 <center><legend><h2>Tambah Data Wisata</h2></legend></center>
            <br><br>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kategori">Kategori Wisata</label>  
  <div class="col-md-4">
  <input id="daerah" name="kategori" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="min_pemesanan">Durasi</label>  
  <div class="col-md-4">
  <input id="nama_hotel" name="durasi" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Harga</label>  
  <div class="col-md-4">
  <input id="tarif" name="harga" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Rincian</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="rincian" required></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Masa Berlaku</label>  
  <div class="col-md-4">
  <input id="tarif" name="berlaku" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Sistem Pembayaran</label>  
  <div class="col-md-4">
  <input id="tarif" name="pembayaran" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Gambar Wisata</label>  
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
