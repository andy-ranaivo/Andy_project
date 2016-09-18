<?php 
// on se connecte à MySQL 
$db = mysql_connect('127.0.0.1', 'root', ''); 
mysql_select_db('kozikozy',$db); 

$total='SELECT count(*)as total FROM formulaire';
$req2 = mysql_query($total) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
$data2 = mysql_fetch_assoc($req2);
$totaux=$data2['total'];

$num=$totaux+1;
$Pseudo=$_GET['Pseudo'];
$mot_de_passe=$_GET['cle'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$age=$_GET['Age'];
$Adresse=$_GET['Adresse'];
$Situation=$_GET['Situation'];

// la requête SQL 

$sql = "INSERT INTO formulaire(num,Pseudo,mot_de_passe,nom,prenom,age,adresse,Situation) VALUES ('$num','%s','%s','%s','%s','%s','%s','%s')"; 

$sql = sprintf($sql,$Pseudo,$mot_de_passe,$nom,$prenom,$age,$Adresse,$Situation);
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
// on se connecte à MySQL 
	
	
?>
<html>
<div>
	<p> Vous êtes inscrit </p>
	<p>Votre Pseudo et le suivant : <?php echo $Pseudo;?></p>
	<p>Revenir à la page d'acceuil et connectez vous merci!!</p>
	<a href="index.php"> cliquez ici </a>
	
</div>