    <!-- HEADER-->

    <?php include 'header.php'; ?>

    <div class="page-content">
    	<div class="row">

	    <!-- SIDEBAR-->

    <?php include 'sidebar.php'; ?>

		  <div class="col-md-10">
		  		

		  	<div class="row">
<!-- ALERT UYARI BÖLMESİ-->

	<?php 

	if(@$_GET["sm-guncelle"]=="bos") {
		?>
		<div class="col-md-12">
		  			<div class="alert alert-warning"><span class="glyphicon glyphicon-remove"></span>Hiçbir Alanı Boş Bırakmayınız</div>
		  		</div>
		<?php
	}elseif(@$_GET["sm-guncelle"]=="yes"){
		?>
		<div class="col-md-12">
		  			<div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz Başarıyla Gerçekleştirildi</div>
		  		</div>
		<?php

	}elseif(@$_GET["sm-guncelle"]=="no"){
		?>
<div class="col-md-12">
		  			<div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>İşleminiz Gerçekleştirilirken Sorunla Karşılaşıldı</div>
		  		</div>
		<?php
	}
?>

				
<!-- END ALERT UYARI BÖLMESİ-->

<?php 
$id=1;
$query = $db->prepare("SELECT * FROM sosyalmedya");
$query->execute();
$smcek = $query->fetch(PDO::FETCH_ASSOC)
 ?>

<!-- CONTENT -->
		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Sosyal Medya Hesaplarım</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<form action="islem.php?sm_id=<?php echo $id; ?> " method="POST" class="form-horizontal" role="form">
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Facebook</label>
										    <div class="col-sm-9">
										      <input type="text" name="sm_facebook" class="form-control"  value=" <?php echo $smcek["sm_facebook"] ?> ">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Twitter</label>
										    <div class="col-sm-9">
										      <input type="text" name="sm_twitter" class="form-control" value=" <?php echo $smcek["sm_twitter"] ?> ">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Instagram</label>
										    <div class="col-sm-9">
										      <input type="text" name="sm_instagram" class="form-control"  value=" <?php echo $smcek["sm_instagram"] ?> ">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Youtube</label>
										    <div class="col-sm-9">
										      <input type="text" name="sm_youtube" class="form-control" value=" <?php echo $smcek["sm_youtube"] ?> ">
										    </div>
										  </div>
										   <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Google</label>
										    <div class="col-sm-9">
										      <input type="text" name="sm_google" class="form-control" value=" <?php echo $smcek["sm_google"] ?> ">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Pinterest</label>
										    <div class="col-sm-9">
										      <input type="text" name="sm_pinterest" class="form-control" value=" <?php echo $smcek["sm_pinterest"] ?> ">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Linkedin</label>
										    <div class="col-sm-9">
										      <input type="text" name="sm_linkedin" class="form-control" value=" <?php echo $smcek["sm_linkedin"] ?> ">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Snapchat</label>
										    <div class="col-sm-9">
										      <input type="text" name="sm_snapchat" class="form-control" value=" <?php echo $smcek["sm_snapchat"] ?> ">
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Github</label>
										    <div class="col-sm-9">
										      <input type="text" name="sm_github" class="form-control"  value=" <?php echo $smcek["sm_github"] ?> ">
										    </div>
										  </div>

										  <hr>

										  <div class="col-md-11">


										  	<button class="btn btn-success pull-right" name="sosyal-medya">Güncelle</button>


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