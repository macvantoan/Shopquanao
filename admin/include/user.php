
<table class="data">
			<tr class="data">
				<th class="data" width="30px">STT</th>
				<th class="data">Tên</th>
				<th class="data">Email</th>
				<th class="data"> Địa chi</th>
				<th class="data" width="75px">Pilihan</th>
			</tr>				
			<?php 
				$sql = "SELECT * FROM `customer_shop` LIMIT 30";
				$my_query = mysql_query($sql);
				$num = 0;
				while ($row = mysql_fetch_array($my_query)){
					$num++;
					echo '<tr class="data">
							<td class="data" width="30px">'.$num.'</td>
							<td class="data">'.$row['username_cus'].'</td>
							<td class="data">'.$row['email_cus'].'</td>
							<td class="data">'.$row['phone_cus'].'</td>
							<td class="data" width="75px">
							<center>
							<a href="index?router=edit_user&id='.$row['id_cus'].'"><img src="../asset/admin/img/oke.png"></a>&nbsp;&nbsp;&nbsp;
							<a href="#"><img src="../asset/admin/img/detail.png"></a>
							</center>
							</td>
						</tr>'	;

				}
			 ?>
			
</table>
