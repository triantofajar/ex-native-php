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

<?php //coment ?>

<div class="row">
<div class="col-md-12">


<table class='table table-striped' id="tblData">
	<br><br><br><br><br>
	<center><legend><h2>Konfirmasi Pembayaran</h2></legend></center>
	<br>
    <div class="row space-form ">
  <div class="col-sm-8 col-sm-offset-0">
  </div>
  <div class="col-sm-4">
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-search-plus"></i></span>
      <input  class="form-control" id="search" type="text" placeholder="Pencarian">
    </div>
  </div>
</div>
    
    <br>
	
	
	<tr>
    <th>No.</th>
    <th>No Invoice</th>
    <th>Bukti Pembayaran</th>
    <th>Nama Klien</th>
    <th>Tanggal Berangkat/Check In</th>   
    <th>Kategori</th>
    <th>Konfirmasi</th>
  </tr>
  <?php
  include 'koneksi.php';

  $no = 1;

  $sql = "SELECT * FROM pesan WHERE tgl_pesan ";
  $query = mysqli_query($connect,$sql);
  while($result = mysqli_fetch_array($query)){

  
  ?>


  <tr>
  <?php 
  if($result['uploads']==NULL){
    

  ?>
     
      <?php echo $result=""; ?>
      
    <?php } 
    else{
    ?>
    <td><?php echo $no++; ?></td>
      <td><?php echo $result['invoice']; ?></td>
      <td> <img src="<?php echo $data['uploads']; ?>" style="width:150px;height:100px;border:1; "></td>
      <td><?php echo $result['nama_klien']; ?></td>
      <td><?php echo $result['tgl']; ?></td>
      <td><?php echo $result['kategori']; ?></td>
      <td>
        <?php if($result['konfirmBayar']==0){ ?>
        <a href="action.ConfirmBayar.php?id=<?php echo $result['id_pesan']; ?>" class="btn btn-danger">Konfirmasi</a>
        <?php
        }else{
          echo '<button class="btn btn-info">Succses</button>';
        }
        ?>

      </td>
      
    <?php } ?>

  </tr>
  <?php } ?>

</table>
</div>
</div>
