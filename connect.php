<?php
session_start();
if(isset($_post['valider'])){
	if(!empty($_post['pseudo']) and !empty($_post['mdp'])){
		$pseudo_par_defaut ="admin";
		$mdp_par_defaut ="admin1234";

		$pseudo_saisi =htmlspecialchars($_post['pseudo']); 
		$mdp_saisi = htmlspecialchars($_post['mdp']);

		if($pseudo_saisi == $pseudo_par_defaut and $mdp_saisi == $mdp_par_defaut){
              $_session['mdp'] = $mdp_saisi;
              header('location: index.php'); 
		}else{
			echo "votre mot de passe ou pseudo est correct";
		}
  }else{
  	echo "veuillez compléter tous les champs...";
  }
 }
?>
<html>
<head>
	<title> espace de connexion Admin</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="" align="center">
		<input type="text" name="pseudo" autocomplete="off">
		<br>
		<input type="password" name="mdp">
		<br><br>
		<input type="submit" name="valider">
	</form>
</body>
</html>