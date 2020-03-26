<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  	<h2 class="head">Sản Phẩm Mới</h2>
	
				
			<div class="top-box1">
				
			<?php 
				$sql = "select * from `product` order by `date_product` desc limit 6";
			
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
					echo		'<p class="title">'.$row['name_product'].'</p>';
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
	

			<!-- San Pham Moi -->
		  <h2 class="head">Sản Phẩm Hot</h2>
					
			<div class="top-box1">
			<?php 
				$sql = "select * from product limit 6";
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
			</div>				<div class="clear"></div>
			</div>			 						 			    
		  </div>
			<div class="rsidebar span_1_of_left">
				<div class="top-border"> </div>
				 <div class="border">
	             <link href="asset/user/css/default.css" rel="stylesheet" type="text/css" media="all" />
	             <link href="asset/user/css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
				  <script src="asset/user/js/jquery.nivo.slider.js"></script>
				    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
		    <div class="slider-wrapper theme-default">
              <div id="slider" class="nivoSlider">
                <img src="asset/user/images/t-img1.jpg"  alt="" />
               	<img src="asset/user/images/t-img2.jpg"  alt="" />
                <img src="asset/user/images/t-img3.jpg"  alt="" />
              </div>
             </div>
              <div class="btn"><a href="single.html">Check it Out</a></div>
             </div>
           <div class="top-border"> </div>
			<div class="sidebar-bottom">
			    <h2 class="m_1">Newsletters<br> Signup</h2>
			    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer</p>
			    <div class="subscribe">
					 <form>
					    <input name="userName" type="text" class="textbox">
					    <input type="submit" value="Subscribe">
					 </form>
	  			</div>
			</div>
	    </div>z`
	   <div class="clear"></div>
	</div>
	</div>
	</div>
