


<!--BANNER-->
    	<div class="banner">

		
<div id="page-wrap">
											
	<div class="slider-wrap">
		<div id="main-photo-slider" class="csw">
			<div class="panelContainer">

				<?php
                $sel = mysql_query("SELECT * FROM tb_inicial");
				$cont = mysql_num_rows($sel);
				while($ln = mysql_fetch_array($sel)){
					$banner = $ln['foto'];
                
                ?>
                
				<div class="panel">
					<div class="wrapper"> <a href="index.php?pg=produtos"><img src="adm/banner/<?php echo $banner;?>" alt="temp" width="816" height="302" /></a>
						<div class="photo-meta-data">

						</div>
					</div>
				</div>
				
				<?php
				}
				?>
                
                
                
			</div>
		</div>
        
        
	 
        
        <br /><br /><br /><br />
        

		<div id="movers-row">
		  <?php
                
				$sel2 = mysql_query("SELECT * FROM tb_inicial");
				$cont2 = mysql_num_rows($sel2);
				while($ln2 = mysql_fetch_array($sel2)){
					$thumb = $ln2['foto'];
					
		?>
          <div><a href="#<?php echo ($i++)+1;?>" class="cross-link"><img src="adm/banner/<?php echo $thumb;?>" class="nav-thumb" width="80" height="30" /></a></div>
          <?php
		}
		?>
		</div>

	</div>
	
	</div>
        
        
       
        </div>        
        

        <div class="banner_bg">
        	
        </div>
<!--BANNER-->