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


<?php 


if (isset($_GET['edit'] )) {
    $id = $_GET['edit'];
    $update = true;

    
?>


<?php
$sql = "SELECT * FROM `cours` where id_cours = $id";
$res=$conn->query($sql);
$res->fetch_all(MYSQLI_ASSOC);

?>
<div class="row nomarge">
    <?php
    foreach ($res as $rows)
        

    ?>

<p></p><?php echo $rows['description_court'] ?></p>
<br>
<p><?php echo $rows['description_longue'] ?></p>


</div>


    <?php
		}
	
	?>