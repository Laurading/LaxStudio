<?php
session_start();
require('include/header.php');
?>

<?php 
 // <!-- page pour les visiteurs -->
 if(empty($_SESSION['role'])){
    ?>
    <?=template_headerNonConnecté('loginpro')?>
  <?php
}
else{

// <!-- page pour les inscris -->
if($_SESSION['role']=='particulier'){
    ?> 
 
    <?=template_headerConnecté('loginpro')?>

    <?php
  }
}
  ?>

MON COMPTE


<h1>PAGE EN CONSTRUCTION BIENTÔT DISPONIBLE! :)</h1>