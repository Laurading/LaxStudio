<?php  
session_start();
include('include/header.php'); ?>


<?php 


	if (isset($_GET['edit'] )) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM `cours` WHERE id_cours =$id");

		if (count([$record]) !=0 ) {
			$o = mysqli_fetch_array($record);
			$alerte = $o['alerte'];
            $description_court = $o['description_court'];
			$description_longue = $o['description_longue'];
			$photo = $o['photo'];
?>

<?=template_headerConnecté('loginpro')?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
    <link rel="stylesheet" href="./assets/css/styles.min.css">

</head>
<style>
    input{
        width:50%;
    }
</style>
<body>

    <form  method="post" action="" >

    <input type="hidden" name="id_cours" value="<?php echo $id; ?>"><br>
    <label>Alerte</label>
		<div class="input-group">
			
            <input type="text" name="alerte" value="<?php echo $alerte?>">
        </div>
        <label>Description court</label>
        <div class="input-group">
			
            <input type="text" name="description_court" value="<?= $description_court?>">
        </div>
<br>
        <label>Description longue</label>
        <div class="input-group">
			
            <input type="text" name="description_longue" value="<?php echo $description_longue?>">
        </div>
<br>
        <label>photo</label>
        <div class="input-group">
			
            <input type="text" name="photo" value="<?php echo $photo?>">
        </div>
	<?php 			
?>
		<div class="input-group">
        <button class="btn" type="submit" name="update" style="">UPDATE</button>
        </div>
		<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>

	</div>
<?php endif ?>
	</form>
	<button ><a href="index.php">retour</a> </button>
    <body>

</html>
		 <?php
	}

}
?>







