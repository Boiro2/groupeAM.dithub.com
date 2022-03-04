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
	<title>Afficher tous les notes</title>
	<meta charset="utf-8">
</head>
<body>
     <?php
        $recupnotes = $bdd->query('SELECT * FROM notes');
        while($notes = $recupnotes->fetch()){
           ?>
           <div class="notes" style="border: 1px xolid black;">
           	 <h1><?= $notes['matières']; ?></h1>
           	 <br>
           	 <p><?= $notes['contenu']; ?></p>
           	 <a href="modifiernotes.php?id=<?= $notes['id']; ?>">
           	 	<button style="color:black; background-color: yellow; margin-bottom: 10px;">Modifier les notes</button>
           	 </a>
           	 
           </div>
           <?php	
        }
     ?>
</body>
</html>