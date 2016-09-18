<?php
include('check_session.php');
	$nom="%".$_GET['recherche']."%";
	
	$sql="SELECT f.nom,f.prenom FROM formulaire f WHERE nom like '%s'"; 
	$sql=sprintf($sql,$nom);
	include ("connexion mysql.php");
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
?>
<html>
<title> Recherche </title>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="page">
	<div id="entetemapa">
	</div>
	<div>
	<table border="1">
	<?php
	
		while($data = mysql_fetch_assoc($req))
		{ 
	?>
		<tr>
			<?php
				// on affiche les informations de l'enregistrement en cours 
				echo '<th>'.$data['nom'].'</th><th> ('.$data['prenom'].')</th>'; 
			?>
		</tr>
	<?php
		} 
	?>
	</table>
	</div>
</div>
</html>
	<?php
		// on ferme la connexion à mysql 
	mysql_close(); 
	?> 