<?php
require_once("conn.php");
require("fckeditor/fckeditor.php");

if(isset($_POST['acao']) && ($_POST['acao'] == 'alterar')){
	
	$id = $_GET['idProd'];
	$prod = $_POST['produto'];
	$desc = $_POST['descricao'];
	$esp = $_POST['especifica'];
	
	
	$alt = mysql_query("UPDATE tb_produtos SET produto='$prod', descricao='$desc', especifica='$esp' WHERE idProd='$id'") or die(mysql_error());
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
    
    <h2>Alteração de Produtos</h2>
    
    <form action="" method="post" enctype="multipart/form-data">
    
    <?php
	$id = $_GET['idProd'];
    $sql3 = mysql_query("SELECT * FROM tb_produtos WHERE idProd='$id'");
	while($lnProd = mysql_fetch_array($sql3)){
		$nome = $lnProd['produto'];
		$desc = $lnProd['descricao'];
		$especifica = $lnProd['especifica'];
		}
	?>
    
    <label>Nome do Produto</label><br />
    <input name="produto" type="text" value="<?php echo $nome;?>" size="55" /><br /><br />
    
    <label>Descrição</label><br />
    <?php
    $fck = new FCKeditor('descricao');
	$fck->BasePath = 'fckeditor/';
	$fck->Width = '700';
	$fck->Height = '250';
	$fck->Value  = $desc;
	$fck->ToolbarSet = 'agencia';
	$fck->Create();
	?>
    
    <br /><br />
    
    <label>Especificação</label><br />
    <?php
    $fck = new FCKeditor('especifica');
	$fck->BasePath = 'fckeditor/';
	$fck->Width = '700';
	$fck->Height = '400';
	$fck->Value  = $especifica;
	$fck->ToolbarSet = 'agencia';
	$fck->Create();
	?>
    
    <br /><br />
    
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
