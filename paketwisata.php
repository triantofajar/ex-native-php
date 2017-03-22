
<div class="box">
 <div class="row">
            <div class="col-lg-12">
            <hr>
                <h1 class="page-header"><center>PAKET WISATA</center> </h1>
            <hr>
            </div>
        </div>

        <div class="row">

        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM paket ";
        $query = mysqli_query($connect,$sql);


        while($tmp = mysqli_fetch_array($query)){
        ?>
          
                <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="<?php echo $tmp['gambar']; ?>" height="200" width="350" alt="">
                </a>
                <h3>
                    <a href="index.php?pg=paket&&kategori=<?php echo $tmp['kategori']; ?>"><center><?php echo $tmp['kategori']; ?></center></a>
                </h3>
                 </div>
        
        <?php
        }
        ?>
        
    </div>
    </div>
