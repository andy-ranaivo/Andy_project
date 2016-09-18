<html>
<title> Inscription </title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div id="page">
	<div id="entete2">
	</div>
	
	<div id="corps2">
	<div>
		<h1 class="titre">REMPLISSEZ LES INFORMATIONS CI-DESSUS POUR VOUS INSCRIRE</h1>
		<p class="important"> Les informations marquées par les(*) sont obligatoires </p>
	</div>
		<form name="form1" method="get" action="confirmation.php">
	
			<label>
				<p>Pseudo : <input type="text" name="Pseudo"> * </p>
			</label>
			<br>
			<label>
				<p>Mot de passe : <input type="password" name="cle"> * </p>
			</label>
			<br>
			<label>
				<p>nom : <input type="text" name="nom"> * </p>
			</label>
			<br>
			<label>
				<p>Prenom :<input type="text" name="prenom"> * </p>
			</label>
			<br>
			<label>
				<p>Age : <input type="text" name="Age"> * </p>
			</label>
			<br>
			<label>
				<p>Adresse :<input type="text" name="Adresse"> </p>
			</label>
			<br>
			<label>
				<p>Situation :<input type="text" name="Situation"> </p>
			</label>
			<br>
			<label>
				<input type="submit" name="Submit" value="Inscription">
			</label>
			
		</form>
		<div>
			<a href="index.php"><p>Acceuil</p><a>
			<a href="confidentiel/createur.php"> <p>Pour moi</p> </a>
		</div>
	</div>
	

	<div id="basdepage">
		
	</div>
</div>
</body>
</html>