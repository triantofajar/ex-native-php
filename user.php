
<div style='min-height:630px;'>
<!-- Load jQuery and the validate plugin -->
  <script src="validation/jquery-1.9.1.js"></script>
  <script src="validation/jquery.validate.min.js"></script>

   <!-- jQuery Form Validation code -->
  <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#data_user-form").validate({
    
        // Specify the validation rules
        rules: {
      user: "required",
            password: {
                required: true,
                minlength: 3
            },
      nama: "required",
      petugas: "required",
      alamat: "required",
            email: {
                required: true,
                email: true
            },
            
      telp: {
        required: true,
        number: true
      },
            agree: "required"
        },
        
        // Specify the validation error messages
        messages: {
        user: "Masukkan Username Dengan Benar",
        password: {
                required: "Masukkan Password Dengan Benar",
                minlength: "Minimal 3 karakter"
            },
            nama: "Textbox Harus diisi",
            petugas: "Textbox  Harus   diisi",
            email: "Masukan Email Valid, contoh: abc@def.ghi",
            alamat: "Masuk Alamat Dengan Benar",
            tlp: "Masukan Angka Valid",
            agree: "Please accept our policy"
        },
        
        submitHandler: function(form) {
            form.simpan();
        }
    });

  });
  
  </script>
 


<br><br><br><br><br>

<form class="form-horizontal" method="post" action="proses_user.php" role="form" id="data_user-form">
<fieldset>

            <!-- Form Username -->
            <center><legend><h2>Tambah Data User</h2></legend></center>
            <br><br>
            <!-- Text input-->
            <input type="hidden" name="id_user">
            <div class="form-group">
              <label class="col-md-4 control-label" for="user">Username</label>  
              <div class="col-md-4">
              <input id="user" name="user" placeholder="username" class="form-control input-md" type="text">
                
              </div>
            </div>

    <!-- Password-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="password">Password</label>  
      <div class="col-md-4">
      <input id="password" name="password" placeholder="password" class="form-control input-md" type="password" >
      
      </div>
    </div>

             <!-- Nama Perusahaan-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nama">Nama Klien</label>  
              <div class="col-md-4">
              <input id="nama" name="nama" placeholder="nama klien" class="form-control input-md" type="text" >
                
              </div>
            </div>


             <!-- Nama Perusahaan-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="petugas">Nama Petugas</label>  
              <div class="col-md-4">
              <input id="petugas" name="petugas" placeholder="nama petugas" class="form-control input-md" type="text" >
                
              </div>
            </div>

    <!-- Alamat-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="alamat">Alamat</label>  
      <div class="col-md-4">
      <textarea class="form-control" id="alamat" name="alamat"></textarea>
           
      </div>
    </div>

            <!-- Email-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Email</label>  
              <div class="col-md-4">
              <input type="email" id="email" name="email" placeholder="email" class="form-control input-md" >
                
              </div>
            </div>

    <!-- Telp-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="telp">No. Telepon</label>  
      <div class="col-md-4">
      <input id="telp" name="tlp" placeholder="telp" class="form-control input-md" type="text">
        
      </div>
    </div>

              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="hak_akses">Hak Akses</label>
                <div class="col-md-4">
                  <select id="hak_akses" name="hak_akses" class="form-control">
                              <?php 
                    // tampilkan untuk form ubah mahasiswa
                    if($id_user > 0) { ?>
                      <option value="<?php echo $hak_akses ?>"><?php echo "$hak_akses"; ?></option>
                    <?php } ?>
                    <option value="">-- Pilih --</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                  </select>
                </div>
              </div>

              

    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="simpan"></label>
      <div class="col-md-8">
        <button type="submit" id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
        <button id="reset" name="reset" class="btn btn-danger" onclick="history.back();">Back</button>
      </div>
    </div>
    <br><br>
    </fieldset>
    </form>
          </div>
      <!-- /.container-fluid -->

  </div>
 
