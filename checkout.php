<?php require_once('include/header.php'); ?>
<?php if(isset($_SESSION['cart'])){ ?>
		<div class="register_account">
				   <div class="wrap">
					 <h4 class="title">Bạn Có <?php echo count($_SESSION['cart']);  ?> Món Hàng</h4>
					 <div class="cart-pro">
					 <div class="cart-title cart-1" >
					 Hình Ảnh
					 </div>
					  <div class="cart-title cart-i">
					 Tên Sản Phẩn
					 </div>
					  <div class="cart-title cart-i" >
					 Tổng Số Sản Phẩm
					 </div>
					  <div class="cart-title cart-i" >
					Tổng Tiền
					 </div>
					  <div class="cart-title cart-i" ">
					 Hành Động
					 </div>
					 </div>
						<?php
						$_SESSION['total_all'] = 0;
						foreach($_SESSION['cart'] as $cart){ 
							
						$_SESSION['total_all'] += $cart['total_price'];
						
						?>
						
							<div class="cart-pro">
							 <div class=" cart-item">
									<div class="noew">
									<img class="cart img-cart" src="<?php echo $cart['url_img']?>" />
									</div>
								<div class="cart cart-name">
									<?php echo $cart['name']; ?>
								</div>
								<div class="cart total-cart">
								<?php echo $cart['count']; ?>
								</div>
								<div class="cart total-price-cart">
								<?php echo $cart['total_price']; ?>
								</div>
								<div class="cart action-cart">
									<form action="process/process.php?action=remove_product" method="post">
									<input type="hidden" value=<?php echo $cart['id']?> name="cart_id"/>
									<button class="remove-cart" name="remove"> Xóa Sản Phẩm </button>
									</form>
								</div>
							 </div>
							</div>
						<?php };
							echo "<h1 style='font-size: 22px;padding: 10px;'>Tổng Tiền là:".$_SESSION['total_all']." </h1>";
						?>
						
						<form action="process/process.php?action=buy" method="post">
						<button class="btn-t" name="buy"> Thanh Toán </button>
						<button class="btn-t" name="cont_sell"> Tiếp Tục Mua Hàng </button>
						</form>
				   </div>
			</div>
<?php }else{ ?>
			<div class="register_account">
				   <div class="wrap">
					 <h4 class="title">Giỏ hàng Trống</h4>
					 <p class="cart">Bạn Có Thể Mua Hàng <br>Click<a href="index"> Tại Đây</a> </p>
				   </div>
			</div>
	<?php } ?>
<?php require_once('include/footer.php'); ?>