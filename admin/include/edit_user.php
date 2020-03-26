g<?php 
	$id = isset($_GET['id']) ? (string)(int)($_GET['id']) :  false;
	$sql = "SELECT * FROM `customer_shop` WHERE `id_cus` = '$id'";
	$check = mysql_query($sql);
	$row = mysql_fetch_array($check);

 ?>
<form action="process/process.php?action=edit_user" method="post">
	 <label>Tài Khoản: <b><?php echo $row['username_cus'] ?></b></label><br>
	 <br>
	 	<input type="hidden" name="id" value=<?php echo $row['id_cus'] ?>>
		<label>Mật Khẩu</label>
		<input type="password" name="pw_user" class="panjang reset_pass1">
		<br>
		<br>
		<label>Nhập lại mật khẩu</label>
		<input type="password" name="re_pw_user" class="panjang reset_pass2">
		<br>
		<br>
		<div class="error" style="color:red"><?php echo  isset($_GET['error']) ? 'Đã Thay đổi mật khẩu thành công ' : false ?>
			
		</div>
		 <br>

		<input type="submit" name="reset_pass" class="button reset" value="Thay đổi">
</form>