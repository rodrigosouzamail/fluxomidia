<!--MENU-->
<script language="JavaScript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/jquery.accordion-1.2.2.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function() {
	$('ul').accordion();   
});
</script>

<style>
	.accordion { list-style-type: none; padding: 0; margin: 0 0 30px; border: 1px solid #333333; border-top: none; border-left: none; font-family: 'Cuprum', arial, serif; font-size: 14px }
	.accordion ul y {padding: 0; margin: 0; float: left; display: block; width: 100%; }
	.accordion li { background: #FFF; cursor: pointer; list-style-type: none; padding: 0; margin: 0; float: left; display: block; width: 100%;}
	.accordion li div { padding: 20px; background: #FFFFFF; display: block; clear: both; float: left; width: 160px;}
	.accordion a { text-decoration: none; border-bottom: 1px dotted #c1c1c1;; color: #000; padding: 10px 22px; display: block; cursor: pointer; background:#333; color:#FFF; text-shadow:1px 1px 1px #000;}
	.accordion a:hover{background:#666; color:#FFC; text-shadow:1px 1px 1px #000;}
	
	/* Level 2 */
	.accordion li ul li { background:#CCC; font-size: 0.9em; border:1px dotted #333; }
	.accordion li ul li a{ padding-left:20px; background:#CCC; color:#333; text-shadow:none;}
	.accordion li ul li a:hover{ color:#333; text-shadow:none; background:#FFF; }
</style>
<!--MENU-->




<ul class="accordion">
                <li>
                <a href="index2.php">Inicio</a>
                </li>

                    <li>
                    <a>Banner</a>
                    <ul class="accordion">  
                    <li><a href="inicial.php">Cadastrar</a></li>
                    <li><a href="list_inicial.php">Listar</a></li>
                    </ul>
                    </li>
                    
                    	<li>
                        <a>Quem Somos</a>
                        <ul class="accordion">  
                        <li><a href="empresa.php">Modificar</a></li>
                        </ul>
                        </li>
                    
                    	<li>
                        <a>Produtos</a>
                        <ul class="accordion">
                        <li><a href="produtos.php">Cadastrar</a></li>
                        <li><a href="list_produtos.php">Listar</a></li>
                        <li><a href="addgaleria.php">Adicionar Galeria</a></li>
                        </ul>
                        </li>
                    
                            <li>
                            <a>Configurações</a>
                            <ul class="accordion">
                            <li><a href="config.php">Modificar</a></li>
                            </ul>
                            </li>
                            
                                <li>
                                <a>Usuarios</a>
                                <ul class="accordion">
                                <li><a href="usuarios.php">Modificar</a></li>
                                </ul>
                                </li>
                                
                                    <li>
                                    <a>Contato</a>
                                    <ul class="accordion">
                                    <li><a href="contatos.php">Modificar</a></li>
                                    </ul>
                                    </li>

                                    

                                        <li><a href="deslogar.php">Sair</a></li>

        </ul>