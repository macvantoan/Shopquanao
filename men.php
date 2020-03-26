<?php 
	require_once('include/header.php');
	require_once('include/slider.php');
	?>
<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  	<h2 class="head">Giầy Nam</h2>
	
				
			<div class="top-box1">
			<?php 
				$sql = "select * from product where `id_gr_product` = 1 order by date_product desc limit 10";
				$myquery = mysql_query($sql);
				$index =1;
				while ($row = mysql_fetch_array($myquery)) {
					echo '<div class="col_1_of_3 span_1_of_3"';
					if ($index == 4) {
						echo "style='margin-left: 0;'";
					}
					echo '>';
			  	 	echo '<a href="details-product-'.$row['id_product'].'">';
				 	echo '<div class="inner_content clearfix">';
					echo '<div class="product_image">';
					echo	'<img src="'.$row['img_product'].'" alt=""/>';
					echo '</div>';;
                   	echo	' <div class="price">';
					echo  ' <div class="cart-left">';
					echo		'<p class="title">Lorem Ipsum simply</p>';
					echo		'<div class="price1">';
					echo		  '<span class="actual">'.$row['price_product'].'</span>';
					echo		'</div>';
					echo	'</div>';
					echo	'<div class="cart-right"> </div>';
					echo	'<div class="clear"></div>';
					echo '</div>';				
                   	echo '</div>';
                   	echo '</a>';
					echo '</div>	';
					$index++;

				}
			 ?>
						
				

				<div class="clear"></div>
			</div>	
	

					
				

				<div class="clear"></div>
			</div>				<div class="clear"></div>
			</div>			 						 			    
		  </div>
			
	   <div class="clear"></div>
	</div>
	</div>
	</div>
				

				

	<?php
	require_once('include/footer.php'); 
 ?>