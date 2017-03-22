<div style='min-height:620px;'>

<?php

include "koneksi.php";

$per_page=10;

if (isset($_GET['page'])) {

	$page = $_GET['page'];

}else {

	$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;

$query_limit = "LIMIT $start_from, $per_page";


if(!isset($_GET['submit'])){

	$query = "SELECT * FROM user WHERE hak_akses='user'";
	$sql = mysqli_query($connect,$query);

}else{

	$query = "SELECT * FROM user WHERE ". $_GET['search_select'] ." LIKE '%". $_GET['search_value'] ."%' ORDER BY tanggal_daftar DESC $query_limit";
	$sql = mysqli_query($connect,$query);
}



?>
<div class="row">
<div class="col-md-12">
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

<table class='table table-striped' id="tblData">
	<br><br><br><br><br>
	<center><legend><h2>Data Pelanggan</h2></legend></center>
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
	<br><br>
	<tr>
		<th>No.</th>
		<th>NIK</th>
		<th>Nama Klien</th>
		<th>Alamat</th>
	</tr>

	<?php

$no = 1;

$count = mysqli_num_rows($sql);

if($count<1){
	echo "<tr><td colspan='6'><center>Data Tidak Ditemukan!</center></td></tr>";
}else{

	while($data=mysqli_fetch_array($sql,MYSQLI_BOTH)){


?>

	<tr>
			<td><?php echo $no."."; ?></td>
			<td><?php echo $data['nik'] ?></td>
			<td><?php echo $data['nama_klien'] ?></td>
			<td><?php echo $data['alamat']; ?></td>
			
			
			
		</tr>	

	<?php
	$no++;
	}
}
?>	
	</table>
	</div>
</div>