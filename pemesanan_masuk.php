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
	<center><legend><h2>Pemesanan </h2></legend></center>
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
		<th>Tanggal Pesan</th>
		<th>NIK</th>
		<th>Nama Klien</th>
    <th>Tanggal Berangkat/Check In</th>		
		<th>Kategori</th>
    <th>Status</th>
    <th>Aksi</th>
	</tr>


  <?php

    $i = 1;
    $date = date("Y-m-d");
    $query ="select * from pesan where  tgl_pesan AND fixed = 1  " ;
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
      <td><?php echo $data['tgl_pesan']; ?></td>
      <td><?php echo $data['nik']; ?></td>
      <td><?php echo $data['nama_klien']; ?></td>
      <td><?php echo $data['tgl']; ?></td>
      <td><?php echo $data['kategori']; ?></td>
      <td><?php if   ($data['konfirm'] == 0) echo "Belum Di Konfimasi Admin";
            elseif ($data['konfirm'] == 1) echo "Sudah Di Konfirmasi";
          
        ?>
      </td>
      <td>

      <a id="recruit_detail" href="admin.php?menu=detail&id=<?php echo $data['id_pesan'];?>">
                <span class="glyphicon glyphicon-edit"></span>
                </a></td>  


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


   