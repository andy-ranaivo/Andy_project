<?php
@session_start();
@session_destroy();
?>
<html>
<title> Acceuil </title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div id="page">
	<div id="entete">
		
	</div>

	<div id="menu_inscription">
		<div>
			<p>Si vous êtes deja inscrit</p>
		</div>
		
		<form name="form1" method="post" action="mapage.php">
			<p>Pseudo<p/>
			<label>
				
				<input type="text" name="ps">
			</label>
				<br>
				<p>Mot de passe<p/>
			<label>
			 
				<input type="password" name="mp">
			</label>
				<br>
			<label>
				<input type="submit" name="Submit" value="Connexion">
			</label>
		</form>
		
		<div>
			<br></br>
			<a href="formulaire.php"><p class='vite'>Cliquez ici pour vous inscrire</p></a>
		</div>
	</div>

	<div id="corps">
	
	</div>

	<div id="basdepage">
		
	</div>
</div>
</body>
</html>