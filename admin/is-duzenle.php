    <!-- HEADER-->

    <?php include 'header.php'; ?>

    <div class="page-content">
    	<div class="row">

	    <!-- SIDEBAR-->

    <?php include 'sidebar.php'; ?>

		  <div class="col-md-10">
		  		

		  	<div class="row">



<?php 

$is_id = $_GET["is_id"];
$query = $db->prepare("SELECT * FROM isler WHERE is_id=?");
$query->execute(array($is_id));
$cek = $query->fetch(PDO::FETCH_ASSOC);

 ?>



		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">İş Düzenle</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<form action="islem.php?is_id=<?php echo $cek["is_id"]; ?>" method="POST" class="form-horizontal" role="form">
										  


										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">İş Adı</label>
										    <div class="col-sm-9">
										      <input type="text" name="is_adi" class="form-control" value="<?php echo $cek["is_adi"]; ?>">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">İş Link</label>
										    <div class="col-sm-9">
										      <input type="text" name="is_link" class="form-control" value="<?php echo $cek["is_link"]; ?>">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">İş Durumu</label>
										    <div class="col-sm-9">
										      <select name="is_devam" class="form-control">
										      	
										      	<option value="1">Hala Devam Ediyor</option>
										      	<option value="0">Devam Etmiyor</option>

										      </select>
										    </div>
										  </div>

										 <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">İş Açıklama</label>
										    <div class="col-sm-9">
										      <textarea class="form-control" name="is_aciklama" cols="30" rows="5"><?php echo $cek["is_adi"] ?></textarea>
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">İş Tarih</label>
										    <div class="col-sm-9">
										      <input type="text" name="is_tarih" class="form-control" value="<?php echo $cek["is_tarih"] ?>">
										    </div>
										  </div>
										 

										  <hr>

										  <div class="col-md-11">


										  	<button class="btn btn-success pull-right" name="is-duzenle">Güncelle</button>


										  </div>
										 
										 <hr>
										
										  
										</form>
					</div>
		  		</div>
		  	</div>

		  	
		  </div>
		</div>
    </div>

    <!-- FOOTER-->

    <?php include 'footer.php' ?>