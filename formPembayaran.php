<?php

$id = $_GET['id'];
include 'koneksi.php';

$sqlGet = "SELECT * FROM pesan WHERE id_pesan = '$id'";
$query = mysqli_query($connect,$sqlGet);
$data = mysqli_fetch_array($query);


?>



<form class="form-horizontal" method="post" action="prosesConfirm.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<div class="box">
 <center><legend><h2>Pembayaran</h2></legend></center>
            <br><br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kategori">Tanggal Keberangkatan</label>  
  <div class="col-md-4">
  <input id="tgl" name="tgl" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['tgl']; ?>" readonly="readonly">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Kategori</label>  
  <div class="col-md-4">
  <input id="kategori" name="kategori" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['kategori']; ?>" readonly="readonly">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Tarif</label>  
  <div class="col-md-4">
  <input id="harga" name="tarif" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['harga']; ?>" readonly="readonly">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Upload bukti pembayaran</label>  
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

</div>

</fieldset>
</form>
