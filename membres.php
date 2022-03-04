<?php
session_start();
$bdd = new pdo('mysql:host=localhost;dbname=uvs_db;' 'root', 'root');
if(!$session['mdp']){
	header('location: connect.php');
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Afficher le membres</title>
	<meta charset="utf-8">
</head>
<body>

<!--Afficher tous les membres -->
   <?php
      $recupusers =$bdd->query('SELECT * FROM membres');
      while($user = $recupusers->fetch()){
      	?>
      	<p><?= $user['pseudo'] ; ?></p>
      	<?php
      }
   ?>
<!-- Fin d'afficher tous les membres -->
</body>
</html>