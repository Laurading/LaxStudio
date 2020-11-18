
<?php

require('include/header.php');
session_start();
if (isset($_POST['email'])){
  $email = stripslashes($_POST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  $password = stripslashes($_POST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE email='$email' and password='".hash('sha256', $password)."'";
  $result=$conn->query($query);
  var_dump($result);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
      $rows = mysqli_num_rows($result);
      if($rows==1){
          $_SESSION['Nom'] = $row['Nom'];
          $_SESSION['Prénom'] = $row['Prénom'];
          $_SESSION['Email'] = $row['Email'];
          $_SESSION['Adresse'] = $row['Adresse'];
          $_SESSION['CodePostal'] = $row['CodePostal'];
          $_SESSION['role'] = $row['role'];
          $_SESSION['Niveau'] = $row['Niveau'];
          $_SESSION['id_user'] = $row['id_user'];
          
        
          header("Location: index.php");
      }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
      }
    }
  } else {
    echo "0 results";
  }

}
?>
<?=template_headerNonConnecté('loginpro')?>
<br>
<br>
<br>
<br>
<section style="height: auto" class="showcase">
<div style="width: 800px" class="container">
    <div class="card">
        <div class="card-header bg-white one-edge-shadow">
                <div>
                    <br>
                    <h3>SE CONNECTER</h3>
                    <br>
                </div>
                    <form class="box" action="" method="post" name="login">
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" class="box-input" name="email" placeholder="email">
                        </div>
                    </div>
                       

                        <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                            </div>
                            <input type="password" class="form-control"  class="box-input" name="password" placeholder="Mot de passe">
                        </div>
                    </div>
                    <br>
                       
                    <input type="submit" value="CONNEXION" name="submit" class="box-button btn btn-light btnrouge">

                   
                        <p style="text-align: center;" class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
                        
                    
                    
                        
                        <?php if (! empty($message)) { ?>
                        <p class="errorMessage"><?php echo $message; ?></p>
                        <?php } ?>

                    </form>
                
        </div>
    </div>

 </div>
</section>


  
  
</body>
</html>