<?php

include "koneksi.php";
  $no = $_GET['no'];
  $query = "SELECT * FROM paket WHERE no='$no'";
  $sql = mysqli_query($connect,$query);
  $data = mysqli_fetch_array($sql,MYSQLI_BOTH);


?>


<div style='min-height:630px;'>
<br><br><br><br><br>
<form class="form-horizontal" method="post" action="proses_wisata.php" enctype="multipart/form-data" >
<fieldset>

            <!-- Form Username -->
            <center><legend><h2>Edit Data Wisata</h2></legend></center>
            <br><br>
            <!-- Text input-->
            <input type="hidden" name="no" value="<?php echo $data['no']; ?>" >
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kategori">Kategori Wisata</label>  
  <div class="col-md-4">
  <input id="daerah" name="kategori" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['kategori']; ?>">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="min_pemesanan">Durasi</label>  
  <div class="col-md-4">
  <input id="nama_hotel" name="durasi" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['durasi']; ?>" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Harga</label>  
  <div class="col-md-4">
  <input id="tarif" name="harga" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['harga']; ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Rincian</label>  
  <div class="col-md-4">
  <textarea id="textarea" name="rincian" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['rincian']; ?>" reqiured> </textarea>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Masa Berlaku</label>  
  <div class="col-md-4">
  <input id="tarif" name="berlaku" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['masa_berlaku']; ?>" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Sistem Pembayaran</label>  
  <div class="col-md-4">
  <input id="tarif" name="pembayaran" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['sistem_pembayaran']; ?>">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Gambar Wisata</label>  
  <div class="col-md-4">
  <input id="filebutton" name="fileToUpload" class="input-file" type="file" value="<?php echo $data['gambar']; ?>">  
  </div>
</div>



              <!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="simpan"></label>
  <div class="col-md-8">
  <input type="hidden" name="no" value="<?php echo $data['no'];?>">
    <button type="submit" id="simpan" name="edit_wisata" class="btn btn-primary">Simpan</button>
    <button id="reset" name="reset" class="btn btn-danger">Back</button>
  </div>
</div>


    <br><br>
    </fieldset>
    </form>
          </div>
      <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->
