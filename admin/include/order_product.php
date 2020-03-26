	<h3>Products</h3>
			<table class="data">
			<tr class="data">
				<th class="data" width="30px">STT</th>
				<th class="data">Tên Khách Hàng</th>
				<th class="data">Ngày Đặt </th>
				<th class="data">Tổng Tiền</th>
				<th class="data">Trạng Thái</th>
				<th class="data" width="75px">Hành Động</th>
			</tr>
<?php 
	$sql = "SELECT * FROM order_cus LIMIT 50";
	$my_query = mysql_query($sql);
	$num = 0;
	while($row = mysql_fetch_array($my_query)){
		$num++;
?>
			<tr class="data">
				<td class="data" width="30px"><?php echo $num; ?></td>
				<td class="data"><?php echo $row['name_cus']; ?></td>
				<td class="data"><?php echo $row['date_order']; ?></td>
				<td class="data"><?php echo $row['total_money_order']; ?></td>
				<td class="data"><?php if($row['status_Oder'] == 0){ echo "Chưa Xác Nhận"; }else{echo "Đã Xác Nhận";} ?></td>
				<td class="data" width="75px">
				<center>
				<a href="index.php?router=order_details&id=<?php echo $row['id_order'] ?>"><img src="../asset/admin/img/view.png"></a>&nbsp;&nbsp;&nbsp;
				<a href="process/process.php?action=delete&id=<?php echo $row['id_order']; ?>"><img src="../asset/admin/img/trash.png"></a>
				</center>
				</td>
			</tr>



<?php } ?>
	</table>