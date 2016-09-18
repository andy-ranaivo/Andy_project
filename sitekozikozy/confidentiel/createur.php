
<?php

	$val=(isset($_GET['val']))?$_GET['val']:"";
	$new=(isset($_GET['new']))?$_GET['new']:"";
	$vao=(isset($_GET['vao']))?$_GET['vao']:"";
	
	//requete
	$sql='SELECT *FROM formulaire';
	
	$sql3="UPDATE formulaire f SET f.num=%s,f.nom='%s',f.prenom='%s' WHERE f.num=%s";	
	
	$sql3=sprintf($sql3,$val,$new,$vao,$val);

	
	//connexion a mysql
	include ("../connexion mysql.php");
	$req = mysql_query($sql);
	$req3= mysql_query($sql3);

	
	//$donnee=mysql_fetch_assoc($req2);
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
	
?>
<html>

<div>
	<h1>LISTES DES INSCRITS </h1>
	<table border="1">
	<?php
		while($data = mysql_fetch_assoc($req))
		{ 
	?>
		<tr>
		<th><img src="../image/sipakely.jpg" width="200px" height="150px"></th>
		
		<?php
			// on affiche les informations de l'enregistrement en cours 
			echo '<th>'.$data['num'].'</th><th>'.$data['Pseudo'].'</th><th>'.$data['mot_de_passe'].'</th><th> '.$data['nom'].'</th>
			<th>'.$data['prenom'].'</th><th>'.$data['age'].'</th><th>'.$data['adresse'].'</th><th> '.$data['Situation'].'</th>'; 
			?>
		
		<th>
		<th>	
			<a href="confirm_delete.php?id=<?php echo $data['num'];?>"><p>supprimer</p></a>
		</th>
		<th>
			<a href="confirm_changer.php?id=<?php echo $data['num'];?>"><p>modifier</p></a>
		</th>
		</tr>
	<?php
		} 
	?>
	</table>
	<a href="../index.php"> revenir à l'acceuil</a>
</div>
</html>
