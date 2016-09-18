<?php
@session_start();
if(!isset($_SESSION['pseudo'])) {
	header('location:index.php');
}
?>