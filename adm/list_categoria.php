<?php
require_once("conn.php");

if(isset($_POST['acao']) && ($_POST['acao'] == 'editar')){
	$id = $_POST['idCategoria'];
	$editar = mysql_query("UPDATE categorias SET categoria='$categoria' WHERE idCategoria='$id'") or die (mysql_error());
	
	if($editar == 1){
		echo "<script>alert('Operação realizada com sucesso!');window.location='list_categoria.php';</script>";
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
    
    <h2>Categorias cadastradas</h2>
    
    <?php if($acao == ""){?>
    <table width="700" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td width="641" align="center" bgcolor="#FFFF99"><strong>Categoria</strong></td>
        <td colspan="2" align="center" bgcolor="#FFFF99"><strong>Ação</strong></td>
      </tr>
      
      <?php
	  
	  
      $sql = mysql_query("SELECT * FROM categorias");
	  while($ln = mysql_fetch_array($sql)){  
	  ?>
      <tr>
        <td>&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="17">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFCC" align="center"><p><?php echo $ln[categoria];?></p></td>
        <td><a href="?acao=editar&id=<?php echo $ln[idCategoria];?>"><img src="img/editar.png" width="16" height="16" /></a></td>
        <td><img src="img/excluir.png" width="16" height="16" /></td>
      </tr>
      <?php } } else {?>
    </table>
    
    
    <?php
	$sql2 = mysql_query("SELECT * FROM categorias WHERE idCategoria='$id'");
	while($ln2 = mysql_fetch_array($sql2)){  

	?>
    
    
    <form action="" method="post" enctype="multipart/form-data">
    
    <label>Alterar Categoria</label><br />
    <input type="text" name="categoria" value="<?php echo $ln2[categoria];?>" /><br /><br />
    
    <input type="hidden" name="acao" value="editar" />
    <input type="hidden" name="idCategoria" value="<?php echo $ln2[idCategoria];?>" />
    
    <input type="image" src="img/alterar.jpg" value="" />
    
    </form>
    
    <?php } }?>
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
