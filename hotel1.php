<style>
		.datepicker{z-index:1151;}
	    </style>

<div class="box">
<div class="row">
	<div class="col-md-12">

	 <div class="col-md-6" style="margin-left: 18%;">
      <div  id="outside" class="panel panel-default">
         <div id="inside" class="panel-heading">
             <center><h4><i class="glyphicon glyphicon-search"></i> Cari Hotel</h4></center>	
          </div>
          <div  class="panel-body">
		      <form class="form-horizontal" role="form" method="GET" >
		      <input type="hidden" name="menu" value="check_tarif"></input>
		  <div  class="form-group">
			<label class="control-label col-sm-6" for="from" style="margin-left: -7%;">Nama Lokasi / Hotel Tujuan</label>
		<div class="col-sm-8">
		<br>
			<input name="from" type="from" class="form-control" id="from" placeholder="Cari" >
		</div>
	</div>
	<div class="form-group">
	<label class="control-label col-sm-3" for="from">Check In</label>
				<input id="datepicker" name="tanggal" type="text" class="form-control datepicker" placeholder="Tanggal" style="width:200px;" readonly>
			</div>

			<div class="form-group">
				  <label class="control-label col-sm-3" for="malam">Malam</label> 
				  <div class="col-md-5">
				<select id="durasi" name="durasi" class="form-control">
    <option value=" ">-- Pilih --</option>
      <option value="1 malam">1 malam</option>
      <option value="2 malam">2 malam</option>
    </select>	
				  </div>
				</div>

				<div class="form-group">
	<label class="control-label col-sm-3" for="from">Check Out</label>
				<input id="datepicker" name="tanggal" type="text" class="form-control datepicker" placeholder="Tanggal" style="width:200px;" readonly>
			</div>
	
	<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cari"></label>
  <div class="col-md-8">
    <button id="save" name="save" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Cari</button>
  </div>
</div>
	
		
	</div>
	</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>













<script type="text/javascript">

  $(function() {    

    var $j = jQuery.noConflict();

    $('.datepicker').datepicker({
      format: 'dd/mm/yyyy',
      autoclose : true
    });

  });

</script>


<script src="datepicker/js/bootstrap-datepicker.js"></script>