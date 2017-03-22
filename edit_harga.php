<?php

include "koneksi.php";
  $no = $_GET['no'];
  $query = "SELECT * FROM paket WHERE no='$no'";
  $sql = mysqli_query($connect,$query) or die(mysqli_error($connect));
  $data = mysqli_fetch_array($sql,MYSQLI_BOTH);


?>


<div style='min-height:630px;'>
<br><br><br><br><br>
<form class="form-horizontal" method="post" action="proses_harga.php">
<fieldset>

            <!-- Form Username -->
            <center><legend><h2>Edit Data Paket</h2></legend></center>
            <br><br>
            <!-- Text input-->
            <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
<div class="form-group">
  <label class="col-md-4 control-label" for="kategori">Kategori</label>  
  <div class="col-md-4">
  <input id="kategori" name="kategori" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['kategori'];?>">
    
  </div>
</div>

<div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Durasi</label>
  <div class="col-md-4">
      <select id="durasi" name="durasi" class="form-control input-md">
    <option value="2 Hari 1 Malam">2 Hari 1 Malam</option>
    <option value="3 Hari 2 Malam">3 Hari 2 Malam</option>
    <option value="4 Hari 3 Malam">4 Hari 3 Malam</option>
    <option value="5 Hari 4 Malam">5 Hari 4 Malam</option>
    <option value="9 Hari 8 Malam">9 Hari 8 Malam</option>
      </select>

  </div>
  </div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Harga</label>  
  <div class="col-md-4">
  <input id="harga" name="harga" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['harga'];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="min_pemesanan">Minimal Pemesanan</label>  
  <div class="col-md-4">
  <input id="min_pemesanan" name="min_pemesanan" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['min_pemesanan'];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="masa_berlaku">Masa Berlaku</label>  
  <div class="col-md-4">
  <input id="masa_berlaku" name="masa_berlaku" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['masa_berlaku'];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sistem_pembayaran">Sistem Pembayaran</label>  
  <div class="col-md-4">
  <input id="sistem_pembayaran" name="sistem_pembayaran" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['sistem_pembayaran'];?>">
    
  </div>
</div>




              <!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="simpan"></label>
  <div class="col-md-8">
  <input type="hidden" name="no" value="<?php echo $data['no'];?>">
    <button type="submit" id="simpan" name="edit_harga" class="btn btn-primary">Simpan</button>
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
