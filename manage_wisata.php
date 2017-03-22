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

  $query = "SELECT * FROM paket ORDER BY no ASC $query_limit";
  $sql = mysqli_query($connect,$query);

}else{

  $query = "SELECT * FROM paket WHERE ". $_GET['search_select'] ." LIKE '%". $_GET['search_value'] ."%' ORDER BY kategori DESC $query_limit";
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
  <center><legend><h2>Manajemen Wisata</h2></legend></center>
  <br>
  <div class="row space-form ">
  <div class="col-sm-8 col-sm-offset-0">
        <a href="admin.php?menu=add_wisata" class="btn btn-sm btn-info" >
        <span class="glyphicon glyphicon-plus"></span> Tambah Data
      </a>
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
    <th>Gambar</th>
    <th>Kategori Wisata</th>
    <th>Durasi</th>
    <th>Harga</th>
    <th>Rincian</th>
    <th>Masa Berlaku</th>
    <th>Sistem Pembayaran</th>
    <th colspan="2"><center>Aksi</center></th>
  </tr>

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
      <td><img src="<?php echo $data['gambar'];?>" style="width:150px;height:100px;" /></td>
      <td><?php echo $data['kategori']; ?></td>
      <td><?php echo $data['durasi']; ?></td>
      <td> Rp <?php echo number_format($data['harga']);  ?>,-</td>
      <td><?php echo $data['rincian']; ?></td>
      <td><?php echo $data['masa_berlaku'] ?></td>
      <td><?php echo $data['sistem_pembayaran'] ?></td>
     
      <td width="50"><a id="recruit_detail" href="admin.php?menu=edit_wisata&no=<?php echo $data['no'];?>"><span class="glyphicon glyphicon-edit"></span></a>
      <a id="actdelete" href="proses_hotel.php?del=1&no=<?php echo $data['no'];?>"><span class="glyphicon glyphicon-trash"></span></a></td>

    </tr> 

  <?php
  
  }
}
?>



</table>
</div>
</div>


<?php


//Now select all from table
if(!isset($_GET['submit'])){
  $query = "SELECT * FROM paket";
}else{
  $query = "SELECT * FROM paket WHERE ". $_GET['search_select'] ." LIKE '%". $_GET['search_value'] ."%'";
}

$result = mysqli_query($connect, $query);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
//echo "<center><a href='admin.php?p=mrecruit&cat=recruit&page=1'>".'First Page'."</a> ";

echo "<center>";
echo "<ul class='pagination'>";

for ($i=1; $i<=$total_pages; $i++) {

  if($i==$page){
    $active = "class='active'";
  }else{
    $active = "";
  }

  if(!isset($_GET['submit'])){
    echo "<li $active><a href='admin.php?menu=hotel&page=".$i."'>".$i."</a></li>";
  }else{
    echo "<li $active><a href='admin.php?menu=hotel&search_select=". $_GET['search_select'] ."&search_value=". $_GET['search_value'] ."&submit=". $_GET['submit'] ."&page=".$i."'>".$i."</a></li>";
  }
};

echo "</ul>";
echo "</center>";

// Going to last page
//echo "<a href='admin.php?menu=manage_tarif&page=$total_pages'>".'Last Page'."</a></center> ";

?>

<!-- JQuery Search -->
  <script type="text/javascript">
    $(document).ready(function()
  {
    $('#search').keyup(function()
    {
      searchTable($(this).val());
    });
  });

  function searchTable(inputVal)
  {
    var table = $('#tblData');
    table.find('tr').each(function(index, row)
    {
      var allCells = $(row).find('td');
      if(allCells.length > 0)
      {
        var found = false;
        allCells.each(function(index, td)
        {
          var regExp = new RegExp(inputVal, 'i');
          if(regExp.test($(td).text()))
          {
            found = true;
            return false;
          }
        });
        if(found == true)$(row).show();else $(row).hide();
      }
    });
  }
  </script>