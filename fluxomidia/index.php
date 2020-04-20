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
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Fluxo Mídia</title>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/jquery.cycle.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>


<!--banner-->
	<script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script>
	<script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
	<script type="text/javascript" src="js/coda-slider.1.1.1.pack.js"></script>
	
	<script type="text/javascript">
	
		var theInt = null;
		var $crosslink, $navthumb;
		var curclicked = 0;
		
		theInterval = function(cur){
			clearInterval(theInt);
			
			if( typeof cur != 'undefined' )
				curclicked = cur;
			
			$crosslink.removeClass("active-thumb");
			$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
			
			theInt = setInterval(function(){
				$crosslink.removeClass("active-thumb");
				$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
				curclicked++;
				if( 6 == curclicked )
					curclicked = 0;
				
			}, 3000);
		};
		
		$(function(){
			
			$("#main-photo-slider").codaSlider();
			
			$navthumb = $(".nav-thumb");
			$crosslink = $(".cross-link");
			
			$navthumb
			.click(function() {
				var $this = $(this);
				theInterval($this.parent().attr('href').slice(1) - 1);
				return false;
			});
			
			theInterval();
		});
	</script>


</head>

<body>
<!--GERAL-->
<div class="geral">

	<!--TOPO-->
	<div class="topo">
    <!--TOPO-->
    
    	<!--LOGO-->
    	<div class="logo"><img src="img/logo.png" alt="FluxoMidia" width="260" height="172" /></div>
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
    <div class="rodape_right"><p>&nbsp;</p></div>
    
</div>
</div>


<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
</script>
</body>
</html>
