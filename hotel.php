<?php


include 'koneksi.php'; 

$query = "SELECT * FROM hotel GROUP BY daerah ORDER BY no ";
$sql = mysqli_query($connect,$query);

$query2 = "SELECT * FROM hotel ORDER BY no ";
$sql2 = mysqli_query($connect,$query2);

?>
<div class="box">
        <div class="row">
            <div class="col-lg-12">
			<hr>
                <h1 class="page-header"><center>HOTEL</center> </h1>
			<hr>
            </div>
        </div>

		 <div  class="panel-body">
      <form class="form-horizontal" role="form" method="GET" >
      <input type="hidden" name="pg" value="tarif"></input>
    <div  class="form-group">
            <label class="control-label col-sm-2" for="from">Tujuan</label>
    <div class="col-sm-4">
            <!-- <input name="from" type="from" class="form-control" id="from" placeholder="Origin"> -->
      <select name="from" class="form-control js-example-basic-single">
      <option value="">-- Pilih --</option>
       

                      <?php while($data = mysqli_fetch_array($sql,MYSQLI_BOTH)){ ?> 
                        <option value="<?php echo $data['daerah']; ?>"> <?php echo $data['daerah']; ?></option>
                      <?php } ?>
        </select>
    </div>
    </div>
     <center>
           <button type="submit" name="search" value="1" class="btn btn-primary">Cari Hotel</button>
      </center>
      </form>
      <br>
      <br>

       <div class="col-lg-12">
                   
                    <p>PT. GTR Tour and Travel juga menyediakan hotel yg cocok untuk anda yang ingin berlibur dengan harga terjangkau
                    dan sesuai dengan keinginan anda. kami telah bekerja sama dengan hotel hotel ternama.</p>
          <br>
          <p>Dalam menentukan harga bagi para pengguna GTR Tour & Travel juga sangat bersahabat. Mengenai harga kami sangat toleran dan sangat bersaing dengan Biro Jasa lain. 
          Dengan jaminan kepuasan bagi para pelanggan, kami berupaya mengoptimalkan pelayanan dan mengedepankan kenyamanan bagi para pengguna jasa. </p>
         
                </div>
            </div>



       </div>    


   <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><b>hotel yang ditawarkan</b></h2>
                    <hr>
                     <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img src="img/hotel/hotel1.jpg" height="200" width="350" alt="">
                </a>   
            </div>
      
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="img/hotel/hotel2.jpg" height="200" width="350" alt="">
                </a>   
            </div>
      
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img img src="img/hotel/hotel3.jpg" height="200" width="350" alt="">
                </a>
            </div>
      
     
      
        </div>
                </div>
            </div>
