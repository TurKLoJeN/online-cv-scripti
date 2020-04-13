<?php include '../config.php';

$query = $db->prepare("SELECT * FROM ayarlar");
$query->execute();
$cek = $query->fetch(PDO::FETCH_ASSOC);



 ?>


<footer>
         <div class="container">
         
            <div class="copy text-center">
               <?php echo $cek["site_footer"]; ?><a href='<?php echo $cek["site_url"]; ?>'>TurKLoJeN</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>