    <!-- HEADER-->

    <?php include 'header.php'; ?>

    <div class="page-content">
    	<div class="row">

	    <!-- SIDEBAR-->

    <?php include 'sidebar.php'; ?>

		  <div class="col-md-10">
		  		

		  	<div class="row">
 		 <!-- END SIDEBAR-->


		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Proje Ekle</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<form action="islem.php" method="POST" class="form-horizontal" role="form">
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Proje Adı</label>
										    <div class="col-sm-9">
										      <input type="text" name="proje_adi" class="form-control" placeholder="Proje Adını Giriniz...">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Proje Link</label>
										    <div class="col-sm-9">
										      <input type="text" name="proje_link" class="form-control" placeholder="Proje Linkini Giriniz...">
										    </div>
										  </div>

										 <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Proje Açıklama</label>
										    <div class="col-sm-9">
										      <textarea class="form-control" name="proje_aciklama" cols="30" rows="5" placeholder="Proje Açıklamasını Giriniz"></textarea>
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Proje Tarih</label>
										    <div class="col-sm-9">
										      <input type="text" name="proje_tarih" class="form-control" placeholder="Proje Tarihini Giriniz...">
										    </div>
										  </div>

										  <hr>

										  <div class="col-md-11">


										  	<button class="btn btn-success pull-right" name="proje-ekle">Ekle</button>


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