<html>
<?php

	$del=$_GET['id'];
	$sql2="DELETE FROM formulaire WHERE formulaire.num=%s";
	$sql2=sprintf($sql2,$del);
	
	include ("../connexion mysql.php");
	
	$req4=mysql_query($sql2);

	
?>

<form name="form1" method="get" action="createur.php">
			<label>
			<p>Suppression avec succés</p>
			<a href="createur.php"><p>voir le resultat</p></a>
		
			
</form>
</html>