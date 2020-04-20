<?php

require("conn.php");

$login = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = mysql_query("SELECT * FROM tb_usuario WHERE usuario='$login' AND senha='$senha'");

if(mysql_num_rows($sql) == 1){
	
	session_start();
	$_SESSION['sessionUsuario'] = $login;
	$_SESSION['sessionSenha'] = $senha;
	
	echo "<script>window.location='index2.php';</script>";
	
	}else{
		
	echo "<script>alert('Login ou Senha incorretos!');window.location='index.php';</script>";	
	
	}

?>