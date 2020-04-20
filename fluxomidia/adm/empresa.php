<?php
require"validapg.php";
require_once("conn.php");
require_once("fckeditor/fckeditor.php");

if(isset($_POST['acao']) && ($_POST['acao'] == 'alterar')){
	$id = $_POST['idEmpresa'];
	$conteudo = $_POST['conteudo'];
	
	$alt = mysql_query("UPDATE tb_empresa SET conteudo='$conteudo' WHERE idEmpresa='1'") or die(mysql_error());
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
    
    <h2>Página EMPRESA</h2>
    
    <?php
    $sel = mysql_query("SELECT * FROM tb_empresa");
	while($ln = mysql_fetch_array($sel)){
		$conteudo = $ln['conteudo'];
		}
	?>
    
    <form action="" method="post" enctype="multipart/form-data">
    
    <label>Conteudo</label><br />
    
	<?php
    $fck = new FCKeditor('conteudo');
	$fck->BasePath = 'fckeditor/';
	$fck->Width = '700';
	$fck->Height = '400';
	$fck->ToolbarSet = 'agencia';
	$fck->Value = $conteudo;
	$fck->Create();
	?>
    
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
