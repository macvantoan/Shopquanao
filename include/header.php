<?php 
	session_start();
    require_once('/process/redirect.php');
    require_once('/db_connect/connect_db.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Shop Giầy Dép</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="asset/user/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="asset/user/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="asset/user/css/mystyle.css">
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="asset/user/js/jquery1.min.js"></script>
<!-- start menu -->
<link href="asset/user/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="asset/user/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="asset/user/css/fwslider.css" media="all">
    <script src="asset/user/js/jquery-ui.min.js"></script>
    <script src="asset/user/js/css3-mediaqueries.js"></script>
    <script src="asset/user/js/fwslider.js"></script>
<!--end slider -->

<script src="asset/user/js/jquery.easydropdown.js"></script>
<script src="asset/user/js/jquery.etalage.min.js"></script>
<!-- srcript details -->
<!-- start details -->
<script src="asset/user/js/slides.min.jquery.js"></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
<link rel="stylesheet" href="asset/user/css/etalage.css">
<script src="asset/user/js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 360,
					thumb_image_height: 360,
					source_image_width: 900,
					source_image_height: 900,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>	
	<!-- Js do tui viet -->
<script src='asset/user/js/myscript.js'></script>
	<!--  -->
</head>
<!-- end -->

</head>
<body>
     <div class="header-top">
	   <div class="wrap"> 
			  <!-- <div class="header-top-left">
			  	   <div class="box">
   				      <select tabindex="4" class="dropdown">
							<option value="" class="label" value="">Language :</option>
							<option value="1">English</option>
							<option value="2">French</option>
							<option value="3">German</option>
					  </select>
   				    </div>
   				    <div class="box1">
   				        <select tabindex="4" class="dropdown">
							<option value="" class="label" value="">Currency :</option>
							<option value="1">$ Dollar</option>
							<option value="2">€ Euro</option>
						</select>
   				    </div>
   				    <div class="clear"></div>
   			 </div> -->
			 <div class="cssmenu">
				<ul>
					<?php 
						if (isset($_SESSION['username'])) {
							echo "<li style='color:white;'>Xin chào ".$_SESSION['username']." </li>|";
						}
					 ?>
					<li><a href="checkout">Cart</a></li> |
					<?php 
						if (isset($_SESSION['username'])) {  
							echo "<li><a href='process/process.php?action=logout'>Logout</a></li>";
						}else{
								echo "<li><a href='login'>Log In</a></li> |
					<li><a href='register'>Sign Up</a></li>";
						}

					 ?>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index"><img src="asset/user/images/logo.png" alt=""/></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="index">Trang chủ</a></li>
			<li><a class="color4" href="men">Giầy Nam</a>
				
				</li>				
				<li><a class="color5" href="women">Giầy Nữ</a>
			
				</li>
				<li><a class="color6" href="orther">Khác</a></li>
				<li><a class="color7" href="contact">Liên Hệ</a></li>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  
				<input type="text" name="s" class="textbox" value=""  placeholder="Search">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		 </div>
	  <div class="tag-list">
		<?php if (isset($_SESSION['cart'])){ ?>
				<ul class="icon1 sub-icon1 profile_img">
					<li><a class="active-icon c2" href="#"> </a>
						<ul class="sub-icon1 list">
							<li><a href="checkout"><h3>Hiện Có <?php echo count($_SESSION['cart']).' Sản phẩm'; ?></h3></a></li>
							
						</ul>
					</li>
				</ul>
			 <?php }else { ?>
				<ul class="icon1 sub-icon1 profile_img">
					<li><a class="active-icon c2" href="checkout"> </a>
						<ul class="sub-icon1 list">
							<li><a href="checkout"><h3> Giỏ Hàng Trống</h3></a></li>
							
						</ul>
					</li>
				</ul>
			 <?php } ?>
			
	    <ul class="last"><li><?php if (isset($_SESSION['cart'])){
	    	echo '<a href="checkout">Cart('.count($_SESSION['cart']).')</a>';
	    }else {
			echo 'Cart(0)';
		} ?></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>