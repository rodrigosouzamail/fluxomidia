


<!--BANNER-->
    	<div class="banner">
        <ul>
        
<?php

$select = mysql_query("SELECT * FROM tb_inicial ORDER BY idInicial DESC") or die (mysql_error());
while($ln = mysql_fetch_array($select)){
	$banner = $ln['foto'];
	

?>

        <li><img src="adm/banner/<?php echo $banner;?>" alt="" width="816" height="302" name="img" /></li>

<?php } ?>

		</ul>
       
        </div>        
        

        <div class="banner_bg">
        	
        </div>
<!--BANNER-->