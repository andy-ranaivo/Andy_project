<?php

// on se connecte à MySQL 
$db = mysql_connect('127.0.0.1', 'root', ''); 

// on sélectionne la base 
mysql_select_db('kozikozy',$db); 

// on envoie la requête 



$total='SELECT count(*)as total FROM formulaire';
$req2 = mysql_query($total) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
$data2 = mysql_fetch_assoc($req2);

$totaux=$data2['total'];

?>