<h3> Edit Product</h3>
<?php 
	$id = isset($_GET['id']) ? (string)(int)($_GET['id']): false;
	$sql = "SELECT * FROm `product` where `id_product` = '$id'";
	
	$check = mysql_query($sql);
	$row = mysql_fetch_array($check);

 ?>
<form action="process/process.php?action=update_product" enctype="multipart/form-data" method="post">
	<h4> Sản Phẩm: <b><?php echo $row['name_product'] ?></b></h4>
	<div class="error" style="color:red"><?php if (isset($_GET['error'])) {
		
			echo $_GET['error'] == 1 ? 'Cập Nhật Thành Công' : 'Cập Nhật Thất Bại';
		}
	
	?></div>
<label> Giá Sản Phẩm</label>
<input type="number" name="price" class="panjang" value=<?php echo $row['price_product']; ?>><br>

<label> Hình Ảnh</label>
 <input type="file" name="fileToUpload" id="fileToUpload"><br>


<label> Mô Tả</label>
<textarea name="description" ><?php echo $row['description_product']; ?></textarea>

<br><br>
<label> Trạng Thái</label><br>
<br>

<div style="display: inline; width: 100%">
	<input type="hidden" name="id_product" value="<?php echo $row['id_product']; ?>" >
 Còn Hàng <input type="radio" id='radio' name="status_order" value="1" <?php if ($row['status_product'] == 1) {
 	echo 'checked="checked"';
 } ?>><br>
Hết Hàng <input  type="radio" id='radio' name="status_order" value="0" <?php if ($row['status_product'] == 0) {
 	echo 'checked="checked"';
 } ?>><br>
</div>
<input type="submit" name="update" class="button">


</form>