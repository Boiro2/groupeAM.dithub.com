<?php
$bdd = new pdo('mysql:host=localhost dbname=uvs_db;', 'root', 'root');
if(isset($_Get['id']) And !empty($_Get['id'])){
   $Getid = $_Get['id'];
  $recupnotes = $bdd->prepare('SELECT * FROM notes WHERE id = ?');
  $recupnotes->execute(array($getid));
  if($recupnotes->rowcount() > 0){
  	$notesInfos = $recupnotes->fetch();
     $notes = $notesInfos['matière'];
     $contenu = str_replace('<br />', '', $notesInfos['contenu']);
     if(isset($_post['Valider'])){
     	$matière_saisi = htmlspecialchars($_post['matière']);
     $contnu_saisi =nl2br(htmlspecialchars($_post['contenu']));

     $updatenotes = $bdd->prepare('UPDATE notes SET matière = ?, contenu = ? WHERE id = ?');
     $updatenotes->execute(array($matière_saisi, $contnu_saisi, $getid));

      
      header('location: notes.php');
    

   
     }
     
     	
 

  
  }else
  {
  	echo "Aucun note trouvé";
  }

  }else{
      echo "Aucune note trouvé";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>modifier les notes</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="">
		<input type="text" name="matière" value="<?= $matière; ?>">
		<br>
		<textarea name="contenu"><?= $contenu; ?></textarea>
        <br><br>
        <input type="submit" name="valider">
	</form>
</body>
</html> 


