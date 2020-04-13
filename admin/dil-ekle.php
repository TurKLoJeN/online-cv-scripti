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

	if(@$_GET["ayar-guncelle"]=="bos") {
		?>
		<div class="col-md-12">
		  			<div class="alert alert-warning"><span class="glyphicon glyphicon-remove"></span>Hiçbir Alanı Boş Bırakmayınız</div>
		  		</div>
		<?php
	}elseif(@$_GET["ayar-guncelle"]=="yes"){
		?>
		<div class="col-md-12">
		  			<div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz Başarıyla Gerçekleştirildi</div>
		  		</div>
		<?php

	}elseif(@$_GET){
		?>
<div class="col-md-12">
		  			<div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>İşleminiz Gerçekleştirilirken Sorunla Karşılaşıldı</div>
		  		</div>
		<?php
	}
?>

				
<!-- END ALERT UYARI BÖLMESİ-->
		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Dil Ekle</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<form action="islem.php" method="POST" class="form-horizontal" role="form">
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Dil Adı</label>
										    <div class="col-sm-9">
										      <input type="text" name="dil_adi" class="form-control" placeholder="Dil Adını Giriniz...">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Dil Yüzde(%) /</label>
										    <div class="col-sm-9">
										      <input type="text" name="dil_yuzde" class="form-control" placeholder="Dil Yüzdenizi Giriniz...">
										    </div>
										  </div>
										 

										  <hr>

										  <div class="col-md-11">


										  	<button class="btn btn-success pull-right" name="dil-ekle">Ekle</button>


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