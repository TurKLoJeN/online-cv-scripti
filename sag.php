   <div class="w3-twothird">
    <!-- İŞLER -->
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-<?php echo $ayarcek["site_renk"]; ?>"></i>İşlerim</h2>

        <?php 

        $isler = $db->prepare("SELECT * FROM isler ORDER BY is_id DESC");
        $isler->execute();
        $iscek = $isler->fetchALL(PDO::FETCH_ASSOC);





        foreach ($iscek as $row) {

          if ($row["is_devam"]==1) {
            
            ?>
            <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row["is_adi"] ?>   / <a href="<?php echo $row["is_link"] ?>" style="color: red;" target="_blank">İş Link</a></b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"]; ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["is_tarih"] ?><span class="w3-tag w3-<?php echo $ayarcek["site_renk"]; ?> w3-round">Hala Devam Ediyor</span></h6>
          <p><?php echo $row["is_aciklama"] ?></p>
          <hr>
        </div>

            <?php

          }else{



          ?>


<div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row["is_adi"] ?>   / <a href="<?php echo $row["is_link"] ?>" style="color: red;" target="_blank">İş Link</a></b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"]; ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["is_tarih"] ?><!--<span class="w3-tag w3-<?php echo $ayarcek["site_renk"]; ?> w3-round">Current</span>--></h6>
          <p><?php echo $row["is_aciklama"] ?></p>
          <hr>
        </div>

          <?php
        }
        }
         ?>

        

        <!--
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"]; ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
          <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"]; ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
        </div>
      </div>
     -->
  <!-- Projeler -->
     <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-code fa-fw w3-margin-right w3-xxlarge w3-text-<?php echo $ayarcek["site_renk"]; ?>"></i>Projelerim</h2>

        <?php 

        $projeler = $db->prepare("SELECT * FROM projeler ORDER BY proje_id DESC");
        $projeler->execute();
        $projecek = $projeler->fetchALL(PDO::FETCH_ASSOC);

        foreach ($projecek as $row) {
          
            ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row["proje_adi"]; ?> <a href="<?php echo $row["proje_link"]; ?>" style="color: red;" target="_blank">Proje Sitesi</a></b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"]; ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["proje_tarih"]; ?></h6>
          <p><?php echo $row["proje_aciklama"]; ?></p>
          <hr>
        </div>
            <?php
              }

         ?>





        <!-- EĞİTİM -->
      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-<?php echo $ayarcek["site_renk"]; ?>"></i>Eğitim Gördüğüm Yerler</h2>

        <?php 

        $okullar = $db->prepare("SELECT * FROM okullar ORDER BY okul_devam DESC");
        $okullar->execute();
        $okulcek = $okullar->fetchALL(PDO::FETCH_ASSOC);

        foreach ($okulcek as $row) {
          if ($row["okul_devam"]==1) {
            ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row["okul_adi"]; ?></b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"]; ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["okul_tarih"]; ?>&nbsp;&nbsp;<span class="w3-tag w3-<?php echo $ayarcek["site_renk"]; ?> w3-round">Hala Devam Ediyor</span></h6>
          <p><?php echo $row["okul_aciklama"]; ?></p>
          <hr>
        </div>

            <?php
          }else{
            ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row["okul_adi"]; ?></b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"]; ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["okul_tarih"]; ?></h6>
          <p><?php echo $row["okul_aciklama"]; ?></p>
          <hr>
        </div>
            <?php
          }
        }





         ?>



        
        <!-- EĞİTİM 
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"]; ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"]; ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
-->

      </div>
</div>