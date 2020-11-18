<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
session_start();
require('include/header.php');
if (isset($_POST['alerte'], $_POST['description_court'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $alerte = stripslashes($_POST['alerte']);
  $alerte = mysqli_real_escape_string($conn, $alerte); 

  $description_court = stripslashes($_POST['description_court']);
  $description_court = mysqli_real_escape_string($conn, $description_court);

  $description_longue = stripslashes($_POST['description_longue']);
  $description_longue = mysqli_real_escape_string($conn, $description_longue);

  $photo = stripslashes($_POST['photo']);
  $photo= mysqli_real_escape_string($conn, $photo);



  //requéte SQL + mot de passe crypté
    $query = "INSERT into `cours` (alerte, description_court, description_longue, photo)
              VALUES ('$alerte','$description_court','$description_longue', '$photo')";
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>le produit a été ajouté avec succès.</h3>
             <p>Cliquez ici pour retourner<a href='index.php'> au menu principal</a></p>
       </div>";
    }
}else{
?>
<?=template_headerConnecté('login')?>
<form class="box"  method="post">
 


<section style="height:auto" class="showcase">
<br>
<br>
<div style="width: 800px" class="container">
    <div class="card">
        <div class="card-header bg-white one-edge-shadow">
            <br>
                <div class="input-group mb-2">
                    <h3>NOUVEAU COURS</h3>
                </div>
                <br>
                    <form class="box" action="" method="post" name="login">


                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="texte" class="box-input  form-control " name="alerte" placeholder="Alerte"  required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="box-input  form-control " name="description_court" placeholder="Description courte" required />
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
                            </div>
                            <input  style="height: 150px" type="text" class="box-input form-control" name="description_longue" placeholder="Description longue" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="box-input  form-control " name="photo" placeholder="Photo"/>
                        </div>
                    </div>

                     
                       
                        <input type="submit" value="AJOUTER" name="submit" class="box-button btn btn-light btnrouge">

                        <?php if (! empty($message)) { ?>
                        <p class="errorMessage"><?php echo $message; ?></p>
                        <?php } ?>

                    </form>
                   
        </div>
    </div>

 </div>
</section>

</form>
<?php } ?>

</body>
</html>