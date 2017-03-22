<div style='min-height:620px;'>

<style>
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #e6ecff}

th {
    background-color: #3366ff;
    color: white;
}

	
</style>



<div class="row">
<div class="col-md-12">



	<br><br><br><br><br>
	<center><legend><h2>Report</h2></legend></center>
	<br>
    
  <?php
  include 'koneksi.php';

  if(isset($_POST['cari'])){

    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];

    ?>
    <script>
            window.location='?menu=report&nama=<?php echo $nama; ?>&tgl=<?php echo $tgl; ?>';
            </script>
  <?php
  }




  $sqlGet = "SELECT * FROM pesan GROUP BY nama_klien";
  $queryget  = mysqli_query($connect,$sqlGet);

  $sqlTgl = "SELECT * FROM pesan GROUP BY tgl_pesan";
  $queryTgl  = mysqli_query($connect,$sqlTgl);




  ?>
  <div class="col-lg-12 col-sm-12">
  <form action="" method="POST">
  <table>
    <tr>
    

      <td width="200px"><select name="nama" class="form-control">
        <option>--Cari Nama Klien--</option>
        <?php
        while($data = mysqli_fetch_array($queryget)){
          echo "<option value=\"$data[nama_klien]\">$data[nama_klien]</option>\n";
        }
        ?>
      </select></td>


      <td width="200px"><select name="tgl" class="form-control">
        <option>--Cari Tanggal--</option>
        <?php
        while($row = mysqli_fetch_array($queryTgl)){
          echo "<option value=\"$row[tgl_pesan]\">$row[tgl_pesan]</option>\n";
        }
        ?>
      </select></td>
      <td>
      

      <input type="submit" name="cari" class="btn btn-primary" value="Cari" />
      </td>
    </tr>
   </table> 
  </form>
  </div>




  <?php
  if(isset($_GET['nama'])){

  ?>

    <div class="row space-form ">
  <div class="col-sm-8 col-sm-offset-0">
  </div>
  <div class="col-sm-4">
    
  </div>
</div>
    
    <br>
	
	<table class='table table-striped' id="tblData">
	<tr>
    <th>No.</th>
    <th>No Invoice</th>
    <th>Nama Klien</th>
    <th>Tanggal Pemesanan</th>
    <th>Tanggal Berangkat/Check In</th>   
    <th>Kategori</th>
    <th>Status Perjalanan</th>
    <th>Pembayaran</th>
    
  </tr>
  <?php
  include 'koneksi.php';

  $nama = $_GET['nama'];
  $tgl = $_GET['tgl'];


  $no = 1;

  $sql = "SELECT * FROM pesan WHERE nama_klien = '$nama' AND tgl_pesan = '$tgl'";
  $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
  while($result = mysqli_fetch_array($query)){

  
  ?>


  <tr>
  
  
    <td><?php echo $no++; ?></td>
      <td><?php echo $result['invoice']; ?></td>
      <td><?php echo $result['nama_klien']; ?></td>
      <td><?php echo $result['tgl_pesan']; ?></td>
      <td><?php echo $result['tgl']; ?></td>
      <td><?php echo $result['kategori']; ?></td>
      <td><?php 
          if($result['response']== NULL){
            echo "Belum melakukan pembayaran";
          }else{
            echo $result['response'];
          } ?></td>
      <td><?php if($result['konfirmBayar']==0){ echo "Belum Dikonfirmasi" ;}
                else { echo "Succsess" ;}
       ?>      
      </td>
      
    <?php } ?>

  </tr>
 

</table>
</div>
</div>

<?php } //end iseet ?>