<?php
require_once("conn.php");
require_once("fckeditor/fckeditor.php");

if(isset($_POST['acao']) && ($_POST['acao'] == 'alterar')){
	$id = $_POST['idConfig'];
	$email = $_POST['email'];
	$tags = $_POST['tags'];
	
	$alt = mysql_query("UPDATE tb_config SET email='$email', tags='$tags' WHERE idConfig='1'") or die(mysql_error());
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
    
    <h2>Configurações do site</h2>
    
    <?php
    $sel = mysql_query("SELECT * FROM tb_config");
	while($ln = mysql_fetch_array($sel)){
		$email = $ln['email'];
		$tags = $ln['tags'];
		}
	?>
    
    <form action="" method="post" enctype="multipart/form-data">
    
    <label>Email Geral</label><br />
	<input name="email" type="text" value="<?php echo $email;?>" size="40" /><br /><br />
    
    <label>Palavras Chave</label><br />
	<textarea name="tags" cols="50" rows="6"><?php echo $tags;?></textarea><br /><br />
    
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
