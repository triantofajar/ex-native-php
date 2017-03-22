<?php

include "koneksi.php";
  $id = $_GET['id'];
  $query = "SELECT * FROM user WHERE id_user='$id'";
  $sql = mysqli_query($connect,$query);

  $data = mysqli_fetch_array($sql,MYSQLI_BOTH);

?>


<div style='min-height:630px;'>
<br><br><br><br><br>
<form class="form-horizontal" method="post" action="proses_user.php">
<fieldset>

            <!-- Form Username -->
            <center><legend><h2>Edit Data User</h2></legend></center>
            <br><br>
            <!-- Text input-->
            <input type="hidden" name="id_user">
            <div class="form-group">
              <label class="col-md-4 control-label" for="user">Username :</label>  
              <div class="col-md-4">
              <input id="user" name="user" placeholder="" class="form-control input-md" type="text" value="<?php echo $data['username'];?>">
                
              </div>
            </div>

    <!-- Password-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="password">Password :</label>  
      <div class="col-md-4">
      <input id="password" name="password" placeholder="" class="form-control input-md" type="text" >
        
      </div>
    </div>

            <!-- Nama Perusahaan-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nama">Nama Klien :</label>  
              <div class="col-md-4">
              <input id="nama" name="nama" placeholder="" class="form-control input-md" type="text" value="<?php echo $data['nama_klien'];?>">
                
              </div>
            </div>

            <!-- Nama Petugas-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="petugas">Nama Petugas :</label>  
              <div class="col-md-4">
              <input id="petugas" name="petugas" placeholder="" class="form-control input-md" type="text" value="<?php echo $data['nama_petugas'];?>">
                
              </div>
            </div>

    <!-- Alamat-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="alamat">Alamat :</label>  
      <div class="col-md-4">
      <input id="alamat" name="alamat" placeholder="" class="form-control input-md" type="text" value="<?php echo $data['alamat'];?>">
        
      </div>
    </div>

            <!-- Email-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Email :</label>  
              <div class="col-md-4">
              <input id="email" name="email" placeholder="" class="form-control input-md" type="text" value="<?php echo $data['email'];?>">
                
              </div>
            </div>

    <!-- Telp-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="tlp">No. Telepon :</label>  
      <div class="col-md-4">
      <input id="tlp" name="tlp" placeholder="" class="form-control input-md" type="text" value="<?php echo $data['no_tlp'];?>">
        
      </div>
    </div>

              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="hak_akses">Hak Akses :</label>
                <div class="col-md-4">
                  <select id="hak_akses" name="hak_akses" class="form-control">
                              <?php 
                    // tampilkan untuk form ubah mahasiswa
                    if($id_user > 0) { ?>
                      <option value="<?php echo $hak_akses ?>"><?php echo "$hak_akses"; ?></option>
                    <?php } ?>
                    <option value="">--Pilih--</option>
                    <option value="user" <?php if($data['hak_akses'] == "user") echo "user";?>>User</option>
                    <option value="admin" <?php if($data['hak_akses'] == "admin") echo "admin";?>>Admin</option>
                    
                  </select>
                </div>
              </div>

    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="simpan"></label>
      <div class="col-md-8">
        <input type="hidden" name="id_user" value="<?php echo $data['id_user'];?>">
        <button type="submit" id="simpan" name="edit_user" class="btn btn-primary">Simpan</button>
        <button id="reset" name="reset" class="btn btn-danger">Reset</button>
      </div>
    </div>
    <br><br>
    </fieldset>
    </form>
          </div>
      <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->
