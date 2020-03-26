<form action="process/process.php?action=change_pass" method="post">
	<label><b>Thay Đổi Mật Khẩu </b></label>
	<br>
	<br>
	Mật Khẩu Mới
	<br>
	<input type="password" class="panjang" name="password" id='change_pass_admin'><br><br>
	Nhập Lại Khẩu Mới
	<br>
	<input type="password" class="panjang" name='reinput' id='reinput_change_pass_admin'>
	<br>
	<br>
	<input type="submit" name="submit" class="button" id="change_pass" value="Submit">
	<p class="error" style="color:red;font-weight: bold"></p>
	<p class="error" style="color:green;font-weight: bold"><?php if(isset($_GET['error'])){
			if ($_GET['error']==1){
				echo "Thay Đổi Mật Khẩu Thành Công";
			}
		} ?></p>


</form>
