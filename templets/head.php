<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>GGsminks</title>

<?php $cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); 
  $path="";
 if($cur_page=="index.php"){$path="src";}


?>


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $path; ?>/css/aos.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo $path; ?>/css/shop-homepage.css" rel="stylesheet">