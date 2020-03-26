<?php
	session_start();
    require_once('../../db_connect/connect_db.php'); 
    require_once('../../process/redirect.php');
	$router = $_GET['action'];
	switch($router) {
		case 'login':
			login();
			break;

		case 'logout':
			logout();
			break;

		case 'change_pass':
			change_pass();
			break;
		case 'delete';
			delete_order();
			break;
		case 'cmp_order':
			cmp_order();
			break;
		case 'edit_user':
			edit_user();
			break;
		case 'delete_product':
			delete_product();
			break;
		case 'update_product':
			update_product();
			break;
		case 'add_product':
			add_product();
			break;
		default:
			
			break;
	}

function login(){
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql =  "SELECT * FROM `admin` WHERE `user_admin` = '$username' AND `pasword_admin` ='$password' ";
		$my_query = mysql_query($sql);
		$check = mysql_num_rows($my_query);

		if($check == 0){
				redirect("shopdemo/admin/login.php?error=1");
		}else{
			$_SESSION['this_admin'] = $username;
				redirect("shopdemo/admin/index.php");
		}

	}
}
function logout(){
	unset($_SESSION['this_admin']);
		redirect("shopdemo/admin/index.php");
}
function change_pass(){
	if (isset($_POST['submit'])){
		$username = $_SESSION['this_admin'];
		$password = $_POST['password'];
		$sql = "UPDATE `admin` SET `pasword_admin`= '$password' WHERE `user_admin` = '$username'";
		$my_query = mysql_query($sql);
		if ($my_query == 1){
				redirect("shopdemo/admin/index.php?router=change_pass&error=1");
		}
		
	}
}
function delete_order(){
	// echo "<pre>";
	// print_r($_GET);
		if (isset($_GET['id'])) {

			
		$id = $_GET['id'];

		$sql = "DELETE FROM `order_cus` WHERE `id_order` = '$id'";
		
		
			$check = mysql_query($sql);
			

		if ($check == 1) {
			
			$sql = "SELECT * FROM `order_details` WHERE `id_order` = '$id'";

			mysql_query($sql);
			
				redirect("shopdemo/admin/index.php?router=order");
			

		}else {
				redirect("shopdemo/admin/index.php?router=order");
		}
	}else {
		
	}
}
function cmp_order(){
	if(isset($_POST['cmp_order'])){
		
		$id = $_POST['id_order'];
		$sql = "UPDATE `order_cus` SET `status_Oder` = 0 WHERE id_order = $id";
		$my_query = mysql_query($sql);
		if ($my_query == 1) {
			redirect('shopdemo/admin/index.php?router=order');
		}else {
			redirect('shopdemo/admin/index.php?router=order');
		}

	}else {
		redirect('shopdemo/admin/index.php?router=order');
	}
}
function edit_user(){
	if (isset($_POST['reset_pass'])) {

		$pass = $_POST['pw_user'];
		$user = $_POST['id'];
		$sql = "UPDATE `customer_shop` SET `password_cus`='$pass' WHERE `id_cus` = $user";
		echo $sql;
		$check = mysql_query($sql);
		echo $check;
		if ($check == 1) {
			redirect('shopdemo/admin/index?router=edit_user&id='.$user.'&error=1');
		}
	}
}
function delete_product(){
	$id = isset($_GET['id']) ? (string)(int)($_GET['id']) : false;
	$sql = "DELETE FROM `product` WHERE `id_product` = '$id' ";
	$check = mysql_query($sql);
	if ($check == 1) {
		redirect('shopdemo/admin/index.php?router=products&error=1');
	}else {
		redirect('shopdemo/admin/index.php?router=products&error=1');
	}
}
function update_product(){
	if (isset($_POST['update'])) {

		$url = '';
		$price = $_POST['price'];
		$description = $_POST['description'];
		$status = $_POST['status_order'];
		$id = $_POST['id_product'];
		$file = isset($_FILES['fileToUpload']) ? $_FILES['fileToUpload'] : fasle;
		if ($file['error'] > 0) {
			echo "up Error";
		}else {
			move_uploaded_file($_FILES['fileToUpload']['tmp_name'], '../../asset/user/images/'.$_FILES['fileToUpload']['name']);
			$url = "asset/user/images/".$file['name']."";
			
		}
		$sql = "UPDATE `product` SET `price_product`='$price',`description_product`='$description',`img_product`='$url',`status_product`='$status' WHERE `id_product` = '$id'";
		$check = mysql_query($sql);
		if ($check == 1) {
			redirect('shopdemo/admin/index?router=edit_product&id='.$id.'&error=1');
		}else{
			redirect('shopdemo/admin/index?router=edit_product&id='.$id.'&error=2');
		}

		
	}
}
function add_product(){
print_r($_POST);
	if (isset($_POST['add_product'])){

		$url = '';
		$date =  date("Y-m-d h:i:m");
		$name = $_POST['name_product'];
		$price = $_POST['price'];
		$file = isset($_FILES['fileToUpload']) ? $_FILES['fileToUpload'] : fasle;
		$gr = $_POST['gr_pr'];
		$description = $_POST['description'];
		if ($file['error'] > 0) {
			echo "up Error";
		}else {
			move_uploaded_file($_FILES['fileToUpload']['tmp_name'], '../../asset/user/images/'.$_FILES['fileToUpload']['name']);
			$url = "asset/user/images/".$file['name']."";
			
		}
		$sql ="INSERT INTO `product`(`name_product`,`price_product`, `description_product`, `img_product`, `price_new`, `date_product`, `status_product`, `id_gr_product`) VALUES ('$name','$price','$description','$url','0','$date','1','$gr')";
		$check = mysql_query($sql);
		if ($check == 1) {
			redirect("shopdemo/admin/index.php?router=products&error=1");
		}else {
			redirect("shopdemo/admin/index.php?router=products&error=2");
		}
		
	}
}


 ?>

