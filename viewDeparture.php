<div style='min-height:620px;'>

<?php

include "koneksi.php";

    
if(isset($_SESSION['nama_klien'])){
  $nama_klien = $_SESSION['nama_klien'];
}
$nik[] = null;

?>



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


<table class='table table-striped' id="tblData">
	<br><br><br><br><br>
	<center><legend><h2>Pemberangkatan </h2></legend></center>
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
		<th>Nama Klien</th>
    <th>Tanggal Berangkat/Check In</th>		
		<th>Kategori</th>
    <th>Respon</th>
    
	</tr>


  <?php

    $i = 1;
    $date = date("Y-m-d");
    $query ="SELECT * FROM pesan WHERE tgl_pesan AND konfirm = 1  ";
    // AND a.tgl LIKE  '$date%'
    $result = mysqli_query($connect, $query);
    //echo mysqli_error();
    $row_total = mysqli_num_rows($result);
    // tampilkan data menu selama masih ada
    if($row_total > 0){
        while($data=mysqli_fetch_array($result,MYSQLI_BOTH)) {
  

  ?>

  <tr>
      <td><?php echo $i ?>.</td>
      <td><?php echo $data['invoice']; ?></td>
      <td><?php echo $data['nama_klien']; ?></td>
      <td><?php echo $data['tgl']; ?></td>
      <td><?php echo $data['kategori']; ?></td>
      <?php

      //action before and after bayar

      $count = "SELECT uploads FROM pesan WHERE id_pesan ='".$data['id_pesan']."' ";
      $query = mysqli_query($connect,$count);
      $rc = mysqli_fetch_array($query);

      ?>
      
      <td>
      <?php
      //condition block response 
      
      if($rc['uploads']== NULL ){
        echo "<i>Is not actived</i>";
      }else{
      ?>
      <form action="actionResponse.php?id=<?php echo $data['id_pesan']; ?>" method="POST">
       <select name="respon" >
       <option value="Sedang diproses">Sedang diproses</option>
       <option value="Sudah diproses">Sudah diproses</option>
       
       </select> 
        
      <button type="submit" class="btn btn-info">Response</button>
      </form> 
      <?php } ?>
      </td>
      


  <?php
    
     // $id_kirim[$i] = $data['id_kirim'];
    
         $i++;
        }
    }else{
        echo "
          <tr>
            <td colspan='7'><center> Tidak ada pengiriman masuk hari ini </center></td> 
          </tr>";
              
      }   
      $_SESSION['nik'] = $nik;
    
    ?>


</table>
</div>
</div>


   