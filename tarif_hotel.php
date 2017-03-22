
<?php


if(isset($_GET['search'])){
	$from = $_GET['from'];
	
	
}


?>


<div class="col-md-12" style="text-align: center; margin-left: 2%;" >

	<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #e6ccb3}

th {
    background-color: #ac7339;
    color: white;
}
</style>

<?php
	include "koneksi.php";



$per_page=10;

if (isset($_GET['pg'])) {

	$page = $_GET['pg'];

}else {

	$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;

$query_limit = "LIMIT $start_from, $per_page";


if(!isset($_GET['search'])){

	$query = "SELECT * FROM hotel ORDER BY no ASC $query_limit";
	$sql = mysqli_query($connect,$query);

}else{

	$query = "SELECT * FROM hotel WHERE daerah LIKE '%".$from."%'";
	$sql = mysqli_query($connect,$query);
}


?>
<div class="box">
	<h2>TARIF</h2>



<div class="panel panel-default">
  <div class="panel-body text-left" style="background-color: #E5E4E2">
  		<h4 align="left">Hotel	: <?php echo $from; ?>
  					
  		</h4>

  </div>
</div>






<br>
	<table class='table table-striped'>
	<thead>	
	<tr>
		<th>No</th>
		<th>Daerah</th>
		<th>Nama Hotel</th>
		<th>Tarif</th>
		<th>Photo</th>
		<th>Pemesanan</th>
		
	</tr>
	</thead>

	<?php

$no = 1;

$count = mysqli_num_rows($sql);

if($count<1){
	echo "<tr><td colspan='9'><center>Data Tidak Ditemukan!</center></td></tr>";
}else{

	while($data=mysqli_fetch_array($sql,MYSQLI_BOTH)){


?>

	<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['daerah']; ?></td>
			<td><?php echo $data['nama_hotel']; ?></td>
			<td>Rp <?php echo number_format ($data['tarif']); ?> /malam</td>
			<td><img src="<?php echo $data['gambar'];?>" style="width:150px;height:100px;"></td>
			<?php if(isset($_SESSION['id'])){?>
	<td> <a href="?pg=photel&&hotel=<?php echo $data['nama_hotel'];?>" class="btn btn-primary">Reserved</a></td>

	<?php
	} ?>
		</tr>

<?php
	}
}
?>



	</table>
</div>

	</div>