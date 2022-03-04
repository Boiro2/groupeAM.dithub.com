<?php
session_start();
if(!$session['mdp']){
	header('location: connect.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
</head>
<body>
   <a href="membres.php">Afficher tous les membres</a>
   <a href="publiernotes">publier nouveaux notes</a>
   <a href="publiernotes">Afficher tous les notes</a>
</body>
</html>