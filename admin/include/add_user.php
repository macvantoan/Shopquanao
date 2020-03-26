<h3>Add Product</h3>
<form action="process/process.php?action=add_product" enctype="multipart/form-data" method="post">
	
	<div class="error" style="color:red"><?php if (isset($_GET['error'])) {
		
			echo $_GET['error'] == 1 ? 'Thêm Thành Công' : 'Thêm Thất Bại';
		}
	
	?></div>
<h4> Tên Sản Phẩm:</h4>
<input type="text" name="name_product" class="panjang" /><br><br>
<label> Giá Sản Phẩm</label><br><br>
<input type="number" name="price" class="panjang" ><br>

<label> Hình Ảnh</label>
 <input type="file" name="fileToUpload" id="fileToUpload"><br>


<label> Mô Tả</label>
<textarea name="description" ></textarea>

<br><br>
<select name='gr_pr'>

<option  >-- Nhóm Sản Phẩm --</option>
<?php 
 	$sql = "SELECT * FROM `gr_product`";
 	$check = mysql_query($sql);
 	while ($row = mysql_fetch_array($check)){
 		
 ?>
 	
					<option  value="<?php echo $row['id_gr_product'] ?>"><?php echo $row['name_gr']; ?></option>
			
	<?php } ?>
		</select>
<input type="submit" name="add_product" class="button">


</form>