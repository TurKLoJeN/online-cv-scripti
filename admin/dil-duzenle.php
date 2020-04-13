    <!-- HEADER-->

    <?php include 'header.php'; ?>

    <div class="page-content">
    	<div class="row">

	    <!-- SIDEBAR-->

    <?php include 'sidebar.php'; ?>

		  <div class="col-md-10">
		  		

		  	<div class="row">



<?php 

$dil_id = $_GET["dil_id"];
$query = $db->prepare("SELECT * FROM dillerim WHERE dil_id=?");
$query->execute(array($dil_id));
$cek = $query->fetch(PDO::FETCH_ASSOC);

 ?>



		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Dil Düzenle</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<form action="islem.php?dil_id=<?php echo $cek["dil_id"]; ?>" method="POST" class="form-horizontal" role="form">
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Dil Adı</label>
										    <div class="col-sm-9">
										      <input type="text" name="dil_adi" class="form-control" value="<?php echo $cek["dil_adi"]; ?>">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Dil Yüzde(%)</label>
										    <div class="col-sm-9">
										      <input type="text" name="dil_yuzde" class="form-control" value="<?php echo $cek["dil_yuzde"]; ?>">
										    </div>
										  </div>
										 

										  <hr>

										  <div class="col-md-11">


										  	<button class="btn btn-success pull-right" name="dil-duzenle">Güncelle</button>


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