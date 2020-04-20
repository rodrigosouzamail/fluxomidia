<?php

$select = mysql_query("SELECT * FROM tb_empresa") or die (mysql_error());
while($ln = mysql_fetch_array($select)){
	$quemsomos = $ln['conteudo'];
	}

?>



<!--QUEM SOMOS-->
    	<div class="quemsomos">
        
        <h2>Quem Somos</h2>

        
        <p>
        <?php echo $quemsomos;?>        
        </p>
        
        </div>
        <!--QUEM SOMOS-->
        
        <!--VOLTAR-->
        <div class="voltar">
        <a href="?pg=principal"><img src="img/voltar.png" align="" border="0" /></a>
        </div>
        <!--VOLTAR-->