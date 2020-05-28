<?php
require_once("conn.php");

if(isset($_POST['acao']) && ($_POST['acao'] == 'alterar')){
	
	$id = $_GET['idInicial'];
	$desc = $_POST['descricao'];
	
	
	$alt = mysql_query("UPDATE tb_inicial SET descricao='$desc' WHERE idInicial='$id'") or die(mysql_error());
	if($alt == 1){
		
		echo "<script>alert('Alterado com sucesso!');</script>";
		
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
    
    <h2>Cadastro de Produtos</h2>
    
    <form action="" method="post" enctype="multipart/form-data">
    
    <?php
	$id = $_GET['idInicial'];
    $sql3 = mysql_query("SELECT * FROM tb_inicial WHERE idInicial='$id'");
	while($lnProd = mysql_fetch_array($sql3)){
		$desc = $lnProd['descricao'];
		}
	?>
    
    <label>Descrição</label><br />
    <textarea name="descricao" cols="80" rows="10"><?php echo $desc;?></textarea><br /><br />
    
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
