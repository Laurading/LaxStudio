<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'miniprojet');


// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}


if (isset($_POST['update'])) {
    $id= $_POST['id_cours'];
    $alerte = $_POST['alerte'];
    $description_court = $_POST['description_court'];
    $description_longue = $_POST['description_longue'];
    $photo = $_POST['photo'];
    


   
    
    mysqli_query($conn, "UPDATE cours SET alerte='$alerte', description_court='$description_court',description_longue='$description_longue',photo='$photo' WHERE id_cours = $id");
    $_SESSION['message'] = "le produit a été mis a jour!"; 
header('location:index.php');
}


function template_headerConnecté($title) {
  
  $Prenom=$_SESSION['Prénom'];
echo  <<< EOT
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/assets/css/style.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">

    <title>Lax Studio</title>
</head>

<body style="background-color: #E5E2EB">

    <header class="one-edge-shadow">
        <div class="row nomarge">
            <div class="col-lg-1" style="text-align: center;">
                <img src="include/assets/img/laxStudio.png" id="logo" alt="">
            </div>
            <div class="offset-lg-9 col-lg-2">
                <a class="nav-link dropdown-toggle btnicon btn btn-light bg-white relative" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">$Prenom &nbsp;<i class="fas fa-user"></i>
       
                      </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="monCompte.php">Mon compte</a>
                    <a class="dropdown-item" href="mesReservations.php">Mes réservations</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="./logout.php">Deconnexion</a>
                </div>
            </div>

        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <button class="navbar-toggler" style="border: none; margin-top: -45px;" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="row" style="width: 100%;">
                    <div class="offset-lg-1 col-lg-10">
                        <div class="row nomarge">
                            <div class="col-lg-2">
                                <a class="btncat btn btn-light bg-white" href="index.php" role="button">ACCUEIL</a>
                            </div>

                            <div class="col-lg-2 ">
                                <a class="btncat btn btn-light bg-white" href="planning.php" role="button ">PLANNING</a>
                            </div>
                            <div class="col-lg-2 ">
                                <a class="btncat btn btn-light bg-white" href="tarif.php" role="button ">TARIFS</a>

                            </div>
                            <div class="col-lg-2 ">
                                <a class="btncat btn btn-light bg-white" href="location.php" role="button ">LOCATION</a>

                            </div>
                            <div class="col-lg-2 ">
                                <a class="btncat btn btn-light bg-white" href="contact.php" role="button ">CONTACT</a>

                            </div>
                            <div class="col-lg-2 ">
                                <a class="btncat btn btn-light bg-white" href="informations.php" role="button ">INFORMATIONS</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>



   
EOT;
}


?>

<?php

function template_headerNonConnecté($title) {
echo <<<EOT
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/assets/css/style.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">

    <title>Lax Studio</title>
</head>

<body style="background-color: #E5E2EB">
    <header class="one-edge-shadow">
        <div class="row nomarge">
            <div class="col-lg-1" style="text-align: center;">
                <img src="include/assets/img/laxStudio.png" id="logo" alt="">
            </div>
            <div class="offset-lg-9 col-lg-2">
                <a class="nav-link dropdown-toggle btnicon btn btn-light bg-white relative" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
                      </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/miniprojet/login.php">Connexion</a>
                    <a class="dropdown-item" href="/miniprojet/register.php">S'inscrire</a>
                </div>
            </div>

        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <button class="navbar-toggler" style="border: none; margin-top: -45px;" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="row" style="width: 100%;">
                    <div class="offset-lg-1 col-lg-10">
                        <div class="row nomarge">
                            <div class="col-lg-2">
                                <a class="btncat btn btn-light bg-white" href="index.php" role="button">ACCUEIL</a>
                            </div>

                            <div class="col-lg-2 ">
                                <a class="btncat btn btn-light bg-white" href="planning.php" role="button ">PLANNING</a>
                            </div>
                            <div class="col-lg-2 ">
                                <a class="btncat btn btn-light bg-white" href="tarif.php" role="button ">TARIFS</a>

                            </div>
                            <div class="col-lg-2 ">
                                <a class="btncat btn btn-light bg-white" href="location.php" role="button ">LOCATION</a>

                            </div>
                            <div class="col-lg-2 ">
                                <a class="btncat btn btn-light bg-white" href="contact.php" role="button ">CONTACT</a>

                            </div>
                            <div class="col-lg-2 ">
                                <a class="btncat btn btn-light bg-white" href="informations.php" role="button ">INFORMATIONS</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>



   
EOT;
}


?>

