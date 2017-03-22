<<div class="box">
<div class="row">
            

            <?php

include "koneksi.php";

$per_page=10;

if (isset($_GET['page'])) {

    $page = $_GET['page'];

}else {

    $page=1;

}


$query = "SELECT * FROM fasilitas";
$sql = mysqli_query($connect,$query);

while ( $data_fasilitas = mysqli_fetch_array($sql,MYSQLI_BOTH) ) {

?>

            <div class="col-md-3 portfolio-item" style="margin-left: 9%; margin-right: 30px;">
                <a href="#">
                    <img class="img-responsive" src="<?php echo $data_fasilitas['gambar'];?>" style="max-width: 300px;">
                </a>
                <h3>
                    <?php echo $data_fasilitas['nama'];?>
                </h3>
                <p><?php echo nl2br($data_fasilitas['rincian']); ?>
                
                </p>
            </div>
<?php
    }
?>
</div>
 </div>           
            
