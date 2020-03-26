<?php 
	session_start();
    require_once('../db_connect/connect_db.php');
      require_once('redirect.php');
	if(isset($_GET['action'])){
		$router = $_GET['action'];
		switch ($router) {
			case 'register':
				register();
				break;
			case 'login':
				login();
				break;
			case 'logout':
				logout();
			case 'contact':
				contact();
				break;
			case 'add_cart':
				add_cart();
				break;
			case 'remove_product':
				remove_product();
				break;
			case 'buy':
				buy();
				break;
			case 'buy_money':
				buy_money();
				break;
			default:
				// index();
				break;
		}
	}


	function register(){
		if (isset($_POST['submit'])) {
			$username = $_POST['username'];
			$password = $_POST['pw'];
			$name = $_POST['name_re'];
			$email= $_POST['email_re'];
			$address = $_POST['address_re'];
			$phone = $_POST['phone_re'];


			$sql = "SELECT * FROM customer_shop WHERE username_cus = '$username'";
			$result = mysql_query($sql);
			$row =mysql_num_rows($result);

			if(mysql_num_rows($result) > 0){
				 redirect('/shopdemo/register?error=1');
			}else{
			
				// $sql = "INSERT INTO customer_shop(username_cus, password_cus,adress_cus,email_cus,phone_cus,name) VALUES ('$username','$password','$address','$email','$address','$phone','$name')";
				$sql = "INSERT INTO `customer_shop` (`username_cus`, `password_cus`, `adress_cus`, `email_cus`, `phone_cus`, `name`) VALUES ('$username', '$password', '$address', '$email', '$phone', '$name')";
				$check = mysql_query($sql);				
				if($check){
					$row = mysql_fetch_array($result); 
					$_SESSION['username'] = $username;
					$_SESSION['info_user']['name'] = $row['name'];
					$_SESSION['info_user']['phone'] = $row['phone_cus'];
					$_SESSION['info_user']['address'] = $row['adress_cus'];
					$_SESSION['info_user']['email'] = $row['email_cus'];
					
					 redirect('shopdemo/index');

			  }
			}



		}
	}
	function login(){
		if(isset($_POST['submit'])){
			$username = $_POST['user_name'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM `customer_shop` WHERE username_cus = '$username' AND password_cus ='$password'";
			$result = mysql_query($sql);
			if (mysql_num_rows($result) == 0) {
				 redirect("shopdemo/login?error=1");
			}else {
					$row = mysql_fetch_array($result);
					$_SESSION['username'] = $username;
					$_SESSION['info_user']['id'] = $row['id_cus'];
					$_SESSION['info_user']['name'] = $row['name'];
					$_SESSION['info_user']['phone'] = $row['phone_cus'];
					$_SESSION['info_user']['address'] = $row['adress_cus'];
					$_SESSION['info_user']['email'] = $row['email_cus'];

					redirect("shopdemo/index");

			}
		}

	}

	function logout(){
		  unset($_SESSION['username']);
   			 redirect("shopdemo/index");
	}
	function contact(){
		if (isset($_POST['submit'])) {
			$name = $_POST['name_ct'];
			$title = $_POST['subject_ct'];
			$email = $_POST['email_ct'];
			$content = $_POST['content_ct'];
			$sql = "INSERT INTO `contactus` (`id_contact`, `name_contact`, `title_contact`, `email_contact`, `content_contact`, `status_contact`) VALUES (NULL, '$name', '$title', '$email', '$content', '0');";
			$rs = mysql_query($sql);
			if ($rs == 1) {
					redirect("shopdemo/contact?error=1");
			}
		}
	}
	function add_cart(){
		if(isset($_POST['submit'])){
			$id_cart = $_POST['id_of_cart'];
			$sl = $_POST['cart_product_count'];
			$sql = "SELECT * FROM `product` WHERE `id_product` = '$id_cart'";
			$my_query = mysql_query($sql);
			$row = mysql_fetch_array($my_query);
			if(isset($_SESSION['cart'][$id_cart]))
			{
				$_SESSION['cart'][$id_cart]['count'] += $sl; 
$_SESSION['cart'][$id_cart]['total_price'] =  $_SESSION['cart'][$id_cart]['price'] * $_SESSION['cart'][$id_cart]['count'];
			
					redirect("shopdemo/checkout");
			}else{
				$total_money = $row['price_product']  * $sl;
				$_SESSION['cart'][$id_cart] = array(
				'id' => $id_cart,
				'name' => $row['name_product'],
				'price' => $row['price_product'],
				'count' => $sl,
				'total_price' => $total_money,
				'url_img' => $row['img_product'] 
			);
				redirect("shopdemo/checkout");
			}	
					
		}
	}
	function remove_product(){
		if(isset($_POST['remove'])){
			$id_cart = $_POST['cart_id'];
				unset($_SESSION['cart'][$id_cart]);
				redirect("shopdemo/checkout");
		}
	}
	function buy(){

		if(isset($_POST['buy'])){

				redirect("shopdemo/buy");
		}
		if(isset($_POST['cont_sell'])){
				redirect("shopdemo/index");
		}
	}
	function buy_money(){
		
		if (isset($_POST['buy_money'])) {

			$name = $_POST['name_buy'];
			$phone = $_POST['phone_buy'];
			$address = $_POST['address_buy'];
			$email = $_POST['email_buy'];
			$date =  date("Y-m-d h:i:m");
		
			if(isset($_SESSION['username'])){
				$id = $_SESSION['info_user']['id'];
				$all_money = $_SESSION['total_all'];
				
				$sql = "INSERT INTO `order_cus`(`id_order`, `id_cus`, `total_money_order`, `date_order`, `status_Oder`, `name_cus`, `phone_cus`, `address_cus`, `email_cus`) VALUES ('','$id','$all_money','$date','1','$name','$phone','$address','$email')";
				mysql_query($sql);

				$id = mysql_insert_id();
				foreach ($_SESSION['cart'] as $v) {
					$id_product = $v['id'];
					$quality = $v['count'];
					$money = $v['price'];
					$sql = "INSERT INTO `order_details`(`id_order_detail`, `id_order`, `quality_order_detail`, `id_product`,`money_product`) VALUES('','$id','$quality','$id_product','$money')";
					$check = mysql_query($sql);
					if ($check == 1) {
						unset($_SESSION['cart']);
							redirect("shopdemo/index");
					}else {
						echo 'Error';
					}

				}
			}else{
				$all_money = $_SESSION['total_all'];
				
				$sql = "INSERT INTO `order_cus`(`id_order`, `id_cus`, `total_money_order`, `date_order`, `status_Oder`, `name_cus`, `phone_cus`, `address_cus`, `email_cus`) VALUES ('','$id','$all_money','$date','1','$name','$phone','$address','$email')";
				mysql_query($sql);
				$id = mysql_insert_id();
				foreach ($_SESSION['cart'] as $v) {
					$id_product = $v['id'];
					$quality = $v['count'];
					$money = $v['price'];
					$sql = "INSERT INTO `order_details`(`id_order_detail`, `id_order`, `quality_order_detail`, `id_product`,`money_product`) VALUES('','$id','$quality','$id_product','$money')";
					$check = mysql_query($sql);
					if ($check == 1) {
							unset($_SESSION['cart']);
							redirect("shopdemo/index");
					}else {
						echo 'Error';
					}

				}
				

			}
		}
	
		// mysql_query("INSERT INTO `order_cus`(`id_order`, `id_cus`, `total_money_order`, `date_order`, `status_Oder`) VALUES ('',1,100,12-06-2016,'1')");
		// $id = mysql_insert_id();
		// echo $id;
		// foreach($_SESSION['cart'] as $v){
		// 	echo '<pre>';
		// 	print_r($v);
		// }
				
			
		// if(isset($_POST['buy_money'])){
		// 	echo '1';
		// }
		
	}
	function index(){
		redirect("shopdemo/index");
	}

 ?>