<?php 
	require_once('include/header.php');
 ?>
 <?php 
 	if (isset($_GET['id'])) {
 		$id =  isset($_GET['id']) ? (string)(int)($_GET['id']) : false;
		$sql = "SELECT * FROM `product` WHERE id_product = '$id'";
		$my_query = mysql_query($sql);
		
		while($row = mysql_fetch_array($my_query)){
  ?>
<div class="mens">    
  <div class="main">
     <div class="wrap">
     	<ul class="breadcrumb breadcrumb__t"><a class="home" href="index.php">Trang Chủ</a> / <a href="#"><?php $id2 = $row['id_gr_product']; $my_query4 = mysql_query("SELECT * FROM `gr_product` WHERE id_gr_product = '$id2'");
		$row4 = mysql_fetch_array($my_query4); echo $row4['name_gr'];
		?></a> / <?php echo $row['name_product'] ?></ul>
		
		<div class="cont span_2_of_3">
		  	<div class="grid images_3_of_2">
						<ul id="etalage">	
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="<?php echo $row['img_product'];?>" class="img-responsive" />
									<img class="etalage_source_image" src="<?php echo $row['img_product'];?>" class="img-responsive" title="" />
								</a>
							</li>
	
						</ul>
						 <div class="clearfix"></div>
	            </div>
		         <div class="desc1 span_3_of_2">
		         	<h3 class="m_3"><?php echo $row['name_product'] ?></h3>
		             <p class="m_5"><?php echo $row['price_product']; ?> vnd <!-- <span class="reducedfrom">Rs. 999</span> <a href="#">click for offer</a> --></p>
		         	 <div class="btn_form">
						<form method="post" action="process/process.php?action=add_cart"> 
							Nhập Số Lượng<br>
						 <input name='cart_product_count' class='input_t' type="number" />
							<br>
							 <input type='hidden'  name='id_of_cart' value=<?php echo $row['id_product'];  ?> /> 
							<input type="submit" class="add_cart"  value="Mua" name="submit">
							<p style="margin-top:5px;" class="error"></p>
						</form>
					 </div>
					<span class="m_link"> Mô Tả Sản Phẩm </span>
				     <p class="m_text2"><?php echo $row['description_product']; ?></div>
			   <div class="clear"></div>	
	    <div class="clients">
	    <h3 class="m_3">Một số sản phẩm cùng loại</h3>
		 <ul id="flexiselDemo3">
	    <?php 
			$id_sub = $row["id_gr_product"];
			$sql2 = "SELECT * FROM `product` WHERE `id_gr_product` = '$id_sub' LIMIT 6";
			$my_query2 = mysql_query($sql2);
			while($row2 = mysql_fetch_array($my_query2)){
	     ?>
		
			<li><img src=<?php echo $row2['img_product']; ?> /><a href="details-product-s<?php echo $row2['id_product']; ?>"><?php echo $row2['name_product']; ?></a><p><?php echo $row['price_product']; ?></p></li>
			
		
			<?php }; ?>
			 </ul>
     </div>
     <div class="toogle">
     	<h3 class="m_3">Thông Tin Sản Phẩm  </h3>
     	<p class="m_text"><?php echo $row['description_product'];?></div>
     <div class="toogle">
     	<h3 class="m_3">Thông tin Thêm</h3>
     	<p class="m_text"> Là Sản Phẩm Chất Lương Hàng Đầu </div>
      </div>
			<div class="rsingle span_1_of_single">
				<h5 class="m_1">Danh Mục</h5>
				<?php
					$sql3 = "select * from  gr_product";
					$my_query3 = mysql_query($sql3);
				while($row3 = mysql_fetch_array($my_query3)){
					?>
					<ul class="kids">
						<li class="last"><a href="#">+ <?php echo $row3['name_gr']; ?></a></li>
					</ul>
                <?php } ?>  
			
		     
		       <script src="asset/user/js/jquery.easydropdown.js"></script>
		      </div
		      <div class="clear"></div>
			</div>
			 <div class="clear"></div>
		   </div>
		</div>
	<?php } } else {
		redirect('shopdemo/index');
		} ?>
<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="asset/user/js/jquery.flexisel.js"></script>
<?php 
function admin(){
	
}
require_once('include/footer.php'); 

 ?>