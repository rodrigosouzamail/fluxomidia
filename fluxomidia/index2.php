<?php
include("adm/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" type="text/css" href="css/nivo.css" />
<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
<title>Fluxo Mídia</title>



<!--Jcycle-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/jquery.cycle.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>


<!--CYCLE-->
<script type="text/javascript">

	$(function(){
		$('.banner ul').cycle({ 
			
			fx: 'fade',
			timeout: 5000,
			next: '#proximo',
			prev: '#anterior',
			pager: '#pager'
   
		})	   
			   
	})

</script>


</head>

<body>
<!--GERAL-->
<div class="geral">

	<!--TOPO-->
	<div class="topo">
    <!--TOPO-->
    
    	<!--LOGO-->
    	<div class="logo"><img src="img/logo_fluxo.png" alt="FluxoMidia" width="291" height="116" /></div>
        <!--LOGO-->
        
        <!--MENU-->
    	<div class="menu">
        	<ul class="lavaLamp">
            	<li><a href="index.php?pg=principal" 
				<?php if($_REQUEST['pg'] == 'principal' || $_REQUEST['pg'] == ''){ echo "id=\"ativo\"";}?>>Principal</a></li>
                
                <li><a href="index.php?pg=quemsomos" 
				<?php if($_REQUEST['pg'] == 'quemsomos'){ echo "id=\"ativo\"";}else?>>Quem Somos</a></li>
                
                <li><a href="index.php?pg=produtos" 
				<?php {if($_REQUEST['pg'] == 'produtos'){ echo "id=\"ativo\"";}}?>>Produtos</a></li>
                
                <li><a href="index.php?pg=contato" 
				<?php {if($_REQUEST['pg'] == 'contato'){ echo "id=\"ativo\"";}}?>>Contato</a></li>
            </ul>
        </div>
    	<!--MENU-->
        
        <!--RESTRITO-->
        <div class="restrito">
        <p>Restrito</p>
        <form action="" method="post" enctype="multipart/form-data">
          <input type="submit" id="bt_restrito" value="" />
        </form>
        </div>
        <!--RESTRITO-->
    
    </div>
    
    <!--CONTENT-->
    <div class="content">
    
    
    <?php 
	
	if(!isset($_REQUEST['pg'])){
		include "principal.php";
		}else{
		include ($_REQUEST['pg']).".php";	
		}
	
	?>

    
    </div>
	<!--CONTENT-->






</div>
<!--GERAL-->

<!--RODAPE-->
<div class="rodape">
<div class="rodape_center">

	<div class="rodape_left"><p>Fluxo Mídia. Todos os direitos reservados.</p></div>
    <div class="rodape_right"><p>Desenvolvido por <a href="http://www.novamidiabrasilia.com">Nova Mídia</a></p></div>
    
</div>
</div>


<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
</script>
</body>
</html>
