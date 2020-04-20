


<!--PRODUTOS-->
    	<div class="produtos">
        
        <h2>Especificações</h2>
<?php

$id = $_GET['idProd'];
$select = mysql_query("SELECT * FROM tb_produtos WHERE idprod='$id'") or die (mysql_error());
while($ln = mysql_fetch_array($select)){
	$produto = $ln['produto'];
	$foto = $ln['foto'];
	$descricao = $ln['descricao'];
	$especifica = $ln['especifica'];
}

?>

<div class="prod">
<img src="adm/produtos/<?php echo $foto;?>" width="400" />

<p><?php echo $especifica;?></p>

</div>

        <!--VOLTAR-->
        <div class="voltar">
        <a href="?pg=produtos"><img src="img/voltar.png" align="" border="0" /></a>
        </div>
        <!--VOLTAR-->

        </div>
        <!--PRODUTOS-->
