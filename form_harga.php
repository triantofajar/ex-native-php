<br><br><br><br><br>
<form class="form-horizontal" method="post" action="proses_harga.php">
<fieldset>

<!-- Form Name -->
 <center><legend><h2>Tambah Data Harga</h2></legend></center>
            <br><br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kategori">Kategori</label>  
  <div class="col-md-4">
  <input id="kategori" name="kategori" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="durasi">Durasi</label>
  <div class="col-md-4">
    <select id="durasi" name="durasi" class="form-control">
    <option value=" ">-- Pilih --</option>
      <option value="2 hari 1 malam">2 hari 1 malam</option>
      <option value="3 hari 2 malam">3 hari 2 malam</option>
      <option value="4 hari 3 malam">4 hari 3 malam</option>
      <option value="5 hari 4 malam">5 hari 4 malam</option>
      <option value="9 hari 8 malam">9 hari 8 malam</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="min_pemesanan">Minimal Pemesanan</label>  
  <div class="col-md-4">
  <input id="min_pemesanan" name="min_pemesanan" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Harga</label>  
  <div class="col-md-4">
  <input id="harga" name="harga" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="masa_berlaku">Masa Berlaku</label>  
  <div class="col-md-4">
  <input id="masa_berlaku" name="masa_berlaku" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sistem_pembayaran">Sistem Pembayaran</label>  
  <div class="col-md-4">
  <input id="sistem_pembayaran" name="sistem_pembayaran" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="save"></label>
  <div class="col-md-8">
    <button id="save" name="save" class="btn btn-primary">Save</button>
    <button id="back" name="back" class="btn btn-danger">Back</button>
  </div>
</div>

</fieldset>
</form>
