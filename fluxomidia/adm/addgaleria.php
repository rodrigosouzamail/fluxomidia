<?php
require_once("conn.php");
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/css.css" />
<title>Administrativo</title>

<script type="text/javascript" src="swfupload/core/swfupload.js"></script>
<script type="text/javascript" src="swfupload/js/swfupload.queue.js"></script>
<script type="text/javascript" src="swfupload/js/fileprogress.js"></script>
<script type="text/javascript" src="swfupload/js/handlers.js"></script>
<link href="css/estrutura.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>

<script type="text/javascript" src="js/jquery.MultiFile.js" /></script>


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
    
    <h2>Galeria de produtos</h2>
    
    <?php if(isset($_POST['upload'])){		 
 $idProd = $_GET['idProd'];	
 $sqlProd = mysql_query("SELECT * FROM tb_produtos"); 
	 
	 
 $pasta = 'produtos/thumb/';
 foreach($_FILES["img"]["error"] as $key => $error){

 if($error == UPLOAD_ERR_OK){
 $tmp_name = $_FILES["img"]["tmp_name"][$key];
 $cod = md5(uniqid(date('dmy'))) . '-' . $_FILES["img"]["name"][$key];
 $nome = $_FILES["img"]["name"][$key];
 $uploadfile = $pasta . basename($cod);

 if(move_uploaded_file($tmp_name, $uploadfile)){
 echo "O Arquivo <strong>" . $nome . "</strong> foi enviado com sucesso!<br />";
 $inserir = mysql_query("INSERT INTO tb_img (idProd, img) VALUES ('$idProd','$cod')");
 }else{
 echo "Erro ao enviar o arquivo " . $nome . "! Por favor tente outra vez!";
 } } } } ?>
    
    
    <form action="" method="post" enctype="multipart/form-data">
    
    	<label>Selecione o imóvel</label><br />
        <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
          <option value="addgaleria.php" onchange="addgaleria.php">Seleciona a Galeria</option>
          <?php
		  $sqlProd2 = mysql_query("SELECT * FROM tb_produtos");
		  while($linha = mysql_fetch_array($sqlProd2)){
		  ?>
          <option value="addgaleria.php?idProd=<?php echo $linha['idProd']; ?>"><?php echo $linha['produto']; ?></option>
          <?php
          }
		  ?>
        </select><br /><br />
        
        
        <?php if($_GET['idProd']){?>
        <!-- fotos aqui -->
        <input name="img[]" type="file" class="multi" size="50" accept="jpeg|jpg|png|gif" /><br />
        <input type="image" src="img/cadastrar.jpg" name="upload" value=" " />
        <?php } ?>
        
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
