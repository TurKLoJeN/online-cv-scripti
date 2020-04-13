    <!-- HEADER-->

    <?php include 'header.php' ?>

    <div class="page-content">
    	<div class="row">

	    <!-- SIDEBAR-->

    <?php include 'sidebar.php' ?>

		  <div class="col-md-10">
		  	

		  	<div class="row">

		  	<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">ANASAYFA Bilgilendirme</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<div class="row">
			  						
			  	<div class="col-md-3 panel-danger">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title "><span class="glyphicon glyphicon-star"></span>Becerilerim</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<div class="row">
			  				<?php 

			  				$query = $db->prepare("SELECT * FROM becerilerim");
			  				$query->execute();
			  				$query->fetch(PDO::FETCH_ASSOC);
			  				$say = $query->rowCount();


			  				 ?>

			  				 <center>
			  				 	
			  				 	<span style="font-size: 50px;"><?php echo $say; ?></span><br>
			  				 	<p>Adet</p>

			  				 </center>
			  				
			  			</div>
					</div>
		  		</div>

		  		<div class="col-md-3 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title "><span class="glyphicon glyphicon-globe"></span>Dillerim</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<div class="row">
			  				<?php 

			  				$query = $db->prepare("SELECT * FROM dillerim");
			  				$query->execute();
			  				$query->fetch(PDO::FETCH_ASSOC);
			  				$say = $query->rowCount();


			  				 ?>

			  				 <center>
			  				 	
			  				 	<span style="font-size: 50px;"><?php echo $say; ?></span><br>
			  				 	<p>Adet</p>

			  				 </center>
			  				
			  			</div>
					</div>
		  		</div>

		  		<div class="col-md-3 panel-info">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title "><span class="glyphicon glyphicon-briefcase"></span>İşlerim</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<div class="row">
			  				<?php 

			  				$query = $db->prepare("SELECT * FROM isler");
			  				$query->execute();
			  				$query->fetch(PDO::FETCH_ASSOC);
			  				$say = $query->rowCount();


			  				 ?>

			  				 <center>
			  				 	
			  				 	<span style="font-size: 50px;"><?php echo $say; ?></span><br>
			  				 	<p>Adet</p>

			  				 </center>
			  				
			  			</div>
					</div>
		  		</div>

		  		<div class="col-md-3 panel-success">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title "><span class="glyphicon glyphicon-th-large"></span>Projelerim</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<div class="row">
			  				<?php 

			  				$query = $db->prepare("SELECT * FROM projeler");
			  				$query->execute();
			  				$query->fetch(PDO::FETCH_ASSOC);
			  				$say = $query->rowCount();


			  				 ?>

			  				 <center>
			  				 	
			  				 	<span style="font-size: 50px;"><?php echo $say; ?></span><br>
			  				 	<p>Adet</p>

			  				 </center>
			  				
			  			</div>
					</div>
		  		</div>

		  		<div class="col-md-3 panel-danger">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title "><span class="glyphicon glyphicon-certificate"></span>Okullarım</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<div class="row">
			  				<?php 

			  				$query = $db->prepare("SELECT * FROM okullar");
			  				$query->execute();
			  				$query->fetch(PDO::FETCH_ASSOC);
			  				$say = $query->rowCount();


			  				 ?>

			  				 <center>
			  				 	
			  				 	<span style="font-size: 50px;"><?php echo $say; ?></span><br>
			  				 	<p>Adet</p>

			  				 </center>
			  				
			  			</div>
					</div>
		  		</div>

			  			</div>
					</div>
		  		</div>
		  	</div>

		  	
		  </div>
		</div>
    </div>

    <!-- FOOTER-->

    <?php include 'footer.php' ?>