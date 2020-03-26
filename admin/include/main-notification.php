<?php 
	$sql = "SELECT `status_Oder` FROM `order_cus` WHERE `status_Oder` = '0'";
	$check = mysql_query($sql);
	$row = mysql_fetch_array($check);
	$num  = sizeof($row);
 ?>
<div class="shortcutHome">
		<a href="index.php?router=order"><img src="../asset/admin/img/order.png" style="width: 64px ;height: 64px;"><br><?php echo $num ?> New Orrder</a>
		</div>
		<div class="shortcutHome">
		<a href="index.php?router=products"><img src="../asset/admin/img/product.png" style="width: 64px ;height: 64px;"><br>Products</a>
		</div>
		<div class="shortcutHome">
		<a href="index.php?router=user"><img src="../asset/admin/img/user.png" style="width: 64px ;height: 64px;"><br>User</a>
		</div>
		<div class="shortcutHome">
		<a href="#"><img src="../asset/admin/img/contact.png" style="width: 64px ;height: 64px;"><br>Contact</a>
</div>
<div class="clear"></div>