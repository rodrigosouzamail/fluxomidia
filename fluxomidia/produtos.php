


<!--PRODUTOS-->
    	<div class="produtos">
        
        <h2>Nossos Produtos</h2>
<?php

$select = mysql_query("SELECT * FROM tb_produtos") or die (mysql_error());
while($ln = mysql_fetch_array($select)){
	$id = $ln['idProd'];
	$produto = $ln['produto'];
	$foto = $ln['foto'];
	$descricao = $ln['descricao'];
	$especifica = $ln['especifica'];
	

?>

<div class="prod">
  <table width="375" border="0">
    <tr>
      <td width="182"><img src="adm/produtos/<?php echo $foto;?>" alt="" width="150" /></td>
      <td width="165"><p><a href="index.php?pg=ver_produtos_desc&idProd=<?php echo $id;?>">Descrição</a></p>
        <p><a href="index.php?pg=ver_produtos_esp&idProd=<?php echo $id;?>">Especificação</a></p>
        <p><a href="index.php?pg=ver_produtos_galeria&idProd=<?php echo $id;?>">Galeria de imagens</a></p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>

<?php } ?>
</div>
        <!--PRODUTOS-->
