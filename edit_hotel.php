<?php

include "koneksi.php";
  $no = $_GET['no'];
  $query = "SELECT * FROM hotel WHERE no='$no'";
  $sql = mysqli_query($connect,$query);
  $data = mysqli_fetch_array($sql,MYSQLI_BOTH);


?>


<div style='min-height:630px;'>
<br><br><br><br><br>
<form class="form-horizontal" method="post" action="proses_hotel.php" enctype="multipart/form-data" >
<fieldset>

            <!-- Form Username -->
            <center><legend><h2>Edit Data Hotel</h2></legend></center>
            <br><br>
            <!-- Text input-->
            <input type="hidden" name="no" value="<?php echo $data['no']; ?>" >
<div class="form-group">
  <label class="col-md-4 control-label" for="">Daerah</label>  
  <div class="col-md-4">
  <input id="" name="daerah" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['daerah'];?>">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">nama hotel</label>  
  <div class="col-md-4">
  <input id="" name="nama_hotel" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['nama_hotel'];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Tarif</label>  
  <div class="col-md-4">
  <input id="" name="tarif" type="text" placeholder="" class="form-control input-md" value="<?php echo $data['tarif'];?>">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Masukkan Gambar</label>
  <div class="col-md-4">
    <input id="filebutton" name="fileToUpload" class="input-file" type="file" value="<?php echo $data['gambar'];?>">
  </div>
</div>



              <!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="simpan"></label>
  <div class="col-md-8">
  <input type="hidden" name="id" value="<?php echo $data['no'];?>">
    <button type="submit" id="simpan" name="edit_hotel" class="btn btn-primary">Simpan</button>
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
