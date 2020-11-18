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
if($_SESSION['role']=='particulier' | $_SESSION['role']=='admin'){
    ?> 
 
    <?=template_headerConnecté('loginpro')?>

    <?php
  }
}
  ?>


PLANNING


<h1>PAGE EN CONSTRUCTION BIENTÔT DISPONIBLE! :)</h1>
