<?php 
	require_once('include/header.php');
 ?>

 		 <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Tạo Tài Khoản</h4>
    		   <form action='process/process.php?action=register' method="post">
    			 <div class="col_1_of_2 span_1_of_2">
		   			 <div><input id='username' name='username' type="text" value="" placeholder="Username"></div>
		
		    			<div><input id='pw' name='pw' type="password" placeholder="Password" ></div>
		    			<div><input id='re_pw' name='re_pw' type="password" placeholder="Re-enter Password" ></div>
		    	 </div>

		    	  <div class="col_1_of_2 span_1_of_2">	
		    	  <div><input id="name_re" name='name_re' type="text" placeholder="Name"></div>
		    	  <div><input id="email_re" name='email_re' type="text" placeholder="Email"></div>
		    	  <div><input id="address_re" name='address_re' type="text" placeholder="Address"></div>
		    	  <div><input id="phone_re" name='phone_re' type="text" placeholder="Phone Number"></div>

		           <div>
		          </div>
		          
		          </div>
		      <button id="register" class="grey" name='submit'>Submit</button>
		    <p class="terms" style="color: red"></p>
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>

 <?php 
 	require_once('include/footer.php');
  ?>