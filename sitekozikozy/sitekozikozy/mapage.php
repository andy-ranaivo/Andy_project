<?php 
@session_start();
$Pseudo=$_POST['ps'];
$motdep=$_POST['mp'];

// la requête SQL 

$sql = "SELECT f.num, f.nom,f.prenom,f.mot_de_passe,f.pseudo FROM formulaire f WHERE f.Pseudo='%s' AND f.mot_de_passe='%s' "; 
$sql =sprintf($sql,$Pseudo,$motdep);
// on se connecte à MySQL 
	
include ("connexion mysql.php");

$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
$data = mysql_fetch_assoc($req);

if($data['pseudo']!=null) {
	$_SESSION['pseudo']=$data['pseudo'];
}


echo "<h1>GET</h1>";
print_r($_GET);
echo "<h1>POST</h1>";
print_r($_POST);
echo "<h1>SESSION</h1>";
print_r($_SESSION);
?>
<html>
<title> Votre page </title>
<link rel="stylesheet" type="text/css" href="style.css">

<div id="page">
	<div>
		<?php
		if($data['nom']==null)
		{
			$res=("SOIT vous n'êtes pas membre SOIT votre Pseudo ou Mot de passe est fausse");
			echo $res;
		}
		?>
	</div>
	
<?php if(($Pseudo!=null)&&($motdep!=null)&&($motdep==$data['mot_de_passe'])) { ?>
	<div id="entetemapa">
		<?php
			// on affiche les informations de l'enregistrement en cours 
			echo '<p class="nom" margin><p class="nom"><span style="letter-spacing:2pt">'.$data['nom'].'</span></p><p class="nom"><span style="letter-spacing:2pt"> '.$data['prenom'].'</span></p>'; 
		?>
	</div >	
		<p>Entrer un nom</p>
		<form name="form1" method="get" action="recherche.php">
		<label>
			<input type="text" name="recherche">
		</label>
		<br>
		<label>
			<input type="submit" name="Submit" value="Rechercher des membres">
		</label>
		</form>
	<div>
	<div>
		<a href="confidentiel/confirm_changer.php?id=<?php echo $data['num'];?>"><p>modifier mon compte</p></a>
	</div>
	</div>
</div>
<?php } ?>
</html>