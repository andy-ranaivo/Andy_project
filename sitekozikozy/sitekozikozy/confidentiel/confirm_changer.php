<?php
	$del=(isset($_GET['id']))?$_GET['id']:"";

	
	$sql='SELECT *FROM formulaire WHERE formulaire.num=%s';
	$sql=sprintf($sql,$del);
	
	
	include ("../connexion mysql.php");
	
	
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
	$data= mysql_fetch_assoc($req);
?>
<form name="form1" method="get" action="createur.php">
		<label>
			<p>Veuillez entrer la variable à changer et sa nouvelle valeure</p>
		
			<input type="text" name="val" value="<?php echo $data['num'];?>" >
			</label>
			
			<label>
			<input type="text" name="new" value="<?php echo $data['nom'];?>">
			</label>
			
			<label>
			<input type="text" name="vao" value="<?php echo $data['prenom'];?>">
			</label>
			
			<label>
				<input type="submit" name="Submit" value="Changement">
		</label>
</form>