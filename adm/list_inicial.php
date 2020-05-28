<?php
require"validapg.php";
require_once("conn.php");

if(isset($_GET['acao']) && ($_GET['acao'] == 'deletar')){
	$idInicial = $_GET['idInicial'];
	
	
	$del = mysql_query("DELETE FROM tb_inicial WHERE idInicial='$idInicial'");		
		if($del == 1){
		echo "<script>alert('Excluido com sucesso!');</script>";
		}
	
	
}

if(isset($_POST['acao']) && ($_POST['acao'] == 'add')){
	$prod = $_POST['produto'];
	$desc = $_POST['descricao'];
	
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$tipo = $_POST['foto']['type'];
	
	$permitido = array('image/jpg','image/jpeg','image/pjpg','image/gif','image/png');
	$pasta = "produtos";
	
	if(in_array($tipo, $permitido)){
		move_uploaded_file($tmp, "$pasta/$foto");
		
		}
	
	
	$add = mysql_query("INSERT INTO tb_produtos (produto, foto, descricao) VALUES ('$prod','$foto','$desc')") or die(mysql_error());
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
    
    <h2>Listagem de Banner</h2>
    
    <table width="700" border="0" cellpadding="2" cellspacing="2">
    
     
  	  
      
      
      	    
      <?php
	  
	  
      $sel = mysql_query("SELECT * FROM tb_inicial") or die(mysql_error());
	  while($ln = mysql_fetch_array($sel)){
		  $id = $ln['idInicial'];
		  $foto = $ln['foto'];
		  $desc = $ln['descricao'];
		  
	  ?>
      <tr>
      <p>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><img src="banner/<?php echo $foto;?>" width="400" align="middle" /></td>
        <td width="16" align="center" bgcolor="#FFFFCC"><a href="list_inicial.php?acao=deletar&idInicial=<?php echo $id;?>"><img src="../../loja/adm/img/excluir.png" width="16" height="16" /></a></td>
      <td width="3"></p>
      <a href="alt_inicial_foto.php?acao=deletar&amp;idInicial=<?php echo $id;?>"><img src="img/foto.png" width="20" height="20" /></a></tr>
      <tr>
        <td colspan="3" align="center"><hr /></td>
      </tr>
      <?php } ?>
      
    </table>
    
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
