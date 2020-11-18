<?php

//if(isset=$_SESSION)

?>


<?php

    $sql = "SELECT * FROM Produits WHERE id_sscat=12 ";
    $res=$con->query($sql);
    $res -> fetch_all(MYSQLI_ASSOC);

?> 

<div class="row nomarge">
    <?php

    foreach ($res as $rows):
    ?>
    <div  style="text-align:center; color: gray" class="col-md-3 col-sm-6">
        <a class="btn btn-light" href="../descriptionProduit/descriptionProduit.php?edit=<?echo $rows['id_produit'];?>" role="button" style="width: 100%; color:#C49953; background-color: transparent; border: none;">
            <img src="<?= $rows['photo1']?>" alt="" class="img zoom" style="width: 100%; border-radius">
        </a>
                        
                           <p>     <?php echo $rows['marque'] ?> – <?php echo $rows['nom_produit'] ?></p>
                            <p>     <?php echo $rows['prix_ttc'] ?>€</p>



                            <br>
                      </div>  
<?php
endforeach;
?> 
