<?php
  require_once "logica/vivienda.php";
  
  $pid = "";
  if(isset($_GET["pid"])){
      $pid = base64_decode($_GET["pid"]);
  }

?>
<html>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css" />
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
</head>
<body>
    <?php
      include "vista/menuvivienda.php";
      if($pid != ""){
          include $pid;
      }else{
        include "vista/inicio.php";
      }
    ?>
</body>
</html>
