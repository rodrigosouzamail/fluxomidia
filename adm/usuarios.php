<?php
require"validapg.php";
require_once("conn.php");
require_once("fckeditor/fckeditor.php");

if(isset($_POST['acao']) && ($_POST['acao'] == 'alterar')){
	$id = $_POST['idUsuario'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	$alt = mysql_query("UPDATE tb_usuario SET email='$email', usuario='$usuario', senha='$senha' WHERE idUsuario='1'") or die(mysql_error());
	if($alt == 1){
		
		echo "<script>alert('Modificado com sucesso!');</script>";
		
		}
	
	
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/css.css" />
<title>Administrativo</title>

</head>

<body>

<!--TOPO-->
<div class="topo">
<?php include"topo.php"; ?>
</div>
<!--TOPO-->

<div class="content">
	
    <!--MENU-->
	<div class="menu">
	<?php include"menu.php"; ?>      
    </div>
    <!--MENU-->
    
    
    <!--CONTEUDO-->
    <div class="conteudo">
    
    <h2>Alteração de usuário e Senha</h2>
    
    <?php
    $sel = mysql_query("SELECT * FROM tb_usuario");
	while($ln = mysql_fetch_array($sel)){
		
		$email = $ln['email'];
		$usuario = $ln['usuario'];
		$senha = $ln['senha'];
		
		}
	?>
    
    <form action="" method="post" enctype="multipart/form-data">
    
    <label>Email</label> 
    (para recuperação de senha)<br />
	<input name="email" type="text" value="<?php echo $email;?>" size="40"  /><br /><br />
    
    <label>Usuário</label><br />
	<input name="usuario" type="text" value="<?php echo $usuario;?>" /><br /><br />
    
    <label>Senha</label><br />
	<input type="password" name="senha" value="<?php echo $senha;?>" /><br /><br />
    
    <input type="hidden" name="acao" value="alterar" />
    
    <input type="image" src="img/alterar.jpg" value="" />
    
    </form>
    
    </div>
    <!--CONTEUDO-->

</div>

<!--RODAPE-->
<div class="rodape">
<?php include"rodape.php"; ?>
</div>
<!--RODAPE-->


</body>
</html>
