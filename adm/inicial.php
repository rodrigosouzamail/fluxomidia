<?php
require"validapg.php";
require_once("conn.php");


if(isset($_POST['acao']) && ($_POST['acao'] == 'add')){


	
	
	$desc = $_POST['descricao'];
	
	//Ação de enviar foto
	$permitido = array('image/jpg','image/jpeg','image/pjpg','image/png','image/gif');
	$pasta = "banner";
	
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$type = $_FILES['foto']['type'];
	
	$foto = md5(uniqid(rand(), true)).".jpg";
	
	if(in_array($type, $permitido)){
		move_uploaded_file($tmp, "$pasta/$foto");
		}
	//Termina Ação da foto
	
	
	$add = mysql_query("INSERT INTO tb_inicial (foto) VALUES ('$foto')") or die(mysql_error());
	if($add == 1){
		
		echo "<script>alert('Cadastrado com sucesso!');</script>";
		
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
    
    <h2>Cadastro dos Destaques</h2>
    <p>OBS: Dimensão banner: 816x302</p>
    <form action="" method="post" enctype="multipart/form-data">
    
    <label>Banner</label><br />
    <input type="file" name="foto" /><br /><br />
    
    <input type="hidden" name="acao" value="add" />
    
    <input type="image" src="img/cadastrar.jpg" value="" />
    
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
