
		
<?php 
	if (isset($_GET['id'])) {
		$id = isset($_GET['id']) ? (string)(int)($_GET['id']) : false;

		$sql = "SELECT * FROM `order_details` WHERE `id_order` = '$id'";
		$sql3 = "SELECT * FROM `order_cus` WHERE `id_order` = '$id'";
		$check = mysql_query($sql);
		$data = mysql_fetch_array(mysql_query($sql3));
		$num = 0;
		
		?>
		<label style="font-size: 18px"> Tên Khách Hàng : <b><?php echo $data['name_cus']; ?> </b></label><br>
		<label style="font-size: 18px"> Số Điện Thoại : <?php echo $data['phone_cus']; ?></label><br>
		<label style="font-size: 18px">Email  : <b><?php echo $data['email_cus'] ?> </b></label><br>
		<label style="font-size: 18px">Địa Chỉ:<b> <?php echo $data['address_cus'] ?> </b></label><br>
		<table class="data">
			<tr class="data">
				<th class="data" width="30px">STT</th>
				<th class="data">Tên Sản Phẩm</th>
				<th class="data">Số Lượng </th>
				<th class="data">Giá Tiền Sản Phẩm</th>
				<th class="data">Trạng Thái Sản Phẩm</th>
				
			</tr>
		<?php

		while ($row = mysql_fetch_array($check)) {
			$num++;
		
			$id_product = $row['id_product'];
			$sql2 = "SELECT * FROM `product` WHERE `id_product` = '$id_product'";
			$my_query2 = mysql_query($sql2);
			$row2 = mysql_fetch_array($my_query2);

?>

		
			<tr class="data">
				<td class="data" width="30px"><?php echo $num; ?></td>
				<td class="data"><?php echo $row2['name_product']; ?></td>
				<td class="data"><?php echo $row['quality_order_detail']; ?></td>
				<td class="data"><?php echo $row['money_product']; ?></td>
				<td class="data"><?php if($row2['status_product'] == 1){ echo "Còn Hàng"; }else{echo "Hết Hàng";} ?></td>
				
			</tr>
 
	
<?php  

		}
	?>
	</table>
	<form action='process/process.php?action=cmp_order' method="post">
		<input type="hidden" name="id_order" value=<?php echo $id; ?> >
		<input type="submit" name='cmp_order' class="button" value="Xác Nhận Đơn">
		<input type="submit" class="button" value="Trở Lại">
	</form>
	<?php	

	}

	else {
		// redirect('shopdemo/admin/index.php?router=order');
	}


 ?>