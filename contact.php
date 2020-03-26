 <?php 
	require_once('include/header.php');
 ?>
 <div class="login">
       <div class="wrap">
	    <ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Trang Chủ</a>  / Liên Hệ</ul>
		   <div class="content-top">
		   <div class="notification"><?php if(isset($_GET['error'])){
		   	 	if ($_GET['error'] == 1){
		   	 		echo " Cảm ơn bạn. Chúng tôi sẽ phản hồi lại sớm nhất";
		   	 	}else {
		   	 		echo " Thao tác không thể thực hiện";
		   	 	}

		   	}?>
		   	
		  </div>
			   <form method="post" action="process/process.php?action=contact">
					<div class="to">
                     	<input type="text" id="name_ct" class="text" name="name_ct" value="" placeholder="Tên Cuả Bạn" >
					 	<input type="text" id="email_ct" class="text" name="email_ct" value="" placeholder="Email" style="margin-left: 10px">
					</div>
					<div class="to">
                     	<!-- <input type="text" class="text" value="Your Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Website';}"> -->
					 	<input type="text" id="subject_ct" class="text" value="" placeholder="Tiêu Đề" name='subject_ct' style="margin-left: 10px">
					</div>
					<div class="text">
	                   <textarea placeholder="Nội Dung" id="content_ct" name="content_ct"></textarea>
	                </div>
	                <div class="submit">
	               		<input type="submit" id="contact" name="submit" value="Gửi">
	                </div>
	                <div class="error" style="margin-top: 12px;">
	                	
	                </div>
               </form>
                <div class="map">
					<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
				</div>
            </div>
       </div> 
    </div>

 <?php 
	require_once('include/footer.php'); 
 ?>