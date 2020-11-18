<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('include/header.php');
if (isset($_POST['Nom'], $_POST['Prénom'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $Nom = stripslashes($_POST['Nom']);
  $Nom = mysqli_real_escape_string($conn, $Nom);
  
  $Prénom = stripslashes($_POST['Prénom']);
  $Prénom = mysqli_real_escape_string($conn, $Prénom);
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire

  $Email = stripslashes($_POST['Email']);
  $Email = mysqli_real_escape_string($conn, $Email);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire

  $Adresse = stripslashes($_POST['Adresse']);
  $Adresse = mysqli_real_escape_string($conn, $Adresse);

  $CodePostal = stripslashes($_POST['CodePostal']);
  $CodePostal = mysqli_real_escape_string($conn, $CodePostal);

  $Niveau= stripslashes($_POST['Niveau']);
  $Niveau = mysqli_real_escape_string($conn, $Niveau);

  $role = stripslashes($_POST['role']);
  $role = mysqli_real_escape_string($conn, $role);

  $password = stripslashes($_POST['password']);
  $password= mysqli_real_escape_string($conn, $password);
  //requéte SQL + mot de passe crypté
    $query = "INSERT into `users` (Nom, Prénom, Email, Adresse, CodePostal, Niveau, role, password)
              VALUES ('$Nom', '$Prénom','$Email','$Adresse', '$CodePostal','$Niveau' ,'$role','".hash('sha256', $password)."')";
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{
?>
<?php
?>
<?=template_headerNonConnecté('login')?>
<br>
<br>
<form class="box"  action="" method="post">
<section style="height: auto" class="showcase">
<div style="width: 800px" class="container">
    <div class="card">
        <div class="card-header bg-white one-edge-shadow">
                <div>
                    <br>
                    <h3>INSCRIVEZ-VOUS</h3>
                    <br>
                </div>
                    <form class="box" action="" method="post" name="login">
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="box-input  form-control " name="Nom" placeholder="Nom :" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="box-input  form-control " name="Prénom" placeholder="Prénom :" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="box-input  form-control " name="Email" placeholder="Email :" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
                            </div>
                            <input type="text" class="box-input form-control" name="Adresse" placeholder="Adresse :" required />
                        </div>
                    </div>                
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
                            </div>
                            <input type="text" class="box-input form-control" name="CodePostal" placeholder="CodePostal : " required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <select name="Niveau" >
                                    <option value="Débutant">Débutant</option>
                                    <option value="Intermédiaire">Intermédiaire</option>
                                    <option value="Confirmé">Confirmé</option>
                                    <option value="Avancé">Avancé</option>                             
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
                            </div>
                            <input type="password" class="box-input form-control" name="password" placeholder="Mot de Passe : " required />
                        </div>
                    </div>
                
                  
                    <div class="form-group">
                            <input type="hidden" class="box-input form-control" name="role" value="particulier"  required />                        
                    </div>                   
                        <br>  
                        <input type="submit" value="S'INSCRIRE" name="submit" class="box-button btn btn-light btnrouge">
                        <br>
              
                        <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
                        <?php if (! empty($message)) { ?>
                        <p class="errorMessage"><?php echo $message; ?></p>
                        <?php } ?>

                    </form>
                   
                
        </div>
    </div>

 </div>
 <br>
 <br>
</section>

</form>
<?php } ?>

</body>


</html>