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
	  					<div class="panel-title ">İş Ekle</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<form action="islem.php" method="POST" class="form-horizontal" role="form">
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">İş Adı</label>
										    <div class="col-sm-9">
										      <input type="text" name="is_adi" class="form-control" placeholder="İşinizin Adını Giriniz...">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">İş Link</label>
										    <div class="col-sm-9">
										      <input type="text" name="is_link" class="form-control" placeholder="İşinizin Linkini Giriniz...">
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
										      <textarea class="form-control" name="is_aciklama" cols="30" rows="5" placeholder="İşinizin Açıklamasını Giriniz"></textarea>
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">İş Tarih</label>
										    <div class="col-sm-9">
										      <input type="text" name="is_tarih" class="form-control" placeholder="İşinizin Tarihini Giriniz...">
										    </div>
										  </div>

										  <hr>

										  <div class="col-md-11">


										  	<button class="btn btn-success pull-right" name="is-ekle">Ekle</button>


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