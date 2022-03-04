<?php
session_start();
$bdd = new pdo('mysql:host=localhost;dbname=uvs_db;' 'root', 'root');
if(!$session['mdp']){
	header('location: connect.php');
}

if(isset($_post['envoi'])){
	if(!empty($_post['matière']) and !empty($_post['contenu'])){
        $matière = htmlspecialchars($_post['matière']);
        $contenu = nl2br(htmlspecialchars($_post['contenu']));

        $insertNotes = $bdd->prepare('INSERT INTO notes(matière, contenu)values(?, ?)');
        $insertNotes->execute(array($matière, $contenu));

        echo "les notes ont bien été envoyé....";
	}else{
		echo "veuillez compléter tous les champs....";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Publier les notes</title>
	<meta charset="utf-8">
</head>
<body>
    <form method="post" action="">
    	<input type="text" name="matière">
    	<br>
    	<textarea name="contenu"></textarea>
    	<br>
    	<input type="submit" name="envoi">
    	
    </form>
</body>
</html>