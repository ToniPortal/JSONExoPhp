<?php
	session_start();
	if(isset($_SESSION["authToken"])){
		$token = $_GET["token"];
		if(in_array($token,$_SESSION["authToken"])){
			echo "Authentification réussie";
		}
		else{
			echo "Authentification echouée";
		}
	}
	else{
		echo "Aucun token enregistré";
	}
?>