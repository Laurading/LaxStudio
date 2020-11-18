<?php
session_start();
require('include/header.php');
?>

<?php 
 // <!-- page pour les visiteurs -->

if(empty($_SESSION['role'])){
  ?>
  <?=template_headerNonConnecté('loginpro')?>

  <section style="height: 100vh;" class="offset-lg-1">

<?php

    $sql = "SELECT * FROM Cours";
    $res=$conn->query($sql);
    $res -> fetch_all(MYSQLI_ASSOC);

?> 

<br>
<div class="row" style="margin: auto">
<?php
foreach ($res as $rows):

?>

    <div class="col-lg-5 marge one-edge-shadow" style="background-color: white;">
        <div class="row" style="margin: auto">
            <div class="col-6">
                <br>
                <p><u><?php echo $rows['alerte'] ?> </u></p>
                <br>
                <p><?php echo $rows['description_court'] ?></p>
            </div>
            <div class="col-6">

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
            <a class="btn btngris" href="description.php?edit=<?php echo $rows['id_cours'] ?>" role="button ">LIRE LA SUITE</a>

            </div>
            <div class="col-6">
                <a class="btn btnrouge" href="# " role="button ">JE RÉSERVE</a>

            </div>
        </div>
    </div>
    <?php
endforeach;

?>  

</div>




</section>

</body>

</html>
 
  <?php
}
else{

// <!-- page pour les inscris -->
  if($_SESSION['role']=='particulier'){
    ?> 
 
    <?=template_headerConnecté('loginpro')?>





<section style="height: 100vh;" class="offset-lg-1">

<?php

    $sql = "SELECT * FROM Cours";
    $res=$conn->query($sql);
    $res -> fetch_all(MYSQLI_ASSOC);

?> 

<br>
<div class="row" style="margin: auto">
<?php
foreach ($res as $rows):

?>

    <div class="col-lg-5 marge one-edge-shadow" style="background-color: white;">
        <div class="row" style="margin: auto">
            <div class="col-6">
                <br>
                <p><u><?php echo $rows['alerte'] ?> </u></p>
                <br>
                <p><?php echo $rows['description_court'] ?></p>
            </div>
            <div class="col-6">

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
            <a class="btn btngris" href="description.php?edit=<?php echo $rows['id_cours'] ?>" role="button ">LIRE LA SUITE</a>

            </div>
            <div class="col-6">
                <a class="btn btnrouge" href="# " role="button ">JE RÉSERVE</a>

            </div>
        </div>
    </div>
    <?php
endforeach;

?>  

</div>




</section>

</body>

</html>

    <?php
  }


  if($_SESSION['role']=='admin'){
    ?> 
 
    <?=template_headerConnecté('loginpro')?>





<section style="height: 100vh;" class="offset-lg-1">

<?php

    $sql = "SELECT * FROM Cours";
    $res=$conn->query($sql);
    $res -> fetch_all(MYSQLI_ASSOC);

?> 

<br>
<div class="row" style="margin: auto">

<div class="col-lg-5 marge one-edge-shadow" style="background-color: white;">
        <div class="row" style="margin: auto">

        <a class="btn btnwhite" href="ajout.php" role="button "><p style= "text-align: center; width: 100%"> <i style="font-size: 100px; margin-top: 80px; margin-bottom: 80px" class="fas fa-plus"></i></p>
  </a>
           
        </div>
    </div>


<?php
foreach ($res as $rows):

?>

    <div class="col-lg-5 marge one-edge-shadow" style="background-color: white;">
        <div class="row" style="margin: auto">
            <div class="col-6">
                <br>
                <p><u><?php echo $rows['alerte'] ?> </u></p>
                <br>
                <p><?php echo $rows['description_court'] ?></p>
            </div>
            <div class="col-6">

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
            <a class="btn btngris" href="description.php?edit=<?php echo $rows['id_cours'] ?>" role="button ">LIRE LA SUITE</a>

            </div>
            <div class="col-6">
                <a class="btn btnrouge" href="update.php?edit=<?php echo $rows['id_cours'] ?>" role="button">UPDATE</a>

            </div>
        </div>
    </div>
    <?php
endforeach;

?>  

</div>




</section>

</body>

</html>

    <?php
  }
}
  ?>

