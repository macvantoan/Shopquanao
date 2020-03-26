
<div id="wrapper">
	<?php require_once('left_bar.php'); ?>
	<div id="rightContent">
	
	
	<?php 
		if(isset($_GET['router'])) {
			$router = $_GET['router'];
			switch ($router) {
				case 'change_pass':
					require_once('change_pass.php');
					break;
				case 'user':
					require_once('user.php');
					break;
				case 'add_product':
					require_once('add_user.php');
					break;
				case 'products':
					require_once('show_products.php');
					break;
				case 'order':
					require_once('order_product.php');
					break;
				case 'order_details':
					require_once('order_details.php');
					break;
				case 'edit_user':
					require_once('edit_user.php');
					break;
				case 'edit_product':
					require_once('edit_product.php');
					break;
				default:
					require_once('main-notification.php');
					break;
			}
		}else{
				require_once('main-notification.php');
		}
	
	?>

		
		
		
	
	</div>
<div class="clear"></div>

