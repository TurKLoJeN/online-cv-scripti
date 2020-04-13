<!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-<?php echo $ayarcek["site_renk"]; ?> w3-center w3-margin-top">
  <p>Sosyal Medya Hesaplarım.</p>
  <?php 

$sosyalmedya = $db->prepare("SELECT * FROM sosyalmedya");
$sosyalmedya->execute();
$smcek = $sosyalmedya->fetch(PDO::FETCH_ASSOC);

   ?>

   <!-- SOSYAL MEDYA-->


   <?php 

   if ($smcek["sm_facebook"]=="") {
     null;
   }else{
    ?>
    <a href="<?php echo $smcek["sm_facebook"]; ?>" target="_blank" ><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <?php
   }

    ?>

     <?php 

   if ($smcek["sm_instagram"]=="") {
     null;
   }else{
    ?>
    <a href="<?php echo $smcek["sm_instagram"]; ?>" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <?php
   }

    ?>
     <?php 

   if ($smcek["sm_twitter"]=="") {
     null;
   }else{
    ?>
    <a href="<?php echo $smcek["sm_twitter"]; ?>" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <?php
   }

    ?>
     <?php 

   if ($smcek["sm_snapchat"]=="") {
     null;
   }else{
    ?>
    <a href="<?php echo $smcek["sm_snapchat"]; ?>" target="_blank"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <?php
   }

    ?>
     <?php 

   if ($smcek["sm_pinterest"]=="") {
     null;
   }else{
    ?>
    <a href="<?php echo $smcek["sm_pinterest"]; ?>" target="_blank"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <?php
   }

    ?>

     <?php 

   if ($smcek["sm_linkedin"]=="") {
     null;
   }else{
    ?>
    <a href="<?php echo $smcek["sm_linkedin"]; ?>" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    <?php
   }

    ?>
     <?php 

   if ($smcek["sm_youtube"]=="") {
     null;
   }else{
    ?>
     <a href="<?php echo $smcek["sm_youtube"]; ?>" target="_blank"><i class="fa fa-youtube w3-hover-opacity"></i></a>
    <?php
   }

    ?>
     <?php 

   if ($smcek["sm_google"]=="") {
     null;
   }else{
    ?>
     <a href="<?php echo $smcek["sm_google"]; ?>" target="_blank"><i class="fa fa-google w3-hover-opacity"></i></a>
    <?php
   }

    ?>
     <?php 

   if ($smcek["sm_github"]=="") {
     null;
   }else{
    ?>
    <a href="<?php echo $smcek["sm_github"]; ?>" target="_blank"><i class="fa fa-github w3-hover-opacity"></i></a>
    <?php
   }

    ?>

<p><?php echo $ayarcek["site_footer"]; ?><a href="<?php echo $ayarcek["site_url"] ?>" target="_blank"> TurKLoJeN</a></p>
</footer>

</body>
</html>