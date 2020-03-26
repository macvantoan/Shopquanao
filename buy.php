<?php
	require_once('include/header.php');
 ?>
		 <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Thông Tin Khách Hàng</h4>
    		   <form action='process/process.php?action=buy_money' method="post">
    			 <div class="col_1_of_2 span_1_of_2">
							<?php if(isset($_SESSION['info_user'])){
								
								?>
								<div><input id='name_buy' name='name_buy' type="text"  placeholder="Tên Của Bạn" value="<?php echo $_SESSION['info_user']['name']; ?>"></div>
								<div><input id='address_buy' name='address_buy' type="text" placeholder="Địa CHỉ"  value="<?php echo $_SESSION['info_user']['address']; ?>"></div>
								<div><input id='phone_buy' name='phone_buy' type="text" placeholder="Số Điện Thoại" value=<?php echo $_SESSION['info_user']['phone']; ?> ></div>
								<div><input id="email_buy" name='email_buy' type="text" placeholder="Email" value=<?php echo $_SESSION['info_user']['email']; ?> ></div>
									<?php  } else { ?>
							<div><input class="buy" id='name_buy' name='name_buy' type="text" value="" placeholder="Tên Của Bạn"></div>
							<div><input class="buy" id='address_buy' name='address_buy' type="text" placeholder="Địa CHỉ" ></div>
							<div><input class="buy" id='phone_buy' name='phone_buy' type="text" placeholder="Số Điện Thoại" ></div>
							<div><input class="buy" id="email_buy" name='email_buy' type="text" placeholder="Email"></div>
							<?php } ?>
							<div class="error"></div>
						  <button id="send_buy" class="grey" name='buy_money'>Submit</button>
		    	 </div>

		    	  <div class="col_1_of_2 span_1_of_2">	
					<h1 style="font-size:20px;font-weight:bold;"> Thông tin giỏ hàng </h1>
					<?php if(isset($_SESSION['cart'])){ 
						foreach($_SESSION['cart'] as $v){
					
					?>
						<h1 style="font-size:20px;">+ Sản Phẩm  <?php echo $v['name'];  ?> </h1>
					<?php }} ?>
					
		          </div>
		    
		    <p class="terms" style="color: red"></p>
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>
	
 <?php
	require_once('include/footer.php');
 ?>