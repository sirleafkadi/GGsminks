<?php $cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); 
  $path="";
 if($cur_page=="index.php"){$path="src";}


?>


<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $path; ?>/js/aos.js"></script>
  <script src="<?php echo $path; ?>/js/myscript.js"></script>
<script>
    AOS.init({duration: 2000,});
  </script>';