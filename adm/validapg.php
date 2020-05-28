<?php
session_start();

if(!isset($_SESSION['sessionUsuario']) || !isset($_SESSION['sessionSenha'])){
	
	unset($_SESSION['sessionUsuario']);
	unset($_SESSION['sessionSenha']);
	
	echo "<script>window.location='index.php';</script>";
	exit;
	
	};

?>