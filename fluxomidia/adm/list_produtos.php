<?php
require"validapg.php";
require_once("conn.php");

if(isset($_GET['acao']) && ($_GET['acao'] == 'deletar')){
	$idProduto = $_GET['idProd'];
	
	
	$del = mysql_query("DELETE FROM tb_produtos WHERE idProd='$idProduto'");		
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
    
    <h2>Listagem de Produtos</h2>
    
    <table width="737" border="0" cellpadding="2" cellspacing="2">
    
     
  	  
      
      
      	    
      <?php
	  $qtd = 5;
	  $pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;
	  $inicio = ($qtd*$pg) - $qtd;
	  
      $sel = mysql_query("SELECT * FROM tb_produtos LIMIT $inicio, $qtd") or die(mysql_error());
	  while($ln = mysql_fetch_array($sel)){
		  $id = $ln['idProd'];
		  $nome = $ln['produto'];
		  $foto = $ln['foto'];
		  $desc = $ln['descricao'];
		  
	  ?>
      <tr>
      <p>
        <td width="371" align="center" bgcolor="#FFFFCC"><?php echo $nome;?></td>
        <td width="261" align="center" valign="middle" bgcolor="#FFFFCC"><img src="produtos/<?php echo $foto;?>" width="150" align="middle" /></td>
        <td width="28" align="center"><a href="alt_produtos.php?idProd=<?php echo $id;?>"><img src="../../loja/adm/img/editar.png" width="16" height="16" /></a></td>
        
        <td width="23" align="center"><a href="list_produtos.php?acao=deletar&idProd=<?php echo $id;?>"><img src="../../loja/adm/img/excluir.png" width="16" height="16" /></a></td>
      <td width="22"></p>
        <a href="alt_foto.php?acao=deletar&amp;idProd=<?php echo $id;?>"><img src="img/foto.png" width="20" height="20" /></a>
      </tr>
      <tr>
        <td colspan="4" align="center"><hr /></td>
      </tr>
      <?php } ?>
      
    </table>

    <div class="pager">
      
      <?php
      $sel2 = mysql_query("SELECT * FROM tb_produtos");
	  $numTotal = mysql_num_rows($sel2);
	  $totalPaginas = ceil($numTotal/$qtd);
	  
	  for($i = 1; $i <= $totalPaginas; $i++){
		  if($i == $pg){
			  echo $i;
			  }else{
				  echo "<a href=\"?pg=$i\">".$i."</a>";
			  }
		  }
	  ?>
      
      </div>
    
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
