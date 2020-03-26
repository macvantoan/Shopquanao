	<h3>Products</h3>
<br>
<a  class="button add-user" href="index.php?router=add_product">Thêm Sản Phẩm</a>
<label class="error" style="color:Red"> <?php  if (isset($_GET['error'])) {
	echo $_GET['error']=1 ? 'Xóa Thành Công' : 'Xóa Không Thành Công';
} ?> </label>
<br>
			<table class="data">
			<tr class="data">
				<th class="data" width="30px">STT</th>
				<th class="data">Tên Sản Phẩm</th>
				<th class="data">Giá</th>
				<th class="data">Trạng Thái</th>
				<th class="data" width="75px">Hành Động</th>
			</tr>
<?php 
	$sql = "SELECT * FROM product LIMIT 50";
	$my_query = mysql_query($sql);
	$num = 0;
	while($row = mysql_fetch_array($my_query)){
		$num++;
?>
			<tr class="data">
				<td class="data" width="30px"><?php echo $num; ?></td>
				<td class="data"><?php echo $row['name_product']; ?></td>
				<td class="data"><?php echo $row['price_product']; ?></td>
				<td class="data"><?php if($row['status_product'] == 1){ echo "Còn Hàng"; }else{echo "Hết Hàng";} ?></td>
				<td class="data" width="75px">
				<center>
				<a href="index?router=edit_product&id=<?php echo $row['id_product'] ?>"><img src="../asset/admin/img/oke.png"></a>&nbsp;&nbsp;&nbsp;
				<a href="process/process.php?action=delete_product&id=<?php echo $row['id_product'] ?>"><img src="../asset/admin/img/detail.png"></a>
				</center>
				</td>
			</tr>



<?php } ?>
	</table>